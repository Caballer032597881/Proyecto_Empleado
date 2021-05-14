<?php
$tdataemp_mstemp = array();
$tdataemp_mstemp[".searchableFields"] = array();
$tdataemp_mstemp[".ShortName"] = "emp_mstemp";
$tdataemp_mstemp[".OwnerID"] = "";
$tdataemp_mstemp[".OriginalTable"] = "emp_mstemp";


$tdataemp_mstemp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataemp_mstemp[".originalPagesByType"] = $tdataemp_mstemp[".pagesByType"];
$tdataemp_mstemp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataemp_mstemp[".originalPages"] = $tdataemp_mstemp[".pages"];
$tdataemp_mstemp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataemp_mstemp[".originalDefaultPages"] = $tdataemp_mstemp[".defaultPages"];

//	field labels
$fieldLabelsemp_mstemp = array();
$fieldToolTipsemp_mstemp = array();
$pageTitlesemp_mstemp = array();
$placeHoldersemp_mstemp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsemp_mstemp["Spanish"] = array();
	$fieldToolTipsemp_mstemp["Spanish"] = array();
	$placeHoldersemp_mstemp["Spanish"] = array();
	$pageTitlesemp_mstemp["Spanish"] = array();
	$fieldLabelsemp_mstemp["Spanish"]["TipoEmpleado"] = "Tipo Empleado";
	$fieldToolTipsemp_mstemp["Spanish"]["TipoEmpleado"] = "";
	$placeHoldersemp_mstemp["Spanish"]["TipoEmpleado"] = "";
	$fieldLabelsemp_mstemp["Spanish"]["NoEmpleado"] = "No Empleado";
	$fieldToolTipsemp_mstemp["Spanish"]["NoEmpleado"] = "";
	$placeHoldersemp_mstemp["Spanish"]["NoEmpleado"] = "";
	$fieldLabelsemp_mstemp["Spanish"]["Nombres"] = "Nombres";
	$fieldToolTipsemp_mstemp["Spanish"]["Nombres"] = "";
	$placeHoldersemp_mstemp["Spanish"]["Nombres"] = "";
	$fieldLabelsemp_mstemp["Spanish"]["Apellidos"] = "Apellidos";
	$fieldToolTipsemp_mstemp["Spanish"]["Apellidos"] = "";
	$placeHoldersemp_mstemp["Spanish"]["Apellidos"] = "";
	$fieldLabelsemp_mstemp["Spanish"]["DNI"] = "DNI";
	$fieldToolTipsemp_mstemp["Spanish"]["DNI"] = "";
	$placeHoldersemp_mstemp["Spanish"]["DNI"] = "";
	$fieldLabelsemp_mstemp["Spanish"]["FechaNacimiento"] = "Fecha Nacimiento";
	$fieldToolTipsemp_mstemp["Spanish"]["FechaNacimiento"] = "";
	$placeHoldersemp_mstemp["Spanish"]["FechaNacimiento"] = "";
	$fieldLabelsemp_mstemp["Spanish"]["SueldoBase"] = "Sueldo Base";
	$fieldToolTipsemp_mstemp["Spanish"]["SueldoBase"] = "";
	$placeHoldersemp_mstemp["Spanish"]["SueldoBase"] = "";
	$fieldLabelsemp_mstemp["Spanish"]["EstadoEmpleado"] = "Estado Empleado";
	$fieldToolTipsemp_mstemp["Spanish"]["EstadoEmpleado"] = "";
	$placeHoldersemp_mstemp["Spanish"]["EstadoEmpleado"] = "";
	$fieldLabelsemp_mstemp["Spanish"]["NombreCompleto"] = "Nombre Completo";
	$fieldToolTipsemp_mstemp["Spanish"]["NombreCompleto"] = "";
	$placeHoldersemp_mstemp["Spanish"]["NombreCompleto"] = "";
	if (count($fieldToolTipsemp_mstemp["Spanish"]))
		$tdataemp_mstemp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemp_mstemp["English"] = array();
	$fieldToolTipsemp_mstemp["English"] = array();
	$placeHoldersemp_mstemp["English"] = array();
	$pageTitlesemp_mstemp["English"] = array();
	$fieldLabelsemp_mstemp["English"]["TipoEmpleado"] = "Tipo Empleado";
	$fieldToolTipsemp_mstemp["English"]["TipoEmpleado"] = "";
	$placeHoldersemp_mstemp["English"]["TipoEmpleado"] = "";
	$fieldLabelsemp_mstemp["English"]["NoEmpleado"] = "No Empleado";
	$fieldToolTipsemp_mstemp["English"]["NoEmpleado"] = "";
	$placeHoldersemp_mstemp["English"]["NoEmpleado"] = "";
	$fieldLabelsemp_mstemp["English"]["Nombres"] = "Nombres";
	$fieldToolTipsemp_mstemp["English"]["Nombres"] = "";
	$placeHoldersemp_mstemp["English"]["Nombres"] = "";
	$fieldLabelsemp_mstemp["English"]["Apellidos"] = "Apellidos";
	$fieldToolTipsemp_mstemp["English"]["Apellidos"] = "";
	$placeHoldersemp_mstemp["English"]["Apellidos"] = "";
	$fieldLabelsemp_mstemp["English"]["DNI"] = "DNI";
	$fieldToolTipsemp_mstemp["English"]["DNI"] = "";
	$placeHoldersemp_mstemp["English"]["DNI"] = "";
	$fieldLabelsemp_mstemp["English"]["FechaNacimiento"] = "Fecha Nacimiento";
	$fieldToolTipsemp_mstemp["English"]["FechaNacimiento"] = "";
	$placeHoldersemp_mstemp["English"]["FechaNacimiento"] = "";
	$fieldLabelsemp_mstemp["English"]["SueldoBase"] = "Sueldo Base";
	$fieldToolTipsemp_mstemp["English"]["SueldoBase"] = "";
	$placeHoldersemp_mstemp["English"]["SueldoBase"] = "";
	$fieldLabelsemp_mstemp["English"]["EstadoEmpleado"] = "Estado Empleado";
	$fieldToolTipsemp_mstemp["English"]["EstadoEmpleado"] = "";
	$placeHoldersemp_mstemp["English"]["EstadoEmpleado"] = "";
	$fieldLabelsemp_mstemp["English"]["NombreCompleto"] = "Nombre Completo";
	$fieldToolTipsemp_mstemp["English"]["NombreCompleto"] = "";
	$placeHoldersemp_mstemp["English"]["NombreCompleto"] = "";
	if (count($fieldToolTipsemp_mstemp["English"]))
		$tdataemp_mstemp[".isUseToolTips"] = true;
}


	$tdataemp_mstemp[".NCSearch"] = true;



$tdataemp_mstemp[".shortTableName"] = "emp_mstemp";
$tdataemp_mstemp[".nSecOptions"] = 0;

$tdataemp_mstemp[".mainTableOwnerID"] = "";
$tdataemp_mstemp[".entityType"] = 0;
$tdataemp_mstemp[".connId"] = "mpc_at_localhost";


$tdataemp_mstemp[".strOriginalTableName"] = "emp_mstemp";

	



$tdataemp_mstemp[".showAddInPopup"] = false;

$tdataemp_mstemp[".showEditInPopup"] = false;

$tdataemp_mstemp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemp_mstemp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemp_mstemp[".listAjax"] = false;
//	temporary
//$tdataemp_mstemp[".listAjax"] = false;

	$tdataemp_mstemp[".audit"] = false;

	$tdataemp_mstemp[".locking"] = false;


$pages = $tdataemp_mstemp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataemp_mstemp[".edit"] = true;
	$tdataemp_mstemp[".afterEditAction"] = 1;
	$tdataemp_mstemp[".closePopupAfterEdit"] = 1;
	$tdataemp_mstemp[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataemp_mstemp[".add"] = true;
$tdataemp_mstemp[".afterAddAction"] = 1;
$tdataemp_mstemp[".closePopupAfterAdd"] = 1;
$tdataemp_mstemp[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataemp_mstemp[".list"] = true;
}



$tdataemp_mstemp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataemp_mstemp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataemp_mstemp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataemp_mstemp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataemp_mstemp[".printFriendly"] = true;
}



$tdataemp_mstemp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataemp_mstemp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataemp_mstemp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataemp_mstemp[".isUseAjaxSuggest"] = true;

$tdataemp_mstemp[".rowHighlite"] = true;





$tdataemp_mstemp[".ajaxCodeSnippetAdded"] = false;

$tdataemp_mstemp[".buttonsAdded"] = false;

$tdataemp_mstemp[".addPageEvents"] = true;

// use timepicker for search panel
$tdataemp_mstemp[".isUseTimeForSearch"] = false;


$tdataemp_mstemp[".badgeColor"] = "8fbc8b";


$tdataemp_mstemp[".allSearchFields"] = array();
$tdataemp_mstemp[".filterFields"] = array();
$tdataemp_mstemp[".requiredSearchFields"] = array();

$tdataemp_mstemp[".googleLikeFields"] = array();
$tdataemp_mstemp[".googleLikeFields"][] = "TipoEmpleado";
$tdataemp_mstemp[".googleLikeFields"][] = "NoEmpleado";
$tdataemp_mstemp[".googleLikeFields"][] = "Nombres";
$tdataemp_mstemp[".googleLikeFields"][] = "Apellidos";
$tdataemp_mstemp[".googleLikeFields"][] = "NombreCompleto";
$tdataemp_mstemp[".googleLikeFields"][] = "DNI";
$tdataemp_mstemp[".googleLikeFields"][] = "FechaNacimiento";
$tdataemp_mstemp[".googleLikeFields"][] = "SueldoBase";
$tdataemp_mstemp[".googleLikeFields"][] = "EstadoEmpleado";



$tdataemp_mstemp[".tableType"] = "list";

$tdataemp_mstemp[".printerPageOrientation"] = 0;
$tdataemp_mstemp[".nPrinterPageScale"] = 100;

$tdataemp_mstemp[".nPrinterSplitRecords"] = 40;

$tdataemp_mstemp[".geocodingEnabled"] = false;










$tdataemp_mstemp[".pageSize"] = 20;

$tdataemp_mstemp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemp_mstemp[".strOrderBy"] = $tstrOrderBy;

$tdataemp_mstemp[".orderindexes"] = array();


$tdataemp_mstemp[".sqlHead"] = "SELECT TipoEmpleado,  	NoEmpleado,  	Nombres,  	Apellidos,  CONCAT(Apellidos,' ', Nombres) AS NombreCompleto,  	DNI,  	FechaNacimiento,  	SueldoBase,  	EstadoEmpleado";
$tdataemp_mstemp[".sqlFrom"] = "FROM emp_mstemp";
$tdataemp_mstemp[".sqlWhereExpr"] = "";
$tdataemp_mstemp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemp_mstemp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemp_mstemp[".arrGroupsPerPage"] = $arrGPP;

$tdataemp_mstemp[".highlightSearchResults"] = true;

$tableKeysemp_mstemp = array();
$tableKeysemp_mstemp[] = "TipoEmpleado";
$tableKeysemp_mstemp[] = "NoEmpleado";
$tdataemp_mstemp[".Keys"] = $tableKeysemp_mstemp;


$tdataemp_mstemp[".hideMobileList"] = array();




//	TipoEmpleado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoEmpleado";
	$fdata["GoodName"] = "TipoEmpleado";
	$fdata["ownerTable"] = "emp_mstemp";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","TipoEmpleado");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "TipoEmpleado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoEmpleado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "emp_tipoemp";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoEmpleado";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "Descripcion";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["TipoEmpleado"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "TipoEmpleado";
//	NoEmpleado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NoEmpleado";
	$fdata["GoodName"] = "NoEmpleado";
	$fdata["ownerTable"] = "emp_mstemp";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","NoEmpleado");
	$fdata["FieldType"] = 13;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "NoEmpleado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoEmpleado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["NoEmpleado"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "NoEmpleado";
//	Nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombres";
	$fdata["GoodName"] = "Nombres";
	$fdata["ownerTable"] = "emp_mstemp";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","Nombres");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nombres";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombres";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["Nombres"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "Nombres";
//	Apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Apellidos";
	$fdata["GoodName"] = "Apellidos";
	$fdata["ownerTable"] = "emp_mstemp";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","Apellidos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Apellidos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Apellidos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["Apellidos"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "Apellidos";
//	NombreCompleto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NombreCompleto";
	$fdata["GoodName"] = "NombreCompleto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","NombreCompleto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NombreCompleto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(Apellidos,' ', Nombres)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["NombreCompleto"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "NombreCompleto";
//	DNI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DNI";
	$fdata["GoodName"] = "DNI";
	$fdata["ownerTable"] = "emp_mstemp";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","DNI");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DNI";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DNI";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["DNI"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "DNI";
//	FechaNacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FechaNacimiento";
	$fdata["GoodName"] = "FechaNacimiento";
	$fdata["ownerTable"] = "emp_mstemp";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","FechaNacimiento");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaNacimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaNacimiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["FechaNacimiento"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "FechaNacimiento";
//	SueldoBase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SueldoBase";
	$fdata["GoodName"] = "SueldoBase";
	$fdata["ownerTable"] = "emp_mstemp";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","SueldoBase");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "SueldoBase";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SueldoBase";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["SueldoBase"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "SueldoBase";
//	EstadoEmpleado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EstadoEmpleado";
	$fdata["GoodName"] = "EstadoEmpleado";
	$fdata["ownerTable"] = "emp_mstemp";
	$fdata["Label"] = GetFieldLabel("emp_mstemp","EstadoEmpleado");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "EstadoEmpleado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EstadoEmpleado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Inactivo";
	$edata["LookupValues"][] = "Maternidad";
	$edata["LookupValues"][] = "Permiso";
	$edata["LookupValues"][] = "Incapacitado";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataemp_mstemp["EstadoEmpleado"] = $fdata;
		$tdataemp_mstemp[".searchableFields"][] = "EstadoEmpleado";


$tables_data["emp_mstemp"]=&$tdataemp_mstemp;
$field_labels["emp_mstemp"] = &$fieldLabelsemp_mstemp;
$fieldToolTips["emp_mstemp"] = &$fieldToolTipsemp_mstemp;
$placeHolders["emp_mstemp"] = &$placeHoldersemp_mstemp;
$page_titles["emp_mstemp"] = &$pageTitlesemp_mstemp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emp_mstemp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["emp_mstemp"] = array();



	
				$strOriginalDetailsTable="emp_tipoemp";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="emp_tipoemp";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "emp_tipoemp";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["emp_mstemp"][0] = $masterParams;
				$masterTablesData["emp_mstemp"][0]["masterKeys"] = array();
	$masterTablesData["emp_mstemp"][0]["masterKeys"][]="TipoEmpleado";
				$masterTablesData["emp_mstemp"][0]["detailKeys"] = array();
	$masterTablesData["emp_mstemp"][0]["detailKeys"][]="TipoEmpleado";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_emp_mstemp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoEmpleado,  	NoEmpleado,  	Nombres,  	Apellidos,  CONCAT(Apellidos,' ', Nombres) AS NombreCompleto,  	DNI,  	FechaNacimiento,  	SueldoBase,  	EstadoEmpleado";
$proto0["m_strFrom"] = "FROM emp_mstemp";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoEmpleado",
	"m_strTable" => "emp_mstemp",
	"m_srcTableName" => "emp_mstemp"
));

$proto6["m_sql"] = "TipoEmpleado";
$proto6["m_srcTableName"] = "emp_mstemp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NoEmpleado",
	"m_strTable" => "emp_mstemp",
	"m_srcTableName" => "emp_mstemp"
));

$proto8["m_sql"] = "NoEmpleado";
$proto8["m_srcTableName"] = "emp_mstemp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombres",
	"m_strTable" => "emp_mstemp",
	"m_srcTableName" => "emp_mstemp"
));

$proto10["m_sql"] = "Nombres";
$proto10["m_srcTableName"] = "emp_mstemp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Apellidos",
	"m_strTable" => "emp_mstemp",
	"m_srcTableName" => "emp_mstemp"
));

$proto12["m_sql"] = "Apellidos";
$proto12["m_srcTableName"] = "emp_mstemp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Apellidos"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Nombres"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "CONCAT(Apellidos,' ', Nombres)";
$proto14["m_srcTableName"] = "emp_mstemp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "NombreCompleto";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "DNI",
	"m_strTable" => "emp_mstemp",
	"m_srcTableName" => "emp_mstemp"
));

$proto19["m_sql"] = "DNI";
$proto19["m_srcTableName"] = "emp_mstemp";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaNacimiento",
	"m_strTable" => "emp_mstemp",
	"m_srcTableName" => "emp_mstemp"
));

$proto21["m_sql"] = "FechaNacimiento";
$proto21["m_srcTableName"] = "emp_mstemp";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "SueldoBase",
	"m_strTable" => "emp_mstemp",
	"m_srcTableName" => "emp_mstemp"
));

$proto23["m_sql"] = "SueldoBase";
$proto23["m_srcTableName"] = "emp_mstemp";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "EstadoEmpleado",
	"m_strTable" => "emp_mstemp",
	"m_srcTableName" => "emp_mstemp"
));

$proto25["m_sql"] = "EstadoEmpleado";
$proto25["m_srcTableName"] = "emp_mstemp";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "emp_mstemp";
$proto28["m_srcTableName"] = "emp_mstemp";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "TipoEmpleado";
$proto28["m_columns"][] = "NoEmpleado";
$proto28["m_columns"][] = "Nombres";
$proto28["m_columns"][] = "Apellidos";
$proto28["m_columns"][] = "DNI";
$proto28["m_columns"][] = "FechaNacimiento";
$proto28["m_columns"][] = "SueldoBase";
$proto28["m_columns"][] = "EstadoEmpleado";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "emp_mstemp";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "emp_mstemp";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="emp_mstemp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emp_mstemp = createSqlQuery_emp_mstemp();


	
		;

									

$tdataemp_mstemp[".sqlquery"] = $queryData_emp_mstemp;



include_once(getabspath("include/emp_mstemp_events.php"));
$tableEvents["emp_mstemp"] = new eventclass_emp_mstemp;
$tdataemp_mstemp[".hasEvents"] = true;

?>