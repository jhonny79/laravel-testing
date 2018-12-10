<template>
    <div class="row">
		<!-- <admin ></admin> -->
        <template v-if="usuario.cargo === 'coordinador'">
            <admin :user="usuario"></admin>
        </template>
        <template v-if="usuario.cargo === 'especialista'">
            hola especialista
        </template>

	</div>
</template>

<script>


import Admin from '../components/Admin.vue'
import User from '../components/User.vue'
import axios from 'axios'
import toastr from 'toastr'



    export default {
        created: function () {
            this.getUser()
            
            console.log('se ejecuta el created de panel')
          
        },
        components:{
            Admin,
            User
        },
        data (){
            return {
                usuario: {},
                tickets: [
                   
                ]
            }
        },
        methods: {
            getUser: function (){
                var url = 'user'

                //obtener usuario logueado
                axios.get(url).then(response => {
                    
                    this.usuario = response.data
                    console.log(this.usuario)
                }).catch( (error) => {
                     toastr.error('exploto')
                    console.log(error)
                })
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
