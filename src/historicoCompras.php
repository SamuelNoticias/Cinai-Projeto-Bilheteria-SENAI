<?php
// Pilha (LIFO)	Histórico de transações de compra da sessão atual. 
// Permite desfazer (Undo) a última compra realizada e devolver o ingresso ao mapa de assentos.

include 'assentos.php';
include 'gabriels.php';

// Verificar se tem dinheiro suficiente para a compra do ingresso, retorna true ou false
function verificarBanco(){}

// Devolve o ingresso para o mapa de assentos, caso desistencia / Retorna Assento
function devolucaoIngresso(){}

// Devolve o dinheiro gasto para o cofre / Retorna dinheiro gasto
function devolucaoDinheiro(){}

// Registrar a compra dos ingressos, retorna ingressos comprados para pagina de historico
function registro(){}

// mostra lista de Ingressos comprados
function listaIngressos(){}
?>