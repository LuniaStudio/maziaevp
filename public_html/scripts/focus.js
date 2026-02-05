const tag = document.querySelector('[name="name"]');
const box = document.getElementById('contact');

window.addEventListener('scroll', function() {

    if (window.innerWidth > '767') {

        box.getBoundingClientRect().top <= 0 && tag.focus()
    }
});
