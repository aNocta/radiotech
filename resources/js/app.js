import Swiper from "swiper";
import {animate, inView, scroll, stagger} from "motion"
import {Navigation, Autoplay} from "swiper/modules";

const swiper = new Swiper("#slider", {
    loop: true,
    navigation: {
        prevEl: "#slide-prev",
        nextEl: "#slide-next"
    },
    autoplay: {
        delay: 6000
    },
    modules: [Navigation, Autoplay]
});

function currentSlideAnimation(){
    const activeSlide = document.querySelector(`[data-swiper-slide-index="${swiper.realIndex}"]`);
    animate(activeSlide.querySelector("h2"), {x: [-100, 0], opacity: [0, 1]}, { duration: 1 }).play();
    animate(activeSlide.querySelector("p"), { opacity: [0, 1]}, { duration: 1 }).play();

    const advantages = activeSlide.querySelectorAll("li");
    if(advantages.length > 0){
        animate(advantages, {opacity: [0, 1]}, { delay: stagger(0.25) }).play();
    }
}
currentSlideAnimation();

const advantageLists = document.querySelectorAll(".about-list li");
const advantageListTitles = document.querySelectorAll(".about-list h3");
const aboutCover = document.querySelector(".about-cover");
if(advantageLists.length > 0){
    for(let advantage of advantageLists){
        advantage.style.opacity = "0";
    }
    inView(aboutCover, (element) => {
        animate(aboutCover, {opacity: [0, 1], translateY: [-200, 0]}, { duration: 1 }).play();
    });
    inView(advantageLists, () => {
        animate(advantageListTitles, {scaleX: [0, 1], opacity: [0, 1]}, { delay: stagger(.2) }).then(() => {
            animate(advantageLists, {opacity: [0, 1]}, { delay: stagger(.1) });
        });
    }, { amount: 1 })
}

swiper.on("slideChange", currentSlideAnimation);
const contactButton = document.getElementById("contact");
const contactModal = document.getElementById("contact-us");
if(contactButton && contactModal){
    const closeButton = contactModal.querySelector(".close-btn");
    closeButton.addEventListener("click", function(){
        contactModal.close();
    });
    contactButton.addEventListener("click", function(){
        contactModal.showModal();
    });
}
