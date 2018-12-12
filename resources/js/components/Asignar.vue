<template>
    <div id="asignar" class="modal modal-fixed-footer">
    <form action="POST" @submit.prevent="generarAsignacion">
        <div class="modal-content">
        
                            
            <div class="row">
                <div class="input-field col s12 m12 l4 offset-l1">
                    <select v-model="user">
                        <option value="" disabled selected>Seleccionar</option>
                         <option :value="user.email" v-for="user in users">{{ user.nombre }}</option>
                    </select>
                        <label>Asignar A</label>
                </div>

                <div class="input-field col s12 m12 l5 ">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Consideraciones</label>
                </div>
            </div>
                                    
                        
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>Detalles del caso</div>
                    <div class="collapsible-body">
                         <h6>Asunto : </h6>  <p>{{ solicitud.asunto }}</p>
                        <h6>De : {{ solicitud.de }}</h6>
                        <h6>Fecha : {{ solicitud.created_at }}</h6>
                        <p>{{ solicitud.cuerpo }}</p>
                    </div>
                </li>
            </ul>

        </div>
            <div class="modal-footer">
                <button type='submit' name='btn_login' class='modal-close btn-flat waves-effect waves-green'> Asignar <i class="material-icons prefix right">chevron_right</i></button> 
            <button  class="modal-close waves-effect waves-green btn-flat">Cerrar</button>
            </div>
    </form> 
  </div>
</template>
<script>

import toastr from 'toastr'
import {enlace} from '../components/EventBus.js'


export default {
    created: function (){
        enlace.$on('AsignarCaso:click', (solicitud) => {
            console.log('se ha detectado una solicitud de Asignación')
            console.log(solicitud)
            this.solicitud = solicitud
        })
    },
    data() {
        return {
            formulario: {
                correlativo: null,
                responsable: null,
                anotaciones: null,
            },
            solicitud: {},
            users: [
                { nombre: 'José Baptista', cargo: 'especialista', email: 'jbapti01@cantv.com.ve'},
                { nombre: 'Felix Minoniz', cargo: 'especialista', email: 'jminon01@cantv.com.ve'},
            ]
        }
    },
    methods: {
        generarAsignacion(){
            console.log('generando')
            toastr.success('Caso aginado con exito')
            toastr.success('Notificando via email: ')
        }
    }
}
</script>
