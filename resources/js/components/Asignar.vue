<template>
    <div id="asignar" class="modal modal-fixed-footer">
    <div class="modal-content">
        <form action="POST" @submit.prevent="nuevaEntrada">
                        <div class="modal-content">
                            <div class="row">
                                <div class="input-field col s12 m12 l6 offset-l3">
                                    <input type="text"  id="placa" class="validate">
                                    <label for="placa">Placa del Vehículo</label>
                                </div>
                            </div>
                            <div class="row center">
                                <div class="input-field col s12 m12 l6 offset-l3">
                                        <input type="text"  id="marca" class="validate">
                                        <label for="marca">Marca del Vehículo</label>
                                </div>
                            </div>
                            <div class="row">
                                <button type='submit' name='btn_login' class='modal-close col s12 m12 l6 offset-l3 btn btn-large waves-effect waves-light indigo accent-4'>
                                    Asignar <i class="material-icons prefix right">chevron_right</i>
                                </button> 
                            </div>
                        </div>
                    </form> 
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Detalles del caso</div>
                <div class="collapsible-body">
                    <h4>Asunto : {{ solicitud.asunto }}</h4>
                    <h6>De : {{ solicitud.de }}</h6>
                    <h6>Fecha : {{ solicitud.created_at }}</h6>
                    <p>{{ solicitud.cuerpo }}</p>
                </div>
            </li>
        </ul>

    </div>
    <div class="modal-footer">
      
      <button  class="modal-close waves-effect waves-green btn-flat">Cerrar</button>
    </div>
  </div>
</template>
<script>

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
            solicitud: {}
        }
    },
    methods: {
        generarAsignacion(){
            consolelog('generando')
        }
    }
}
</script>
