(function () {
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('#' + burger.dataset.target);
    burger.addEventListener('click', function () {
        burger.classList.toggle('is-active');
        nav.classList.toggle('is-active');
    });
})();

document.querySelectorAll('.modal-button').forEach(function (el) {
    el.addEventListener('click', function () {
        var target = document.querySelector(el.getAttribute('data-target'))

        target.classList.add('is-active')

        target.querySelector('.modal-close').addEventListener('click', function () {
            target.classList.remove('is-active')
        })
    })
})
