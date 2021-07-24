<?php
include 'header.html';
include 'connect.php';
?>
<?php


?>
<section class="section" style="padding-top:1rem;height:130vh;background-image: url(https://images.shiksha.com/mediadata/images/1489476252phpZ8fG9S.jpeg); background-repeat: no-repeat;background-size: cover;">

<div class="wrapper">
  <h1 style="text-align: center; font-weight: 800 ;font-size:2rem;">Contact</h1>
</br>
  <p>For all enquires, please fill the form below</p>

<br>  <form action="function.php" class="new-contact-us-form" method="POST">
 
  <label class="floating-label half-width-field">

    <input placeholder="First Name" type="text" name="firstname" id="contact_us_first_name" autocomplete="given-name" required>
  </label>
  
  <label class="floating-label half-width-field">

    <input placeholder="Last Name" type="text" name="lastname" id="contact_us_last_name" autocomplete="family-name" required >
  </label>
  
  <label class="floating-label full-width-field">

    <input placeholder="Email" type="email" name="email" id="contact_us_email" autocomplete="email" required>
  </label>
  

  
    <label class="select-group floating-label half-width-field">

    <div>
    <select id="profession" name="profession">
      <option value="title"></option>
      <option value="student">Student</option>
      <option value="faculty">Faculty</option>
      <option value="alumni">Alumni</option>
      <option value="visitor">Visitor</option>
    </select>
  </div>
  </label>
   <label class="floating-label full-width-field">
    <textarea placeholder="Message/Suggestions" id="contact_us_message" name="message"></textarea>
  </label>
  <input type="submit" name="okay" value="Send Message" >
</form>
</div>









</section>
<section class="section">
  <div class="level">
    <div class="level-item">
      <div class="hero">
      <div class="hero-body ">
          <div class="title is-2" style="font-family: JoseFin !important;">
            Connect with Us
            <div class="subtitle is-5 mt-2" style="color:red !important">
                bitnoidanaps@bitmesra.ac.in
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
<div class="level">
    <div class="level-item">
    <div class="mapouter mb-3" ><div class="gmap_canvas"><iframe width="700" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=BIT%20Mesra,%20Noida%20Campus,%20A-7,%20Sector%201,%20Noida,%20Uttar%20Pradesh%20201301&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:700px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:700px;}</style></div></div>
    </div>
</div>

</section>

<?php include 'footer.html' ?>