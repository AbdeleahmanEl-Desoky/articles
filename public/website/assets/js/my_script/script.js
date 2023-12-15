// * --------------------------------------------------------------------------------||
// *                            script for video in header                           ||
// * --------------------------------------------------------------------------------||
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}

// * ||--------------------------------------------------------------------------------||
// * ||                  script for view image header after end video                  ||
// * ||--------------------------------------------------------------------------------||

function showImages() {
    var video = document.querySelector(".video");
    var imageCarousel = document.getElementById("carouselExampleIndicators");
    var buttons = document.querySelectorAll(".carousel-item .carousel-buttons");

    // Hide the video
    video.style.display = "none";

    // Show the image carousel
    imageCarousel.style.display = "block";

    // Add 'show' class to each button with a delay for each image
    buttons.forEach(function (button, index) {
        setTimeout(function () {
            button.classList.add("show");
        }, index * 500); // Adjust the delay as needed
    });
}

function executeCommand(buttonNumber) {
    // Replace this function with your desired command execution logic
    console.log("Button " + buttonNumber + " clicked!");
}



