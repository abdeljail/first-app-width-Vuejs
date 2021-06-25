Vue.component('app-header',{
    data: function() {
        return {
        }
    },
    methods: {
    },
    template:
            /* html*/
            `
                <header class="py-3 border-bottom bg-white">
                    <div class="container">
                        <div class="content-header d-flex align-items-center justify-content-between">
                            <div class="logo">
                                <a href="#">
                                    <h1 class="text-capitalize h1">app</h1>
                                </a>
                            </div>
                            <div class="nav">
                                <nav class="d-flex align-items-center">
                                    <div class="btn-in">
                                       <a class="px-4 py-2 mx-2 rounded btn-primary text-capitalize h6" href="./">sing in</a>
                                    </div>
                                    <div class="btn-up ">
                                       <a class="px-4 py-2 mx-2 rounded btn-success text-capitalize h6"  href="./create.php">sing up</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>
            `
});