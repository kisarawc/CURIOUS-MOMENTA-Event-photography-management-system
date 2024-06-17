window.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.slideshow img');
    let currentImage = 0;
  
    const showNextImage = () => {
      images[currentImage].classList.remove('active');
      currentImage = (currentImage + 1) % images.length;
      images[currentImage].classList.add('active');
    };
  
    setInterval(showNextImage, 3000);
  });