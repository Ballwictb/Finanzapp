// Save the HTML for the Lite YouTube player (replace the videoid with yours)
const videoPlayerHTML = `<lite-youtube videoid="ZR1lxYhLrPw" style="max-width: 90%;">
</lite-youtube>`;

// Get DOM element references
const videoModal = document.getElementById('videoModal');
const videoContainer = document.getElementById('videoContainer');
const openVideoBtn = document.getElementById('openVideo');
const closeVideoBtn = document.querySelector('.video-modal-close');

// Function to open the modal and reset the player
function openModal(event) {
	event.preventDefault();
	videoContainer.innerHTML = videoPlayerHTML;
	videoModal.style.display = 'block';
}

// Function to close the modal and stop playback by removing the player
function closeModal() {
	videoModal.style.display = 'none';
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
