<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>vuejs</title>
</head>

<body>
    <div id="app">
        <app-header></app-header>
        <div class="form-up">
            <div class="container">
                <div class="content-form d-flex justify-content-center align-items-center">
                    <div class="form rounded border bg-white">
                        <header-form content="sing up" cl="text-success"></header-form>
                        <div class="body px-3 py-3">
                            <div class="l-n form-group position-relative">
                                <img src="./image/warn.png" alt="image" class="position-absolute" :class="{show:isErrNameCreate}">
                                <label for="l-n" class="text-muted d-block text-capitalize">full name</label>
                                <input @focus="focusNameCreate()" type="text" class=" bg-light p-2 w-100 rounded border" :class="{'border-danger':isErrNameCreate}" v-model=name_c id="l-n">
                            </div>
                            <div class="e-n form-group position-relative">
                                <img src="./image/warn.png" alt="image" class="position-absolute" :class="{show:isErrEmailCreate}">
                                <label for="e-n" class="text-muted d-block text-capitalize">email</label>
                                <input @focus="focusEmailCreate()" type="text" class="bg-light p-2 w-100 rounded border" :class="{'border-danger':isErrEmailCreate}" v-model=email_c id="e-n">
                            </div>
                            <div class="p-n form-group position-relative">
                                <img src="./image/warn.png" alt="image" class="position-absolute" :class="{show:isErrPhoneCreate}">
                                <label for="p-n" class="text-muted d-block text-capitalize">number phone</label>
                                <input @focus="focusPhoneCreate()" type="text" class=" bg-light p-2 w-100 rounded border" :class="{'border-danger':isErrPhoneCreate}" v-model=phone_c id="p-n">
                            </div>
                            <div class="p-n form-group position-relative">
                                <img src="./image/warn.png" alt="image" class="position-absolute" :class="{show:isErrPasswordCreate}">
                                <label for="p" class="text-muted d-block text-capitalize">password</label>
                                <input @focus="focusPasswordCreate()" type="password" class=" bg-light p-2 w-100 rounded border" :class="{'border-danger':isErrPasswordCreate}" v-model=password_c id="p">
                            </div>
                        </div>
                        <div class="footer-form px-2 py-3 border-top">
                            <button @click="create()" class="px-3 py-2 btn w-100 text-uppercase btn-success">create account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <app-footer></app-footer>
    </div>
</body>
<script src="./js/components/header.js"></script>
<script src="./js/components/headerForm.js"></script>
<script src="./js/components/footer.js"></script>
<script src="./js/app.js"></script>

</html>