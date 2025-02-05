let currentIndex = 0;

function moveSlide(direction) {
    let slides = document.querySelector(".slider");
    let totalSlides = document.querySelectorAll(".slide").length;

    currentIndex += direction;
    if (currentIndex >= totalSlides) {
        currentIndex = 0;
    } else if (currentIndex < 0) {
        currentIndex = totalSlides - 1;
    }

    let offset = -currentIndex * 100 + "%";
    slides.style.transform = "translateX(" + offset + ")";
}

// Auto-slide function
setInterval(() => moveSlide(1), 8000);