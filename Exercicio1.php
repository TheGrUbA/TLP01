<?php
print "Qual o sexo do cliente (m/f)?";
$sexo = trim(fgets(STDIN));
if ($sexo == "m" || $sexo == "M" ){
	$entrada = 10;
}
else {
	$entrada = 8;
}//valor pago pela entrada
print "Quantas cervejas foram consumidas?";
$cerva = trim(fgets(STDIN));
print "Quantos refrigerantes foram consumidos?";
$refri = trim(fgets(STDIN));
print "Quantos espetinhos foram consumidos?";
$espto = trim(fgets(STDIN));
$vcerva = ($cerva*2.5);//preço cerveja
$vrefri = ($refri*2.0);//preço refri
$vespto = ($espto*4);//preço espeto
$consumação = ($vcerva+$vrefri+$vespto);//total em consumação

print "\nValor da conta:";
print "\nR$" . number_format($entrada, 2,',','.') . " (Valor básico)";
print "\nR$" . number_format($consumação, 2,',','.') . " (Bebida e comida)";
if ($consumação <= 15 ){
	$vcover = 3;
	print "\nR$" . number_format($vcover, 2,',','.') . " (Artista)";
}
else {
	$vcover = 0;
	print "\nR$" . number_format($vcover, 2,',','.') . " (Artista)";	
}
$vsem10 = ($entrada+$consumação+$vcover);//subtotal sem 10%
$porcentagem = ((10*$vsem10)/100);//porcentagem garçon
$total = ($vsem10+$porcentagem);//valor total da conta
print "\nR$" . number_format($vsem10, 2,',','.') . " (Subtotal sem 10%)";
print "\n___________________________________";
print "\nR$" . number_format($total, 2,',','.') . " (Valor total da conta) ";
