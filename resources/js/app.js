import Swiper from "swiper";
import {animate, stagger, scroll, hover} from "motion"
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


