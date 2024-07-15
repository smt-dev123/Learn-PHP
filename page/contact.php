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
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="name" placeholder="Name: ">
        <input type="email" name="email" placeholder="Email: ">
        <input type="text" name="subject" placeholder="Subject: ">
        <input type="text" name="experience" placeholder="Experience: ">
        <textarea name="message" placeholder="Message: "></textarea>

        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>