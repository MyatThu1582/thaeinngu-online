<?php
   include 'resource/links.php';
?>
<div id="topsection"></div>
  <div class="d-flex ps-5 pe-5 text-light bg-brown headerdiv" style="position:sticky; top:0px; z-index:9999;">
    <div class="col-3 ps-5 ms-4 header">
      <span class="header-text">သဲအင်း</span>
    </div>
    <div class="col-4 ms-5 ps-5 text-center header">
      <span class="header-text">ဇွဲတင်း</span>
    </div>
    <div class="col-4 header" style="text-align: right;">
      <span class="header-text">အမြဲလင်း</span>
    </div>
  </div>
<div class="" style="box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.5); background-color: white;">
  <div class="container d-flex nab-bar">

  <button class="btn btn-sm text-dark menubtn dropend" id="menuToggleBtn" style="border: none !important;" type="button"
      data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-three-dots-vertical"
          viewBox="0 0 16 16">
          <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
      </svg>
  </button>


  <div class="col-4 maintitlecontainer">
    <?php
      $link = $_SERVER['PHP_SELF'];
      $linkary = explode('/',$link);
      $page = end($linkary);
      if ($page == 'index.php' || $page == 'login.php' || $page == 'register.php') {
    ?>
      <a href="index.php" class="main-title">သဲအင်းဂူ</a><span class="sub-title">ဗဟိုဌာနချုပ် (မှော်ဘီ )</span>
    <?php 
      }else{
    ?>
      <a href="../index.php" class="main-title">သဲအင်းဂူ</a><span class="sub-title">ဗဟိုဌာနချုပ် (မှော်ဘီ )</span>
    <?php
      }
    ?>
    </div>
    <div class="col-7 menucontainer">
      <?php
      if ($page == 'index.php' || $page == 'login.php' || $page == 'register.php') {
      ?>
      <div class="">
        <a class="menu link" href="index.php">Home</a>

        <div class="dropdown">
          <span class="dropbtn menu link">About Us</span>
          <div class="dropdown-content mt-1">
            <a href="view/intro.php" class="sub-links">Introduction</a>
            <a href="view/bio.php" class="sub-links">Biography</a>
            <a href="view/" class="sub-links">Orgnization of Us</a>
          </div>
        </div>

        <div class="dropdown">
          <span class="dropbtn menu link">Resources</span>
          <div class="dropdown-content mt-1">
            <a href="view/tayardaw.php" class="sub-links">တရားတော်များ</a>
            <a href="view/book.php" class="sub-links">စာအုပ်များ</a>
          </div>
        </div>

        <a class="menu link" href="view/announcement.php">Announcement</a>

        <div class="dropdown">
          <span class="dropbtn menu link">Activity</span>
          <div class="dropdown-content mt-1">
            <a href="view/gallery.php" class="sub-links">Gallery</a>
            <a href="view/activity.php" class="sub-links">Activity</a>
          </div>
        </div>

        <a class="menu link" href="view/donate.php">Donate</a>
        <a class="menu link" href="view/contact.php">Contact</a>
      </div>
    <?php
    }else{
    ?>
    <div class="">
      <a class="menu link" href="../index.php">Home</a>
      <div class="dropdown">
        <span class="dropbtn menu link">About Us</span>
        <div class="dropdown-content mt-1">
          <a href="intro.php" class="sub-links">Introduction</a>
          <a href="bio.php" class="sub-links">Biography</a>
          <a href="#" class="sub-links">Orgnization of Us</a>
        </div>
      </div>

      <div class="dropdown">
        <span class="dropbtn menu link">Resources</span>
        <div class="dropdown-content mt-1">
          <a href="tayardaw.php" class="sub-links">တရားတော်များ</a>
          <a href="book.php" class="sub-links">စာအုပ်များ</a>
        </div>
      </div>

      <a class="menu link" href="announcement.php">Announcement</a>

      <div class="dropdown">
        <span class="dropbtn menu link">Activity</span>
        <div class="dropdown-content mt-1">
          <a href="gallery.php" class="sub-links">Gallery</a>
          <a href="activity.php" class="sub-links">Activity</a>
        </div>
      </div>

      <a class="menu link" href="donate.php">Donate</a>
      <a class="menu link" href="contact.php">Contact</a>
    </div>
  <?php
  }
    ?>
    </div>
    <div class="col-2 buddhacontainer">
      <img src="image/buddha2.png" alt="" width="80%" height="80%">
    </div>
  </div>
</div>
<div class="m-5 hide" id="btn" style="position: fixed !important; bottom:10px; right:-10px;">
  <a class="menu" href="#topsection">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
      <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
    </svg>
  </a>
</div>


<!-- for responsive -->
<div class="collapse p-3 text-light" id="collapseExample" style="position: absolute; background-color: rgb(94,0,0); width: 100%;">
  <?php 
    if ($page == 'index.php' || $page == 'login.php' || $page == 'register.php') {
  ?>
  <div class="dropdown">
    <span class="dropbtn text-light link">About Us</span>
    <div class="dropdown-content mt-1" style="position: absolute; left: 68px; top: -5px;">
      <a href="view/intro.php" class="sub-links">Introduction</a>
      <a href="view/bio.php" class="sub-links">Biography</a>
      <a href="view/" class="sub-links">Orgnization of Us</a>
    </div>
  </div><hr>

  <div class="dropdown">
    <span class="dropbtn text-light link">Resources</span>
    <div class="dropdown-content mt-1" style="position: absolute; left: 75px; top: -5px;">
      <a href="view/tayardaw.php" class="sub-links">တရားတော်များ</a>
      <a href="view/book.php" class="sub-links">စာအုပ်များ</a>
    </div>
  </div><hr>

  <a class="text-light link" href="view/announcement.php">Announcement</a><hr>

  <div class="dropdown">
    <span class="dropbtn text-light link">Activity</span>
    <div class="dropdown-content mt-1" style="position: absolute; left: 57px; top: -5px;">
      <a href="view/gallery.php" class="sub-links">Gallery</a>
      <a href="view/activity.php" class="sub-links">Activity</a>
    </div>
  </div><hr>

  <a class="text-light link" href="view/donate.php">Donate</a><hr>
  <a class="text-light link" href="view/contact.php">Contact</a>
  <?php
    }else{
      ?>
    <div class="dropdown">
      <span class="dropbtn text-light link">About Us</span>
      <div class="dropdown-content mt-1" style="position: absolute; left: 68px; top: -5px;">
        <a href="intro.php" class="sub-links">Introduction</a>
        <a href="bio.php" class="sub-links">Biography</a>
        <a href="#" class="sub-links">Orgnization of Us</a>
      </div>
    </div><hr>

    <div class="dropdown">
      <span class="dropbtn text-light link">Resources</span>
      <div class="dropdown-content mt-1" style="position: absolute; left: 75px; top: -5px;">
        <a href="tayardaw.php" class="sub-links">တရားတော်များ</a>
        <a href="book.php" class="sub-links">စာအုပ်များ</a>
      </div>
    </div><hr>

    <a class="text-light link" href="announcement.php">Announcement</a><hr>

    <div class="dropdown">
      <span class="dropbtn text-light link">Activity</span>
      <div class="dropdown-content mt-1" style="position: absolute; left: 57px; top: -5px;">
        <a href="gallery.php" class="sub-links">Gallery</a>
        <a href="activity.php" class="sub-links">Activity</a>
      </div>
    </div><hr>

    <a class="text-light link" href="donate.php">Donate</a><hr>
    <a class="text-light link" href="contact.php">Contact</a>
      <?php
    }
  ?>
</div>

