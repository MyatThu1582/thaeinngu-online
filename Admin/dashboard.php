<?php include '../Controllers/query.ctr.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Glass Dashboard with Icons</title>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap-modal-link/bootstrap.min.css">
  <script src="bootstrap-modal-link/jquery.min.js"></script>
  <script src="bootstrap-modal-link/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>
<style media="screen">
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
  .btn-close{
    border:2px solid  rgb(63,0,0);
  }
  #clock {
      font-size: 18px;
       padding: 8px;
       color:white;
  }

  * {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
  }

  body {
    display: flex;
    min-height: 100vh;
    background-color: #f5f5f5;
  }

  /* Sidebar */
  .sidebar {
    width: 250px;
    background: #3b0000;
    color: white;
    padding: 20px;
    position: fixed;
    height: 100%;
  }

  .sidebar h2 {
    margin-bottom: 20px;
  }

  .sidebar a {
    display: block;
    background: rgba(255, 255, 255, 0.1);
    margin-bottom: 12px;
    padding: 10px 15px;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: background 0.3s ease;
  }

  .sidebar a:hover {
    background: rgba(255, 255, 255, 0.3);
  }

  /* Main content */
  .main {
    margin-left: 250px;
    padding: 30px;
    flex: 1;
    animation: fadeIn 1s ease-in-out;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }


  h1 {
    text-align: center;
    margin-bottom: 40px;
    color: #3b0000;
  }

  .dashboard-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
  }

  .card {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
    border:2px solid  rgb(63,0,0);

  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
  }

  .card .icon {
    font-size: 35px;
    margin-bottom: 15px;
    color: #8B0000;
  }

  .card h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #333;
  }

  .card p {
    font-size: 14px;
    color: #666;
  }

  /* Optional animation */
  @keyframes pop-in {
    0% {
      transform: scale(0.95);
      opacity: 0;
    }
    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

  .card {
    animation: pop-in 0.6s ease forwards;
  }

  .card:nth-child(1) { animation-delay: 0.1s; }
  .card:nth-child(2) { animation-delay: 0.2s; }
  .card:nth-child(3) { animation-delay: 0.3s; }
  .card:nth-child(4) { animation-delay: 0.4s; }
  .footer{
    /* background-color:black; */
  }
  .main_links {
    height: 670px;
    overflow-y: scroll;
    padding: 10px;
    scrollbar-width: none;
    -ms-overflow-style: none;
  }

  .main_links::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
  }
</style>
<!-- background-color: rgb(63,0,0); -->
<body>

    <?php
    if (empty($_SESSION['user_id']) && empty($_SESSION['logged_in'])) {
      header('Location: login.php');
    }
    if ($_SESSION['role'] != 1) {
      header('Location: login.php');
    }

      $db = new Query();

      $datas = $db->selectAll('users');

      if ($_POST) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        if (isset($_POST['role'])) {
          $role = 1;
        }else {
          $role = 0;
        }
       $db->user_add_page($name,$email,$phone,$password,$address,$role);
      }
     ?>

     <div class="sidebar">
       <h2 class="ms-3">ThaeInnGu</h2>
       <strong class="ms-4">Admin-Dashboard</strong>
       <hr style="margin: 15px 0;">
       <div class="scroll_hidden_div">
       <div class="main_links mt-4">
         <a href="#"><span>🏠</span> Home</a>
         <a href="user_page.php"><span>👥</span> Users</a>
         <a href="forums_page.php"><span>🗨️</span> Forums</a>
         <a href="logout.php" onclick="return confirm('Are you sure you want to logout?');"><span>🔓</span> Logout</a>
       </div>
     </div>
    </div>



    <div class="" style="background-color:rgb(63,0,0); width:1510px; height:40px; margin-left:210px;">

      <div class="d-flex ms-5">
        <p href="#" class="text-white" style="margin-top:11px; margin-left:20px;"><?php echo $_SESSION['username'];?></p>

        <svg style="color:white; margin-top:12px; margin-left:600px;" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-alarmp" viewBox="0 0 16 16">
          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z"/>
          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1"/>
        </svg>
        <div id="clock" class="" style="margin-top:3px; font-size:17px;">00:00:00 AM</div>
      </div>




      <script>
          function updateClock() {
              const now = new Date();
              const myanmarTime = now.toLocaleTimeString('en-US', {
                  timeZone: 'Asia/Yangon',
                  hour: 'numeric',
                  minute: '2-digit',
                  second: '2-digit',
                  hour12: true
              });

              document.getElementById('clock').textContent = myanmarTime;
          }

          setInterval(updateClock, 1000);
          updateClock(); // Initial display
      </script>
    </div>



    <div class="" style="margin-top:130px; margin-left:-58%;">


        <h1>Welcome to Admin Dashboard</h1>

        <div class="dashboard-cards">
          <div class="card">
            <div class="icon">👥</div>
            <h3>Total Users</h3>
            <p>1523 Registered Users</p>
          </div>

          <div class="card">
            <div class="icon">📝</div>
            <h3>New Signups</h3>
            <p>36 users joined today</p>
          </div>

          <div class="card">
            <div class="icon">📈</div>
            <h3>Traffic</h3>
            <p>8,745 visits this week</p>
          </div>

          <div class="card">
            <div class="icon">⚙️</div>
            <h3>System Status</h3>
            <p>All systems operational</p>
          </div>
        </div>
    </div>


    <div class="" style="background-color:rgb(63,0,0); width:1500px; height:60px; margin-left:-1041px; margin-top:801px;">
      <div class="d-flex" style="padding-left:69px; padding-top:1%;">
        <p style="color:white;">2024 ThaeInnGu - Myanmar. All right reserved.</p>
        <p style="color:white; padding-left:883px;">Design By</p>
        <a href="https://protechmm.com/" style="padding-left:1%;">ProTech</a>
      </div>
    </div>
</body>
</html>
