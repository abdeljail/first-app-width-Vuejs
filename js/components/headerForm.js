Vue.component('header-form', {
    data: function () {
        return {

        }
    },
    props:["content","cl"],
    template:
        /* html*/
        `
            <div class="header-form px-3 py-2 border-bottom" >
                <h2 v-text=content class="text-capitalize" :class="cl"></h2>
            </div>
        `
});