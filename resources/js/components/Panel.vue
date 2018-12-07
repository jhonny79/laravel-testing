<template>
    <div class="row">
		<!-- <admin ></admin> -->
        <template v-if="usuario.cargo === 'coordinador'">
            <admin></admin>
        </template>
        <template v-if="usuario.cargo === 'especialista'">
            hola especialista
        </template>

	</div>
</template>

<script>

import {enlace} from './EventBus.js'
import Admin from '../components/Admin.vue'
import User from '../components/User.vue'
import axios from 'axios'
import toastr from 'toastr'



    export default {
        created: function () {
            this.getUser()
            this.emitirUsuario()
            console.log('se ejecuta el created de panel')
          
        },
        components:{
            Admin,
            User
        },
        data (){
            return {
                usuario: { },
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
            emitirUsuario: function (){
                enlace.$emit('panel:change')
                console.log('hola admin')
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
