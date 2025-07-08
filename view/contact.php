
<?php
session_start();
include '../config/send_email.php';
 include '../navbar.php'
?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
  <h2 class="mt-5 pt-0">Contact Us</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="activity.php" class="link text-brown">Contact Us</a>
  </div>
</div>

<br><br>

<div class="container" style="margin-top:130px;">
<div class="row">
  <div class="col-3">
    <div class="contact_card_box pt-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16" style="margin-left:40%;">
        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
      </svg>
        <p style="font-size:23px; margin-left:25%; margin-top:10px;"><b>Our Location</b></p>
        <p style="font-size:18px; margin-left:12%;">မှော်ဘီမြို့နယ်/နှောကုန်ကျေးရွာ</p>
        <p style="font-size:18px; margin-left:25%; padding-bottom:40px;">စုပေါင်းရုံး/မှတ်တိုင်</p>
    </div>
  </div>
  <div class="col-3">
    <div class="contact_card_box pt-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-telephone-forward" viewBox="0 0 16 16" style="margin-left:40%;">
        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708"/>
      </svg>
        <p style="font-size:23px; margin-left:25%; margin-top:10px;"><b>Phone Number</b></p>
        <p style="font-size:18px; margin-left:10%;">09-247997483/09-738363848</p>
        <p style="font-size:18px; margin-left:36%; padding-bottom:40px;">01-64851</p>
    </div>
  </div>
  <div class="col-3">
    <div class="contact_card_box pt-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-envelope-arrow-down" viewBox="0 0 16 16" style="margin-left:40%;">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99zm1 7.105 4.708-2.897L1 5.383zM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708z"/>
      </svg>
        <p style="font-size:23px; margin-left:37%;"><b>Email</b></p>
        <p style="font-size:18px; margin-left:25%;">name@gmail.com</p>
        <p style="font-size:18px; margin-left:25%; padding-bottom:47px">name@gmail.com</p>
    </div>
  </div>
  <div class="col-3">
    <div class="contact_card_box pt-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16" style="margin-left:40%;">
        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
      </svg>
        <p style="font-size:23px; margin-left:25%;"><b>Web Address</b></p>
        <p style="font-size:18px; margin-left:25%;">www.thaeinngu.org</p>
        <div class="" style="margin-left:100px;">
          <svg style="color:#458cff;" xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-facebook icon" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-messenger ms-2 icon" viewBox="0 0 16 16">
            <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.64.64 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.64.64 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76m5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-telegram ms-2 icon" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
          </svg>
          <div class="" style=" padding-bottom:47px"></div>
        </div>
    </div>
  </div>
</div>
</div>

<div class="main_bg" style="background: #ffffff; background: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(94, 0, 0, 1) 100%);">
<div class="container">
  <div class="row contact_input" style="padding-top:200px; padding-bottom:100px; margin-top:-130px;">
    <h2 style="color:white;"><b>Contact</b></h2>
    <div class="col-6 mt-3 contact_us">
      <form class="" action="../config/send_email.php" method="post">
      <div class="">
        <label for="" class="lable_name"style="font-size:17px; color:white;"><b>Name</b></label>
        <div class="mt-2">
          <input type="text" name="name" value="" class="donate" placeholder="Enter Your Name">
        </div>
        <label for="" class="mt-3" style="font-size:17px; color:white;"><b>Email</b></label>
        <div class="mt-2">
          <input type="email" name="email" value="" class="donate" placeholder="Enter Your Email">
        </div>
      </div>
      <label for="" class="mt-3" style="font-size:17px; color:white;"><b>Message</b></label>
      <div class="d-flex">
        <div class="col-12 mt-2">
          <textarea name="message" rows="4" cols="80" placeholder="Enter Your Message" class="donate"></textarea>
        </div>
      </div>
      <button type="submit" name="send_btn" class="contact_send_btn">Send</button>
      </form>
    </div>

    <div class="col-1"></div>

    <div class="col-5 information" style="margin-top:-38px;">
      <h2 style="color:white;"><b>Get In Touch</b></h2>
      <p class="" style="color:white; margin-top:30px;">Got questions or want to learn more about Theinngu Monastery? We’re here to help you on your journey.</p>
      <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <!-- <div class="">


      </div> -->
      <div class="d-flex" style="margin-top:30px;">
        <img src="../image/lake.jpg" alt="" style="width:250px; border-radius:5px; border:4px solid  rgb(63,0,0);" class=" contact_photo">
        <img src="../image/farm.jpg" alt="" style="width:250px; border-radius:5px; border:4px solid  rgb(63,0,0);" class="ms-4 contact_photo">
      </div>
    </div>
  </div>
</div>
</div>
<?php include '../footer.php' ?>
