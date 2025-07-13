import Swiper from "swiper";
import {animate, inView, stagger, scroll, hover} from "motion"
import {Navigation, Autoplay} from "swiper/modules";
import Lenis from "lenis";
import u from 'umbrellajs';

const lenis = new Lenis({
    autoRaf: true,
});
hover(u(".service").nodes, (element) => {
    const p = u(element).find("p").nodes;
    animate(p, {height: [0, "auto"]}, { duration: .3, ease: "easeInOut" })
    return () => {
        animate(p, {height: ["auto", 0]}, { duration: .3, ease: "easeInOut" })
    }
});

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
    const indexAttr = `[data-swiper-slide-index="${swiper.realIndex}"]`;
    animate(u(`${indexAttr} h2`).nodes, {x: [-100, 0], opacity: [0, 1]}, { duration: 1 }).play();
    animate(u(`${indexAttr} p`).nodes, { opacity: [0, 1]}, { duration: 1 }).play();

    const advantages = u(`${indexAttr} li`);
    if(advantages.length > 0){
        animate(advantages.nodes, {opacity: [0, 1]}, { delay: stagger(0.25) }).play();
    }
}
currentSlideAnimation();

const advantageLists = u(".about-list li");
const advantageListTitles = u(".about-list h3");
const aboutCover = u(".about-cover");
if(advantageLists.length > 0){
    advantageLists.each((advantage) => {
        advantage.style.opacity = "0";
    });
    inView(aboutCover.nodes, (element) => {
        animate(aboutCover.nodes, {opacity: [0, 1], translateY: [-200, 0]}, { duration: 1 }).play();
    });
    inView(advantageLists.nodes, () => {
        animate(advantageListTitles.nodes, {scaleX: [0, 1], opacity: [0, 1]}, { delay: stagger(.2) }).then(() => {
            animate(advantageLists.nodes, {opacity: [0, 1]}, { delay: stagger(.1) });
        });
    }, { amount: 1 })
}

swiper.on("slideChange", currentSlideAnimation);


document.addEventListener("alpine:init", function(){
    Alpine.data("popup", () => ({
        isOpen: false,
        active: false,
        init(){
            this.$watch("isOpen", (val) => {
                if(val){
                    this.open();
                }else{
                    this.close();
                }
            });
        },
        clickOutside(e){
            if(!this.$refs.window.contains(e.target)){
                this.isOpen = false;
            }
        },
        open(){
            const target = this.$el;
            const win = this.$refs.window;
            this.active = true;
            win.style.opacity = 0;
            lenis.stop();
            animate(target, {
                opacity: [0, 1]
            }, {duration: .3}).then(() => {
                animate(win, {
                    opacity: [0, 1],
                    scale: [.5, 1]
                }, {duration: .3})
            });
        },
        close(){
            const target = this.$el;
            const win = this.$refs.window;
            animate(win, {
                opacity: [1, 0],
                scale: [1, .5]
            }, {duration: .3}).then(() => {
                animate(target, {
                    opacity: [1, 0]
                }, {duration: .3}).then(() => {
                    this.active = false;
                    lenis.start();
                    this.$dispatch("close");
                })
            });
        }
    }));
});


