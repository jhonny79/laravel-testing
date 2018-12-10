<template>
    <div id="asignar" class="modal modal-fixed-footer">
    <div class="modal-content">
      
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
    }
}
</script>
