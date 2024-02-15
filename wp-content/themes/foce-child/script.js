let img = document.getElementById('picture');
let video = document.getElementById('background-video');
window.addEventListener('scroll', () => {
    const elements = document.querySelectorAll('.fade-in');
    var fadeIn = () => {
        elements.forEach(function(elem) {
            elem.style.opacity = 1;
        });
    }; 
    fadeIn();
});


const fadeTitles = document.querySelectorAll('.fade-title');
const optionsTitle = {
    root: null, 
    rootMargin: '0px',
    threshold: 0.5
  };
const titles = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            entry.target.style.transform = 'translateY(0)';
        } else {
            entry.target.classList.remove('fade-in');
            entry.target.style.opacity = '0';
            entry.target.style.transform = 'translateY(100px)';
        }
    });
  }, optionsTitle);

  fadeTitles.forEach(title => {
    titles.observe(title);
  });


// const flower = document.querySelectorAll('.flower');
// const options = {
//     threshold: 0.5
// };
// const observer = new IntersectionObserver(entries => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             flower.style.animationDuration = '15s'; // Durée initiale de l'animation
//         } else {
//             flower.style.animationDuration = '30s'; // Doublé de la durée initiale
//         }
//     });
// }, options);
// observer.observe(flower);