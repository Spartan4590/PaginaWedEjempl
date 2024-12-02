let slideIndex = 0;
const slides = document.querySelectorAll('.slideshow img');
const showSlides = () => {
    slides.forEach((slide, index) => {
        slide.style.opacity = (index === slideIndex) ? '1' : '0';
    });
    slideIndex = (slideIndex + 1) % slides.length;
};
setInterval(showSlides, 5000);
