<template>
    
    <div class="col s12 m12 l12">
            <div class="col s12 m12 l12">
                <p>Gestión de: {{ user.name }} - Cargo: {{ user.cargo }}</p> 
            </div>
			<div class="col s12 m12 l3">
				<ul class="collapsible ">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">email</i>Nuevas Solicitudes</div>
				        <div class="collapsible-body white">
                            <article class="card-panel hoverable" v-for="solicitud in solicitudes">
                                
                                <p class=" grey-text text-darken-2">
                                    <strong>de:</strong><br> {{ solicitud.de }}
                                </p>
                                <span class="title  grey-text text-darken-2 truncate">
                                    <strong>asunto:</strong><br> {{ solicitud.asunto }} <br>

                                    <strong>Fecha:</strong><br> {{ solicitud.created_at }} 
                                </span>
                                <div class="section"></div>
                                <div class="divider"></div>
                                <div class="section"></div>
                                <a class="btn-small tooltipped modal-trigger" href="#detail" @click="alDetalle(solicitud)" data-position="top" data-tooltip="Ver Detalle">
                                	<i class="material-icons">search</i>
                                </a>

                                <a class="btn-small tooltipped modal-trigger" href="#asignar" @click="AsignarCaso(solicitud)" data-position="top" data-tooltip="Asignar">
                                	<i class="material-icons">local_offer</i>
                                </a>

                                <a class="tooltipped btn-small" data-position="top" data-tooltip="Rechazar">
                                	<i class="material-icons">cancel</i>
                                </a>
                            </article>
                           
                        </div>
				    </li>
  				</ul>
			</div>

			<div class="col s12 m12 l3">
				<ul class="collapsible">
				     <li>
				      <div class="collapsible-header" ><i class="material-icons">email</i>Casos Asignados</div>
				        <div class="collapsible-body white" v-if="asignados != 0">
                            <article class="card-panel hoverable" v-for="asignado in asignados" >
                                
                                <p class=" grey-text text-darken-2">
                                    <strong>de:</strong><br> {{ asignado.de }}
                                </p>
                                <span class="title  grey-text text-darken-2 truncate">
                                    <strong>asunto:</strong><br> {{ asignado.asunto }} <br>

                                    <strong>Fecha:</strong><br> {{ asignado.created_at }} 
                                </span>
                                <div class="section"></div>
                                <div class="divider"></div>
                                <div class="section"></div>
                                <a class="btn-small tooltipped modal-trigger" href="#detail" @click="alDetalle(asignado)" data-position="top" data-tooltip="Ver Detalle">
                                	<i class="material-icons">search</i>
                                </a>

                                <a class="btn-small tooltipped modal-trigger" href="#asignar" @click="AsignarCaso(asignado)" data-position="top" data-tooltip="Asignar">
                                	<i class="material-icons">local_offer</i>
                                </a>

                                <a class="tooltipped btn-small" data-position="top" data-tooltip="Rechazar">
                                	<i class="material-icons">cancel</i>
                                </a>
                            </article>
                            
                                    
                            
                        </div>
                        <div class="collapsible-body white" v-else >
                            <p >NO HAY CASOS ASIGNADOS ACTUALMENTE</p>
                        </div>
				    </li>
  				</ul>
			</div>

            <div class="col s12 m12 l3">
				<ul class="collapsible">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">email</i>Cerrados</div>
				      <div class="collapsible-body">
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
            <detail></detail>
            <asignar></asignar>
           
	</div>
</template>

<script>

import axios from 'axios'

import toastr from 'toastr'

import {enlace} from '../components/EventBus.js'

import Detail from '../components/Detail.vue'
import Asignar from '../components/Asignar.vue'

var collapsible = function (){
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
}
var tooltip = function(){
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);
}

var modal = function (){
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
}

export default {
    
    components: {Detail, Asignar},

    created: function (){
        tooltip()
        this.obtenerCasosAsignados()
        this.obtenerSolicitudes()
         console.log('se ejecuta el created de admin')

         
    },

    updated: function (){
        modal()
        tooltip()
        console.log('se ejecuta el beforeUpdate de admin')
    },

    mounted: function() {
        
        collapsible()
        tooltip()
             console.log('se ejecuta el mounted')
        },

        props: {
        user: {type: Object}
        },

        data () {
            return {
                solicitudes: {},
                asignados: {}
            }
        },

        methods: {
            obtenerSolicitudes: function (){

                var url = '/solicitudes'

                axios.get(url).then( response => {
                    this.solicitudes = response.data
                    console.log(this.solicitudes)
                     tooltip()
                }).catch( (error) => {
                 toastr.error('exploto')
                console.log(error)
            })

            },

            obtenerCasosAsignados: function (){
                var url = '/asignados'

                axios.get(url).then( response => {
                    this.asignados = response.data
                    console.log(this.asignados)
                     
                }).catch( (error) => {
                    this.asignados = 0
                 toastr.error('No tiene casos pendientes')
                console.log(error)
            })
            },

            alDetalle: function (solicitud){
                // console.log('componente admin emitiendo evento para ser escuchado')
                // console.log(solicitud)
                enlace.$emit('alDetalle:click', solicitud)
            },

            AsignarCaso: function (solicitud){
                // console.log('componente admin emitiendo evento para ser escuchado')
                // console.log(solicitud)
                enlace.$emit('AsignarCaso:click', solicitud)
            }
        },
}
</script>
