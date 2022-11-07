<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\Registro;

class FormComponent extends Component
{
    public $ae_status = 0;
    public $ae_statusReferido;
    public $ae_cedulaReferido;
    public $ae_nombreCompleto;
    public $ae_cedula;
    public $ae_fechaNacimiento;
    public $ae_estadoCivil;
    public $ae_viveQuito;
    public $ae_ciudadResidencia;
    public $ae_callePrin;
    public $ae_calleSec;
    public $ae_numCasa;
    public $ae_numCelular;
    public $ae_mail;
    public $ae_situLaboral;
    public $ae_nombreEmpresa;
    public $ae_montoAhorro;
    public $ae_urlTicket;


    //Banderas de control
    public $var_referencia = false;
    public $var_quito = false;
    public $var_trabajo = false;
    public $var_msg = false;

    //Variables de mensajes
    public $var_msg_error = null;

    public function render()
    {
        Log::info('Bienvenido a BOGA');
        return view('livewire.form-component');
    }

    public function siguientePregunta(){
        if($this->ae_status == 1){
            if($this->ae_statusReferido != null && $this->ae_statusReferido != 0){
                if($this->ae_statusReferido == 1){
                    $this->ae_status = $this->ae_status + 1;
                    $this->var_referencia = true;
                }else{
                    $this->var_referencia = false;
                    $this->ae_status = $this->ae_status + 2;
                }
                $this->var_msg = false;
            }else{
                $this->var_msg_error = "Debe escoger una opción para poder continuar";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 2){
            if($this->ae_cedulaReferido != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "El registro de la cédula del referido es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 3){
            if($this->ae_cedula != null){
                $var_cedula = Registro::where('cedula',$this->ae_cedula)->value('cedula');
                //Log::info($var_cedula);
                if(isset($var_cedula)){
                    $this->var_msg_error = "La cédula ya esta registrada.";
                    $this->var_msg = true;
                    $var_cedula = null;
                }else{
                    $this->var_msg = false;
                    $this->ae_status = $this->ae_status + 1;
                }
            }else{
                $this->var_msg_error = "El registro de la cédula es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 4){
            if($this->ae_nombreCompleto != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "El registro del nombre es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 5){
            if($this->ae_fechaNacimiento != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "La fecha de nacimiento es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 6){
            if($this->ae_estadoCivil != null && $this->ae_estadoCivil != 0){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "Debe escoger una opción para poder continuar";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 7){
            if($this->ae_viveQuito != null && $this->ae_viveQuito != 0){
                if($this->ae_viveQuito == 1){
                    $this->ae_status = $this->ae_status + 2;
                    $this->var_quito = true;
                }else{
                    $this->var_quito = false;
                    $this->ae_status = $this->ae_status + 1;
                }
                $this->var_msg = false;
            }else{
                $this->var_msg_error = "Debe escoger una opción para poder continuar";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 8){
            if($this->ae_ciudadResidencia != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "El registro de la ciudad es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 9){
            if($this->ae_callePrin != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "El registro de la calle principal es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 10){
            if($this->ae_calleSec != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "El registro de la calle secuendaria es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 11){
            if($this->ae_numCasa != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "El registro del número de casa es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 12){
            if($this->ae_numCelular != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "El registro del número celular es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 13){
            if($this->ae_mail != null){
                $var_mail = Registro::where('cedula',$this->ae_cedula)->value('cedula');
                //Log::info($var_mail);
                if(isset($var_mail)){
                    $this->var_msg_error = "El correo electrónico ya esta registrada, intente nuevamente o ingrese otro correo electrónico.";
                    $this->var_msg = true;
                    $var_mail = null;
                }else{
                    $this->var_msg = false;
                    $this->ae_status = $this->ae_status + 1;
                }
            }else{
                $this->var_msg_error = "El registro del correo electrónico es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 14){
            if($this->ae_situLaboral != null && $this->ae_situLaboral != 0){
                if($this->ae_situLaboral == 1 ||$this->ae_situLaboral == 2){
                    $this->ae_status = $this->ae_status + 1;
                    $this->var_trabajo = true;
                }else{
                    $this->var_trabajo = false;
                    $this->ae_status = $this->ae_status + 2;
                }
                $this->var_msg = false;
            }else{
                $this->var_msg_error = "Debe escoger una opción para poder continuar";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 15){
            if($this->ae_nombreEmpresa != null){
                $this->var_msg = false;
                $this->ae_status = $this->ae_status + 1;
            }else{
                $this->var_msg_error = "El registro del nombre de la empresa es obligatorio";
                $this->var_msg = true;
            }
        }else if($this->ae_status == 16){
            $this->var_msg = false;
            $this->ae_status = $this->ae_status + 1;
        }else{
            $this->ae_status = $this->ae_status + 1;
        }
        Log::info('Pregunta #'.$this->ae_status);
    }
    public function regresarPregunta(){
        if($this->ae_status > 0){
            if($this->var_referencia == false && $this->ae_status == 3){
                $this->ae_status = $this->ae_status - 2;
            } else if($this->var_quito == true && $this->ae_status == 9){
                $this->ae_status = $this->ae_status - 2;
            } else if($this->var_trabajo == false && $this->ae_status == 16){
                $this->ae_status = $this->ae_status - 2;
            } else {
                $this->ae_status = $this->ae_status - 1;
            }
            Log::info('Pregunta #'.$this->ae_status);
        }
        $this->var_msg = false;
    }
    public function finalizarForm(){
        $vl_registro = new Registro();
        $vl_registro->statusReferido = $this->ae_statusReferido;
        $vl_registro->cedulaReferido = $this->ae_cedulaReferido;
        $vl_registro->cedula = $this->ae_cedula;
        $vl_registro->nombre = $this->ae_nombreCompleto;
        $vl_registro->fechaNacimiento = $this->ae_fechaNacimiento;
        $vl_registro->estadoCivil = $this->ae_estadoCivil;
        $vl_registro->viveQuito = $this->ae_viveQuito;
        if($this->ae_viveQuito == 1){
            $vl_registro->ciudadResidencia = "Quito";
        }else{
            $vl_registro->ciudadResidencia = $this->ae_ciudadResidencia;
        }
        $vl_registro->calleP = $this->ae_callePrin;
        $vl_registro->calleS = $this->ae_calleSec;
        $vl_registro->numCasa = $this->ae_numCasa;
        $vl_registro->numCelular = $this->ae_numCelular;
        $vl_registro->mail = $this->ae_mail;
        $vl_registro->sitLaboral = $this->ae_situLaboral;
        $vl_registro->nombreEmpresa = $this->ae_nombreEmpresa;
        $vl_registro->montoMensual = $this->ae_montoAhorro;
        $vl_registro->urlTicket = '-------';
        $vl_registro->save();
        $this->ae_status = $this->ae_status + 1;
        Log::info('Pregunta #'.$this->ae_status);
    }
}
