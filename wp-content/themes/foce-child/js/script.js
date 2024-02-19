// parallax 



// animation fade-in sections

window.addEventListener('scroll', () => {
    const elements = document.querySelectorAll('.fade-in');
    var fadeIn = () => {
        elements.forEach(function(elem) {
            elem.style.opacity = 1;
        });
    }; 
    fadeIn();
});


// annimations titres
const fadeTitles = document.querySelectorAll('.fade-title');
const optionsTitle = {
    root: null, 
    rootMargin: '0px',
    threshold: 0.5
  };
const titles = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-top');
            entry.target.style.opacity = 1;
        } else {
            entry.target.classList.remove('fade-top');
            entry.target.style.opacity = 0;
        }
    });
  }, optionsTitle);

  fadeTitles.forEach(title => {
    titles.observe(title);
  });


// animation loop carrousel
const swiper = new Swiper('.sample-slider', {
    loop: true,
    autoplay: {
        delay: 0,
    },
    speed: 3000,          //add
    slidesPerView: 3,     //add
});


// animation fleurs scroll



// animation nuages


// menu burger 