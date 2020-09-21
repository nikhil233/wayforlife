<?php
include_once '../classes/DbConfig.php';
session_start();
class script extends DbConfig
{
   
    // Instantiate object with database connection
    public function __construct()
	{
		parent::__construct();
	}

    // Register new users
    public function register($user_name, $user_email, $user_password)
    {
        try {
            // Hash password
            $user_hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

            // Define query to insert values into the users table
            $sql = "INSERT INTO users(user_name, user_email, user_password) VALUES(:user_name, :user_email, :user_password)";

            // Prepare the statement
            $query = $this->connection->prepare($sql);

            // Bind parameters
            $query->bindParam(":user_name", $user_name);
            $query->bindParam(":user_email", $user_email);
            $query->bindParam(":user_password", $user_hashed_password);

            // Execute the query
            $query->execute();
        } catch (PDOException $e) {
            array_push($errors, $e->getMessage());
        }
    }

    // Log in registered users with either their username or email and their password
    public function login( $user_email, $user_password)
    {
            $stmt= $this->connection->stmt_init();
            $sql = "SELECT * FROM `admin` WHERE `email`=?  LIMIT 1";
            // Prepare the statement
            $stmt = $this->connection->prepare($sql);
            $stmt->bind_param('s', $user_email);

            $stmt->execute();
            $result = $stmt->get_result();
            while($rows = $result->fetch_assoc()){
                if($rows['password']==$user_password){
                    $_SESSION['IS_LOGIN']='yes';
                    $_SESSION['user_session'] = $rows['id'];
                    $_SESSION['user_name'] = $rows['name'];
                    echo $rows['name'];
                    return true;
                }
                else{
                    echo 'Error: cannot execute the command';
                    return false;
                }
            }
            // Check if row is actually returned
            // if ($stmt->rowCount() > 0) {
            //     // Verify hashed password against entered password
            //     if (password_verify($user_password, $returned_row['password'])) {
            //         // Define session on successful login
            //         $_SESSION['user_session'] = $returned_row['id'];
            //         return true;
            //     } else {
            //         // Define failure
            //         return false;

            //     }
            // }
    }

    // Check if the user is already logged in
    public function is_logged_in() {
        // Check if user session has been set
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    // Redirect user
    // public function redirect($url) {
    //     header("Location: $url");
    // }

    // Log out user
    public function log_out() {
        // Destroy and unset active session
        session_destroy();
        unset($_SESSION['IS_LOGIN']);
        unset($_SESSION['user_session']);
        unset($_SESSION['user_name']);
        return true;
    }
} 