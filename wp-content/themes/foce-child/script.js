import Swiper from 'swiper';

// import styles bundle
import 'swiper/css';

// init Swiper:
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });



// animer titres
let lastScroll = 0; //window.scrollY
const titleStory = document.querySelector('.title-story');
const titleChara = document.querySelector('.title-character');
const titlePlace = document.querySelector('.title-place');
const titleStudio = document.querySelector('.title-studio');
const titleOscars = document.querySelector('.title-oscars');

window.addEventListener('scroll', () => {
    console.log(lastScroll);
    if(window.scrollY < 460){
        titleStory.style.transform = "translateY(50px)";
        titleStory.style.opacity = "0";
    } else {
        titleStory.style.transform = "translateY(0px)";
        titleStory.style.opacity = "100%";
    }

    if(window.scrollY < 938){
        titleChara.style.transform = "translate3d(10px)";
        titleChara.style.opacity = "0";
    } else {
        titleChara.style.transform = "translate3d(0px)";
        titleChara.style.opacity = "100%";
    }

    if(window.scrollY < 1850){
        titlePlace.style.transform = "translate3d(10px)";
        titlePlace.style.opacity = "0";
    } else {
        titlePlace.style.transform = "translate3d(0px)";
        titlePlace.style.opacity = "100%";
    }

    if(window.scrollY < 2420){
        titleStudio.style.transform = "translate3d(10px)";
        titlePlace.style.opacity = "0";
    } else {
        titleStudio.style.transform = "translate3d(0px)";
        titlePlace.style.opacity = "100%";
    }
    lastScroll = window.scrollY;
});

// fin animation titres 


// jQuery(window).onload(function(){
//     jQuery(".banner").fadeIn();
//     jQuery("#story").fadeIn("slow");
//     jQuery("#characters").fadeIn(3000);
//     jQuery("#place").fadeIn();
//     jQuery("#studio").fadeIn("slow");
//     jQuery("#oscars").fadeIn(3000);
//   });
//   console.log(jQuery);


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

    let value = window.scrollY;
    img.style.top = value * 2.50 + 'px';
    video.style.top = value * -0.25 + 'px';

    let speedAnimation = 1 - value * 2;
    let Flowers = document.querySelectorAll('h2');
    // console.log(Flowers);

    Flowers.forEach(function(flower) {
        flower.style.animationDuration = speedAnimation + 's';
        
    });

    // let sections = document.getElementById('story, characters, place, studio');
    // let titres = document.querySelectorAll('.title-story, .title-character, .title-place, .title-studio');
});