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

    let burgerButton = document.querySelector('.burgerButton')

    function burgerMenuExpand(){
        document.querySelector('.burgerButton').classList.toggle('closeBurger');
    }

    burgerButton.addEventListener('click', burgerMenuExpand);
})();