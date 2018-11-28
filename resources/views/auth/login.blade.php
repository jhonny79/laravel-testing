@extends('layouts.app')

@section('content')
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>

<div class="container">
        <div class="row card">
                
                <div class=" col s12 m12 l5 center offset-l1  ">
                        <div class="section ">
                                <h3 class=" card-title ">GI-CIIF</h3>
                                <p class="">CANTV</p>
                            </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                    
                                       <form method="POST" action="{{ route('login') }}" >
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col input-field s12 m12 l10 offset-l1 ">
                                                    <input type="text" id="email" name="email" >
                                                    <label for="email" >Correo</label>
                                                </div>
                                            </div>
                                
                                            <div class="row">
                                                <div class="col input-field s12 m12 l10 offset-l1 ">
                                                    <input type="password" id="password" name="password" >
                                                    <label for="password" >Contraseña</label>
                                                </div>
                                            </div>
                                
                                            <div class="row">
                                                <button class="btn large-btn s12">Ingresar</button>
                                            </div>
                                       </form>
                            </div>
                        </div>
                    </div>
                    <div class="co s12 m12 l7 offset-l1 center card-title">
                        <div class="section"></div>
                        <div class="section"></div>
                        <div class="section"></div>
                        @if ($errors->has('password'))
                                    <span >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        
                        <div class="section"></div>
                        
                        <span><strong>Coordinación de investigación de informática forense</strong></span>
                    </div>
        </div>
</div>
@endsection
