<?php
include 'header.html'
?>

<section id="site-content" style="background-image: url(https://images.shiksha.com/mediadata/images/1489476252phpZ8fG9S.jpeg);
    background-repeat: no-repeat;
    background-size: cover;">
<div class="wrapper">
  <h1>Reach Out to Us</h1>
  <p>Please fill out the form below and we will be in touch.</p>
<form class="new-contact-us-form">
 
  <label class="floating-label half-width-field">
    <span>First name<strong class="required-asterisk"><abbr title="required">*</abbr></strong></span>
    <input type="text" name="contact_us[first_name]" id="contact_us_first_name" autocomplete="given-name" required>
  </label>
  
  <label class="floating-label half-width-field">
    <span>Last name<strong class="required-asterisk"><abbr title="required">*</abbr></strong></span>
    <input type="text" name="contact_us[last_name]" id="contact_us_last_name" autocomplete="family-name" required >
  </label>
  
  <label class="floating-label full-width-field">
    <span class="floated-label">Email<strong class="required-asterisk"><abbr title="required">*</abbr></strong></span>
    <input type="email" name="contact_us[email]" id="contact_us_email" autocomplete="email" required>
  </label>
  

  
    <label class="select-group floating-label half-width-field">
      <span>You are<strong class="required-asterisk"><abbr title="required">*</abbr></strong></span>
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
    <span>Message/Suggestions <span class="helper"></span></span>
    <textarea id="contact_us_message" name="contact_us[message]"></textarea>
  </label>
  <input type="submit" value="Send Message" >
</form>
</div>


</section>


<?php include 'footer.html' ?>