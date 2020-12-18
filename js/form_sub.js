$(function() {
   
    FRONT_SITE_PATH='http://127.0.0.1/Wayforlife/';
    $('#joinussub').on('submit',function(e){
        var mob= $('#inputno').val();
        if(mob.length==10 && mob.length!=null){
            $('#joinsubmit').attr('disabled',true);
            $('#wait_').html('Please wait...');
        
            jQuery.ajax({
                url:FRONT_SITE_PATH+'joinus_sub',
                type:'post',
                data:jQuery('#joinussub').serialize(),
                success:function(result){
                    $('#joinsubmit').attr('disabled',false);
                    $('#wait_').html('');
                    var data=jQuery.parseJSON(result);
                    if(data.status=='success'){
                      
                          $('#ph_msg').html('');
                          $('#wait_').html('');
                    swal("Welcome!", "Join us Form submitted succesfully.Please check email and mobile .", "success").then(function(){ 
                        location.reload();
                        }
                    );
                    }
                    else{
                      if(data.status=='name'){
                        swal("sorry!", "Correct name, Name should only contain Alphabets.", "error");
                      }
                      else{
                        swal("sorry!", "Join us Form  was not submitted succesfully.Please try again .", "error").then(function(){ 
                        location.reload(); 
                        }
                        );
                      }
                      
                    }
                }
            });
        }
        else{
            $('#ph_msg').html('Enter 10 digit mobile no...');
            $('#wait_').html('Recheck inputs.Enter 10 digit mobile no...');
        }
        e.preventDefault();
    });

    $('#internsub').on('submit',function(e){
    var mob= $('#inputno').val();
    if(mob.length==10 && mob.length!=null){
	    $('#internsubmit').attr('disabled',true);
      $('#submit_msg').html('Please wait...');
      jQuery.ajax({
          url:FRONT_SITE_PATH+'internship_sub',
          type:'post',
          data:jQuery('#internsub').serialize(),
          success:function(result){
            $('#internsubmit').attr('disabled',false);
            $('#submit_msg').html('');
            var data=jQuery.parseJSON(result);
            if(data.status=='success'){
              
                  $('#ph_msg').html('');
                  $('#wait_').html('');
              swal("Welcome!", "Internship from submitted succesfully. Please check email and mobile ..", "success").then(function(){ 
                location.reload();
                }
             );
            }
            else{
              if(data.status=='name'){
                swal("sorry!", "Correct name, Name should only contain Alphabets.", "error");
              }
              else{
                swal("sorry!", "Internship from was not submitted succesfully.Please try again .", "error").then(function(){ 
                  location.reload();
                  }
              );
              }
            }
          }
      });
    }
      else{
        $('#ph_msg').html('Enter 10 digit mobile no...');
        $('#submit_msg').html('Recheck inputs.Enter 10 digit mobile no...');
    }
      e.preventDefault();
    });
    $('#checkinternsubmit').on('click',function(e){
        var intern_id=jQuery('#internid').val();
      //alert(intern_id);
        jQuery.ajax({
          url:'get_intern_details.php',
          type:'post',
          data:'intern_id='+intern_id,
          success:function(result){
            
            var data=jQuery.parseJSON(result);
            
            if(data.gen!=""){
            var html='<ul><li>Name: '+data.intern_name+'</li> <li>Intern id: '+data.intern_id+'</li><li>Role : '+data.role+'</li><li>Duration : '+data.duration+'</li><li>Start date: '+data.start_date+'</li><li>End date: '+data.end_date+'</li></ul> <img src="img/genuine.png" style="width:100px; height:auto;"/>';
            }
            else{
              var html='<h2>No such interns found for intern id  '+data.intern_id+'. </h2>'
            }
            jQuery('#showintern').html(html);
    
          }
    
        });
        e.preventDefault();
    });

    $('#event_sub').on('submit',function(e){
        var mob= $('#inputno').val();
    if(mob.length==10 && mob.length!=null){
	    $('#event_submit').attr('disabled',true);
        $('#wait_').html('Please wait...');
      jQuery.ajax({
          url:FRONT_SITE_PATH+'eve_vol_sub',
          type:'post',
          data:jQuery('#event_sub').serialize(),
          success:function(result){
            $('#event_submit').attr('disabled',false);
            $('#wait_').html('');
            var data=jQuery.parseJSON(result);
            if(data.status=='success'){
              $('#exampleModal').modal('hide');
              $('#name_err').html('');
                  $('#ph_msg').html('');
                  $('#wait_').html('');
              swal("Welcome!", "Events volunterring submitted succesfully.Please check email and mobile.", "success").then(function(){ 
                location.reload();
                }
             );
            }
            else{
              if(data.status=='name'){
                $('#name_err').html('Correct name, Name should only contain Alphabets.');
              }
              else{
                  swal("sorry!", "Events volunterring from was not submitted succesfully.Please try again .", "error").then(function(){ 
                    location.reload();
                    }
                );
              }
            }
          }
      });
    }
    else{
        $('#ph_msg').html('Enter 10 digit mobile no...');
        $('#wait_').html('Recheck inputs.Enter 10 digit mobile no...');
    }
      e.preventDefault();
    });
    $('#con_form').on('submit',function(e){
      var mob= $('#phone').val();
      if(mob.length==10 && mob.length!=null){
        $('#con_sub').attr('disabled',true);
        $('#wait_').html('Please wait...');
        jQuery.ajax({
            url:FRONT_SITE_PATH+'contactus_sub',
            type:'post',
            data:jQuery('#con_form').serialize(),
            success:function(result){
                $('#con_sub').attr('disabled',false);
                $('#wait_').html('');
                var data=jQuery.parseJSON(result);
                if(data.status=='success'){
                  $('#name_err').html('');
                  $('#ph_msg').html('');
                  $('#wait_').html('');
                swal("Welcome!", "Thank you for writing to us. Form submitted succesfully.Please check email .", "success").then(function(){ 
                    location.reload();
                    }
                );
                }
                else{
                  if(data.status=='name'){
                    $('#name_err').html('Correct name, Name should only contain Alphabets.');
                  }
                  else{
                  swal("Sorry!", "Form was not submitted succesfully.Please try again.", "error").then(function(){ 
                      location.reload();
                      }
                  );
                  }
                }
              }
          });
    }
    else{
       $('#ph_msg').html('Enter 10 digit mobile no...');
       $('#wait_').html('Recheck inputs.Enter 10 digit mobile no...');
    }
      e.preventDefault();
    });
    $('#news_sub').on('submit',function(e){
      var email=$('#newsemail').val();
      $('#wait_').html('Please wait...');
      $('#btn_news').attr('disabled',true);
      jQuery.ajax({
        url:FRONT_SITE_PATH+'newsletter_sub',
        type:'post',
        data:'email='+email,
          success:function(result){
            $('#btn_news').attr('disabled',false);
            $('#wait_').html('');
            var data=jQuery.parseJSON(result);
            if(data.status=='success'){
              $('#wait_').html('');
              swal("Welcome!", "Thank you for Subscribing to us. Form submitted succesfully.Please check email .", "success").then(function(){ 
                  location.reload();
                  }
              );
            }
            else{
              $('#wait_').html('');
              swal("Sorry!", "Form was not submitted succesfully.Please try again.", "error").then(function(){ 
                  location.reload();
                  }
              );
              
            }
          }
      });
      e.preventDefault();
    });
});