<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8"f>
  <title>ThaeInnGu - သဲအင်းဂူ</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WJZ7K81NHD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-WJZ7K81NHD');
  </script>

  <?php
  $link = $_SERVER['PHP_SELF'];
  $linkary = explode('/',$link);
  $page = end($linkary);
  if ($page == 'index.php' || $page == 'login.php' || $page == 'register.php') {
    ?>
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
    <!-- <script src="boostrap/js/bootstrap.min.js" charset="utf-8"></script> -->
    <script src="boostrap/js/bootstrap.bundle.js" charset="utf-8"></script>
    <?php
  }else{
    ?>
    <link rel="stylesheet" href="../boostrap/css/bootstrap.css">
    <!-- <script src="../boostrap/js/bootstrap.min.js" charset="utf-8"></script> -->
    <script src="../boostrap/js/bootstrap.bundle.js" charset="utf-8"></script>
    <?php
  }
   ?>
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&family=Noto+Serif+Myanmar:wght@100;200;300;400;500;600;700;800;900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Myanmar:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<style>
*{
  font-family: "Outfit", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
}
.myanmar-text{
  font-family: "Noto Serif Myanmar", serif;
  font-weight: 700;
  font-style: normal;
}
.hide{
  display: none;
}
.none-bg{
  background-color: rgb(94, 0, 0) !important;
  color: rgb(255, 255, 255);
  border: 2px solid rgb(94, 0, 0);
}
.bg-brown{
  background-color:rgb(94,0,0);
}
.border-brown{
  border: 2px solid rgb(94,0,0);
}
.text-brown{
  color: rgb(94,0,0);
}
.bold{
  font-weight: bold;
}
.header{
  margin-top: -2px;
  margin-bottom: 2px;
}
.header-text{
  font-size: 18px;
  color: yellow;
  font-weight: bold;
}
.home{
  height: 600px;
  color: black;
  background-image: url('image/home.png');
  /* background-color: rgba(201, 200, 200, 0.5); */
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 100% 50%;
}
.donate{
  color: green;
}
.link{
  text-decoration: none;
}
.menu{
  color: rgb(94,0,0);
  padding: 8px;
  font-size: 18px;
}
.hide{
  transition: 0.5s;
  opacity: 0;
}
.nab-bar{
  align-items: center;
  padding: 10px 0px;
}
.main-title{
  /* display: block; */
  font-size: 45px;
  font-weight: bold;
  color: rgb(94,0,0);
  margin: 0px 10px;
  text-decoration: none !important;
}
.sub-title{
  font-weight: bold;
  font-size: 17px;
  font-style: italic;
  /* color: rgb(94,0,0); */
}
.direction{
  background-color: rgba(0,0,0,0.4);

}

.sub-links{
  font-size: 15px;
}
.sub-links:hover{
  background-color: lightgrey;
}
.dropdown {
  cursor: pointer;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.3);
  z-index: 1;
  border-radius: 5px;
  padding: 10px 0px;
}

.dropdown-content a {
  color: black;
  padding: 6px 15px;
  transition: 0.5s;
  /* padding: 12px 16px; */
  text-decoration: none;
  display: block;
}

/* .dropdown-content a:hover {background-color: #ddd;} */

.dropdown:hover .dropdown-content {display: block;}

.dropdown-content a:hover{
  color: rgb(94,0,0);
  padding-left: 20px;
}
.bannar{
  background-image: url('../image/bannar2.png');
  background-repeat: no-repeat;
  /* background-size: cover; */
  /* background-position: 100% 50%; */
}
.bio{
  text-align: justify;
  /* text-indent: 50px; */
}
.speech{
  height: 200px;
  background-image: url('image/forhome.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
.activity{
  cursor: pointer;
  /* width: 33%; */
  height: 350px;
  border-radius: 6px;
  box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.3);
  transition: 0.3s;
}
.activity:hover{
  transform: scale(1.02);
}
.actimg{
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  width: 100%;
  height: 70%;
}
.title-underline{
  width: 200px;
  height: 4px;
  /* border-bottom: 3px solid red; */
  background-color: rgb(94,0,0);
  margin-bottom: 50px;
}
.btns{
  /* background-color: rgba(0,0,0,0.1); */
  width: 695.9px;
  box-shadow: 0px 9px 18px 0px rgba(94,0,0,0.3);
}
.biolinks{
  padding: 15px 38.4px;
  border: none;
  background-color: transparent;
  transition: 0.1s;
}
.hand{
  transform: rotateZ(90deg);
}
.donate{
  width:100%;
  padding: 10px;
  border: none;
  outline: none;
  color: black;
  box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.4);
}
.donate:focus{
  border-left: 2px solid rgb(94,0,0);
}
.donatebtn{
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  outline: none;
  background-color: rgb(94, 0, 0);
  color: white;
}
.announce_div{
  cursor: pointer;
  transition: 0.1s;
  box-shadow:0px 8px 16px 0px rgba(94,0,0,0.1); border-radius:10px;
}
.announce_div:hover{
   transform: scale(1.02);
}
.gallery_card{
  position: relative;
  width: 320px;
  height: 220px;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
}

.gallery_card img {
  width: 150%;
  margin-left:-20px;
  height: 100%;
  object-fit: cover;
  cursor:pointer;
  transition: transform 0.5s ease;
}

.gallery_card:hover img {
  transform: scale(0.5s);
}

.overlay {
  position: absolute;
  bottom: -100%;
  left:0;
  width: 100%;
  height: 25%;
  background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
  backdrop-filter: blur(3px);
  color: white;
  padding: 20px;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  text-align: center;
  transition: bottom 0.5s ease;
}

.gallery_card:hover .overlay {
  bottom: 0;
  /* border:4px solid rgb(94,0,0); */
  border-radius:10px;
}

.overlay h3 {
  margin: 0;
  font-size: 20px;
  font-weight: 600;
}
video.custom-video {
  width: 100%;
  max-height: 260px;
  border-radius: 12px;
  outline: none;
  border: 3px solid rgb(94, 0, 0);
  object-fit: cover;
}
audio {
  width: 100%;
  border-radius: 10px;
  background-color: #f0f0f0; /* Only works on some browsers */
  outline: none;
  height: 34px;
  box-shadow: 0 2px 10px rgba(94,0,0,0.5);
}
.viewmorebtn{
  color: white;
  border: 2px solid rgb(94,0,0);
  transition: 0.5s;
  margin-bottom: 50px;
}
.viewmorebtn:hover{
  color: black;
  border: 2px solid rgb(94,0,0);
}
.audio{
  width: 344px;
  /* flex-wrap: wrap; */
}
.bio_video{
  width: 100%;
  height: 100%;
  /* border: 2px solid rgb(94, 0, 0); */
  box-shadow: 0px 8px 16px 0px rgb(94,0,0);
}
.pagination .page-link {
    border: none;
    color:rgb(0, 0, 0);
    background: transparent;
    font-weight: 500;
    padding: 0.5rem 0.75rem;
    font-size: 20px;
    margin: 0px 10px;
  }

  .pagination .page-item.active .page-link {
    background-color: rgb(94, 0, 0);
    color: #fff;
    border-radius: 0.375rem;
    font-weight: 600;
  }

  .pagination .page-item .page-link:hover {
    background-color:rgb(94, 0, 0);
    border-radius: 0.375rem;
    color: white;
  }

  .pagination .page-item.disabled .page-link {
    color: #adb5bd;
  }
  .introimg{
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.3);
    transition: 0.3s;
  }
  .introimg:hover{
    transform: scale(1.02);
  }
  .sayardawimg{
    /* border: 5px double rgb(94,0,0); */
    border-radius: 10%;
    overflow: hidden;
  }

/* For footer */
.footer{
  /* height:380px; */
  background-color: rgb(63,0,0);
}
.copyright{
  padding-left: 100px;
  background-color: rgb(0,0,0,0.2);
}
.footertitle-underline{
  width: 100px;
  height: 3px;
  /* border-bottom: 3px solid red; */
  background-color: white;
}
.f-links{
  display: block;
  color: white;
  margin-bottom: 6px;
}
.menubtn{
  display: none;
}
.menudivforresponsive {
    position: fixed;
    top: 0;
    left: -250px; /* off screen initially */
    width: 250px;
    height: 100vh;
    background-color: #fff;
    box-shadow: 2px 0 5px rgba(0,0,0,0.2);
    transition: left 0.3s ease-in-out;
    z-index: 1050;
    padding: 1rem;
  }

  .menudivforresponsive.active {
    left: 0;
  }

  .menudivforresponsive ul {
    list-style: none;
    padding: 0;
  }

  .menudivforresponsive li {
    margin: 1rem 0;
  }

  .menudivforresponsive a {
    color: #333;
    text-decoration: none;
    font-weight: 500;
  }
  .biocontainer{
    width: 100%;
    height: 100%;
  }
  .introtextcontainer{
    margin-top: 20% !important;
    margin-left: 10% !important;
  }
  .introtext1{
    font-size: 50px;
    margin-bottom: 9px;
    display: block;
    font-weight: bold;
    color: rgba(24, 0, 0, 0.8);
  }
  .introtext2{
    font-size: 70px;
    font-weight: bold;
    color: rgba(24, 0, 0, 0.8);
  }
  .introcontainer{
    margin-left: 100px;
  }
  .die{
    text-align: center;
  }
  .die2{
    padding-right: 100px;
  }
  .footercontainer{
    margin: 0px !important;
  }
  .introtayardaw{
    margin-top: 100px !important;
  }
  .content_card{
    border:none;
    /* height:100p; */
    box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.4);
   transition:0.1s;
  }
  .content_card:hover{
      scale: 1.1;
  }
  .forums_btn{
    border:2px solid  rgb(63,0,0);
    padding:10px;
    background-color: rgb(63,0,0);
    color:white;
    transition:0.5s;
  }
  .forums_btn:hover{
    background: none;
    color: rgb(63,0,0);
    font-weight:bold;
  }
  .add_btn{
      border:none;
      background-color: rgb(63,0,0);
      color:white;
      width:100%;
      padding:10px;
      /* margin-left:80%; */
      margin-top:-64px;
      font-weight: bold;
      border:2px solid  rgb(63,0,0);
      transition:0.5s;
      border-radius:10px;
      margin-top:8px;
  }
  .add_btn:hover{
      background:none;
      border:2px solid  rgb(63,0,0);
      color:rgb(63,0,0);
  }
  .forum_card{
    box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.4);
    border-radius:10px;
    margin-left:%;
    transition:0.5s ;
  }
  .forum_card:hover{
    transform: scale(1.02);
  }
  .forums_details_card{
    box-shadow: 0px 8px 16px 0px rgba(94,0,0,0.4);
    border-radius:10px;
    margin-left:%;
    transition:0.5s;
  }
  .forums_details{
    border:none;
    background-color: rgb(63,0,0);
    color:white;
    width:12%;
    padding:10px;
    margin-top:-64px;
    font-weight: bold;
    border:2px solid  rgb(63,0,0);
    transition:0.5s;
    border-radius:10px;
    margin-top:8px;
  }
  .forums_details:hover{
    background:none;
    border:2px solid  rgb(63,0,0);
    color:rgb(63,0,0);
  }
  .back_forums{
    border:none;
    background-color: rgb(63,0,0);
    color:white;
    width:25%;
    padding:10px;
    margin-top:-64px;
    font-weight: bold;
    border:2px solid  rgb(63,0,0);
    transition:0.5s;
    border-radius:10px;
    margin-top:8px;
  }
  .back_forums:hover{
    background:none;
    border:2px solid  rgb(63,0,0);
    color:rgb(63,0,0);
  }

  .forums_underline{
    width: 100px;
    height: 4px;
    /* border-bottom: 3px solid red; */
    background-color: rgb(94,0,0);
    margin-bottom: 50px;
  }
  .comment_input{
    height:50px;
    width:79%;
    padding:9px;
    border:none;
    outline:none;
    border-bottom:2px solid  rgb(94,0,0);
  }
  .send_comment_btn{
    border:none;
    background-color: rgb(63,0,0);
    color:white;
    width:8%;
    padding-top:9px;
    padding-bottom:9px;
    font-weight: bold;
    border:2px solid  rgb(63,0,0);
    transition:0.5s;
    border-radius:10px;
    margin-top:8px;
  }
  .send_comment_btn:hover{
    background:none;
    border:2px solid  rgb(63,0,0);
    color:rgb(63,0,0);
  }
  .card {
    width: 89%;
    height: 350px;
    border:none;
    border-radius: 10px;
    /* box-shadow: 0 2px 8px rgba(0,0,0,0.1); */
    overflow: hidden;
    background-color: #fff;
    font-family: sans-serif;
  }

  .card-content {
    height: 100%;
    overflow-y: auto;
    padding: 16px;
  }

  .item {
    background-color: #f2f2f2;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 12px;
    width:100%;
  }
  .first_username{
    background-color: rgb(63,0,0);
    color:white;
    width:30px;
    border-radius:50px;
    height:30px;
    font-size:20px;
  }
.replt_input{
  padding:5px;
  border-radius:5px;
}
.replt_btn{
  padding:5px 10px;
  border:2px solid  rgb(63,0,0);
  background-color: rgb(63,0,0);
  color:white;
  transition:0.5s;
  border-radius:5px;
}
.replt_btn:hover{
  background:none;
  color: rgb(63,0,0);
}
/* .contact_design{
  width:100%;
  padding:10px;
  border-radius:5px;
  border:none;
  border-left:2px solid  rgb(63,0,0);
  border-top:2px solid  rgb(63,0,0);
  outline:none;
} */
.contact_send_btn{
  background-color: rgb(63,0,0);
  padding:10px;
  color:white;
  width:100%;
  font-size:18px;
  border-radius:5px;
  transition:0.5s;
  font-weight: bold;
  margin-top:30px;
}
.contact_send_btn:hover{
  background:none;
  color:black;
}
.contact_card_box{
  background-color:white;
  box-shadow: 0px 8px 16px 0px #333333;
  border-radius:10px;
  transition:0.2s;
}
.contact_card_box:hover{
    scale: 1.1;
}
.icon{
  margin-top:-10px;
  transition:0.2s;
}
.icon:hover{
  scale: 1.2;
}
.contact_photo{
  transition:0.2s;
}
.contact_photo:hover{
  scale: 1.1;
}
.gallery_see_more_btn{
  text-decoration: none;
  background-color: rgb(63,0,0);
  padding:12px;
  color:white;
  border:2px solid  rgb(63,0,0);
  transition:0.5s;
}
.gallery_see_more_btn:hover{
  background:none;
  color: rgb(63,0,0);
  border:2px solid  rgb(63,0,0);
}
.date{
  padding:5px;
  border-radius:10px;
  background-color:  rgb(63,0,0);
  color:white;
}
.activity_back_btn{
  border:2px solid rgb(63,0,0);
  background-color:rgb(63,0,0);
  color:white;
  padding:5px 20px;
  margin-top:90px;
  margin-left:89%;
}
.activity_image{
  transition:0.5s;
}
.activity_image:hover{
  scale: 1.1;
}


/* for responsive */
@media(max-width:1000px){
  .toshow{
    display: block !important;
  }
  .nomargin{
    margin: 0px !important;
  }
  .full{
    width: 100% !important;
  }
  .headerdiv{
    padding: 0px !important;
  }
  .header{
    margin: 0px !important;
  }
  .header-text{
    font-size: 15px;
  }
  .menucontainer{
    display: none !important;
  }
  .maintitlecontainer{
    width: 55% !important;
    padding: 15px 0px;
  }

  .buddhacontainer{
    width: 28% !important;
    text-align: center;
    /* background-color: blue; */
  }
  .menubtn{
    display: block;
    margin-left: 30px;
  }
  .main-title{
    font-size: 37px;
  }
  .sub-title{
    font-size: 13px;
  }
  .menudivforresponsive{
    display: block;
  }
  .intro1{
    margin-top: -30px;
    margin-bottom: 30px;
  }
  .intro2{
    padding: 20px !important;
  }
  .pricinple{
    margin-top: -50px !important;
  }
  .purpose{
    margin: 30px auto !important;
  }
  .purpose2{
    margin: 0px !important;
  }
  .home{
    height: 350px;
    padding: 0px !important;
  }
  .sayardaw{
    width: 35%;
    text-align: center;
    display: none !important;
    /* background-color: rgba(94,0,0,0.5); */
    margin: 30px 0px !important;
    padding: 20px !important;
  }
  .sayardawimg{
    width: 80%;
    margin-left: 20px;
  }
  .bio3{
    margin-top: 100px !important;
    padding: 0px !important;
  }
  .our_latest_acti{
    margin:0px !important;
  }
  .main_activite{
    width:100% !important;
  }
  .donate1{
    padding: 0px !important;
  }
  .hand{
    transform: rotateZ(180deg);
  }
  .btns{
    width: 100%;
  }
  .tayardawcontainer{
    padding: 0px !important;
    margin: 0px !important;
  }
  .gallery{
    justify-content: center !important;
  }
  .gallerymodal{
    top: 150px !important;
  }
  .introtextcontainer{
    margin: 0px !important;
    padding-top: 18% !important;
    padding-left: 15% !important;
    width: 100% !important;
  }
  .introtext1{
    font-size: 33px;
  }
  .introtext2{
    font-size: 38px;
  }
  .name{
    font-size: 13px;
  }
  .biotitle{
    padding: 0px !important;
  }
  .biovideo{
    padding: 0px !important;
  }
  .nopadding{
    padding: 0px !important;
  }
  .biocontainer{
    margin-top: 50px;
    height: 620px !important;
  }
  .introcontainer{
    margin-left: 130px !important;
    padding-left: 40px !important;
    padding-right: 40px !important;
    padding-top: 50px !important;
  }
  .speech{
    margin-top: 50px !important;
  }
  .die2{
    padding-right: 60px !important;
  }
  .footercontainer{
    padding: 20px 30px !important;
  }
  .footer1{
    margin: 0px !important;
  }
  .quicklinks{
    display: none !important;
  }
  .footertext{
    text-align: center !important;
  }
  .map{
    padding: 0px 20px !important;
  }
  .activity{
    height: 600px !important;
  }
  .actimg{
    height: 75%;
  }
  .contact_us{
    width:100%;
    padding:25px;
    }
  .information{
    margin-top:40%;
    width:100%;
  }
  .content_card{
    margin-left:20px;
    margin-top:-50px;
  }
  .address_card{
    margin-left:29% !important;
  }
  .p-tab{
    margin-bottom:-10px;
  }
}
</style>
<body>
