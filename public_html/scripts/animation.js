const tags = document.querySelectorAll('[data-animate]');

window.addEventListener('scroll', animate);
window.addEventListener('load', animate);

function animate() {

    const triggerBottom = window.innerHeight / 5 * 4.5;

    tags.forEach(tag => {

        const tagTop = tag.getBoundingClientRect().top

        if (tag.hasAttribute('data-animate-delay')) {

            let delay = tag.getAttribute('data-animate-delay');

            setTimeout(() => {

                toggleClass(triggerBottom, tagTop, tag);

            }, delay);

            delay = 0;

        } else {

            toggleClass(triggerBottom, tagTop, tag);
        }
    })
}

function toggleClass(triggerBottom, tagTop, tag) {

    if (tagTop < triggerBottom) {

        tag.classList.add('show');

    } else {

        tag.classList.remove('show');
    }
}

