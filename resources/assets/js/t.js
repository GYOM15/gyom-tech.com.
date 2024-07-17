
        var testimonialThumbs = new Swiper('.testimonial-thumbs', {
          spaceBetween: 10,
          slidesPerView: 3,
          centeredSlides: true,
          freeMode: true,
          autoplay: true,
          loop: true,
          speed: 3000,
        });
        var testimonialContent = new Swiper('.testimonial-content', {
            spaceBetween: 10,
            autoplay: true,
            loop: true,
            speed: 3000,
            thumbs: {
                swiper: testimonialThumbs
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
        
 
  // Fonction pour remonter en haut de la page
  document.querySelector('.scroll-icon').addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });