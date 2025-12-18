// gsap.js
// GSAP + ScrollTrigger must be loaded BEFORE this file

gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {

    /* ------------------------------
       HERO (slow page load)
    ------------------------------ */
    gsap.from(".hero h1", {
        y: 80,
        opacity: 0,
        duration: 1.8,
        ease: "power2.out"
    });

    gsap.from(".hero p", {
        y: 80,
        opacity: 0,
        duration: 1.8,
        ease: "power2.out",
        delay: 0.3
    });

    gsap.from(".hero a", {
        y: 80,
        opacity: 0,
        duration: 1.8,
        ease: "power2.out",
        delay: 0.6
    });


    /* ------------------------------
       FEATURES (VERY SLOW SCROLL)
    ------------------------------ */
    gsap.from("#about dl > div", {
        y: 80,
        opacity: 0,
        stagger: 0.3,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "#about",
            start: "top 85%",
            end: "top 15%",
            scrub: 2.5
        }
    });


    /* ------------------------------
       STATISTICS
    ------------------------------ */
    gsap.from(".bg-green-900 dl > div", {
        y: 60,
        opacity: 0,
        stagger: 0.25,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".bg-green-900",
            start: "top 85%",
            end: "top 30%",
            scrub: 2
        }
    });


    /* ------------------------------
       TESTIMONIALS
    ------------------------------ */
    gsap.from("section.py-16 figure", {
        y: 80,
        opacity: 0,
        stagger: 0.35,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "section.py-16",
            start: "top 85%",
            end: "top 20%",
            scrub: 2.5
        }
    });


    /* ------------------------------
       BRANDS (slow scale)
    ------------------------------ */
    gsap.from(".lg\\:w-1\\/2 img", {
        scale: 0.7,
        opacity: 0,
        stagger: 0.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".lg\\:w-1\\/2",
            start: "top 90%",
            end: "top 30%",
            scrub: 2.5
        }
    });


    /* ------------------------------
       FAQ
    ------------------------------ */
    gsap.from("section.py-20 details", {
        y: 50,
        opacity: 0,
        stagger: 0.25,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "section.py-20",
            start: "top 90%",
            end: "top 35%",
            scrub: 2
        }
    });


    /* ------------------------------
       SHOP PRODUCTS
    ------------------------------ */
    gsap.from("#product-container > div", {
        y: 80,
        opacity: 0,
        stagger: 0.25,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "#product-container",
            start: "top 90%",
            end: "top 25%",
            scrub: 2.5
        }
    });


    /* ------------------------------
       FOOTER
    ------------------------------ */
    gsap.from("footer", {
        y: 80,
        opacity: 0,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "footer",
            start: "top 95%",
            end: "top 50%",
            scrub: 2
        }
    });


    /* ------------------------------
       FLOATING SNOW (extra slow)
    ------------------------------ */
    gsap.utils.toArray(".snowflake").forEach(el => {
        gsap.to(el, {
            y: "120vh",
            repeat: -1,
            duration: gsap.utils.random(12, 20),
            delay: gsap.utils.random(0, 6),
            ease: "linear"
        });
    });


    /* ------------------------------
       FIX FOR PRELOADER
    ------------------------------ */
    window.addEventListener("load", () => {
        ScrollTrigger.refresh();
    });

});
