import Vue from 'vue'
import axios from 'axios'
import toastr from 'toastr'

var collapsible = function (){
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  }


const enlace = new Vue()


Vue.component('panel', {
    template: ` 
                <div class="row"> 
                    <template v-if="usuario.cargo === 'coordinador'">
                        <admin :usuario="usuario"></admin>
                    </template>
                    <template v-if="usuario.cargo === 'especialista'">
                        hola especialista
                    </template>

                </div>`,
    created: function () {
        this.getUser()
        console.log('se ejecuta el created de panel')
      
    },
    data (){
        return {
            usuario: {},
            
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
})


Vue.component('admin', {
    props: ['usuario'],
    created: function (){
        this.obtenerSolicitudes()
        collapsible()
         console.log('se ejecuta el created de admin')

         
    },
    mounted() {
        this.obtenerSolicitudes()
         collapsible()
         
             console.log('se ejecuta el mounted')
        },
        data () {
            return {
                solicitudes: []
            }
        },
        methods: {
            obtenerSolicitudes: function (){

                var url = '/solicitudes'

                axios.get(url).then( response => {
                    this.solicitudes = response.data
                    console.log(this.solicitudes)
                }).catch( (error) => {
                 toastr.error('exploto')
                console.log(error)
            })

            }
        },
    template: `<div class="col s12 m12 l12">
                            <div class="col s12 m12 l3">
                                <ul class="collapsible ">
                                    <li>
                                    <div class="collapsible-header"><i class="material-icons">email</i>Nuevas Solicitudes</div>
                                    <div class="collapsible-body white">
                                        <ul class="">
                                                <li class="collection-item hoverable" v-for="solicitud in solicitudes">
                                                    <div class="card-panel blue-text text-darken-2">
                                                        <p>de: {{ solicitud.de }}</p>
                                                        <span class="title">asunto:</span>
                                                        <p class="truncate "> {{ solicitud.asunto }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col s12 m12 l3">
                                <ul class="collapsible">
                                    <li>
                                    <div class="collapsible-header"><i class="material-icons">email</i>Asignados</div>
                                    <div class="collapsible-body white">
                                        <ul class="">
                                            <li class="collection-item "><div class="card-panel blue-text text-darken-2"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                                        
                                        </ul>
                                    </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col s12 m12 l3">
                                <ul class="collapsible">
                                    <li>
                                    <div class="collapsible-header"><i class="material-icons">email</i>Cerrados</div>
                                    <div class="collapsible-body white">
                                        <ul class="">
                                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                                        
                                        </ul>
                                    </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col s12 m12 l3">
                                <ul class="collapsible">
                                    <li>
                                    <div class="collapsible-header"><i class="material-icons">email</i>Por Cerrar</div>
                                    <div class="collapsible-body">
                                        <ul class="">
                                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                                        
                                        </ul>
                                    </div>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                `,
})

















 new Vue({
    el: '#app',
    
    
});



