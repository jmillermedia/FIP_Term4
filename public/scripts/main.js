import { fetchData } from "./scripts/modules/DataMiner.js";

(() => {
    console.log('fired!');
    const vm = new Vue({
        data: {
            clients: [],
            engages: [],
            events: [],
            executives: []
            // homeimages: [],
            // aboutimages: [],
            // membersimages: [],
            // trainimages: [],
            // contactimages: []
        },

        created: function () {
            console.log(`Vue's alive`)
        },

        mounted: function(){

            //EXAMPLE OF HOW TO USE THESE IN THE VIEWS TO PROPERLY GET DATA FROM THE DB

            //<div v-for="client, index in clients">
            //<img :src='"images/" + client.clients_image' alt="Insert what you want" id="Insert what you want">
            //<h2>{{client.clients_name}}</h2>
            //<h3>{{client.clients_role}}</h3>
            //<p>{{client.clients_message}}</p>
            //</div>

            //reference db for correct field names

            // NOTE TO SELF ************ GET INFO FROM JAG FOR DB ************************

            fetchData("./includes/clients.php")
            .then(data => {
                data.forEach(client => this.clients.push(client));
                })
            .catch(err => console.log(err));



            fetchData("./includes/engage.php")
            .then(data => {
                data.forEach(engage => this.engages.push(engage));
                })
            .catch(err => console.log(err));



            fetchData("./includes/events.php")
            .then(data => {
                data.forEach(event => this.events.push(event));
                })
            .catch(err => console.log(err));



            fetchData("./includes/execs.php")
            .then(data => {
                data.forEach(executive => this.executives.push(executive));
                })
            .catch(err => console.log(err));




            // fetchData("./includes/home.php")
            // .then(data => {
            //     data.forEach(image => this.homeimages.push(image));
            //     })
            // .catch(err => console.log(err));

            // fetchData("./includes/about.php")
            // .then(data => {
            //     data.forEach(image => this.aboutimages.push(image));
            //     })
            // .catch(err => console.log(err));

            // fetchData("./includes/members.php")
            // .then(data => {
            //     data.forEach(image => this.membersimages.push(image));
            //     })
            // .catch(err => console.log(err));

            // fetchData("./includes/train.php")
            // .then(data => {
            //     data.forEach(image => this.trainimages.push(image));
            //     })
            // .catch(err => console.log(err));

            // fetchData("./includes/contact.php")
            // .then(data => {
            //     data.forEach(image => this.contactimages.push(image));
            //     })
            // .catch(err => console.log(err));

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