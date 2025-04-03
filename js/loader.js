document.addEventListener("DOMContentLoaded", function () {
    const loader = document.querySelector(".loader");

    if (!sessionStorage.getItem("loaderSeen")) {
        // Ensure the loader is visible when the page loads
        loader.classList.remove("hidden");

        setTimeout(() => {
            // Apply the hidden class after a delay
            loader.classList.add("hidden");
            sessionStorage.setItem("loaderSeen", "true");
        }, 3000);
    } else {
        loader.classList.add("hidden");
    }
});
