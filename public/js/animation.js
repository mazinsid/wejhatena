
function animateGalleryFunction(targetImage, stagFrom) {
    anime({
        targets: targetImage,
        opacity: [0, 1],
        // rotateX: [0, 360],
        scale: [0.5, 1],
        direction: "normal",
        easing: "easeInOutSine",
        duration: 600,
        delay: anime.stagger(
            200,
            { grid: [5, 5], from: stagFrom },
            { start: "100" }
        )
    });
}
  