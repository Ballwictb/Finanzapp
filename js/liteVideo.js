// Save the HTML for the Lite YouTube player (replace the videoid with yours)
const videoPlayerHTML = '<lite-youtube videoid="ZR1lxYhLrPw" style="max-width: 100%; height: auto;"></lite-youtube>';

// Get DOM element references
const videoModal = document.getElementById('videoModal');
const videoContainer = document.getElementById('videoContainer');
const openVideoBtn = document.getElementById('openVideo');
const closeVideoBtn = document.querySelector('.video-modal-close');

// Function to open the modal and reset the player
function openModal(event) {
    event.preventDefault();
    // Insert or reinsert the video player HTML into the container to start playback from the beginning
    videoContainer.innerHTML = videoPlayerHTML;
    // Display the modal overlay
    videoModal.style.display = 'block';
}

// Function to close the modal and stop playback by removing the player
function closeModal() {
    // Hide the modal overlay
    videoModal.style.display = 'none';
    // Clear the video container to remove the player and stop the video
    videoContainer.innerHTML = '';
}

// Event listener to open the modal when clicking the video button
openVideoBtn.addEventListener('click', openModal);

// Event listener to close the modal when clicking the close button ("×")
closeVideoBtn.addEventListener('click', closeModal);

// Close the modal if the user clicks outside the modal content
window.addEventListener('click', function (event) {
    if (event.target === videoModal) {
        closeModal();
    }
});
