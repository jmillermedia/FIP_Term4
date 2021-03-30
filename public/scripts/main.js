import { fetchData } from "../scripts/modules/DataMiner.js";
import { SendMail } from "../scripts/modules/Mailer.js";

const myVM = (() => {
    let vue_vm = new Vue({
        data: {
            clients: [],
            engages: [],
            events: [],
            executives: []
        },

        created: function () {
            console.log(`Vue's alive`)
        },

        mounted: function(){          
            fetchData("../includes/clients.php")
            .then(data => {
                data.forEach(client => this.clients.push(client));
                })
            .catch(err => console.log(err));

            fetchData("../includes/engage.php")
            .then(data => {
                data.forEach(engage => this.engages.push(engage));
                })
            .catch(err => console.log(err));



            fetchData("../includes/events.php")
            .then(data => {
                data.forEach(event => this.events.push(event));
                })
            .catch(err => console.log(err));



            fetchData("../includes/execs.php")
            .then(data => {
                data.forEach(executive => this.executives.push(executive));
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




    let mailSubmit = document.querySelector('#submitButton');

    function processMailFailure(result) {
        console.table(result);
        alert(result.message);
    }

    function processMailSuccess(result) {
        console.table(result);
        alert(result.message);
    }

    function processMail(event) {
        event.preventDefault();

        SendMail(this.parentNode)
            .then(data => processMailSuccess(data))
            .catch(err => processMailFailure(err));
    }

    mailSubmit.addEventListener("click", processMail);
})();