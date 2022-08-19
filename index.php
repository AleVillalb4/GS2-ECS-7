<?php
header('Content-Type: application/json');

require_once 'modelo/respuestaOportunidad.php';
require_once 'modelo/persona.php';
require_once 'modelo/datosOperacion.php';
require_once 'modelo/oportunidad.php';


$p = new Persona();
$p->Nombres = 'pedro rodriguez';
$p->Sexo = 'F';
$p->Documento = '123123';
$p->Email = 'aaaa@aaaa.com.ar';
$p->Celular = '123456';
$p->TelefonoAlternativo = '123456';

$datos = new DatosOperacion();
$datos->MontoSolicitado = 500000;
$datos->Linea = '504';
$datos->CantidadCuotas = 12;
$datos->TasaEfectivaMensual = 2.9589;
$datos->CuotaPromedio = 53503.08;
$datos->TasaNominalAnual= 36;
$datos->CostoFinancieroTotal = 56.55;


$o = new Oportunidad();
$o->SmsConsultaId = '17654293-27258197726';
$o->IdValidatorId = 893;
$o->MotorSolaFirmaId = 8870;
$o->Persona = $p;
$o->DatosOperacion = $datos;


$r = new RespuestaOportunidad();
$r->IsOk = true;
$r->Oportunidad = $o;

echo json_encode($r);
