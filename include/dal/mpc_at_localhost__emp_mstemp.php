<?php
$dalTableemp_mstemp = array();
$dalTableemp_mstemp["TipoEmpleado"] = array("type"=>13,"varname"=>"TipoEmpleado", "name" => "TipoEmpleado");
$dalTableemp_mstemp["NoEmpleado"] = array("type"=>13,"varname"=>"NoEmpleado", "name" => "NoEmpleado");
$dalTableemp_mstemp["Nombres"] = array("type"=>200,"varname"=>"Nombres", "name" => "Nombres");
$dalTableemp_mstemp["Apellidos"] = array("type"=>200,"varname"=>"Apellidos", "name" => "Apellidos");
$dalTableemp_mstemp["DNI"] = array("type"=>200,"varname"=>"DNI", "name" => "DNI");
$dalTableemp_mstemp["FechaNacimiento"] = array("type"=>7,"varname"=>"FechaNacimiento", "name" => "FechaNacimiento");
$dalTableemp_mstemp["SueldoBase"] = array("type"=>14,"varname"=>"SueldoBase", "name" => "SueldoBase");
$dalTableemp_mstemp["EstadoEmpleado"] = array("type"=>129,"varname"=>"EstadoEmpleado", "name" => "EstadoEmpleado");
	$dalTableemp_mstemp["TipoEmpleado"]["key"]=true;
	$dalTableemp_mstemp["NoEmpleado"]["key"]=true;

$dal_info["mpc_at_localhost__emp_mstemp"] = &$dalTableemp_mstemp;
?>