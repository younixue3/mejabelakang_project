// Vue.component('modal', {
//     template: '<button v-on:click="testaja()"class="h-10 w-10 mx-1 px-3 bg-red-500 hover:bg-red-600 hover:bg-red-600 text-white rounded-lg"><iclass="fas fa-trash-alt"></i></button>',
//     data() {
//         return {

//         }
//     },
//     methods: {
//         testaja: function(id) {
//             console.log(id)
//         }
//     }
// });

var app = new Vue({
    el: '#appJs',
    // data() {
    //     return {
    //         hideModal: true
    //     }
    // },
    methods: {
        testaja(event){
            console.log(event.target)
        }
    }
})