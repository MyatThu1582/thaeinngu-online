<?php include '../Controllers/query.ctr.php';?>
<?php include '../navbar.php'; ?>

<?php
      $db = new Query();

      $datas = $db->selectAll('activity');
 ?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
  <h2 class="mt-5 pt-0">Activities</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="activity.php" class="link text-brown">Activity</a>
  </div>
</div>

<!-- To Limit the length of the text on the image -->

<div class="container mt-5 pt-5">
  <div class="activitytitle">
    <h3>Our Latest Activities</h3>
    <p class="title-underline"></p>
  </div>
  <div class="row activitycontainer">
    <?php
    foreach ($datas as $value) {
      ?>
    <div class="col-4 p-3 full">
            <div class="activity">
                <img src="../Admin/activityimage/<?php echo $value['image'];?>" class="actimg" width="100%" height="70%" style="object-fit:cover;" >
                <div class="text-light" style="margin-top:-180px; margin-left:20px;">
                  <div class="d-flex" style="align-items: flex-end; height:150px;">
                    <span style="font-size:20px; display: block;"><?php echo $value['title']; ?></span>
                  </div>
                  <span style="font-size:15px;" class="date"><?php echo $value['created_at'];?></span>
                </div>
                <div class="p-3">
                  <span style="font-size:15px;"><?php echo substr($value['description'],0,110);?></span>
                  <a href="activity_detail.php?id=<?php echo $value['id'];?>" class="text-brown d-block link" style="text-align:right;">More Details</a>
                </div>
            </div>
        </div>
        <?php
      }
      ?>
    </div>
    </div>

<br><br><br>
<?php include '../footer.php'; ?>
