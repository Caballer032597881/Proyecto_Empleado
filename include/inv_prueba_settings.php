<?php
$tdatainv_prueba = array();
$tdatainv_prueba[".searchableFields"] = array();
$tdatainv_prueba[".ShortName"] = "inv_prueba";
$tdatainv_prueba[".OwnerID"] = "";
$tdatainv_prueba[".OriginalTable"] = "inv_prueba";


$tdatainv_prueba[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainv_prueba[".originalPagesByType"] = $tdatainv_prueba[".pagesByType"];
$tdatainv_prueba[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainv_prueba[".originalPages"] = $tdatainv_prueba[".pages"];
$tdatainv_prueba[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainv_prueba[".originalDefaultPages"] = $tdatainv_prueba[".defaultPages"];

//	field labels
$fieldLabelsinv_prueba = array();
$fieldToolTipsinv_prueba = array();
$pageTitlesinv_prueba = array();
$placeHoldersinv_prueba = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinv_prueba["Spanish"] = array();
	$fieldToolTipsinv_prueba["Spanish"] = array();
	$placeHoldersinv_prueba["Spanish"] = array();
	$pageTitlesinv_prueba["Spanish"] = array();
	$fieldLabelsinv_prueba["Spanish"]["Clit_Nombre"] = "Clit Nombre";
	$fieldToolTipsinv_prueba["Spanish"]["Clit_Nombre"] = "";
	$placeHoldersinv_prueba["Spanish"]["Clit_Nombre"] = "";
	$fieldLabelsinv_prueba["Spanish"]["Desc_x_Persona"] = "Desc.x Persona";
	$fieldToolTipsinv_prueba["Spanish"]["Desc_x_Persona"] = "";
	$placeHoldersinv_prueba["Spanish"]["Desc_x_Persona"] = "";
	$fieldLabelsinv_prueba["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsinv_prueba["Spanish"]["Empresa"] = "";
	$placeHoldersinv_prueba["Spanish"]["Empresa"] = "";
	$fieldLabelsinv_prueba["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipsinv_prueba["Spanish"]["Direccion"] = "";
	$placeHoldersinv_prueba["Spanish"]["Direccion"] = "";
	if (count($fieldToolTipsinv_prueba["Spanish"]))
		$tdatainv_prueba[".isUseToolTips"] = true;
}


	$tdatainv_prueba[".NCSearch"] = true;



$tdatainv_prueba[".shortTableName"] = "inv_prueba";
$tdatainv_prueba[".nSecOptions"] = 0;

$tdatainv_prueba[".mainTableOwnerID"] = "";
$tdatainv_prueba[".entityType"] = 0;
$tdatainv_prueba[".connId"] = "prueba_0_1_at_localhost";


$tdatainv_prueba[".strOriginalTableName"] = "inv_prueba";

	



$tdatainv_prueba[".showAddInPopup"] = false;

$tdatainv_prueba[".showEditInPopup"] = false;

$tdatainv_prueba[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainv_prueba[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainv_prueba[".listAjax"] = false;
//	temporary
//$tdatainv_prueba[".listAjax"] = false;

	$tdatainv_prueba[".audit"] = false;

	$tdatainv_prueba[".locking"] = false;


$pages = $tdatainv_prueba[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainv_prueba[".edit"] = true;
	$tdatainv_prueba[".afterEditAction"] = 1;
	$tdatainv_prueba[".closePopupAfterEdit"] = 1;
	$tdatainv_prueba[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainv_prueba[".add"] = true;
$tdatainv_prueba[".afterAddAction"] = 1;
$tdatainv_prueba[".closePopupAfterAdd"] = 1;
$tdatainv_prueba[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainv_prueba[".list"] = true;
}



$tdatainv_prueba[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainv_prueba[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainv_prueba[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainv_prueba[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainv_prueba[".printFriendly"] = true;
}



$tdatainv_prueba[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainv_prueba[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainv_prueba[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainv_prueba[".isUseAjaxSuggest"] = true;

$tdatainv_prueba[".rowHighlite"] = true;





$tdatainv_prueba[".ajaxCodeSnippetAdded"] = false;

$tdatainv_prueba[".buttonsAdded"] = false;

$tdatainv_prueba[".addPageEvents"] = true;

// use timepicker for search panel
$tdatainv_prueba[".isUseTimeForSearch"] = false;


$tdatainv_prueba[".badgeColor"] = "4169E1";


$tdatainv_prueba[".allSearchFields"] = array();
$tdatainv_prueba[".filterFields"] = array();
$tdatainv_prueba[".requiredSearchFields"] = array();

$tdatainv_prueba[".googleLikeFields"] = array();
$tdatainv_prueba[".googleLikeFields"][] = "Clit_Nombre";
$tdatainv_prueba[".googleLikeFields"][] = "Desc.x_Persona";
$tdatainv_prueba[".googleLikeFields"][] = "Empresa";
$tdatainv_prueba[".googleLikeFields"][] = "Direccion";



$tdatainv_prueba[".tableType"] = "list";

$tdatainv_prueba[".printerPageOrientation"] = 0;
$tdatainv_prueba[".nPrinterPageScale"] = 100;

$tdatainv_prueba[".nPrinterSplitRecords"] = 40;

$tdatainv_prueba[".geocodingEnabled"] = false;










$tdatainv_prueba[".pageSize"] = 20;

$tdatainv_prueba[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainv_prueba[".strOrderBy"] = $tstrOrderBy;

$tdatainv_prueba[".orderindexes"] = array();


$tdatainv_prueba[".sqlHead"] = "SELECT Clit_Nombre,  	`Desc.x_Persona`,  	Empresa,  	Direccion";
$tdatainv_prueba[".sqlFrom"] = "FROM inv_prueba";
$tdatainv_prueba[".sqlWhereExpr"] = "";
$tdatainv_prueba[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainv_prueba[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainv_prueba[".arrGroupsPerPage"] = $arrGPP;

$tdatainv_prueba[".highlightSearchResults"] = true;

$tableKeysinv_prueba = array();
$tableKeysinv_prueba[] = "Clit_Nombre";
$tableKeysinv_prueba[] = "Desc.x_Persona";
$tdatainv_prueba[".Keys"] = $tableKeysinv_prueba;


$tdatainv_prueba[".hideMobileList"] = array();




//	Clit_Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Clit_Nombre";
	$fdata["GoodName"] = "Clit_Nombre";
	$fdata["ownerTable"] = "inv_prueba";
	$fdata["Label"] = GetFieldLabel("inv_prueba","Clit_Nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Clit_Nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clit_Nombre";

	
	
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


	$tdatainv_prueba["Clit_Nombre"] = $fdata;
		$tdatainv_prueba[".searchableFields"][] = "Clit_Nombre";
//	Desc.x_Persona
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Desc.x_Persona";
	$fdata["GoodName"] = "Desc_x_Persona";
	$fdata["ownerTable"] = "inv_prueba";
	$fdata["Label"] = GetFieldLabel("inv_prueba","Desc_x_Persona");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "Desc.x_Persona";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Desc.x_Persona`";

	
	
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
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

	
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


	$tdatainv_prueba["Desc.x_Persona"] = $fdata;
		$tdatainv_prueba[".searchableFields"][] = "Desc.x_Persona";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "inv_prueba";
	$fdata["Label"] = GetFieldLabel("inv_prueba","Empresa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Empresa";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatainv_prueba["Empresa"] = $fdata;
		$tdatainv_prueba[".searchableFields"][] = "Empresa";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "inv_prueba";
	$fdata["Label"] = GetFieldLabel("inv_prueba","Direccion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direccion";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatainv_prueba["Direccion"] = $fdata;
		$tdatainv_prueba[".searchableFields"][] = "Direccion";


$tables_data["inv_prueba"]=&$tdatainv_prueba;
$field_labels["inv_prueba"] = &$fieldLabelsinv_prueba;
$fieldToolTips["inv_prueba"] = &$fieldToolTipsinv_prueba;
$placeHolders["inv_prueba"] = &$placeHoldersinv_prueba;
$page_titles["inv_prueba"] = &$pageTitlesinv_prueba;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inv_prueba"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inv_prueba"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_inv_prueba()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Clit_Nombre,  	`Desc.x_Persona`,  	Empresa,  	Direccion";
$proto0["m_strFrom"] = "FROM inv_prueba";
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
	"m_strName" => "Clit_Nombre",
	"m_strTable" => "inv_prueba",
	"m_srcTableName" => "inv_prueba"
));

$proto6["m_sql"] = "Clit_Nombre";
$proto6["m_srcTableName"] = "inv_prueba";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Desc.x_Persona",
	"m_strTable" => "inv_prueba",
	"m_srcTableName" => "inv_prueba"
));

$proto8["m_sql"] = "`Desc.x_Persona`";
$proto8["m_srcTableName"] = "inv_prueba";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "inv_prueba",
	"m_srcTableName" => "inv_prueba"
));

$proto10["m_sql"] = "Empresa";
$proto10["m_srcTableName"] = "inv_prueba";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "inv_prueba",
	"m_srcTableName" => "inv_prueba"
));

$proto12["m_sql"] = "Direccion";
$proto12["m_srcTableName"] = "inv_prueba";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "inv_prueba";
$proto15["m_srcTableName"] = "inv_prueba";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Clit_Nombre";
$proto15["m_columns"][] = "Desc.x_Persona";
$proto15["m_columns"][] = "Empresa";
$proto15["m_columns"][] = "Direccion";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "inv_prueba";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "inv_prueba";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inv_prueba";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inv_prueba = createSqlQuery_inv_prueba();


	
		;

				

$tdatainv_prueba[".sqlquery"] = $queryData_inv_prueba;



include_once(getabspath("include/inv_prueba_events.php"));
$tableEvents["inv_prueba"] = new eventclass_inv_prueba;
$tdatainv_prueba[".hasEvents"] = true;

?>