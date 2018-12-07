<template>
    <div class="col s12 m12 l12">

			<div class="col s12 m12 l3">
				<ul class="collapsible ">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">email</i>Nuevas Solicitudes<span class="new badge">4</span></div>
				      <div class="collapsible-body white">
                          <ul class="">
                                <li class="collection-item hoverable">
                                    <div class="card-panel blue-text text-darken-2">
                                        <p>de: jbapti01@cantv.com.ve</p>
                                            <span class="title">asunto:</span>
                                            <p class="truncate "> hola como estan miren necesito un ayuda con estas ips hola como estan miren necesito un ayuda con estas ips hola como estan miren necesito un ayuda con estas ips hola como estan miren necesito un ayuda con estas ips</p>
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
                            <li class="collection-item "><div class="card-panel blue-text text-darken-2"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                            <li class="collection-item "><div class="card-panel blue-text text-darken-2"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                            <li class="collection-item "><div class="card-panel blue-text text-darken-2"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
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
                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
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
                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                            <li class="collection-item "><div class="card-panel"> <p>de: jbapti01@cantv.com.ve</p>   <span class="title">asunto:</span><p> hola como estan miren necesito un ayuda con estas ips</p></div></li>
                        </ul>
                      </div>
				    </li>
  				</ul>
			</div>
            <div class="col s12 m12 l12">
                <pre>{{ $data }}</pre>
            </div>
		</div>
</template>

<script>
import {enlace} from './EventBus.js'
import axios from 'axios'
import toastr from 'toastr'
 var collapsible = function (){
      var elems = document.querySelectorAll('.collapsible');
      var instances = M.Collapsible.init(elems);
    }

export default {
    created (){
        collapsible()
         console.log('se ejecuta el created de admin')

         enlace.$on('panel:change', () => {
             console.log('panel te saluda')
         })
    },
    mounted() {
         collapsible()
         enlace.$on('panel:change', () => {
             console.log('panel te saluda')
         })
             console.log('se ejecuta el mounted')
        },
        data () {
            return {
                usuario: {}
            }
        }
}
</script>
