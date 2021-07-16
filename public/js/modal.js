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
    data: {
        isHidden: 'hidden'
    },
    methods: {
        openModal(event){
            var modals_rd = document.getElementById('modals_rd')
            if (modals_rd.classList.contains('hidden')) {
                modals_rd.classList.remove('hidden')
            } else {
                modals_rd.classList.add('hidden')
            }
            console.log(event.target.dataset.target)
            var id = document.getElementById('id_destroy')
            id.value = event.target.dataset.target
        },
        closeModal(){
            // console.log('eek')
            var modals_rd = document.getElementById('modals_rd')
            modals_rd.classList.add('hidden')
            var id = document.getElementById('id_destroy')
            id.value = null
        },

        openImg(event){
            console.log(event.target.dataset.target)
            var modals_rd = document.getElementById('modals_rd')
            var modals_img = document.getElementById('image_modal')
            var link_gallery = document.getElementById('link_gallery')
            link_gallery.href = event.target.dataset.target
            modals_img.src = event.target.src
            if (modals_rd.classList.contains('hidden')) {
                modals_rd.classList.remove('hidden')
            } else {
                modals_rd.classList.add('hidden')
            }
        },
        
        closeImg(){
            var modals_rd = document.getElementById('modals_rd')
            var modals_img = document.getElementById('image_modal')
            var link_gallery = document.getElementById('link_gallery')
            modals_rd.classList.add('hidden')
            link_gallery.href = null
            modals_img.src = null
        }
    }
})