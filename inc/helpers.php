<?php

/* Función para verificar datos introducidos */
function errorForm() {
  $error=false;
  if (isset($_COOKIE['sexo']) & isset($_COOKIE['edad']) & isset($_COOKIE['altura']) & isset($_COOKIE['peso']) & isset($_COOKIE['factor'])) {
      $sexo = $_COOKIE['sexo'];
      $edad = intval($_COOKIE['edad']);
      $altura = intval($_COOKIE['altura']);
      $peso = intval($_COOKIE['peso']);
      $factor = $_COOKIE['factor'];

      if (!empty($sexo) & !empty($edad) & !empty($altura) & !empty($peso) & !empty($factor)) {

        if (($edad>12 & $edad<100) & ($altura>140 & $altura<200) & ($peso>35 & $peso<150)) {
          return $error=false;
        }
        else {
          return $error=true;
        }
      }
      else {
        return $error=true;
      }
    }
    else {
      return $error=true;
    }
}

/* Funciones para calcular el Objetivo */
function objetivoMantenimiento() {
  if (isset($_COOKIE['sexo']) & isset($_COOKIE['edad']) & isset($_COOKIE['altura']) & isset($_COOKIE['peso']) & isset($_COOKIE['factor'])) {
      $sexo = $_COOKIE['sexo'];
      $edad = intval($_COOKIE['edad']);
      $altura = intval($_COOKIE['altura']);
      $peso = intval($_COOKIE['peso']);
      $factor = $_COOKIE['factor'];

      $objetivoHombre = ((((9.99*$peso) + (6.25*$altura) - (4.92*$edad) -50)-200) *$factor);
      $objetivoMujer = $objetivoHombre - 200;

      if ($sexo=='hombre') {
        return round($objetivoHombre, 2);
      }
      else {
        return round($objetivoMujer, 2);
      }
    }
}

function objetivoGanarMasaMuscular () {
  $valorMantenimiento = objetivoMantenimiento();
  $valorGanarMasaMuscular = $valorMantenimiento + 300;
  return round($valorGanarMasaMuscular, 2);
}

function objetivoPerderGrasaCorporal () {
  $valorMantenimiento = objetivoMantenimiento();
  $valorPerderGrasaCorporal = $valorMantenimiento - 300;
  return round($valorPerderGrasaCorporal, 2);
}

/* Funciones para calcular el Reparto de Macronutrientes */
function macroProteinasVol () {
  $peso = intval($_COOKIE['peso']);
  $rdoProteinasVol = $peso * 2.5;
  return round($rdoProteinasVol, 2);
}

function macroProteinasDef () {
  $peso = intval($_COOKIE['peso']);
  $rdoProteinasDef = $peso * 3;
  return round($rdoProteinasDef, 2);
}

function macroGrasasDef () {
  $peso = intval($_COOKIE['peso']);
  $rdoGrasasDef = $peso * 0.75;
  return round($rdoGrasasDef, 2);
}

function macroCarbosVol () {
  $valorGanarMasaMuscular = objetivoGanarMasaMuscular();
  $valorProteinasVol = macroProteinasVol();
  $valorGrasasVol = intval($_COOKIE['peso']);
  $rdoCarbosVol = ($valorGanarMasaMuscular - ($valorProteinasVol * 4) - ($valorGrasasVol * 9)) / 4;
  return round($rdoCarbosVol, 2);
}

function macroCarbosDef () {
  $valorPerderGrasaCorporal = objetivoPerderGrasaCorporal();
  $valorProteinasDef = macroProteinasDef();
  $valorGrasasDef = macroGrasasDef();
  $rdoCarbosDef = ($valorPerderGrasaCorporal - ($valorProteinasDef * 4) - ($valorGrasasDef * 9)) / 4;
  return round($rdoCarbosDef, 2);
}
