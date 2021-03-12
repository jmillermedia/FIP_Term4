import { fetchData } from "./scripts/modules/DataMiner.js";

(() => {
    console.log('fired!');
    const vm = new Vue({
        data: {
            homeimages: [],
            aboutimages: [],
            membersimages: [],
            trainimages: [],
            contactimages: []
        },

        created: function () {
            console.log(`Vue's alive`)
        },

        mounted: function(){
            fetchData("./includes/home.php")
            .then(data => {
                data.forEach(image => this.homeimages.push(image));
                })
            .catch(err => console.log(err));

            fetchData("./includes/about.php")
            .then(data => {
                data.forEach(image => this.aboutimages.push(image));
                })
            .catch(err => console.log(err));

            fetchData("./includes/members.php")
            .then(data => {
                data.forEach(image => this.membersimages.push(image));
                })
            .catch(err => console.log(err));

            fetchData("./includes/train.php")
            .then(data => {
                data.forEach(image => this.trainimages.push(image));
                })
            .catch(err => console.log(err));

            fetchData("./includes/contact.php")
            .then(data => {
                data.forEach(image => this.contactimages.push(image));
                })
            .catch(err => console.log(err));

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