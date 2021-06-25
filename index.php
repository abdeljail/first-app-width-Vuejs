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
                        <header-form content="sing in" cl="text-primary"></header-form>
                        <div class="body px-3 py-3 ">
                            <div class="f-n form-group position-relative">
                                <img src="./image/warn.png" alt="image" class="position-absolute" :class="{show:isErrEmail}">
                                <label for="e-p" class="text-muted d-block text-capitalize">email <span class="text-lowercase">or</span> phone</label>
                                <input @focus="focusEmail()" type="text" v-model="e_p" class="p-3 w-100 rounded border bg-light" ref="search" :class="{'border-danger':isErrEmail}" id="e-p">
                            </div>
                            <div class="f-n form-group position-relative">
                                <img src="./image/warn.png" alt="image" class="position-absolute" :class="{show:isErrPassword}">
                                <label for=" pd" class="text-muted d-block text-capitalize">password</label>
                                <input @focus="focusPassword()" v-model="pw" type="password" class="p-3 w-100 rounded border bg-light" id="pd" :class="{'border-danger':isErrPassword}">
                            </div>
                        </div>
                        <div class="footer-form px-2 py-3 border-top">
                            <button @click="send()" class="px-3 py-2 btn w-100 text-uppercase btn-primary">login</button>
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