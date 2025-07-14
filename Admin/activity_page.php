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
  <script src="app.js" charset="utf-8"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link href='custom.css' rel='stylesheet' type='text/css'>
  <script src="app.js" charset="utf-8"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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


  .create_btn{
    border:none;
    background-color: rgb(63,0,0);
    color:white;
    width:190px;
    padding:10px;
    margin-left:80%;
    margin-top:-64px;
    font-weight: bold;
    border:2px solid  rgb(63,0,0);
    transition:0.5s;
  }
  .create_btn:hover{
    background:none;
    border:2px solid  rgb(63,0,0);
    color:rgb(63,0,0);
  }

</style>
<body>

    <?php
    if (empty($_SESSION['user_id']) && empty($_SESSION['logged_in'])) {
      header('Location: login.php');
    }
    if ($_SESSION['role'] != 1) {
      header('Location: login.php');
    }



      $db = new Query();

      $datas = $db->selectAll('activity');

      if ($_POST) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];

        $activity_result = $db->admin_activity_add($title,$description,$image);
      }


     ?>

     <div class="sidebar">
       <h2 class="ms-3">ThaeInnGu</h2>
       <strong class="ms-4">Admin-Dashboard</strong>
       <hr style="margin: 15px 0;">
       <div class="scroll_hidden_div">
       <div class="main_links mt-4">
         <a href="dashboard.php"><span>🏠</span> Home</a>
         <a href="user_page.php"><span>👥</span> Users</a>
         <a href="forums_page.php"><span>🗨️</span> Forums</a>
         <a href="activity_page.php"><span>🔄</span> Activity</a>
         <a href="donator_page.php"><span>🌟</span> Donator Information</a>
         <a href="information_page.php"><span>📢</span> Information</a>
         <a href="logout.php" onclick="return confirm('Are you sure you want to logout?');"><span>🔓</span> Logout</a>
       </div>
     </div>
    </div>





  <div class="">

    <div class="" style="background-color:rgb(63,0,0); width:1500px; height:40px; margin-left:210px;">

      <div class="d-flex ms-5">
        <p href="#" class="text-white" style="margin-top:11px; margin-left:20px;"><?php echo $_SESSION['username']; ?></p>

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


    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"  style="width:650px; border:3px solid rgb(63,0,0); margin-top:15px;">
          <div class="modal-header">
            <h1 class="modal-title" id="staticBackdropLabel" style="font-size:30px; color:rgb(63,0,0);">Create New Activity</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form class="" action="" method="post"` enctype="multipart/form-data"`>

              <div class="m-3 floating mt-2">
                <label for="" style="font-size:18px;">Title</label><span style="color:red;" class="ms-2"><?php echo empty($nameError) ? '' : '*'.$nameError; ?></span>
                <input type="text" name="title" placeholder="Enter Your Title" class="mt-2 input form-control" style="height:50px; border:2px solid rgb(63,0,0);">
              </div>

            <div class="m-3 floating mt-2">
              <label for="" style="font-size:18px;">Description</label><span style="color:red;" class="ms-2"><?php echo empty($nameError) ? '' : '*'.$nameError; ?></span>
              <textarea type="text" name="description" rows="8" cols="20" placeholder="Enter Your Description" class="mt-2 input form-control" style="border:2px solid rgb(63,0,0);"></textarea>
            </div>

            <div class="m-3 floating">
              <label for="" style="font-size:18px;">Image</label><span style="color:red;" class="ms-2"><?php echo empty($nameError) ? '' : '*'.$nameError; ?></span>
              <input type="file" name="image" value="" placeholder="Enter Your Image" class="mt-2 input form-control" style="height:50px; border:2px solid rgb(63,0,0);">
            </div>
            <div class="ms-3 me-3 mb-3 floating mt-4">
              <button type="submit" name="add_btn" class="add_btn">Add Activity</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-6 mt-3">
        <div class="header" style="font-size:25px; margin-left:270px; margin-top:20px; width:;">Activity-Listening</div>
      </div>
      <div class="col-4 mt-5">
        <button type="button" name="button" class="create_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-left:80%;">Create New Activity</button>
      </div>
    </div>

    <div class="container" style="margin-top:40px;">
      <table class="table table-hover" style="margin-left:70px; width:95%;">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Description</th>
      <th>image</th>
      <th>Create_at</th>
      <th>Active</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($datas) {
        $id = 1;
        foreach ($datas as $value) {
     ?>
    <tr>
      <td><?php echo $id;?></td>
      <td><?php echo $value['title']; ?></td>
      <td><?php echo $value['description']; ?></td>
      <td><img src="activityimage/<?php echo $value['image'];?>" style="width:150px;"></td>
      <td><?php echo $value['created_at'];?></td>
      <td>
        <a href="activity_update.php?id=<?php echo $value['id'];?>" type="button" name="button" class="update">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
          </svg>
        </a>
        <a href="activity_delete.php?id=<?php echo $value['id'];?>" type="button" name="button" class="delete" onclick="return confirm('Are you sure you want to delete this item?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
          </svg>
        </a>
      </td>
    </tr>
    <?php
      $id++;
      }
    }
     ?>
  </tbody>
</table>
    </div>


  </div>

  <script>
    setTimeout(() => {
      document.getElementById('users').textContent = "3,456";
      document.getElementById('sales').textContent = "$123,000";
      document.getElementById('orders').textContent = "812";
    }, 600);
  </script>

</body>
</html>
