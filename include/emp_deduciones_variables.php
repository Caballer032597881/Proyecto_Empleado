<?php
$strTableName="emp_deduciones";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="emp_deduciones";

$gstrOrderBy="ORDER BY Tipo, CodigoDeduccion DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("emp_deduciones");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["emp_deduciones"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>