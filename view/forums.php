<?php include '../navbar.php'; ?>
<?php include '../Controllers/query.ctr.php'; ?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
  <h2 class="mt-5 pt-0">Forums</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="announcement.php" class="link text-brown">Forums</a>
  </div>
</div>


<?php
  $db = new Query();
  $datas = $db->selectAll('forums');

  if ($_POST) {
    if (empty($_POST['title']) || empty($_POST['description'])) {
      if (empty($_POST['title'])) {
        $titleError = 'Title is empty';
      }
      if (empty($_POST['description'])) {
        $descriptionError = 'Description is empty';
      }
    }else {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $db->Forums_create($title,$description);
    }
  }

 ?>


  <div class="container mt-5 pt-5 nopadding">
    <h3>Forums</h3>
    <?php
    if (empty($_SESSION['user_id']) || empty($_SESSION['username'])) {
      ?>
        <p class="forums_underline" style="margin-bottom:120px;"></p>
      <?php
    }else {
      ?>
      <p class="forums_underline" style="margin-bottom:20px;"></p>
      <?php
    }
     ?>
      <div class="" style="margin-top:-80px; margin-left:89%; margin-bottom:50px;">
        <?php
          if (empty($_SESSION['user_id']) || empty($_SESSION['username'])) {
            ?>
            <a href=""><button type="button" name="button" class="forums_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="display:none;" >Create Forums</button></a>
            <?php
          }else {
            ?>
            <button type="button" name="button" class="forums_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Forums</button>
            <?php
          }
         ?>
      </div>


      <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top:90px; margin-left:-5%;">
        <div class="modal-dialog">
          <div class="modal-content"  style="width:650px; border:3px solid rgb(63,0,0); height:;">
            <div class="modal-header">
              <h1 class="modal-title" id="staticBackdropLabel" style="font-size:30px; color:rgb(63,0,0);">Create New Forums</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form class="" action="" method="post">

              <div class="m-3 floating mt-2">
                <label for="" style="font-size:18px;">Title</label><span style="color:red;" class="ms-2"><?php echo empty($titleError) ? '' : '*'.$titleError; ?></span>
                <input type="text" name="title" value="" placeholder="Enter Your Title" class="mt-2 input form-control" style="height:50px; border:2px solid rgb(63,0,0);">
              </div>

              <div class="ms-3 me-3 mt-2 floating">
                <label for="" style="font-size:18px;">Description</label><span style="color:red;" class="ms-2"><?php echo empty($descriptionError) ? '' : '*'.$descriptionError; ?></span>
                <textarea name="description" rows="3" cols="80" placeholder="Enter Your Description" class="input form-control mt-2" style=" border:2px solid rgb(63,0,0);"></textarea>
              </div>

              <div class="ms-3 me-3 mb-3 floating mt-4">
                <button type="submit" name="add_btn" class="add_btn">Add Forums</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>


  <?php
  foreach ($datas as $value) { ?>

    <div class="forum_card mt-4">
      <div class="p-4">
        <div class="d-flex">
          <p style="font-size:25px; color:rgb(63,0,0);"><u><b><?php echo $value['title']; ?></b></u></p>
          <svg style="margin-left:65%; margin-top:10px; color:rgb(63,0,0);" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-plus" viewBox="0 0 16 16">
            <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7"/>
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
          </svg>
          <p style="margin-top:10px; margin-left:1%; color:rgb(63,0,0);"><?php echo $value['created_at']; ?></p>
        </div>
        <p>- Kaung Khant Zayar</p>
        <p><?php echo $value['description']; ?></p>
        <div class="">
        <a href="forums_details.php?id=<?php echo $value['id'];?>"><button type="button" name="button" class="forums_details">Forums Details</button></a>
            <a href="#" style="margin-left:77%; color:#ffbf00;">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
          </a>
          <a href="forums_delete.php?id=<?php echo $value['id'];?>" class="ms-2" style="color:red;"  onclick="return confirm('Are you sure you want to delete this item?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
              <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <?php
  }
     ?>

  </div>

  <br><br><br><br><br><br><br><br>

<?php include '../footer.php'; ?>
