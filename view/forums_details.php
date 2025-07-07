<?php include '../navbar.php'; ?>
<?php include '../Controllers/query.ctr.php'; ?>
<?php //include '../config/config.php'; ?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
  <h2 class="mt-5 pt-0">Forums-Details</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="announcement.php" class="link text-brown">Forums-Details</a>
  </div>
</div>


<?php

  $db = new Query();

  $datas = $db->select('forums',$_GET['id']);
  $cmResult = $db->forums_select_data($_GET['id']);
  $auResult = $db->auResult();



  if ($_POST) {
    if (empty($_POST['comment'])) {
      $commentError = 'Comment is empty';
    }else {
      $db->add_comment($_POST['comment']);
    }
  }
 ?>
  <div class="container mt-5 pt-5 nopadding">
    <h3>Forums-Details</h3>
    <p class="forums_underline"></p>
      <!-- <div class="" style="margin-top:-80px; margin-left:89%; margin-bottom:50px;">
        <button type="button" name="button" class="forums_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Forums</button>
      </div> -->

    <div class="forums_details_card" style="margin-top:100px;">
      <div class="row">
        <div class="">
          <div class="">
            <div class="p-4">
              <div class="d-flex">
                <p style="font-size:24px; color:rgb(63,0,0); width:20%;"><u><b><?php echo $datas['title']; ?></b></u></p>
                <svg style="margin-left:60%; margin-top:10px; color:rgb(63,0,0);" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-plus" viewBox="0 0 16 16">
                  <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                </svg>
                <p style="margin-top:10px; margin-left:5px; color:rgb(63,0,0);"><?php echo $datas['created_at']; ?></p>
              </div>
              <p>- Kaung Khant Zayar</p>
              <p class="mt-4 ps-4" style="width:100%;"><?php echo $datas['description']; ?></p>
              <div class="" style="padding-top:15px;">
                <hr>
              </div>
            </div>
          </div>
        </div>

        <div class="" style="width:200%; margin-left:5%;">
          <p style="font-size:25px; color:rgb(63,0,0);" class="ps-4">Comment</p>

        <?php
            if (!empty($cmResult)) {
            ?>
          <div class="card">
            <div class="card-content">
              <?php
                foreach ($cmResult as $key => $value) {
                  $authorId = $value['author_id'];
                  $result = $db->select_user_table('users', $authorId);
                ?>

                <div class="d-flex">
                  <div class="item">
                    <div class=""></div>
                    <div class="ms-1"><b><?php echo $result['name']?></b></div>
                    <div style="margin-left:14px; margin-top:-30px; padding-top:30px;"><?php echo $value['content'];?></div>


                    <div class="">
                    <div style="padding-left:87%;  margin-top:-28px;">
                      <svg style="margin-top:-3px;" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-stopwatch" viewBox="0 0 16 16">
                        <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5z"/>
                        <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64l.012-.013.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5M8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3"/>
                      </svg>
                      <?php echo date("h:i:s", strtotime($value['created_at']));?>
                        <?php
                         if ($_SESSION['user_id'] == $authorId) {
                           ?>
                           <a href="comment_delete.php?id=<?php echo $value['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');">
                             <svg style="color:#ffbf00; margin-left:10px;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                               <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                               <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                             </svg></a>
                           <a href="comment_delete.php?id=<?php echo $value['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');"><svg style="color:red;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash-fill ms-2" viewBox="0 0 16 16">
                             <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                           </svg></a>
                         <?php
                         }
                         ?>
                       </div>
                     </div>
                  </div>
                </div>

                <?php
               }
                 ?>
            </div>
          </div>
          <?php
         }
           ?>


        <form class="" action="" method="post">
          <div class="" style="padding-top:10px; padding-bottom:30px; margin-left:20px;">
            <?php
              if (empty($_SESSION['user_id']) || empty($_SESSION['username'])) {
                ?>
                <span style="color:red;"><?php //echo empty($commentError) ? '' : '*'.$commentError; ?></span>
              <input type="text" name="comment" value="" class="comment_input" placeholder="Please log in and write a comment." disabled style="background:none;">
                  <span class="ms-3">
                    <a href="../login.php"><button type="submit" name="button" class="send_comment_btn">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
                      </svg>
                    </button></a>
                  </span>
                <?php
              }else {
                ?>
                <span style="color:red;"><?php echo empty($commentError) ? '' : '*'.$commentError; ?></span>
              <input type="text" name="comment" value="" class="comment_input" placeholder="Send Comment ...">
                  <span class="ms-3">
                    <button type="submit" name="button" class="send_comment_btn">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
                      </svg>
                    </button>
                  </span>
                <?php
              }
             ?>
          </div>
        </form>

        <div class="ps-4 pb-4">
          <a href="forums.php"><button type="button" name="button" class="back_forums">Back Forums</button></a>
        </div>

        </div>

      </div>
    </div>
  </div>

  <br><br><br><br><br><br>

<?php include '../footer.php'; ?>
