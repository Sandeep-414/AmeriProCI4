/* =====================================================
   AMERIPRO DESIGN 3
   IMAGE HERO ANIMATION
===================================================== */

document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* ================================================
           ELEMENTS
        ================================================= */

        const slides =
            document.querySelectorAll(
                ".d3-slide"
            );


        const indicators =
            document.querySelectorAll(
                ".d3-indicator"
            );


        const currentSlideText =
            document.getElementById(
                "d3CurrentSlide"
            );


        const menuButton =
            document.getElementById(
                "d3MenuButton"
            );


        let currentSlide = 0;

        let slideTimer;


        /* ================================================
           SETTINGS
        ================================================= */

        const duration = 6000;


        /* ================================================
           SHOW SLIDE
        ================================================= */

        function showSlide(index) {


            if (index >= slides.length) {

                index = 0;

            }


            if (index < 0) {

                index =
                    slides.length - 1;

            }


            currentSlide = index;


            /* --------------------------------------------
               Slides
            --------------------------------------------- */

            slides.forEach(
                function (slide, i) {

                    slide.classList.toggle(
                        "active",
                        i === index
                    );

                }
            );


            /* --------------------------------------------
               Indicators
            --------------------------------------------- */

            indicators.forEach(
                function (indicator, i) {

                    indicator.classList.toggle(
                        "active",
                        i === index
                    );

                }
            );


            /* --------------------------------------------
               Counter
            --------------------------------------------- */

            if (currentSlideText) {

                currentSlideText.textContent =
                    String(index + 1)
                        .padStart(2, "0");

            }


            /* --------------------------------------------
               Restart timer
            --------------------------------------------- */

            clearTimeout(slideTimer);


            slideTimer =
                setTimeout(
                    function () {

                        showSlide(
                            currentSlide + 1
                        );

                    },
                    duration
                );

        }


        /* ================================================
           INDICATOR CLICK
        ================================================= */

        indicators.forEach(
            function (indicator) {


                indicator.addEventListener(
                    "click",
                    function () {


                        const index =
                            Number(
                                indicator.dataset.slide
                            );


                        showSlide(index);

                    }
                );

            }
        );


        /* ================================================
           MENU BUTTON
        ================================================= */

        if (menuButton) {

            menuButton.addEventListener(
                "click",
                function () {

                    menuButton.classList.toggle(
                        "open"
                    );

                }
            );

        }


        /* ================================================
           MOUSE PARALLAX
        ================================================= */

        const hero =
            document.querySelector(
                ".d3-hero"
            );


        if (hero) {


            hero.addEventListener(
                "mousemove",
                function (event) {


                    const activeImage =
                        document.querySelector(
                            ".d3-slide.active .d3-slide-image"
                        );


                    if (!activeImage) {

                        return;

                    }


                    const rect =
                        hero.getBoundingClientRect();


                    const x =
                        (
                            event.clientX -
                            rect.left
                        ) /
                        rect.width -
                        0.5;


                    const y =
                        (
                            event.clientY -
                            rect.top
                        ) /
                        rect.height -
                        0.5;


                    const moveX =
                        x * -10;


                    const moveY =
                        y * -7;


                    activeImage.style.transform =
                        `
                        scale(1.04)
                        translate3d(
                            ${moveX}px,
                            ${moveY}px,
                            0
                        )
                        `;

                }
            );


            hero.addEventListener(
                "mouseleave",
                function () {


                    const activeImage =
                        document.querySelector(
                            ".d3-slide.active .d3-slide-image"
                        );


                    if (activeImage) {

                        activeImage.style.transform =
                            "scale(1)";

                    }

                }
            );

        }


        /* ================================================
           TOUCH SWIPE
        ================================================= */

        let touchStartX = 0;

        let touchEndX = 0;


        if (hero) {


            hero.addEventListener(
                "touchstart",
                function (event) {

                    touchStartX =
                        event.changedTouches[0]
                            .screenX;

                },
                {
                    passive: true
                }
            );


            hero.addEventListener(
                "touchend",
                function (event) {

                    touchEndX =
                        event.changedTouches[0]
                            .screenX;


                    const distance =
                        touchEndX -
                        touchStartX;


                    if (
                        Math.abs(distance) < 50
                    ) {

                        return;

                    }


                    if (distance < 0) {

                        showSlide(
                            currentSlide + 1
                        );

                    } else {

                        showSlide(
                            currentSlide - 1
                        );

                    }

                },
                {
                    passive: true
                }
            );

        }


        /* ================================================
           KEYBOARD
        ================================================= */

        document.addEventListener(
            "keydown",
            function (event) {


                if (
                    event.key ===
                    "ArrowRight"
                ) {

                    showSlide(
                        currentSlide + 1
                    );

                }


                if (
                    event.key ===
                    "ArrowLeft"
                ) {

                    showSlide(
                        currentSlide - 1
                    );

                }

            }
        );


        /* ================================================
           START
        ================================================= */

        showSlide(0);

    }
);

/* =========================================================
   SOLUTION DETAIL CAPABILITY ACCORDION
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const capabilityButtons =
        document.querySelectorAll(
            '.d3-solution-detail-item-button'
        );

    capabilityButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            const item =
                button.closest(
                    '.d3-solution-detail-item'
                );

            if (!item) {
                return;
            }

            item.classList.toggle('active');

        });

    });

});

/* =========================================
   DESIGN 3 - CLICK DROPDOWN
========================================= */

document.addEventListener("DOMContentLoaded", function () {

    const dropdowns = document.querySelectorAll(".d3-nav-dropdown");

    dropdowns.forEach(function (dropdown) {

        const trigger = dropdown.querySelector(".d3-dropdown");

        if (!trigger) {
            return;
        }

        trigger.addEventListener("click", function (event) {

            event.preventDefault();

            dropdowns.forEach(function (otherDropdown) {

                if (otherDropdown !== dropdown) {
                    otherDropdown.classList.remove("d3-dropdown-open");
                }

            });

            dropdown.classList.toggle("d3-dropdown-open");

        });

    });

    document.addEventListener("click", function (event) {

        if (!event.target.closest(".d3-nav-dropdown")) {

            dropdowns.forEach(function (dropdown) {
                dropdown.classList.remove("d3-dropdown-open");
            });

        }

    });

});