<div class="contact">
  <div class="info">
    <h2>Contact Info</h2>
    <p>Lorem ipsum dolor sit amet, consecte adipisicing elit sed do eiusmod tempor incididunt.</p>
    <div class="list">
      <div class="contact_icon">
        <i class="fa-solid fa-phone fa-beat"></i>
      </div>
      <div class="contact_text">
        <h3>Call Us</h3>
        <p>061 828 767</p>
      </div>
    </div>
    <div class="list">
      <div class="contact_icon">
        <i class="fa-solid fa-envelope fa-beat"></i>
      </div>
      <div class="contact_text">
        <h3>Email Us</h3>
        <p>smt@gmail.com</p>
      </div>
    </div>
    <div class="list">
      <div class="contact_icon">
        <i class="fa-solid fa-location-dot fa-beat"></i>
      </div>
      <div class="contact_text">
        <h3>Locaion</h3>
        <p>Rolous, Prasat Bakong, Siemreap, Cambodia</p>
      </div>
    </div>
  </div>
  <div class="question">
    <h2>Do You Have Any Questions</h2>
    <div class="form">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="name" placeholder="Name: " required>
        <input type="email" name="email" placeholder="Email: " required>
        <input type="text" name="subject" placeholder="Subject: " required>
        <input type="text" name="experience" placeholder="Experience: ">
        <textarea name="message" placeholder="Message: "></textarea>

        <input type="submit" name="submit" value="Submit" class="btn-primary">
      </form>
    </div>
  </div>
</div>

<?php
  // $name = isset($_POST['name']) ? $_POST['name'] : '';
  // $email = isset($_POST['email']) ? $_POST['email'] : '';
  // $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  // $experience = isset($_POST['experience']) ? $_POST['experience'] : '';
  // $message = isset($_POST['message']) ? $_POST['message'] : '';

  // if($name){
  //   echo '<script>
  //   alert("Name: ' . $name . '\\nEmail: ' . $email . '\\nSubject: ' . $subject . '\\nExperience: ' . $experience . '\\nMessage: ' . $message . '");
  //   </script>';
  // }else{
  //   echo '';
  // }
?>