<?php include 'navbar.php'; ?>
<!-- first -->
<div class="home d-flex ps-5">
  <div class="col-3 mt-5 ms-5 ps-5 sayardaw">
    <div class="sayardawimg mt-4">
      <img src="/sayardaw/4.png" alt="" width="100%" class="">
    </div><br>
    <span class="bold name">မူလသဲအင်းဂူဆရာတော်ဘုရားကြီး</span>
    <span class="text-brown bold name">ဦးဥက္ကဌ</span>
  </div>
  <div class="col-6 mt-5 ms-5 ps-5 introtextcontainer">
    <span class="introtext1">သဲအင်း ယောဂီ </span><span class="introtext2">" ကိုယ့်စိတ်ကိုယ်စစ် "</span>
  </div>
</div>
<!-- first -->

<!-- bio -->
<div class="container mt-5 pt-5 biotitle">
  <h3>သဲအင်းဂူဆရာတော်ဘုရားကြီး၏ထေရုပ္ပတ္တိအကျဥ်းချုပ်</h3>
  <p class="title-underline"></p>
</div>
<div class="container biovideo">
  <div class="row">
    <div class="col-6 full">
      <div class="nopadding">
        <video src="image/video.mp4" class="bio_video" controls></video>
      </div>
    </div>
    <div class="col-6 full biotext">
      <iframe src="view/shortbio.php" frameborder="1" class="biocontainer"></iframe>
    </div>
  </div>
  <a href="view/bio.php" class="btn btn-default bg-brown viewmorebtn mt-4 float-end" type="button">See More</a>
</div>
<!-- bio -->

<!-- tayardaw -->
<div class="container mt-5 pt-5 introtayardaw">
  <h3>တရားတော်များနာယူနိုင်ရန်</h3>
  <p class="title-underline"></p>
</div>
<div class="container biovideo">
  <div class="row">
    <!-- Video Section -->
    <div class="col-lg-6">
      <div class="p-4 bg-white rounded-4 shadow-sm h-100 tayardawcontainer">
        <h3 class="mb-4 text-brown">📺 တရားတော် ဗီဒီယိုများ</h3>
        <div class="row">
        <?php 
          $video_datas = [
            [
              'name' => '269560251844372 (720p)',
              'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
            ],
            [
              'name' => '269560251844372 (720p)',
              'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
            ],
          ];
          $id = 1;
          foreach($video_datas as $video){
        ?>
        <div class="col-6 mb-4 p-3 bg-light text-center">
          <div class="mb-2 fw-semibold text-brown">
            <?php echo $id . ". " . $video['name']; ?>
          </div>
          <video src="<?php echo $video['src']; ?>" class="custom-video mt-2" controls></video>
        </div>
        <?php $id++; } ?>
        </div>
        <a href="view/videos.php" class="btn btn-default bg-brown viewmorebtn float-end" type="button">
          View All Videos
        </a>
      </div>
    </div>


    <!-- Audio Section -->
    <div class="col-lg-6">
      <div class="p-4 bg-white rounded-4 shadow-sm h-100 tayardawcontainer">
        <h3 class="mb-4 text-brown">🎧 တရားတော် အသံဖိုင်များ</h3>
        <?php 
          $audio_datas = [
            ['name' => '001.ပရိကံ', 'src' => 'https://ia800206.us.archive.org/14/items/001._20250423/001.%E1%80%95%E1%80%9B%E1%80%AD%E1%80%80%E1%80%B6.mp3'],
            ['name' => '002.ဝေဒနာ တစ်လုံးတည်းသိ', 'src' => 'https://ia600705.us.archive.org/21/items/mp-3-160-k_20250423/_%E1%80%9E%E1%80%B2%E1%80%A1%E1%80%84%E1%80%BA%E1%80%B8%E1%80%82%E1%80%B0%E1%80%86%E1%80%9B%E1%80%AC%E1%80%90%E1%80%B1%E1%80%AC%E1%80%BA%E1%80%98%E1%80%AF%E1%80%9B%E1%80%AC%E1%80%B8%E1%80%80%E1%80%BC%E1%80%AE%E1%80%B8%20%E1%80%9D%E1%80%B1%E1%80%92%E1%80%94%E1%80%AC%20%E1%80%90%E1%80%85%E1%80%BA%E1%80%9C%E1%80%AF%E1%80%B6%E1%80%B8%E1%80%90%E1%80%8A%E1%80%BA%E1%80%B8%E1%80%9E%E1%80%AD%E1%80%A1%E1%80%9C%E1%80%AF%E1%80%95%E1%80%BA%E1%80%95%E1%80%B1%E1%80%B8%E1%80%90%E1%80%9B%E1%80%AC%E1%80%B8%E1%80%90%E1%80%B1%E1%80%AC%E1%80%BA------------%28MP3_160K%29.mp3'],
          ];
          $id = 1;
          foreach($audio_datas as $audio){
        ?>
        <div class="mb-4 p-3 border rounded-3 bg-light">
          <div class="mb-2 fw-semibold text-brown d-flex align-items-center">
            <?php echo $audio['name']; ?>
          </div>
          <audio src="<?php echo $audio['src']; ?>" class="custom-audio" controls></audio>
        </div>
        <?php $id++; } ?>
        <a href="view/audios.php" class="btn btn-default mt-3 bg-brown viewmorebtn float-end" type="button">
          View All Audios
        </a>
      </div>
    </div>
  </div>
</div>
<!-- tayardaw -->

<!-- intro -->
<div class="container mt-5 pt-5 ps-5 pe-5 mb-5 row introcontainer" style="background-color: rgb(241, 241, 241); border-radius: 20px; box-shadow: 0px 9px 16px 0px rgba(94,0,0,0.3);">
  <div class="col-6 pe-5 full nopadding">
    <div class="">
    <h3>Introduction To Thaeinngu</h3>
    <p class="title-underline"></p>
      <h5 class="text-brown bold myanmar-text mt-2">သဲအင်းဂူဆိုတာဘာလဲ ?</h5>
      <p style="text-align: justify;">ရန်ကုန်မြို့၏အပြင်ဘက်ရှိ မှော်ဘီမြို့နယ် အေးချမ်းသာယာမြို့နယ်တွင် တည်ရှိသော သဲအင်းဂူကျောင်းတိုက်သည် မြန်မာနိုင်ငံတွင် အနုမောဒနာပြု ဝိပဿနာကျင့်စဉ်နှင့် ဓမ္မဝိနယ၏ မီးရှူးတန်ဆောင်တစ်ခုဖြစ်သည်။ ဆရာတော် ဦးဥက္ခဌ၏ လမ်းညွှန်မှုဖြင့် တည်ထောင်ထားသော ....</p>
    </div>
    <div class="mt-4">
      <h5 class="text-brown bold myanmar-text">ဘယ်မှာရှိသလဲ ?</h5>
      <p style="text-align: justify;">သဲအင်းဂူကျောင်းတိုက်သည် မြန်မာနိုင်ငံ မြောက်ဘက် မှော်ဘီမြို့နယ်တွင် တည်ရှိသည်။ ဤနေရာသည် ၎င်း၏ အေးချမ်းသာယာသော ကျေးလက်လေထုကြောင့် ....</p>
    </div>
    <div class="mt-4">
      <h5 class="text-brown bold myanmar-text">ဘယ်သူ တည်ထောင်ခဲ့သလဲ ?</h5>
      <p style="text-align: justify;">သဲအင်းဂူဆရာတော် ဦးဥက္ခဌ (၁၉၁၃-၁၉၇၃) သည် သဲအင်းဂူဝိပဿနာ အစဉ်အလာကို တည်ထောင်သူဖြစ်ပြီး မြန်မာလူမျိုး အလွန်လေးစားထိုက်သူဖြစ်သည်။ မယိမ်းမယိုင်သော စည်းကမ်းနှင့် လေးနက်သော သဘောဖြင့် လူသိများသော ဆရာတော် ဦးဥက္ခဌသည် ပြင်းပြသော ....</p>
    </div>
    <a href="view/intro.php" class="btn btn-default mt-3 bg-brown viewmorebtn" type="button">See More</a>
  </div>
  <div class="col-6 mt-5 pt-5 d-flex full nopadding">
    <div class="col-6">
      <img src="/image/intro3.jpg" alt="" width="95%" height="80%" class="introimg">
    </div>
    <div class="col-6">
      <img src="/image/introduction.jpg" alt="" width="95%" height="38.9%" class="mb-3 introimg">
      <img src="/image/speech.jpg" alt="" width="95%" height="38.9%" class="introimg">
    </div>
  </div>
</div>
<!-- intro -->

<!-- speech -->
<div class="speech">
  <div class="container pt-5">
    <div class="die">
      <h3>"လူသေရင်သေ မသေရင်ကိလေသာသေ"</h3>
    </div>
    <div class="mt-4 float-end me-5 die2">
      <h6>ကျေးဇူးတော်ရှင်မူလသဲအင်းဂူဆရာတော်</h6>
    </div>
  </div>
</div>
<!-- speech -->
<!-- activity -->
<div class="container mt-5 mb-5 pb-5 pt-5">
  <div class="activitytitle">
    <h3>Our Latest Announcements</h3>
    <p class="title-underline"></p>
  </div>
  <div class="row activitycontainer">
    <div class="col-4 p-3 full">
      <div class="activity">
          <img src="image/announcement2.jpg" alt="" class="actimg" style="object-fit:cover;">
          <div class="text-light" style="margin-top:-180px; margin-left:20px;">
            <div class="d-flex" style="align-items: flex-end; height:150px;">
              <span style="font-size:20px; display: block;">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</span>
            </div>
            <span style="font-size:15px;">12 days ago</span>
          </div>
          <div class="p-3">
            <span class="bold" style="font-size:15px;">ကထိန်သင်္ဃန်း ကပ်လှူခြင်း</span>
            <a href="view/announcement_detail.php?id=" class="text-brown d-block link" style="text-align:right;">More Details</a>
          </div>
      </div>
    </div>
    <div class="col-4 p-3 full">
      <div class="activity">
        <img src="image/announcement3.jpg" alt="" class="actimg" width="100%" height="70%" style="object-fit:cover;">
        <div class="text-light" style="margin-top:-130px; margin-left:20px;">
          <div class="d-flex" style="height:100px; align-items: flex-end;">
            <span style="font-size:20px;">isicing elit, sed do eiusmod tempor incididunt ut labore et dolore</span>
          </div>
          <span style="font-size:15px;">28 days ago</span>
        </div>
        <div class="p-3">
          <span class="bold" style="font-size:15px;">ဘုရားထီးတော်တင်ခြင်းနှင့် ရေစက်ချအမျှဝေခြင်း</span>
          <a href="view/announcement_detail.php?id=" class="text-brown d-block link" style="text-align:right;">More Details</a>
        </div>
      </div>
    </div>
    <div class="col-4 p-3 full">
      <div class="activity">
        <img src="image/activity.jpg" alt="" class="actimg" width="100%" height="70%" style="object-fit:cover;">
        <div class="text-light" style="margin-top:-130px; margin-left:20px;">
          <div class="d-flex" style="height:100px; align-items: flex-end;">
            <span style="font-size:20px;">lorefn kfsdkff isicing elit, sed do eiusmod tempor after  incididunt ut labore et dolore</span>
          </div>
          <span style="font-size:15px;">1 month & 3 days ago</span>
        </div>
        <div class="p-3">
          <span class="bold" style="font-size:15px;">သင်္ကြန်တွင်း ၁၀ရက်တရားစခန်းဖွင့်လှစ်ခြင်း</span>
          <a href="view/announcement_detail.php?id=" class="text-brown d-block link" style="text-align:right;">More Details</a>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5">
    <a href="view/activity.php" class="btn text-brown float-end" style="font-size:15px; padding:10px;">Check More Activities >></a>
  </div>
</div>
<!-- activity -->
<?php include 'footer.php'; ?>
