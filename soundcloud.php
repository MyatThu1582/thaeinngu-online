<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://w.soundcloud.com/player/api.js"></script>
    <style>
    /* General body styling for layout */
    body {
        font-family: 'Helvetica Neue', sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Centering the player container */
    #player-container {
        margin-top: 20px;
        width: 100%;
        max-width: 500px;
    }

    /* Style the buttons */
    button {
        background-color: #5c6bc0; /* Soft blue color */
        color: white;
        font-size: 16px;
        padding: 12px 25px;
        margin: 10px;
        border: none;
        border-radius: 25px; /* Subtle rounded edges */
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        max-width: 250px; /* Makes buttons more compact */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }

    /* Hover effect for buttons */
    button:hover {
        background-color: #4f5bba; /* Slightly darker blue */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Slightly stronger shadow */
    }

    /* Active button state */
    button:active {
        background-color: #3f4b92; /* Even darker blue */
        transform: translateY(2px); /* Slight press effect */
    }
</style>
</head>
<body>
    
    <!-- <audio src="https://soundcloud.com/myat-thu-968156507/22-kayamimam-method?si=a5053184100b4bd081a500daa6acc2b4&utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing.mp3" controls></audio> -->

  <!-- Play Button -->
  <!-- <button id="play-btn">Play Track 1</button>
<button id="play-btn-2">Play Track 2</button>

<div id="player-container"></div>

<script src="https://w.soundcloud.com/player/api.js"></script>
<script>
    var currentWidget = null; // Store the SoundCloud player widget

    function playTrack(url, button) {
        var playerContainer = document.getElementById("player-container");

        // If iframe already exists, update the track
        if (playerContainer.innerHTML !== "") {
            var iframe = document.getElementById("soundcloud-player");
            var widget = SC.Widget(iframe);
            
            widget.load(url, { auto_play: true }); // Load new track and play
            button.innerText = "Playing...";
            return;
        }

        // Create SoundCloud iframe
        var iframe = document.createElement("iframe");
        iframe.id = "soundcloud-player";
        iframe.width = "100%";
        iframe.height = "166";
        iframe.scrolling = "no";
        iframe.frameBorder = "no";
        iframe.allow = "autoplay";  
        iframe.src = `https://w.soundcloud.com/player/?url=${encodeURIComponent(url)}&auto_play=true`;

        // Insert the iframe into the container
        playerContainer.appendChild(iframe);

        // Store widget instance
        currentWidget = SC.Widget(iframe);

        // Update button text
        button.innerText = "Playing...";
    }

    // Assign different tracks to buttons
    document.getElementById("play-btn").addEventListener("click", function () {
        playTrack("https://soundcloud.com/myat-thu-968156507/22-kayamimam-method", this);
    });

    document.getElementById("play-btn-2").addEventListener("click", function () {
        playTrack("https://soundcloud.com/myat-thu-968156507/23-right-thought", this);
    });
</script> -->



<div id="track-buttons"></div>

<div id="player-container"></div>

<script src="https://w.soundcloud.com/player/api.js"></script>
<script>
    var tracks = [
        { title: "Track 1", url: "https://soundcloud.com/myat-thu-968156507/22-kayamimam-method" },
        { title: "Track 2", url: "https://soundcloud.com/myat-thu-968156507/23-right-thought" },
        { title: "Track 3", url: "https://soundcloud.com/myat-thu-968156507/26-14-kinds-of-citta-3" }
        // Add more tracks as needed
    ];

    var currentWidget = null; // Store the SoundCloud player widget
    var isPlaying = false; // To keep track of whether the track is playing or paused
    var currentTrackIndex = -1; // Track the current playing track

    // Function to load and play the track
    function playTrack(url, button, index) {
        var playerContainer = document.getElementById("player-container");

        // If iframe already exists, update the track
        if (playerContainer.innerHTML !== "") {
            var iframe = document.getElementById("soundcloud-player");
            var widget = SC.Widget(iframe);

            widget.load(url, { auto_play: true }); // Load new track and play
            button.innerText = "Pause";
            currentTrackIndex = index;
            isPlaying = true; // Track is playing now
            return;
        }

        // Create SoundCloud iframe
        var iframe = document.createElement("iframe");
        iframe.id = "soundcloud-player";
        iframe.width = "100%";
        iframe.height = "166";
        iframe.scrolling = "no";
        iframe.frameBorder = "no";
        iframe.allow = "autoplay";  
        iframe.src = `https://w.soundcloud.com/player/?url=${encodeURIComponent(url)}&auto_play=true`;

        // Insert the iframe into the container
        playerContainer.appendChild(iframe);

        // Store widget instance
        currentWidget = SC.Widget(iframe);

        // Update button text to "Pause"
        button.innerText = "Pause";
        currentTrackIndex = index;
        isPlaying = true; // Track is playing now
    }

    // Toggle play/pause
    function togglePlayPause(button, index) {
        if (isPlaying && currentTrackIndex === index) {
            currentWidget.pause(); // Pause the track
            button.innerText = "Play"; // Change button text to "Play"
            isPlaying = false; // Track is paused
        } else if (!isPlaying || currentTrackIndex !== index) {
            playTrack(tracks[index].url, button, index); // Play the selected track
        }
    }

    // Dynamically create buttons for all tracks
    var buttonContainer = document.getElementById("track-buttons");

    tracks.forEach(function (track, index) {
        var button = document.createElement("button");
        button.innerText = `Play ${track.title}`;
        
        // Attach event listener for each button
        button.addEventListener("click", function () {
            togglePlayPause(this, index); // Toggle play/pause for clicked track
        });

        buttonContainer.appendChild(button); // Add button to the page
    });
</script>


</body>
</html>