

new Vue({
    el: '#admin',
    data: {
        login: '',
        password: '',
        visibility: false,
        confirmed: false,
    },
    methods: {
        checked: function(){
            if(this.login == '111' && this.password == '111') this.visibility = true;
        },
        ConfirmedActive: function(){
             this.confirmed = true;
        }
    },
    computed: {}
})