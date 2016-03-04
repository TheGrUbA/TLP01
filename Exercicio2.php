<?php
print "Total anual de rendimentos bancarios: ";
$tabanc = trim(fgets(STDIN));
print "Total anual de rendimentos de sal�rio ou servi�o: ";
$tass = trim(fgets(STDIN));
print "Total anual de outros rendimentos: ";
$taor = trim(fgets(STDIN));
print "Total anual de servi�os m�dicos pagos: ";
$tamp = trim(fgets(STDIN));
print "Total anual de servi�os educacionais pagos: ";
$taep = trim(fgets(STDIN));
if ($tass>=8001 &&  $tass<=24000){
	$iss = (15*$tass)/100;
}
else {
	if ($tass>=24001){
		$iss = (20*$tass)/100;
	}
	else {
		$iss = (0);
	}
}//imposto sobre salarios e servi�os


$ib = (20*$tabanc)/100;//imposto sobre rendimentos bancarios
$ior= (10*$taor)/100;//imposto sobre outros servi�os
$ti= ($iss+$ib+$ior);//total de impostos
$ma= ((30*$ti)/100);//maximo a ser abatido
$ta= ($taep+$tamp);//total de possiveis abatimentos

print "\nTotal de impostos:";
print "\nR$" . number_format($ib, 2,',','.') . " (sobre rendimentos bancarios)"; 
print "\nR$" . number_format($iss, 2,',','.') . " (sobre salarios servi�os)" ;
print "\nR$" . number_format($ior, 2,',','.') . " (sobre outros rendimentos" ;
print "\nR$" . number_format($ti, 2,',','.') . " (total)" ;
print "\n--------------------------------------------------------------------";
print "\nMaximo a ser abatido:\n" . "R$" . number_format($ma, 2,',','.') ;
print "\n--------------------------------------------------------------------";
print "\nTotal de valores possiveis de abater:";
print "\nR$" . number_format($tamp, 2,',','.') . " (servi�o medicos)";
print "\nR$" . number_format($taep, 2,',','.') . " (servi�os educacionais)";
print "\nR$" . number_format($ta, 2,',','.') . " (total)";
print "\n--------------------------------------------------------------------";
print "\nImposto total:";
print "\nR$" . number_format($ti, 2,',','.') . " (imposto bruto)";
if ($ta <= $ma){
	$tabt= $ta;
}
	
else{
	$tabt= $ma;
	
}//total de abatimentos
print "\nR$" . number_format($tabt, 2,',','.') . " (abatimentos)";
$vsp= ($ti-$tabt);//valor total para pagamento
print "\nR$" . number_format($vsp, 2,',','.') . " (total)";


