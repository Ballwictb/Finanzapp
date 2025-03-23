// wait DOM to be loaded
document.addEventListener("DOMContentLoaded", () => {
    initLoader();
    initCursor();
})



// Loader animation

function initLoader() {
    const loader = document.querySelector('.loader');

    // hide loader after animation
    setTimeout(() => {
        loader.classList.add("hidden");
        document.body.style.overflow = "auto";
    }, 2500)
}



// custom cursor
function initCursor() {
    const cursor = document.querySelector('.cursor');
    const cursorFollower = document.querySelector('.cursor-follower');


    document.addEventListener("mousemove", (e) => {
        cursor.style.left = e.clientX + "px";
        cursor.style.top = e.clientY + "px";

        // Add delay to follow for smooth
        setTimeout(() => {
            cursorFollower.style.left = e.clientX + 'px';
            cursorFollower.style.top = e.clientY + 'px';
        }, 50);
    })
}