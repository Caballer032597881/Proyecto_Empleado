<?php
$tdataemp_deduciones = array();
$tdataemp_deduciones[".searchableFields"] = array();
$tdataemp_deduciones[".ShortName"] = "emp_deduciones";
$tdataemp_deduciones[".OwnerID"] = "";
$tdataemp_deduciones[".OriginalTable"] = "emp_deduciones";


$tdataemp_deduciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataemp_deduciones[".originalPagesByType"] = $tdataemp_deduciones[".pagesByType"];
$tdataemp_deduciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataemp_deduciones[".originalPages"] = $tdataemp_deduciones[".pages"];
$tdataemp_deduciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataemp_deduciones[".originalDefaultPages"] = $tdataemp_deduciones[".defaultPages"];

//	field labels
$fieldLabelsemp_deduciones = array();
$fieldToolTipsemp_deduciones = array();
$pageTitlesemp_deduciones = array();
$placeHoldersemp_deduciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsemp_deduciones["Spanish"] = array();
	$fieldToolTipsemp_deduciones["Spanish"] = array();
	$placeHoldersemp_deduciones["Spanish"] = array();
	$pageTitlesemp_deduciones["Spanish"] = array();
	$fieldLabelsemp_deduciones["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsemp_deduciones["Spanish"]["Tipo"] = "";
	$placeHoldersemp_deduciones["Spanish"]["Tipo"] = "";
	$fieldLabelsemp_deduciones["Spanish"]["CodigoDeduccion"] = "Codigo Deduccion";
	$fieldToolTipsemp_deduciones["Spanish"]["CodigoDeduccion"] = "";
	$placeHoldersemp_deduciones["Spanish"]["CodigoDeduccion"] = "";
	$fieldLabelsemp_deduciones["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsemp_deduciones["Spanish"]["Descripcion"] = "";
	$placeHoldersemp_deduciones["Spanish"]["Descripcion"] = "";
	$fieldLabelsemp_deduciones["Spanish"]["Valor"] = "Valor";
	$fieldToolTipsemp_deduciones["Spanish"]["Valor"] = "";
	$placeHoldersemp_deduciones["Spanish"]["Valor"] = "";
	$fieldLabelsemp_deduciones["Spanish"]["Porcentaje"] = "Porcentaje";
	$fieldToolTipsemp_deduciones["Spanish"]["Porcentaje"] = "";
	$placeHoldersemp_deduciones["Spanish"]["Porcentaje"] = "";
	$fieldLabelsemp_deduciones["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsemp_deduciones["Spanish"]["Estado"] = "";
	$placeHoldersemp_deduciones["Spanish"]["Estado"] = "";
	$fieldLabelsemp_deduciones["Spanish"]["Nmb_Empleado"] = "Nmb Empleado";
	$fieldToolTipsemp_deduciones["Spanish"]["Nmb_Empleado"] = "";
	$placeHoldersemp_deduciones["Spanish"]["Nmb_Empleado"] = "";
	if (count($fieldToolTipsemp_deduciones["Spanish"]))
		$tdataemp_deduciones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemp_deduciones["English"] = array();
	$fieldToolTipsemp_deduciones["English"] = array();
	$placeHoldersemp_deduciones["English"] = array();
	$pageTitlesemp_deduciones["English"] = array();
	$fieldLabelsemp_deduciones["English"]["Tipo"] = "Tipo";
	$fieldToolTipsemp_deduciones["English"]["Tipo"] = "";
	$placeHoldersemp_deduciones["English"]["Tipo"] = "";
	$fieldLabelsemp_deduciones["English"]["CodigoDeduccion"] = "Codigo Deduccion";
	$fieldToolTipsemp_deduciones["English"]["CodigoDeduccion"] = "";
	$placeHoldersemp_deduciones["English"]["CodigoDeduccion"] = "";
	$fieldLabelsemp_deduciones["English"]["Descripcion"] = "Descripcion";
	$fieldToolTipsemp_deduciones["English"]["Descripcion"] = "";
	$placeHoldersemp_deduciones["English"]["Descripcion"] = "";
	$fieldLabelsemp_deduciones["English"]["Valor"] = "Valor";
	$fieldToolTipsemp_deduciones["English"]["Valor"] = "";
	$placeHoldersemp_deduciones["English"]["Valor"] = "";
	$fieldLabelsemp_deduciones["English"]["Porcentaje"] = "Porcentaje";
	$fieldToolTipsemp_deduciones["English"]["Porcentaje"] = "";
	$placeHoldersemp_deduciones["English"]["Porcentaje"] = "";
	$fieldLabelsemp_deduciones["English"]["Estado"] = "Estado";
	$fieldToolTipsemp_deduciones["English"]["Estado"] = "";
	$placeHoldersemp_deduciones["English"]["Estado"] = "";
	$fieldLabelsemp_deduciones["English"]["Nmb_Empleado"] = "Nmb Empleado";
	$fieldToolTipsemp_deduciones["English"]["Nmb_Empleado"] = "";
	$placeHoldersemp_deduciones["English"]["Nmb_Empleado"] = "";
	if (count($fieldToolTipsemp_deduciones["English"]))
		$tdataemp_deduciones[".isUseToolTips"] = true;
}


	$tdataemp_deduciones[".NCSearch"] = true;



$tdataemp_deduciones[".shortTableName"] = "emp_deduciones";
$tdataemp_deduciones[".nSecOptions"] = 0;

$tdataemp_deduciones[".mainTableOwnerID"] = "";
$tdataemp_deduciones[".entityType"] = 0;
$tdataemp_deduciones[".connId"] = "mpc_at_localhost";


$tdataemp_deduciones[".strOriginalTableName"] = "emp_deduciones";

	



$tdataemp_deduciones[".showAddInPopup"] = false;

$tdataemp_deduciones[".showEditInPopup"] = false;

$tdataemp_deduciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemp_deduciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemp_deduciones[".listAjax"] = false;
//	temporary
//$tdataemp_deduciones[".listAjax"] = false;

	$tdataemp_deduciones[".audit"] = false;

	$tdataemp_deduciones[".locking"] = false;


$pages = $tdataemp_deduciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataemp_deduciones[".edit"] = true;
	$tdataemp_deduciones[".afterEditAction"] = 1;
	$tdataemp_deduciones[".closePopupAfterEdit"] = 1;
	$tdataemp_deduciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataemp_deduciones[".add"] = true;
$tdataemp_deduciones[".afterAddAction"] = 1;
$tdataemp_deduciones[".closePopupAfterAdd"] = 1;
$tdataemp_deduciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataemp_deduciones[".list"] = true;
}



$tdataemp_deduciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataemp_deduciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataemp_deduciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataemp_deduciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataemp_deduciones[".printFriendly"] = true;
}



$tdataemp_deduciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataemp_deduciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataemp_deduciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataemp_deduciones[".isUseAjaxSuggest"] = true;

$tdataemp_deduciones[".rowHighlite"] = true;





$tdataemp_deduciones[".ajaxCodeSnippetAdded"] = false;

$tdataemp_deduciones[".buttonsAdded"] = false;

$tdataemp_deduciones[".addPageEvents"] = true;

// use timepicker for search panel
$tdataemp_deduciones[".isUseTimeForSearch"] = false;


$tdataemp_deduciones[".badgeColor"] = "6B8E23";


$tdataemp_deduciones[".allSearchFields"] = array();
$tdataemp_deduciones[".filterFields"] = array();
$tdataemp_deduciones[".requiredSearchFields"] = array();

$tdataemp_deduciones[".googleLikeFields"] = array();
$tdataemp_deduciones[".googleLikeFields"][] = "Tipo";
$tdataemp_deduciones[".googleLikeFields"][] = "CodigoDeduccion";
$tdataemp_deduciones[".googleLikeFields"][] = "Descripcion";
$tdataemp_deduciones[".googleLikeFields"][] = "Valor";
$tdataemp_deduciones[".googleLikeFields"][] = "Porcentaje";
$tdataemp_deduciones[".googleLikeFields"][] = "Estado";
$tdataemp_deduciones[".googleLikeFields"][] = "Nmb_Empleado";



$tdataemp_deduciones[".tableType"] = "list";

$tdataemp_deduciones[".printerPageOrientation"] = 0;
$tdataemp_deduciones[".nPrinterPageScale"] = 100;

$tdataemp_deduciones[".nPrinterSplitRecords"] = 40;

$tdataemp_deduciones[".geocodingEnabled"] = false;










$tdataemp_deduciones[".pageSize"] = 20;

$tdataemp_deduciones[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Tipo, CodigoDeduccion DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemp_deduciones[".strOrderBy"] = $tstrOrderBy;

$tdataemp_deduciones[".orderindexes"] = array();
	$tdataemp_deduciones[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Tipo");

	$tdataemp_deduciones[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "CodigoDeduccion");



$tdataemp_deduciones[".sqlHead"] = "SELECT Tipo,  CodigoDeduccion,  Descripcion,  Valor,  Porcentaje,  Estado,  Nmb_Empleado";
$tdataemp_deduciones[".sqlFrom"] = "FROM emp_deduciones";
$tdataemp_deduciones[".sqlWhereExpr"] = "";
$tdataemp_deduciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemp_deduciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemp_deduciones[".arrGroupsPerPage"] = $arrGPP;

$tdataemp_deduciones[".highlightSearchResults"] = true;

$tableKeysemp_deduciones = array();
$tableKeysemp_deduciones[] = "Tipo";
$tableKeysemp_deduciones[] = "CodigoDeduccion";
$tdataemp_deduciones[".Keys"] = $tableKeysemp_deduciones;


$tdataemp_deduciones[".hideMobileList"] = array();




//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "emp_deduciones";
	$fdata["Label"] = GetFieldLabel("emp_deduciones","Tipo");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "Tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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
	$edata["LookupValues"][] = "Ingreso";
	$edata["LookupValues"][] = "Deduccion";

	
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


	$tdataemp_deduciones["Tipo"] = $fdata;
		$tdataemp_deduciones[".searchableFields"][] = "Tipo";
//	CodigoDeduccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CodigoDeduccion";
	$fdata["GoodName"] = "CodigoDeduccion";
	$fdata["ownerTable"] = "emp_deduciones";
	$fdata["Label"] = GetFieldLabel("emp_deduciones","CodigoDeduccion");
	$fdata["FieldType"] = 13;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CodigoDeduccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodigoDeduccion";

	
	
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


	$tdataemp_deduciones["CodigoDeduccion"] = $fdata;
		$tdataemp_deduciones[".searchableFields"][] = "CodigoDeduccion";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "emp_deduciones";
	$fdata["Label"] = GetFieldLabel("emp_deduciones","Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataemp_deduciones["Descripcion"] = $fdata;
		$tdataemp_deduciones[".searchableFields"][] = "Descripcion";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "emp_deduciones";
	$fdata["Label"] = GetFieldLabel("emp_deduciones","Valor");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
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


	$tdataemp_deduciones["Valor"] = $fdata;
		$tdataemp_deduciones[".searchableFields"][] = "Valor";
//	Porcentaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Porcentaje";
	$fdata["GoodName"] = "Porcentaje";
	$fdata["ownerTable"] = "emp_deduciones";
	$fdata["Label"] = GetFieldLabel("emp_deduciones","Porcentaje");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Porcentaje";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Porcentaje";

	
	
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


	$tdataemp_deduciones["Porcentaje"] = $fdata;
		$tdataemp_deduciones[".searchableFields"][] = "Porcentaje";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "emp_deduciones";
	$fdata["Label"] = GetFieldLabel("emp_deduciones","Estado");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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


	$tdataemp_deduciones["Estado"] = $fdata;
		$tdataemp_deduciones[".searchableFields"][] = "Estado";
//	Nmb_Empleado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Nmb_Empleado";
	$fdata["GoodName"] = "Nmb_Empleado";
	$fdata["ownerTable"] = "emp_deduciones";
	$fdata["Label"] = GetFieldLabel("emp_deduciones","Nmb_Empleado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nmb_Empleado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nmb_Empleado";

	
	
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


	$tdataemp_deduciones["Nmb_Empleado"] = $fdata;
		$tdataemp_deduciones[".searchableFields"][] = "Nmb_Empleado";


$tables_data["emp_deduciones"]=&$tdataemp_deduciones;
$field_labels["emp_deduciones"] = &$fieldLabelsemp_deduciones;
$fieldToolTips["emp_deduciones"] = &$fieldToolTipsemp_deduciones;
$placeHolders["emp_deduciones"] = &$placeHoldersemp_deduciones;
$page_titles["emp_deduciones"] = &$pageTitlesemp_deduciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emp_deduciones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["emp_deduciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_emp_deduciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Tipo,  CodigoDeduccion,  Descripcion,  Valor,  Porcentaje,  Estado,  Nmb_Empleado";
$proto0["m_strFrom"] = "FROM emp_deduciones";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Tipo, CodigoDeduccion DESC";
	
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
	"m_strName" => "Tipo",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto6["m_sql"] = "Tipo";
$proto6["m_srcTableName"] = "emp_deduciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoDeduccion",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto8["m_sql"] = "CodigoDeduccion";
$proto8["m_srcTableName"] = "emp_deduciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto10["m_sql"] = "Descripcion";
$proto10["m_srcTableName"] = "emp_deduciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto12["m_sql"] = "Valor";
$proto12["m_srcTableName"] = "emp_deduciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Porcentaje",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto14["m_sql"] = "Porcentaje";
$proto14["m_srcTableName"] = "emp_deduciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto16["m_sql"] = "Estado";
$proto16["m_srcTableName"] = "emp_deduciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Nmb_Empleado",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto18["m_sql"] = "Nmb_Empleado";
$proto18["m_srcTableName"] = "emp_deduciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "emp_deduciones";
$proto21["m_srcTableName"] = "emp_deduciones";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Tipo";
$proto21["m_columns"][] = "CodigoDeduccion";
$proto21["m_columns"][] = "Descripcion";
$proto21["m_columns"][] = "Valor";
$proto21["m_columns"][] = "Porcentaje";
$proto21["m_columns"][] = "Estado";
$proto21["m_columns"][] = "Nmb_Empleado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "emp_deduciones";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "emp_deduciones";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "CodigoDeduccion",
	"m_strTable" => "emp_deduciones",
	"m_srcTableName" => "emp_deduciones"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="emp_deduciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emp_deduciones = createSqlQuery_emp_deduciones();


	
		;

							

$tdataemp_deduciones[".sqlquery"] = $queryData_emp_deduciones;



include_once(getabspath("include/emp_deduciones_events.php"));
$tableEvents["emp_deduciones"] = new eventclass_emp_deduciones;
$tdataemp_deduciones[".hasEvents"] = true;

?>