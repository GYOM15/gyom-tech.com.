document.addEventListener('DOMContentLoaded', function() {
    const playBtn = document.getElementById("playBtn");
    const videoPopup = document.getElementById("videoPopup");
    const closeBtn = document.getElementById("closeBtn");
    const videoPlayer = document.getElementById("videoPlayer");
    const body = document.body;

    // Function to disable scrolling
    function disableScroll() {
        body.style.overflow = 'hidden';
    }

    // Function to enable scrolling
    function enableScroll() {
        body.style.overflow = '';
    }

    // Event listener for play button
    playBtn.addEventListener("click", () => {
        setTimeout(() => {
            videoPopup.style.display = "block";
            videoPlayer.play(); 
            videoPlayer.currentTime = 0;
            disableScroll(); // Disable scrolling when popup is open
        }, 1000);
    });

    // Event listener for close button
    closeBtn.addEventListener("click", () => {
        videoPopup.style.display = "none";
        videoPlayer.currentTime = 0; // Réinitialiser la vidéo à zéro
        videoPlayer.pause(); // Arrêter la lecture
        enableScroll(); // Enable scrolling when popup is closed
    });

    // Function to stop and reset video
    function stopAndResetVideo() {
        videoPlayer.pause(); // Stop video playback
        videoPlayer.currentTime = 0; // Reset video to beginning
    }

    // Event listener triggered before page refresh or close
    window.addEventListener('beforeunload', () => {
        stopAndResetVideo(); // Stop and reset video when page is refreshed or closed
    });
});
