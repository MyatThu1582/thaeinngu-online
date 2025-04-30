<?php include '../navbar.php'; ?>

<?php
// Sample audio data array (you can load this from a database instead)
$video_datas = [
    [
      'name' => 'Facebook 269560251844372 (720p)',
      'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
    ],
    [
      'name' => 'Facebook 269560251844372 (720p)',
      'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
    ],
    [
        'name' => 'Facebook 269560251844372 (720p)',
        'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
      ],
      [
        'name' => 'Facebook 269560251844372 (720p)',
        'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
      ],
      [
        'name' => 'Facebook 269560251844372 (720p)',
        'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
      ],
      [
        'name' => 'Facebook 269560251844372 (720p)',
        'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
      ],
      [
        'name' => 'Facebook 269560251844372 (720p)',
        'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
      ],
      [
        'name' => 'Facebook 269560251844372 (720p)',
        'src' => 'https://ia600703.us.archive.org/10/items/video_2025-04-23_14-07-15/video_2025-04-23_14-07-15.mp4',
      ],
  ];

// Pagination setup
$total_items = count($video_datas);
$per_page = 8;
$total_pages = ceil($total_items / $per_page);
$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$current_page = max(1, min($total_pages, $current_page)); // prevent out-of-range
$start = ($current_page - 1) * $per_page;
$audio_page_data = array_slice($video_datas, $start, $per_page);
?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
    <h2 class="mt-5 pt-0">ဗီဒီယိုများ</h2>
    <a href="../index.php" class="link text-brown">Home</a>
    <svg class="bi bi-arrow-right-short text-brown" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="tayardaw.php" class="link text-brown">တရားတော်များ</a>
    <svg class="bi bi-arrow-right-short text-brown" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="videos.php" class="link text-brown">ဗီဒီယိုများ</a>
  </div>
</div>

<div class="container my-5 mt-5 nopadding">
<h3 class="mb-4 text-brown">📺 တရားတော် ဗီဒီယိုများ</h3>
  <div class="row g-4">
    <?php $id = 1; ?>
    <?php foreach ($video_datas as $video): ?>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-2 fw-semibold text-brown d-flex align-items-center">
            <?php echo $id . " . " . $video['name']; ?>
          </div>
          <video src="<?php echo $video['src']; ?>" controls width="100%" height="85%"></video>
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
