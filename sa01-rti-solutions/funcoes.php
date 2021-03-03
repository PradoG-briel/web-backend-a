<?php

  function multi($a, $b){
    return $a * $b;
  }

  function nomeSobrenome($nome, $sobrenome){
    return $nome . " " . $sobrenome;
  }

  function calcularFrete($pedagios, $distancia){
    $custoPedagio = $pedagios * 9.4;
    $custoDistancia = $distancia * 6;

    return $custoPedagio + $custoDistancia;
  }