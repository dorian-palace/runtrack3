
document.addEventListener("DOMContentLoaded", (event) => {
    //layer head
    let slides = document.getElementsByClassName("slider__slide");
    let navlinks = document.getElementsByClassName("slider__navlink");
    let currentSlide = 0;

    document.getElementById("nav-button--next").addEventListener("click", () => {
        changeSlide(currentSlide + 1)
    });
    document.getElementById("nav-button--prev").addEventListener("click", () => {
        changeSlide(currentSlide - 1)
    });

    function changeSlide(moveTo) {
        if (moveTo >= slides.length) {
            moveTo = 0;
        }
        if (moveTo < 0) {
            moveTo = slides.length - 1;
        }

        slides[currentSlide].classList.toggle("active");
        navlinks[currentSlide].classList.toggle("active");
        slides[moveTo].classList.toggle("active");
        navlinks[moveTo].classList.toggle("active");

        currentSlide = moveTo;
    }

    document.querySelectorAll('.slider__navlink').forEach((bullet, bulletIndex) => {
        bullet.addEventListener('click', () => {
            if (currentSlide !== bulletIndex) {
                changeSlide(bulletIndex);
            }
        })
    })


    
    //layer body
    let slides_body = document.getElementsByClassName("slider__slide_body");
    let navlinks_body = document.getElementsByClassName("slider__navlink_body");
    let currentSlide_body = 0;

    document.getElementById("nav-button--next-body").addEventListener("click", () => {
        changeSlide(currentSlide_body + 1)
    });
    document.getElementById("nav-button--prev-body").addEventListener("click", () => {
        changeSlide(currentSlide_body - 1)
    });

    function changeSlide(moveTo) {
        if (moveTo >= slides.length) {
            moveTo = 0;
        }
        if (moveTo < 0) {
            moveTo = slides.length - 1;
        }

        slides_body[currentSlide_body].classList.toggle("active");
        navlinks_body[currentSlide_body].classList.toggle("active");
        slides_body[moveTo].classList.toggle("active");
        navlinks_body[moveTo].classList.toggle("active");

        currentSlide_body = moveTo;
    }

    document.querySelectorAll('.slider__navlink_body').forEach((bullet, bulletIndex) => {
        bullet.addEventListener('click', () => {
            if (currentSlide_body !== bulletIndex) {
                changeSlide(bulletIndex);
            }
        })
    })
})