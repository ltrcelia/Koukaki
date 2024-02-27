// ***** parallax *****
document.addEventListener('scroll', function() {
  let scrollPos = window.scrollY;
  let parallaxImage = document.getElementById('picture');
  let parallaxImageBottom = parallaxImage.getBoundingClientRect().bottom;
  
  if (parallaxImageBottom > 455) {
    parallaxImage.style.transform = 'translateY(' + scrollPos * 0.5 + 'px)';
  }
});
// ***** // 


// ***** animations titres *****
document.addEventListener('scroll', function() {
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


// ***** animation loop carrousel *****
document.addEventListener("DOMContentLoaded", (event) => {

  let swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    autoplay: {
      delay: 4000,
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


// ***** animation nuages *****
window.addEventListener('scroll', function() {
	let scrollClouds = document.querySelector('.clouds');

	let topClouds = scrollClouds.offsetTop; 
  let animationClouds  = topClouds + 500;

	if (window.scrollY >= animationClouds) {
		let moveCloud = Math.min(300, window.scrollY  - animationClouds );
		scrollClouds.style.transform = 'translateX(-' + moveCloud  + 'px)';
	}
 });

// ***** // 


// ***** menu burger *****

// ***** //