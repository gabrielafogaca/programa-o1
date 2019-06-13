<?php

function intervalo ($n)
{ 

    if ($n==1) {

        print " \n O mês que corresponde é Janeiro \n";
    } 

    if ($n==2) {

        print " \n O mês que corresponde é Fevereiro \n";
    } 

    if ($n==3) {

        print " \n O mês que corresponde é Março \n";
    } 
    if ($n==4) {

        print " \n O mês que corresponde é Abril \n";
    } 
    if ($n==5) {

        print " \n O mês que corresponde é Maio \n";
    } 
    if ($n==6) {

        print " \n O mês que corresponde é Junho \n";
    } 
    if ($n==7) {

        print " \n O mês que corresponde é Julho \n";
    } 
    if ($n==8) {

        print " \n O mês que corresponde é Agosto \n";
    } 
    if ($n==9) {

        print " \n O mês que corresponde é Setembro \n";
    } 
    if ($n==10) {

        print " \n O mês que corresponde é Outubro \n";
    } 
    if ($n==11) {

        print " \n O mês que corresponde é Novembro \n";
    } 
    if ($n==12) {

        print " \n O mês que corresponde é Dezembro \n";
    } 

    if ($n>12)  {
        print " \n $n não tem mês correspondente \n";
    }

return $n;  

    }

print "Digite um número para saber o mês: ";
$n = (float) fgets (STDIN);

$n = intervalo($n);
