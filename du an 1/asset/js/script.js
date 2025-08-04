// Banner slider logic (dots version)
const slides = document.querySelectorAll('.banner-slide');
const dots = document.querySelectorAll('.banner-dot');
let currentSlide = 0;
let slideInterval;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function goToSlide(index) {
    currentSlide = index;
    showSlide(currentSlide);
}

function startAutoSlide() {
    slideInterval = setInterval(nextSlide, 5000);
}

function stopAutoSlide() {
    clearInterval(slideInterval);
}

dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
        goToSlide(i);
        stopAutoSlide();
        startAutoSlide();
    });
});

showSlide(currentSlide);
startAutoSlide();
