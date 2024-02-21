// parallax
document.addEventListener('scroll', function() {
  // console.log(document.documentElement.scrollTop);
  let scrollPos = window.scrollY;
  let parallaxImage = document.getElementById('picture');
  let nextSection = document.getElementById('story');
  
  parallaxImage.style.transform = 'translateY(' + scrollPos * 0.5 + 'px)';

  let parallaxImageBottom = parallaxImage.getBoundingClientRect().bottom;
  let nextSectionTop = nextSection.getBoundingClientRect().top;
  
  if (parallaxImageBottom >= nextSectionTop) {
    parallaxImage.style.transform = 'none';
  }
});
// ***** // 


// animation fleurs scroll
document.addEventListener('scroll', function() {
  let scrollPos = window.scrollY;

});
// ***** // 


// animation fade-in sections
document.addEventListener("DOMContentLoaded", (event) => {
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        autoplay: {
            delay: 0,
        },
    });
//     // const swiper = new Swiper(".mySwiper", {
//     //     effect: "coverflow",
//     //     grabCursor: true,
//     //   });
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
            entry.target.style.transform = "translateY(-40px)";
        } else {
            entry.target.style.transform = "translateY(20px)";
        }
    });
  }, optionsTitle);

  fadeTitles.forEach(title => {
    titles.observe(title);
  });


// animation loop carrousel




// animation nuages



// menu burger 
