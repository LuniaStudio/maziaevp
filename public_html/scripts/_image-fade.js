const imgElements = document.querySelectorAll('[role="img"]');

const observer = new IntersectionObserver((entries) => {

    for (const entry of entries) {

        if (entry.isIntersecting) {

            entry.target.classList.add('fade-in');
        }
    }
});

for (const imgElement of imgElements) {

    observer.observe(imgElement);
}

imgElements.forEach((imgElement) => {

    imgElement.classList.add('fade-out');
});
