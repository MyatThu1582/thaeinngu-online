<?php include '../navbar.php'; ?>
<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
    <h2 class="mt-5 pt-0">တရားတော်များ</h2>
    <a href="../index.php" class="link text-brown">Home</a>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="tayardaw.php" class="link text-brown">တရားတော်များ</a>
  </div>
</div>
<div class="container my-5">
  <div class="row g-4">
    
    <!-- Video Section -->
    <div class="col-lg-6">
      <div class="p-4 bg-white rounded-4 shadow-sm h-100 tayardawcontainer">
        <h3 class="mb-4 text-brown">📺 တရားတော် ဗီဒီယိုများ</h3>
        <?php 
          $video_datas = [
            [
              'name' => 'Facebook 269560251844372 (720p)',
              'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
            ],
            [
              'name' => 'Facebook 269560251844372 (720p)',
              'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
            ],
          ];
          $id = 1;
          foreach($video_datas as $video){
        ?>
        <div class="mb-4 p-3 bg-light">
          <div class="mb-2 fw-semibold text-brown d-flex align-items-center">
            <?php echo $id . ". " . $video['name']; ?>
          </div>
          <video src="<?php echo $video['src']; ?>" class="custom-video mt-2" controls></video>
        </div>
        <?php $id++; } ?>
        <a href="videos.php" class="btn btn-default bg-brown viewmorebtn float-end" type="button">
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
            ['name' => '003.အရှုဈာန်သက်သက်ရှုကွက်', 'src' => 'https://ia600709.us.archive.org/4/items/003.f/003.%E1%80%A1%E1%80%9B%E1%82%88%E1%80%85%E1%80%BA%E1%80%AC%E1%80%94%E1%80%B9%E1%80%9E%E1%80%80%E1%80%B9%E1%80%9E%E1%80%80%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80f.mp3'],
            ['name' => '004.မှော်ဘီရှုကွက်', 'src' => 'https://ia600709.us.archive.org/12/items/004._20250423/004.%E1%80%B1%E1%80%99%E1%80%BD%E1%80%AC%E1%80%B9%E1%80%98%E1%80%AE%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
            ['name' => '005.မြောက်ဥက္ကလာရှုကွက်', 'src' => 'https://ia801705.us.archive.org/32/items/005._20250423/005.%E1%80%B1%E1%80%BB%E1%80%99%E1%80%AC%E1%80%80%E1%80%B9%E1%80%A5%E1%80%80%E1%81%A0%E1%80%9C%E1%80%AC%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
            // ['name' => '006.ဝေဒနာရှုကွက်', 'src' => 'https://ia801801.us.archive.org/12/items/006._20250423/006.%E1%80%B1%E1%80%9D%E1%80%92%E1%80%94%E1%80%AC%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
            // ['name' => '007.တက္ကသိုလ်ရှုကွက်', 'src' => 'https://ia600706.us.archive.org/0/items/007._20250423/007.%E1%80%90%E1%80%80%E1%81%A0%E1%80%9E%E1%80%AD%E1%80%AF%E1%80%9C%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
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
        <a href="audios.php" class="btn btn-default mt-5 bg-brown viewmorebtn float-end" type="button">
          View All Audios
        </a>
      </div>
    </div>


  </div>
</div>
<br>
<script>
  let currentAudio = null;

  document.addEventListener('play', function(e){
  const mediaElements = document.querySelectorAll('audio, video');

  mediaElements.forEach((el) => {
    if (el !== e.target) {
      el.pause();
    }
  });
}, true); // useCapture: true


  document.querySelectorAll('audio').forEach((audio) => {
    audio.addEventListener('play', () => {
      // Pause any other playing audio
      if (currentAudio && currentAudio !== audio) {
        currentAudio.pause();
      }
      currentAudio = audio;
    });

    // Reset currentAudio when one ends or is paused manually
    audio.addEventListener('pause', () => {
      if (currentAudio === audio) {
        currentAudio = null;
      }
    });

    audio.addEventListener('ended', () => {
      if (currentAudio === audio) {
        currentAudio = null;
      }
    });
  });
</script>
<?php include '../footer.php'; ?>
