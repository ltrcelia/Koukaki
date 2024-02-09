let lastScroll = 0; //window.scrollY
const titleStory = document.getElementById('.title-story');
const titleChara = document.getElementById('.title-character');
const titlePlace = document.getElementById('.title-place');
const titleStudio = document.getElementById('.title-studio');
const titleOscars = document.getElementById('.title-oscars');

window.addEventListener('scroll', () => {
    // // console.log(lastScroll);
    // if(window.scrollY < 390){
    //     titleStory.style.transform = "translateY(-20px)";
    //     titleStory.style.opacity = "0";
    // } else {
    //     titleStory.style.transform = "translateY(0px)";
    //     titleStory.style.opacity = "100%";
    // }

    // if(window.scrollY < 980){
    //     titleChara.style.transform = "translateY(-20px)";
    //     titleChara.style.opacity = "0";
    // } else {
    //     titleChara.style.transform = "translateY(0px)";
    //     titleChara.style.opacity = "100%";
    // }

    // if(window.scrollY < 1860){
    //     titlePlace.style.transform = "translateY(-200px)";
    //     titlePlace.style.opacity = "0";
    // } else {
    //     titlePlace.style.transform = "translateY(0px)";
    //     titlePlace.style.opacity = "100%";
    // }

    // if(window.scrollY < 2360){
    //     titleStudio.style.transform = "translateY(-200px)";
    //     titleStudio.style.opacity = "0";
    // } else {
    //     titleStudio.style.transform = "translateY(0px)";
    //     titleStudio.style.opacity = "100%";
    // }

    // if(window.scrollY < 3100){
    //     titleOscars.style.transform = "translateY(-200px)";
    //     titleOscars.style.opacity = "0";
    // } else {
    //     titleOscars.style.transform = "translateY(0px)";
    //     titleOscars.style.opacity = "100%";
    // }
    // lastScroll = window.scrollY;
});

// Sélectionnez les éléments que vous souhaitez animer
const flowers = document.querySelectorAll('.flower');

// Fonction pour ajuster la vitesse de rotation des fleurs
function adjustRotationSpeed(scrollTop) {
    // Calculez la nouvelle vitesse de rotation en fonction de la position de défilement
    // Par exemple, vous pouvez augmenter la vitesse de rotation lorsque l'utilisateur fait défiler vers le bas
    const rotationSpeed = 100 + scrollTop * 2; // Ajustez ce coefficient selon votre préférence

    // Parcourez toutes les fleurs et mettez à jour leur animation
    flowers.forEach(flower => {
        flower.style.animationDuration = rotationSpeed + 'ms';
    });
}

// Écoutez l'événement de défilement de la page
window.addEventListener('scroll', function() {
    // Obtenez la position de défilement actuelle de la page
    const scrollTop = window.scrollY || document.documentElement.scrollTop;

    // Appelez la fonction pour ajuster la vitesse de rotation des fleurs
    adjustRotationSpeed(scrollTop);
});