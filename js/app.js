
var app = new Vue({
    el: '#app',
    data() {
        return{
            e_p:'',
            pw: '',
            isErrEmail: false,
            isErrPassword: false,
            email_c:'',
            name_c:'',
            phone_c:'',
            password_c: '',
            isErrEmailCreate: false,
            isErrPasswordCreate: false,
            isErrPhoneCreate: false,
            isErrNameCreate: false,
        }
    },
    methods: {
        focusEmail() {
            if (this.isErrEmail == false) return;
            this.isErrEmail = false;
        },
        focusPassword() {
            if (this.isErrPassword == false) return;
            this.isErrPassword = false;
        },
        focusEmailCreate() {
            if (this.isErrEmailCreate == false) return;
            this.isErrEmailCreate = false;
        },
        focusPasswordCreate() {
            if (this.isErrPasswordCreate == false) return;
            this.isErrPasswordCreate = false;
        },
        focusNameCreate() {
            if (this.isErrNameCreate == false) return;
            this.isErrNameCreate = false;
        },
        focusPhoneCreate() {
            if (this.isErrPhoneCreate == false) return;
            this.isErrPhoneCreate = false;
        },
        email() {
            if (this.e_p.endsWith("@gmail.com")) return;
            if (!isNaN(this.e_p) && this.e_p.length == 10 && this.e_p.startsWith("06")) return;
            this.isErrEmail = true;
        },
        emailCreate() {
            if (this.email_c.endsWith("@gmail.com")) return;
            this.isErrEmailCreate = true;
        },
        password() {
            if (this.pw.length > 10) return;
            this.isErrPassword = true;
        },
        passwordCreate() {
            if (this.password_c.length > 10) return;
            this.isErrPasswordCreate = true;
        },
        nameCreate() {
            if (this.name_c.length > 10) return;
            this.isErrNameCreate = true;
        },
        phoneCreate() {
            if (!isNaN(this.phone_c) && this.phone_c.length == 10 && this.phone_c.startsWith("06")) return;
            this.isErrPhoneCreate = true;
        },
        send() {
            this.email();
            this.password();
        },
        create() {
            this.emailCreate();
            this.passwordCreate();
            this.nameCreate();
            this.phoneCreate();
        },
    },
    computed:{
        
    },
})