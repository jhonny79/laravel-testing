@extends('layouts.app')

@section('content')
<div class="">
   <div class="row">
      <div class="col s12 m12 l12">
          <div class="section">
              <h6><strong>Nuevas Solicitudes</strong></h6>
          </div>
          <div class="col s12 m12 l12" >
                    <table class="centered responsive-table">
              <thead>
                  <th colspan="2">&nbsp;</th>
                  <th>ID</th>
                  <th>Solicitante</th>
                  <th>Asunto</th>
                  <th>Cuerpo</th>
              </thead>
              <tbody>
                  
                  @foreach ($aMessage as $oMessage)
                          <tr>  
                                <td><a action=""><i class="material-icons">search</i></a></td>
                                <td><a action=""><i class="material-icons">add</i></a></td>
                                <td>{{$oMessage->getUid()}}</td>
                                <td>{{$oMessage->getFrom()[0]->mail}}</td>
                                <td><strong>{{$oMessage->getSubject()}}</strong></td>
                                <td>{{$oMessage->getDate()}}</td>
                                
                          </tr> 
                  @endforeach
                  
              </tbody>
          </table>
          </div>
          
      </div>
      
      <div class="center ">
        {{$aMessage->links()}}
      </div>
   </div>
</div>
@endsection
