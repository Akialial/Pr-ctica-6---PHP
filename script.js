
const form = document.querySelector('form');
const formInputs = document.querySelectorAll('.form-input');

form.addEventListener('submit', function (event) {
    event.preventDefault(); 

    formInputs.forEach((input, index) => {
        input.classList.add('animate-input');
        input.style.animationDelay = `${index * 0.1}s`;
    });

    setTimeout(() => {
        formInputs.forEach((input) => {
            input.classList.remove('animate-input');
        });
    }, 1000);
});