(() => {
    let joinButton = document.querySelectorAll('.training__card--join'),
        signUpForm = document.querySelector('.joinForm'),
        signUpFormClose = document.querySelector('.joinForm__close');

    function openForm() {
        signUpForm.classList.toggle('hidden');
        document.body.style.overflowY = 'hidden';
    }

    function closeForm() {
        signUpForm.classList.toggle('hidden');
        document.body.style.overflowY = 'scroll';
    }

    joinButton.forEach(button => button.addEventListener('click', openForm));

    signUpFormClose.addEventListener('click', closeForm);
})();