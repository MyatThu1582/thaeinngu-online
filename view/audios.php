<?php include '../navbar.php'; ?>

<?php
// Sample audio data array (you can load this from a database instead)
$audio_datas = [
    ['name' => '001.ပရိကံ', 'src' => 'https://ia800206.us.archive.org/14/items/001._20250423/001.%E1%80%95%E1%80%9B%E1%80%AD%E1%80%80%E1%80%B6.mp3'],
    ['name' => '002.ဝေဒနာ တစ်လုံးတည်းသိ', 'src' => 'https://ia600705.us.archive.org/21/items/mp-3-160-k_20250423/_%E1%80%9E%E1%80%B2%E1%80%A1%E1%80%84%E1%80%BA%E1%80%B8%E1%80%82%E1%80%B0%E1%80%86%E1%80%9B%E1%80%AC%E1%80%90%E1%80%B1%E1%80%AC%E1%80%BA%E1%80%98%E1%80%AF%E1%80%9B%E1%80%AC%E1%80%B8%E1%80%80%E1%80%BC%E1%80%AE%E1%80%B8%20%E1%80%9D%E1%80%B1%E1%80%92%E1%80%94%E1%80%AC%20%E1%80%90%E1%80%85%E1%80%BA%E1%80%9C%E1%80%AF%E1%80%B6%E1%80%B8%E1%80%90%E1%80%8A%E1%80%BA%E1%80%B8%E1%80%9E%E1%80%AD%E1%80%A1%E1%80%9C%E1%80%AF%E1%80%95%E1%80%BA%E1%80%95%E1%80%B1%E1%80%B8%E1%80%90%E1%80%9B%E1%80%AC%E1%80%B8%E1%80%90%E1%80%B1%E1%80%AC%E1%80%BA------------%28MP3_160K%29.mp3'],
    ['name' => '003.အရှုဈာန်သက်သက်ရှုကွက်', 'src' => 'https://ia600709.us.archive.org/4/items/003.f/003.%E1%80%A1%E1%80%9B%E1%82%88%E1%80%85%E1%80%BA%E1%80%AC%E1%80%94%E1%80%B9%E1%80%9E%E1%80%80%E1%80%B9%E1%80%9E%E1%80%80%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80f.mp3'],
    ['name' => '004.မှော်ဘီရှုကွက်', 'src' => 'https://ia600709.us.archive.org/12/items/004._20250423/004.%E1%80%B1%E1%80%99%E1%80%BD%E1%80%AC%E1%80%B9%E1%80%98%E1%80%AE%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '005.မြောက်ဥက္ကလာရှုကွက်', 'src' => 'https://ia801705.us.archive.org/32/items/005._20250423/005.%E1%80%B1%E1%80%BB%E1%80%99%E1%80%AC%E1%80%80%E1%80%B9%E1%80%A5%E1%80%80%E1%81%A0%E1%80%9C%E1%80%AC%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '006.ဝေဒနာရှုကွက်', 'src' => 'https://ia801801.us.archive.org/12/items/006._20250423/006.%E1%80%B1%E1%80%9D%E1%80%92%E1%80%94%E1%80%AC%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '007.တက္ကသိုလ်ရှုကွက်', 'src' => 'https://ia600706.us.archive.org/0/items/007._20250423/007.%E1%80%90%E1%80%80%E1%81%A0%E1%80%9E%E1%80%AD%E1%80%AF%E1%80%9C%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '008.တောင်ကြီးရှုကွက်', 'src' => 'https://ia801605.us.archive.org/26/items/008._20250423/008.%E1%80%B1%E1%80%90%E1%80%AC%E1%80%84%E1%80%B9%E1%82%80%E1%80%80%E1%80%AE%E1%80%B8%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '009.သဲအင်းရှုကွက်', 'src' => 'https://ia600709.us.archive.org/18/items/009._20250423/009.%E1%80%9E%E1%80%B2%E1%80%A1%E1%80%84%E1%80%B9%E1%80%B8%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '010.နှင်းပုလဲရှုကွက်', 'src' => 'https://ia600206.us.archive.org/15/items/010._20250423/010.%E1%82%8F%E1%80%BD%E1%80%84%E1%80%B9%E1%80%B8%E1%80%95%E1%80%AF%E1%80%9C%E1%80%B2%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],

    ['name' => '011.အပယ်ပိတ်ရှုကွက်', 'src' => 'https://ia800707.us.archive.org/32/items/011._20250423/011.%E1%80%A1%E1%80%95%E1%80%9A%E1%80%B9%E1%80%95%E1%80%AD%E1%80%90%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '012.တာမွေရှုကွက်', 'src' => 'https://ia600708.us.archive.org/29/items/012._20250423/012.%E1%80%90%E1%80%AC%E1%80%B1%E1%80%99%E1%80%BC%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '013.မြေနီကုန်းရှုကွက်', 'src' => 'https://ia601905.us.archive.org/21/items/013._20250423/013.%E1%80%B1%E1%80%BB%E1%80%99%E1%80%94%E1%80%AE%E1%80%80%E1%80%AF%E1%80%94%E1%80%B9%E1%80%B8%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '014.ထားဝယ်ရှုကွက်', 'src' => 'https://ia801603.us.archive.org/19/items/014._20250423/014.%E1%80%91%E1%80%AC%E1%80%B8%E1%80%9D%E1%80%9A%E1%80%BA%E1%80%9B%E1%80%BE%E1%80%AF%E1%80%80%E1%80%BD%E1%80%80%E1%80%BA.mp3'],
    ['name' => '015.မော်လမြိုင်ရှုကွက်', 'src' => 'https://ia801905.us.archive.org/19/items/015._20250423/015.%E1%80%99%E1%80%B1%E1%80%AC%E1%80%BA%E1%80%9C%E1%80%99%E1%80%BC%E1%80%AD%E1%80%AF%E1%80%84%E1%80%BA%E1%80%9B%E1%80%BE%E1%80%AF%E1%80%80%E1%80%BD%E1%80%80%E1%80%BA.mp3'],
    ['name' => '016.အကာ နှင့် အနှစ်ရှုကွက်', 'src' => 'https://ia600704.us.archive.org/10/items/016._20250423/016.%E1%80%A1%E1%80%80%E1%80%AC%20%E1%80%94%E1%80%BE%E1%80%84%E1%80%B7%E1%80%BA%20%E1%80%A1%E1%80%94%E1%80%BE%E1%80%85%E1%80%BA%E1%80%9B%E1%80%BE%E1%80%AF%E1%80%80%E1%80%BD%E1%80%80%E1%80%BA.mp3'],
    ['name' => '017.ဝေဒနာနုပဿနာရှုကွက်', 'src' => 'https://ia600207.us.archive.org/23/items/017._20250423/017.%E1%80%9D%E1%80%B1%E1%80%92%E1%80%94%E1%80%AC%E1%80%94%E1%80%AF%E1%80%95%E1%80%BF%E1%80%94%E1%80%AC%E1%80%9B%E1%80%BE%E1%80%AF%E1%80%80%E1%80%BD%E1%80%80%E1%80%BA.mp3'],
    ['name' => '018.သင်္ကြန် အဓိဌာန်ရှုကွက်', 'src' => 'https://ia801508.us.archive.org/29/items/018._20250423/018.%E1%80%9E%E1%80%84%E1%80%BA%E1%80%B9%E1%80%80%E1%80%BC%E1%80%94%E1%80%BA%20%E1%80%A1%E1%80%93%E1%80%AD%E1%80%8C%E1%80%AC%E1%80%94%E1%80%BA%E1%80%9B%E1%80%BE%E1%80%AF%E1%80%80%E1%80%BD%E1%80%80%E1%80%BA.mp3'],
    ['name' => '019.တောင်တွင်းကြီး(၁)ရှုကွက်', 'src' => 'https://ia800704.us.archive.org/9/items/019._20250423/019.%E1%80%90%E1%80%B1%E1%80%AC%E1%80%84%E1%80%BA%E1%80%90%E1%80%BD%E1%80%84%E1%80%BA%E1%80%B8%E1%80%80%E1%80%BC%E1%80%AE%E1%80%B8%28%E1%81%81%29%E1%80%9B%E1%80%BE%E1%80%AF%E1%80%80%E1%80%BD%E1%80%80%E1%80%BA.mp3'],
    ['name' => '020.တောင်တွင်းကြီး(၂)ရှုကွက်', 'src' => 'https://ia800703.us.archive.org/12/items/020._20250423/020.%E1%80%90%E1%80%B1%E1%80%AC%E1%80%84%E1%80%BA%E1%80%90%E1%80%BD%E1%80%84%E1%80%BA%E1%80%B8%E1%80%80%E1%80%BC%E1%80%AE%E1%80%B8%28%E1%81%82%29%E1%80%9B%E1%80%BE%E1%80%AF%E1%80%80%E1%80%BD%E1%80%80%E1%80%BA.mp3'],

    ['name' => '021.ရုပ်၊နာမ်ဖြစ်ပျက် သဘာဝသစ္စာ', 'src' => 'https://ia801808.us.archive.org/30/items/021._20250423/021.%E1%80%9B%E1%80%AF%E1%80%95%E1%80%B9%E1%81%8A%E1%80%94%E1%80%AC%E1%80%99%E1%80%B9%E1%80%BB%E1%80%96%E1%80%85%E1%80%B9%E1%80%95%E1%80%BA%E1%80%80%E1%80%B9%20%E1%80%9E%E1%80%98%E1%80%AC%E1%80%9D%E1%80%9E%E1%80%85%E1%81%A5%E1%80%AC.mp3'],
    ['name' => '022.မိုးကောင်းရှုကွက်', 'src' => 'https://ia801404.us.archive.org/22/items/022._20250423/022.%E1%80%99%E1%80%AD%E1%80%AF%E1%80%B8%E1%80%B1%E1%80%80%E1%80%AC%E1%80%84%E1%80%B9%E1%80%B8%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '023.ဝိပဿနာယာနိကရှုကွက်', 'src' => 'https://ia800501.us.archive.org/33/items/023._20250423/023.%E1%80%9D%E1%80%AD%E1%80%95%E1%82%86%E1%80%94%E1%80%AC%E1%80%9A%E1%80%AC%E1%80%94%E1%80%AD%E1%80%80%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '024.ဓမ္မပဌာန်ရှုကွက်', 'src' => 'https://ia801708.us.archive.org/34/items/024._20250423/024.%E1%80%93%E1%80%99%E1%81%BC%E1%80%95%E1%80%8C%E1%80%AC%E1%80%94%E1%80%B9%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '025.မင်္ဂလာတောင်ညွှန့်ရှုကွက်', 'src' => 'https://ia801800.us.archive.org/17/items/025._20250423/025.%E1%80%99%E1%80%82%E1%81%A4%E1%80%9C%E1%80%AC%E1%80%B1%E1%80%90%E1%80%AC%E1%80%84%E1%80%B9%E1%80%8A%E1%82%8A%E1%80%94%E1%80%B9%E1%82%94%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '026.တက္ကသိုလ်ဓမ္မာရုံရှုကွက်', 'src' => 'https://ia801402.us.archive.org/8/items/026._20250423/026.%E1%80%90%E1%80%80%E1%81%A0%E1%80%9E%E1%80%AD%E1%80%AF%E1%80%9C%E1%80%B9%E1%80%93%E1%80%99%E1%81%BC%E1%80%AC%E1%80%9B%E1%80%AF%E1%80%B6%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '027.ကမ္ဘာအေးရှုကွက်', 'src' => 'https://ia601801.us.archive.org/6/items/027._20250423/027.%E1%80%80%E1%80%99%E1%82%93%E1%80%AC%E1%80%B1%E1%80%A1%E1%80%B8%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '028.သတိပဌာန်တရား(၄)ပါးရှုကွက်', 'src' => 'https://ia800501.us.archive.org/13/items/028._20250423/028.%E1%80%9E%E1%80%90%E1%80%AD%E1%80%95%E1%80%8C%E1%80%AC%E1%80%94%E1%80%B9%E1%80%90%E1%80%9B%E1%80%AC%E1%80%B8%28%E1%81%84%29%E1%80%95%E1%80%AB%E1%80%B8%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9.mp3'],
    ['name' => '029.ကော့မှူးရှုကွက်(၁)', 'src' => 'https://ia601801.us.archive.org/9/items/029._20250423/029.%E1%80%B1%E1%80%80%E1%80%AC%E1%80%B7%E1%80%99%E1%80%BD%E1%80%B4%E1%80%B8%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9%28%E1%81%81%29.mp3'],
    ['name' => '030.ကော့မှူးရှုကွက်(၂)', 'src' => 'https://ia601404.us.archive.org/26/items/030._20250423/030.%E1%80%B1%E1%80%80%E1%80%AC%E1%80%B7%E1%80%99%E1%80%BD%E1%80%B4%E1%80%B8%E1%80%9B%E1%82%88%E1%80%80%E1%80%BC%E1%80%80%E1%80%B9%28%E1%81%82%29.mp3'],
  ];

// Pagination setup
$total_items = count($audio_datas);
$per_page = 12;
$total_pages = ceil($total_items / $per_page);
$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$current_page = max(1, min($total_pages, $current_page)); // prevent out-of-range
$start = ($current_page - 1) * $per_page;
$audio_page_data = array_slice($audio_datas, $start, $per_page);
?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
    <h2 class="mt-5 pt-0">အသံဖိုင်များ</h2>
    <a href="../index.php" class="link text-brown">Home</a>
    <svg class="bi bi-arrow-right-short text-brown" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="tayardaw.php" class="link text-brown">တရားတော်များ</a>
    <svg class="bi bi-arrow-right-short text-brown" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="audios.php" class="link text-brown">အသံဖိုင်များ</a>
  </div>
</div>

<div class="container my-5 mt-5 nopadding">
<h3 class="mb-4 text-brown">🎧 တရားတော် အသံဖိုင်များ</h3>
  <div class="row g-4">
    <?php $id = 1; ?>
    <?php foreach ($audio_page_data as $audio): ?>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-2 fw-semibold text-brown d-flex align-items-center">
            <?php echo $audio['name']; ?>
          </div>
          <audio controls class="w-100">
            <source src="<?= htmlspecialchars($audio['src']) ?>" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>
      </div>
      <?php
      $id++;
        endforeach;
    ?>
  </div>

  <!-- Pagination -->
  <nav class="mt-5">
  <ul class="pagination justify-content-center">
    <?php if ($current_page > 1): ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?= $current_page - 1 ?>" aria-label="Previous">
          &#8592;
        </a>
      </li>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
      <li class="page-item <?= ($i === $current_page) ? 'active' : '' ?>">
        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
      </li>
    <?php endfor; ?>

    <?php if ($current_page < $total_pages): ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?= $current_page + 1 ?>" aria-label="Next">
          &#8594;
        </a>
      </li>
    <?php endif; ?>
  </ul>

  <div class="text-center text-muted mt-2 small">
    Page <?= $current_page ?> of <?= $total_pages ?>
  </div>
</nav>

</div>
<script>
  let currentAudio = null;

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
