<?php
require('header.php');
?>


<section class="banner-top faq" style="background-image: linear-gradient(to bottom,  rgb(104 133 154 / 88%), rgb(0 0 0 / 52%)), url(./img/passion/work4.jpg);">
        <div class="container">
      <div class="content">
       
                    <div class="banner_text text-center">
                        <div class="banner_text_iner " >
                            <h1>Frequently asked Questions</h1>   
                               
                        </div>
                    </div>
               
      </div>
      </div>
      <!-- <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-gorgeous-technology-dot-line-structure-banner-background-image_210889.jpg" alt=""> -->
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L20,149.3C40,139,80,117,120,112C160,107,200,117,240,106.7C280,96,320,64,360,58.7C400,53,440,75,480,101.3C520,128,560,160,600,144C640,128,680,64,720,42.7C760,21,800,43,840,96C880,149,920,235,960,250.7C1000,267,1040,213,1080,186.7C1120,160,1160,160,1200,144C1240,128,1280,96,1320,96C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    
    </section>

    <section>
        <div class="container">
            <button class="accordion">How old is Way For Life?</button>
                <div class="panel">
                    <p>Way For Life was established in the year 2017</p>
                </div>

            <button class="accordion">Which areas does Way For Life work in?</button>
                <div class="panel">
                    <p>Way For Life has been working in thematic areas of education and environment</p>
                </div>
            
            <button class="accordion">Are you a registered body?</button>
                <div class="panel">
                    <p>Yes, we are registered non government organization</p>
                </div>
            <button class="accordion">Is it compulsory to attend the event if I'm a volunteer?</button>
                <div class="panel">
                    <p>Not at all, you can attend the events in your free time</p>
                </div>
            <button class="accordion">Are there any registration fees collected?</button>
                <div class="panel">
                    <p>We do not collect any sort of monetary assets, there is no registration fees for any events conducted buy Way For Life</p>
                </div>
            <button class="accordion"> Do we get a certificate for volunteering?</button>
                <div class="panel">
                    <p>Yes we shall provide certificate for those volunteers who have attended more than two events</p>
                </div>
            <button class="accordion">How will I be notified if there is any event happening?</button>
                <div class="panel">
                    <p>We shall post the event details on all the social media platforms , that includes: whatsapp, facebook, Instagram</p>
                </div>
            <button class="accordion">Are you located in Pan India?</button>
                <div class="panel">
                    <p>We are actively functioning in Bengaluru, Pune and Hydrabad.</p>
                </div>

        </div>
    </section>

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

   
    
<?php
require('footer.php');
?>