<?php include '../Controllers/query.ctr.php';?>
<?php include '../navbar.php'; ?>

<?php
      $db = new Query();

      $datas = $db->select('activity', $_GET['id']);
 ?>
<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
    <h2 class="mt-5 pt-0">Activity Details</h2>
    <a href="../index.php" class="link text-brown">Home</a>
    <svg class="bi bi-arrow-right-short text-brown" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="activity.php" class="link text-brown">Activities</a>
    <svg class="bi bi-arrow-right-short text-brown" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="activity_detail.php" class="link text-brown">Activities Details</a>
  </div>
</div>

<div class="container mt-5">

  <h3>Activity Details</h3>
  <p class="forums_underline" style="margin-bottom:120px;"></p>


  <div class="d-flex" style="">
    <img src="../Admin/activityimage/<?php echo $datas['image'];?>" alt="" width="390px" style="border-radius:5px; border:4px solid rgb(63,0,0);" class="activity_image">
    <div class="">
      <div class="d-flex" style="">
        <p class="ms-5" style="font-size:20px;"><b><?php echo $datas['title']; ?></b></p>
        <p class="date" style="margin-left:70%;"><b><?php echo $datas['created_at']; ?></b></p>
      </div>

      <p class="ms-5" style="text-align:justify;"><?php echo $datas['description']; ?></p>
      <a href="activity.php"><button type="button" name="button" class="activity_back_btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
        </svg>Back
      </button></a>

    </div>
  </div>

</div>

<br><br><br>
<?php include '../footer.php'; ?>
