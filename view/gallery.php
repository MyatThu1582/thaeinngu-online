<?php
session_start();
include '../navbar.php';
 ?>
<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
  <h2 class="mt-5 pt-0">Gallery</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="gallery.php" class="link text-brown">Gallery</a>
  </div>
</div>

<?php
  $buinding = [
      [
        'name' => 'အရိယာ ဓမ္မဗိမာန်တော်ကြီး',
        'src' => '../image/introduction.jpg',
      ],
      [
        'name' => 'စံကျောင်းတော်ကြီး',
        'src' => '../image/activity5.jpg',
      ],
      [
        'name' => 'ဆွမ်းစားဆောင်',
        'src' => '../image/gallery.jpg',
      ],
      [
        'name' => 'မူလသဲအင်း စံကျောင်းတော်',
        'src' => '../image/gallery2.jpg',
      ],
      [
        'name' => 'ဗိမာန်တော် အတွင်းပိုင်း',
        'src' => '../image/activity.jpg',
      ],
      [
        'name' => 'အထင်ကရ ညောင်ပင်ကြီး',
        'src' => '../image/tree.jpg',
      ],
      [
        'name' => 'ကျောင်းတိုက်အတွင်းရှိ ရေကန်',
        'src' => '../image/lake.jpg',
      ],
      [
        'name' => 'မူလစံကျောင်းတော် အတွင်းပိုင်း',
        'src' => '../image/inner.jpg',
      ],
  ]
?>

<?php
  $house = [
      [
        'name' => 'ဇရပ်များ',
        'src' => '../image/tngu_house.jpg',
      ],
      [
        'name' => 'ဇရပ်များ',
        'src' => '../image/tngu_house2.jpg',
      ],
      [
        'name' => 'ဇရပ်များ',
        'src' => '../image/tngu_house3.jpg',
      ],
      [
        'name' => 'ဇရပ်များ',
        'src' => '../image/tngu_house4.jpg',
      ],
      [
        'name' => 'ဇရပ်များ',
        'src' => '../image/tngu_house5.jpg',
      ],
      [
        'name' => 'ဇရပ်များ',
        'src' => '../image/tngu_house6.jpg',
      ],
  ]
?>

<div class="container mt-5 pt-5">
  <div class="d-flex">
    <div class="col-10 me-3 gallerytitle">
      <h3>သဲအင်းဂူကျောင်းတိုက်</h3>
      <p class="title-underline"></p>
    </div>
  </div>

  <div class="row">
    <?php $id = 1; ?>
    <?php foreach ($buinding as $buinding_image): ?>
      <div class="col-3">
        <div class="gallery_card mt-4"  data-bs-toggle="modal" data-bs-target="#example<?= $id; ?>Modal">
          <img src="<?php echo $buinding_image['src'];?>" alt="Image" class="gellery_image_photo">
          <div class="overlay">
            <h3 class="image-text"><?php echo $buinding_image['name']; ?></h3>
          </div>
        </div>
      </div>

      <div class="modal fade modal-lg h-70 mt-3 gallerymodal" id="example<?= $id; ?>Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
                <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="<?php echo $buinding_image['src']; ?>" alt="" width="100%">
              </div>
            </div>
          </div>
        </div>
      <?php
      $id++;
        endforeach;
    ?>
  </div>

  <div class="ms-5 mt-4 float-end">
    <a href="" class="text-brown gallery_see_more_btn">See more images</a>
  </div>
  <br>
  <br>
</div>


<div class="container mt-5 pt-5">
  <div class="d-flex">
    <div class="col-10 me-3 gallerytitle">
      <h3>သဲအင်းဂူ(၄)လမ်းအတွင်းရှိ ဇရပ်များ</h3>
      <p class="title-underline"></p>
    </div>
  </div>

  <div class="row">
    <?php $id = 1; ?>
    <?php foreach ($house as $house_image): ?>
      <div class="col-3">
        <div class="gallery_card mt-4"  data-bs-toggle="modal" data-bs-target="#example<?= $id; ?>Modal1">
          <img src="<?php echo $house_image['src'];?>" alt="Image">
          <div class="overlay">
            <h3 class="image-text"><?php echo $house_image['name']; ?></h3>
          </div>
        </div>
      </div>

      <div class="modal fade modal-lg h-70 mt-3 gallerymodal" id="example<?= $id; ?>Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
                <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="<?php echo $house_image['src']; ?>" alt="" width="100%">
              </div>
            </div>
          </div>
        </div>
      <?php
      $id++;
        endforeach;
    ?>
  </div>

  <div class="ms-5 mt-4 float-end">
    <a href="" class="text-brown gallery_see_more_btn">See more images</a>
  </div>
  <br>
  <br>
</div>


<br><br><br><br>
<?php include '../footer.php'; ?>
