
document.addEventListener("DOMContentLoaded", function (event) {
    // modal
    const modal = document.querySelector('.modal');
    const modalBtn = document.querySelectorAll('[data-toggle=modal]');
    const closeBtn = document.querySelector('.modal__close');
    const switchModal = () => {
        modal.classList.toggle('modal--visible');
    }
    modalBtn.forEach(element => {
        element.addEventListener('click', switchModal);
    });
    closeBtn.addEventListener('click', switchModal);

    // slider
    var mySwiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.review-pagination',
            bulletClass: 'review-bullet',
            bulletActiveClass: 'review-bullet-active',
            clickable: true
        },
    });

    // wowJS
    new WOW().init();

});
