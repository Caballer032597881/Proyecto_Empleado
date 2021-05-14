<?php
$dalTableemp_deduciones = array();
$dalTableemp_deduciones["Tipo"] = array("type"=>129,"varname"=>"Tipo", "name" => "Tipo");
$dalTableemp_deduciones["CodigoDeduccion"] = array("type"=>13,"varname"=>"CodigoDeduccion", "name" => "CodigoDeduccion");
$dalTableemp_deduciones["Descripcion"] = array("type"=>200,"varname"=>"Descripcion", "name" => "Descripcion");
$dalTableemp_deduciones["Valor"] = array("type"=>14,"varname"=>"Valor", "name" => "Valor");
$dalTableemp_deduciones["Porcentaje"] = array("type"=>14,"varname"=>"Porcentaje", "name" => "Porcentaje");
$dalTableemp_deduciones["Estado"] = array("type"=>129,"varname"=>"Estado", "name" => "Estado");
$dalTableemp_deduciones["Nmb_Empleado"] = array("type"=>200,"varname"=>"Nmb_Empleado", "name" => "Nmb_Empleado");
	$dalTableemp_deduciones["Tipo"]["key"]=true;
	$dalTableemp_deduciones["CodigoDeduccion"]["key"]=true;

$dal_info["mpc_at_localhost__emp_deduciones"] = &$dalTableemp_deduciones;
?>