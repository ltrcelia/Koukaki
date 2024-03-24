// ***** parallax ***** //
document.addEventListener('scroll', () => {
  let scrollPos = window.scrollY;
  let parallaxImage = document.getElementById('picture');
  let parallaxImageBottom = parallaxImage.getBoundingClientRect().bottom;
  
  if (parallaxImageBottom > 455) {
    parallaxImage.style.transform = 'translateY(' + scrollPos * 0.5 + 'px)';
  }
});
// ***** // 


// ***** animations titres ***** //
document.addEventListener('scroll', ()  => {
  // console.log(document.documentElement.scrollTop);
  const fadeTitles = document.querySelectorAll('.fade-title');
  
  fadeTitles.forEach(index => {
    // console.log(index.getBoundingClientRect().bottom);
    if (index.getBoundingClientRect().bottom <= 1030) {
      index.style.transform = 'translateY(0px)';
      // console.log('demo');
    }
  });
});
// ***** //


// ***** animation loop carrousel ***** //
document.addEventListener("DOMContentLoaded", (event) => {

  let swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    autoplay: {
      delay: 3000,
    },
    coverflowEffect: {
      rotate: 30,
      stretch: 3,
      scale: 0.9,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
  });
});
// ***** // 


// ***** animation nuages ***** //
document.addEventListener('scroll', () => {
	let scrollClouds = document.querySelector('.clouds');
	let topClouds = scrollClouds.offsetTop; 
  let animationClouds  = topClouds + 500;

	if (window.scrollY >= animationClouds) {
		let moveCloud = Math.min(300, window.scrollY  - animationClouds );
		scrollClouds.style.transform = 'translateX(-' + moveCloud  + 'px)';
	}
 });
// ***** // 


// ***** menu burger ***** //
const btnBurger = document.getElementById('btn');
const menuBurger = document.getElementById('menu-burger');
const menuLiens = document.querySelectorAll('a');

// ouverture menu burger
btnBurger.addEventListener('click', () => {
    btnBurger.classList.toggle('active');
    menuBurger.classList.toggle('open');
});
// liens actifs
menuLiens.forEach(link => {
  link.addEventListener('click', () => {
    btnBurger.classList.remove('active');
    menuBurger.classList.remove('open');
  });
});

// animation titres fade-in
document.addEventListener('DOMContentLoaded', () =>  {
  const btnBurger = document.getElementById('btn');
  const titles = document.querySelectorAll('.fade-titles');

  btnBurger.addEventListener('click', () => {
    setTimeout(() => {
        titles.forEach((title, index) => {
            setTimeout(() => {
                title.classList.add('visible');
            }, index * 100);
        });
    }, 1000);
  });
});

// enlever le toggled qui pose probleme
document.addEventListener('DOMContentLoaded', () => {
  let btnBurger = document.getElementById('btn');

  if (btnBurger) {
      btnBurger.addEventListener('click', () => {
          let mainNavigation = document.querySelector('.main-navigation');
          if (mainNavigation.classList.contains('toggled')) {
              mainNavigation.classList.remove('toggled');
          }
      });
  }
});
// ***** //