<template>
    <div id="detail" class="modal modal-fixed-footer">
    <div class="modal-content">
     <h4>Asunto : <p>{{ solicitud.asunto }}</p></h4>  
      <h6>De : {{ solicitud.de }}</h6>
      <h6>Fecha : {{ solicitud.created_at }}</h6>
      <p>{{ solicitud.cuerpo }}</p>


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
        enlace.$on('alDetalle:click', (solicitud) => {
            console.log('se ha detectado una solicitud de detalle')
            console.log(solicitud)
            this.solicitud = solicitud
        })
    },
    mounted: function (){
        console.log('mounted Detail')
    },
    data() {
        return {
            solicitud: {}
        }
    }
}
</script>

