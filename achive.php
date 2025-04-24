<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Player</title>
    <style>
        /* Add some styling for the play button */
        .play-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .play-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- audio player -->
    <audio src="https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3" controls></audio>
    <audio src="https://ia601806.us.archive.org/10/items/23-right-thought/23%20%20RIGHT%20THOUGHT.mp3" controls></audio>
    <!-- audio player -->

    <?php 
    $audio_datas = [
        [
            'name' => '22 KAYAMIMAM METHOD',
            'src' => 'https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3',
        ],
        [
            'name' => '23  RIGHT THOUGHT',
            'src' => 'https://ia601806.us.archive.org/10/items/23-right-thought/23%20%20RIGHT%20THOUGHT.mp3',
        ]
    ];
    ?>

    <!-- Add Font Awesome CDN for the icons -->
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>

    <?php
        foreach ($audio_datas as $index => $audio) {
            ?>
            <button class="play-button" id="playBtn<?php echo $index; ?>">
                <i class="fas fa-play"></i> <!-- Play icon -->
                <?php echo $audio['name']; ?>
            </button>
            <audio id="audioPlayer<?php echo $index; ?>" style="display: none;">
                <source src="<?php echo $audio['src']; ?>" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            <?php
        }
    ?>

<script>
    let currentAudio = null;
    let currentButton = null;

    document.querySelectorAll('.play-button').forEach((button, index) => {
        button.addEventListener('click', () => {
            const audioPlayer = document.getElementById('audioPlayer' + index);
            const icon = button.querySelector('i');

            // Pause and reset any previously playing audio
            if (currentAudio && currentAudio !== audioPlayer) {
                currentAudio.pause();
                currentAudio.style.display = 'none';

                if (currentButton) {
                    const prevIcon = currentButton.querySelector('i');
                    prevIcon.classList.remove('fa-pause');
                    prevIcon.classList.add('fa-play');
                }
            }

            // Toggle play/pause for the clicked button
            if (audioPlayer.paused) {
                audioPlayer.style.display = 'block';
                audioPlayer.play();
                icon.classList.remove('fa-play');
                icon.classList.add('fa-pause');
                currentAudio = audioPlayer;
                currentButton = button;
            } else {
                audioPlayer.pause();
                audioPlayer.style.display = 'none';
                icon.classList.remove('fa-pause');
                icon.classList.add('fa-play');
                currentAudio = null;
                currentButton = null;
            }
        });
    });
</script>

</body>
</html>
