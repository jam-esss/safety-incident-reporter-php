const forms = document.querySelectorAll('form');
const successMessage = document.getElementById('successMessage');

forms.forEach((form) => {
    form.addEventListener('submit', function (event) {

        form.classList.add('was-validated');

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            return;
        }

        if (successMessage) {
            event.preventDefault();

            form.style.display = 'none';
            successMessage.style.display = 'block';
        }
    });
});