<div>
    
    <div class="container px-4 text-center">
        <br><br>
        <div class="row gx-5">
            <div class="col">
                @if ($ae_status == 0)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h4><b>¡Participa hasta el 12 de noviembre!</b></h4>
                        <br>
                        <h2>Regístrate, vuélvete socio y participa por: <br><b style="color: #85D7FD">Dos entradas a la final de la Liga Pro</b></h2>
                        <img src="{{asset('/Imgs/vs.png')}}" alt="" width="300px" >
                        <br>
                        <h3>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h3>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta">
                                <b>ABRIR CUENTA</b>
                            </button>
                        </div>
                    </div>
                @elseif($ae_status == 1)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>1.- ¿Vienes referido de algún conocido? *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                                wire:model="ae_statusReferido" id="ae_statusReferido">
                                <option value="0" selected>-- Seleccionar una opción --</option>
                                <option value="1">SÍ</option>
                                <option value="2">NO</option>
                            </select>
                            @if($var_msg == true)
                                <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 2)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>Ingresa el número de cédula de la persona que te refirio *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="text" class="form-control" id="cedReferncia" placeholder="Ingresar datos..."
                                    wire:model="ae_cedulaReferido">
                            @if($var_msg == true)
                                <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 3)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>2.- Número de cédula *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="text" class="form-control" id="cedula" placeholder="Ingresar datos..."
                                wire:model="ae_cedula">
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 4)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>3.- Nombre completo *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresar datos..."
                                wire:model="ae_nombreCompleto">
                            @if($var_msg == true)
                                <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 5)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>4.- Fecha de nacimiento *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <input type="date" class="form-control" id="fechaNaci" wire:model="ae_fechaNacimiento">
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 6)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>5.- Estado civil  *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" wire:model='ae_estadoCivil'>
                                <option value="0" selected>-- Seleccionar una opción --</option>
                                <option value="1">Solter@</option>
                                <option value="2">Casad@</option>
                                <option value="3">Divorsiad@</option>
                                <option value="4">Viud@</option>
                            </select>
                            @if($var_msg == true)
                                <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 7)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>6.- ¿Vives en Quito? *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" wire:model='ae_viveQuito'>
                                <option value="0" selected>-- Seleccionar una opción --</option>
                                <option value="1">SÍ</option>
                                <option value="2">NO</option>
                            </select>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 8)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>6.- Ciudad de residencia *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="text" class="form-control" id="ciudadResidencia" placeholder="Ingresar datos..." wire:model='ae_ciudadResidencia'>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        {{-- <div class="d-grid gap-2 col-4 mx-auto">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" wire:model='ae_ciudadResidencia'>
                                <option value="0" selected>-- Seleccionar una opción --</option>
                                <option value="1">SÍ</option>
                                <option value="2">NO</option>
                            </select>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div> --}}
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 9)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>7.- Calle principal *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="text" class="form-control" id="calleP" placeholder="Ingresar datos..." wire:model='ae_callePrin'>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 10)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>8.- Calle secundaria *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="text" class="form-control" id="calleS" placeholder="Ingresar datos..." wire:model='ae_calleSec'>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 11)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>9.- Número de casa *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="text" class="form-control" id="lote" placeholder="Ingresar datos..." wire:model='ae_numCasa'>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 12)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>10.- Número celular *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="number" class="form-control" id="celular" placeholder="Ingresar datos..." wire:model='ae_numCelular'>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 13)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>11.- Correo electrónico *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <input type="email" class="form-control" id="mail" placeholder="Ingresar datos..." wire:model='ae_mail'>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 14)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>12.- Situación laboral *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" wire:model='ae_situLaboral'>
                                <option value="0" selected>-- Seleccionar una opción --</option>
                                <option value="1">Trabajo a tiempo total</option>
                                <option value="2">Trabajo a tiempo parcial</option>
                                <option value="3">En busca de empleo</option>
                                <option value="4">Trabajo independiente</option>
                            </select>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 15)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>12.- Nombre de la empresa *</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <input type="text" class="form-control" id="nombreEmpr" placeholder="Ingresar datos..." wire:model='ae_nombreEmpresa'>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="siguientePregunta"> 
                                <b>Siguiente</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 16)
                    <div class="p-3"> 
                        <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                        <br>
                        <br>
                        <h5><b>¡Participa hasta el 12 de noviembre!</b></h5>
                        <br>
                        <h2><b>13.- Monto que puedes ahorrar mensualmente</b></h2>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="number" class="form-control" id="montAhorro" placeholder="Ingresar datos..." wire:model='ae_montoAhorro'>
                            @if($var_msg == true)
                                    <h5 ><b><i style="color: red;">*** {{$var_msg_error}} ***</i></b></h5>
                            @endif
                        </div>
                        <br>
                        <br>
                        <div class="d-grid gap-2 col-4 mx-auto d-md-block">
                            <button class="btn btn-primary btn-lg" type="button" wire:click="regresarPregunta"> 
                                <b>Regresar</b>
                            </button>
                            <button class="btn btn-primary btn-lg" type="button" wire:click="finalizarForm"> 
                                <b>Finalizar</b>
                            </button>
                        </div>
                        <br>
                        <h5>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h5>

                    </div>
                @elseif($ae_status == 17)
                        <div class="p-3"> 
                            <img src="{{asset('/Imgs/logoBoga5.png')}}" alt="" width="250px" >
                            <br>
                            <br>
                            <h4><b>¡Participa hasta el 12 de noviembre!</b></h4>
                            <br>
                            <h2><b>¡Gracias por registrarte!<br>Nos pondremos en contacto para finalizar el proceso.</b></h2>
                            <br>
                            <img src="Imgs/visto.png" alt="" width="150px" >
                            <br>
                            <br>
                            <h4>Refiere un nuevo socio y <b style="color: #85D7FD">TRIPLICA</b>  tu oportunidad de ganar.</h4>
                        </div>
                @endif
            </div>
        </div>
    </div>
    
</div>
