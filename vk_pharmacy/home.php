<html>
    <head>

        <style>
        body{
            background-image:url("pharmacy4.png");
            background-repeat:no-repeat;
            position:absolute;
            overflow: hidden

        } 
        .button1 {
  display: inline-block;
  padding: 5px 15px;
  margin-top:350px;
  margin-left:570px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #2d2c85;
  border: none;
  border-radius: 15px;
}

.button1:hover {background-color: blue}

.button1:active {
  background-color: blue;
  box-shadow: 0 5px #666;5
  transform: translateY(4px);
}
.button2 {
  display: inline-block;
  padding: 5px 20px;
  margin-top:20px;
  margin-left:563px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #2d2c85;
  border: none;
  border-radius: 15px;
}

.button2:hover {background-color: blue}

.button2:active {
  background-color: blue;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.popup {
  display: none;
  position: fixed;
  padding: 10px;
  width: 700px;
  left: 50%;
  margin-left: -350px;
  height: 500px;
  top: 50%;
  margin-top: -250px;
  background: #FFF;
  /* border: 5px solid black; */
  z-index: 20;
}

#popup:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #FFF;
  z-index: -1;
}
body{
  color:#fff
}
.contact_us{
    background-color: #f1f1f1;
    padding: 0px;
}

.contact_inner{
    background-color: #fff;
    position: relative;
    box-shadow: 5px 5px 25px #cccc;
    border-radius: 0px;
    margin-left: -50px;
    width: 400px;


}
.contact_field{
    padding: 0px 0px 0px 0px;
}
.right_conatct_social_icon{
    height: 100%;
}

.contact_field h3{
   color: #000;
    font-size: 40px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 0px;
}
.contact_field p{
    color: #000;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 20px;
}
.contact_field .form-control{
    border-radius: 0px;
    border: none;
    border-bottom: 1px solid #ccc;
}
.contact_field .form-control:focus{
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #1325e8;
}
.contact_field .form-control::placeholder{
    font-size: 13px;
    letter-spacing: 1px;
}

.contact_info_sec {
    position: absolute;
    background-color: #2d2d2d;
    right: 0px;
    height: 270px;
    width: 300px;
    margin-top: -292px;
    margin-right: -250px;
    border-radius: 0px 0 0 0px
    ;
}
.contact_info_sec h4{
    letter-spacing: 1px;
    padding-bottom: 15px;
}

.info_single{
    margin: 30px 0px;
}
.info_single i{
    margin-right: 15px;
}
.info_single span{
    font-size: 14px;
    letter-spacing: 1px;
}

button.contact_form_submit {
    background: linear-gradient(to top right, blue 15%, red 100%);
    border: none;
    color: #fff;
    padding: 10px 15px;
    width: 50%;
    margin-top: 15px;
    margin-left: 75px;
    margin-bottom: 15px;
    border-radius: 35px;
    cursor: pointer;
    font-size: 14px;
    letter-spacing: 2px;
}

.map_sec{
    padding: 0px 0px;
}
.map_inner h4, .map_inner p{
    color: #000;
    text-align: center
}
.map_inner p{
    font-size: 10px;
}
.map_bind{
    overflow: hidden;
}
    </style>
    <script>
      $ = function(id) {
  return document.getElementById(id);
}

var show = function(id) {
	$(id).style.display ='block';
}
var hide = function(id) {
	$(id).style.display ='none';
}
    </script>
    </head>
    <body>
        <button class="button1" onclick="location.href='index.php';">Shop Now</button>
        <button class="button2" href="#" onclick="show('popup')">Contact Us</button>

<div class="popup" id="popup">
<section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <h3>Contact Us</h3>
                                        <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                                        <input type="text" class="form-control form-group" placeholder="Name" />
                                        <input type="text" class="form-control form-group" placeholder="Email" />
                                        <textarea class="form-control form-group" placeholder="Message"></textarea>
                                        <button class="contact_form_submit">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_sec">
                            <h4>Contact Info</h4>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-headset"></i>
                                <span>+91 8012324069</span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-envelope-open-text"></i>
                                <span>kathirvelvenugopal@gmail.com</span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-map-marked-alt"></i>
                                <span>VK Pharmacy, 19, Axis Bank Building, K.Kulam, Erode-04</span>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="map_inner">
                        <h4>Find Us on Google Map</h4>
                        <div class="map_bind">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d298.28403812129625!2d77.69694531316068!3d11.366061610914521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPharmacies!5e1!3m2!1sen!2sin!4v1683826450642!5m2!1sen!2sin" width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
  <a href="#" onclick="hide('popup')">Close</a>
</div>
    </body>


   
