<template>
    <div class="row">
		<div class="col s12 m12 l12">
			<div class="col s12 m12 l3">
				<ul class="collapsible ">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">email</i>Tikects Nuevos</div>
				      <div class="collapsible-body white">
                          <ul class="collection">
                            
                            <li class="collection-item">Alvin</li>
                            <li class="collection-item">Alvin</li>
                            <li class="collection-item">Alvin</li>
                            <li class="collection-item">Alvin</li>
                        </ul>
                          
                          </div>
				    </li>
  				</ul>
			</div>

			<div class="col s12 m12 l3">
				<ul class="collapsible">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">email</i>Asignados</div>
				      <div class="collapsible-body white"><span>Lorem ipsum dolor sit amet.</span></div>
				    </li>
  				</ul>
			</div>

			<div class="col s12 m12 l3">
				<ul class="collapsible">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">email</i>Cerrados</div>
				      <div class="collapsible-body white"><span>Lorem ipsum dolor sit amet.</span></div>
				    </li>
  				</ul>
			</div>

			<div class="col s12 m12 l3">
				<ul class="collapsible">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">email</i>Por Cerrar</div>
				      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				    </li>
  				</ul>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        data (){
            return {
                usuario: {},
                tareas: [
                    { id: '1', asunto: 'hola jose' , de: 'departamento X', para: 'jose'},
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
