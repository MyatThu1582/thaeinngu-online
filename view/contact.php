
<?php
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
<div class="container">
  <h3>Contact Us</h3>
  <p class="title-underline" style="width:100px;"></p>
  <div class="row">
    <div class="col-6 mt-3">
      <form class="" action="../config/send_email.php" method="post">
      <div class="">
        <label for="" style="font-size:17px; color:rgb(63,0,0);"><b>Name</b></label>
        <div class="mt-2">
          <input type="text" name="name" value="" class="donate" placeholder="Enter Your Name" style="height:50px;">
        </div>
        <label for="" class="mt-3" style="font-size:17px; color:rgb(63,0,0);"><b>Email</b></label>
        <div class="mt-2">
          <input type="email" name="email" value="" class="donate" placeholder="Enter Your Email" style="height:50px;">
        </div>
      </div>
      <label for="" class="mt-3" style="font-size:17px; color:rgb(63,0,0);"><b>Subject</b></label>
      <div class="d-flex mt-2">
        <div class="col-12">
          <input type="text" name="subject" value="" class="donate" placeholder="Enter Your Subject" style="height:50px;">
        </div>
      </div>
      <label for="" class="mt-3" style="font-size:17px; color:rgb(63,0,0);"><b>Message</b></label>
      <div class="d-flex">
        <div class="col-12 mt-2">
          <textarea name="message" rows="4" cols="80" placeholder="Enter Your Message" class="donate"></textarea>
        </div>
      </div>
      <button type="submit" name="send_btn" class="mt-4 donatebtn">Send</button>
      </form>

    </div>
    <div class="col-1"></div>
    <div class="col-5">
      <h3 style="margin-top:-100px;">Our Information</h3>
      <p class="title-underline" style="width:150px;"></p>
      <div class="d-flex" style="margin-top:100px;">
        <div class="card content_card" style="width:40%; height:200px; border:2px solid rgb(63,0,0);">
          <div class="d-flex">
            <div class="">
              <div class="card-body">
                <div class="d-flex mt-2">
                  <svg style="color: rgb(63,0,0);" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
                  </svg>
                  <p style="margin-left:10px; font-size:18px; color: rgb(63,0,0)  ;">Phone No.</p>
                </div>
                <ul class="">
                  <li style="margin-top:6px;">01-64851</li>
                  <li style="margin-top:6px;">09-247997483</li>
                  <li style="margin-top:6px;">09-738363848</li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="card content_card ms-5" style="width:40%; height:200px; border:2px solid rgb(63,0,0);">
          <div class="d-flex">
            <div class="">
              <div class="card-body">
                <div class="d-flex mt-2">
                  <svg style="color: rgb(63,0,0);" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                  </svg>
                  <p style="margin-left:10px; font-size:18px; color: rgb(63,0,0)  ;">Email</p>
                </div>
                <ul class="pt-2">
                  <li style="margin-top:6px;"> name@gmail.com</li>
                  <li style="margin-top:6px;"> name@gmail.com</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card content_card mt-5" style="width:40%; height:200px; margin-left:23%; border:2px solid rgb(63,0,0);">
        <div class="d-flex">
          <div class="">
            <div class="card-body">
              <div class="d-flex mt-2">
                <svg style="color: rgb(63,0,0);" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411"/>
                </svg>
                <p style="margin-left:10px; font-size:18px; color: rgb(63,0,0);">Address</p>
              </div>
              <ul class="pt-3">
                <li style="margin-top:6px;">မှော်ဘီမြို့နယ်/နှောကုန်‌ကျေးရွာ</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<br><br><br>
<?php include '../footer.php' ?>
