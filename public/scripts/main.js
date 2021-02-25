(() => {
    console.log('fired!');
    const vm = new Vue({
        data: {
        },

        created: function () {
            console.log(`Vue's alive`)
        },

        methods: {
        },

        components: {
        },
    }).$mount('#app');

    let burgerButton = document.querySelector('.burgerButton'),
        mobileNav = document.querySelector('.nav__mobile');

    function burgerMenuExpand(){
        document.querySelector('.burgerButton').classList.toggle('closeBurger');
        mobileNav.classList.toggle('hidden');
    }

    burgerButton.addEventListener('click', burgerMenuExpand);
})();