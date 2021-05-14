<?php
$tdataemp_tipoemp = array();
$tdataemp_tipoemp[".searchableFields"] = array();
$tdataemp_tipoemp[".ShortName"] = "emp_tipoemp";
$tdataemp_tipoemp[".OwnerID"] = "";
$tdataemp_tipoemp[".OriginalTable"] = "emp_tipoemp";


$tdataemp_tipoemp[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataemp_tipoemp[".originalPagesByType"] = $tdataemp_tipoemp[".pagesByType"];
$tdataemp_tipoemp[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataemp_tipoemp[".originalPages"] = $tdataemp_tipoemp[".pages"];
$tdataemp_tipoemp[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataemp_tipoemp[".originalDefaultPages"] = $tdataemp_tipoemp[".defaultPages"];

//	field labels
$fieldLabelsemp_tipoemp = array();
$fieldToolTipsemp_tipoemp = array();
$pageTitlesemp_tipoemp = array();
$placeHoldersemp_tipoemp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsemp_tipoemp["Spanish"] = array();
	$fieldToolTipsemp_tipoemp["Spanish"] = array();
	$placeHoldersemp_tipoemp["Spanish"] = array();
	$pageTitlesemp_tipoemp["Spanish"] = array();
	$fieldLabelsemp_tipoemp["Spanish"]["TipoEmpleado"] = "Tipo Empleado";
	$fieldToolTipsemp_tipoemp["Spanish"]["TipoEmpleado"] = "";
	$placeHoldersemp_tipoemp["Spanish"]["TipoEmpleado"] = "";
	$fieldLabelsemp_tipoemp["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsemp_tipoemp["Spanish"]["Descripcion"] = "";
	$placeHoldersemp_tipoemp["Spanish"]["Descripcion"] = "";
	if (count($fieldToolTipsemp_tipoemp["Spanish"]))
		$tdataemp_tipoemp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemp_tipoemp["English"] = array();
	$fieldToolTipsemp_tipoemp["English"] = array();
	$placeHoldersemp_tipoemp["English"] = array();
	$pageTitlesemp_tipoemp["English"] = array();
	$fieldLabelsemp_tipoemp["English"]["TipoEmpleado"] = "Employee Type";
	$fieldToolTipsemp_tipoemp["English"]["TipoEmpleado"] = "";
	$placeHoldersemp_tipoemp["English"]["TipoEmpleado"] = "";
	$fieldLabelsemp_tipoemp["English"]["Descripcion"] = "Description";
	$fieldToolTipsemp_tipoemp["English"]["Descripcion"] = "";
	$placeHoldersemp_tipoemp["English"]["Descripcion"] = "";
	if (count($fieldToolTipsemp_tipoemp["English"]))
		$tdataemp_tipoemp[".isUseToolTips"] = true;
}


	$tdataemp_tipoemp[".NCSearch"] = true;



$tdataemp_tipoemp[".shortTableName"] = "emp_tipoemp";
$tdataemp_tipoemp[".nSecOptions"] = 0;

$tdataemp_tipoemp[".mainTableOwnerID"] = "";
$tdataemp_tipoemp[".entityType"] = 0;
$tdataemp_tipoemp[".connId"] = "mpc_at_localhost";


$tdataemp_tipoemp[".strOriginalTableName"] = "emp_tipoemp";

	



$tdataemp_tipoemp[".showAddInPopup"] = false;

$tdataemp_tipoemp[".showEditInPopup"] = false;

$tdataemp_tipoemp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemp_tipoemp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemp_tipoemp[".listAjax"] = false;
//	temporary
//$tdataemp_tipoemp[".listAjax"] = false;

	$tdataemp_tipoemp[".audit"] = false;

	$tdataemp_tipoemp[".locking"] = false;


$pages = $tdataemp_tipoemp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataemp_tipoemp[".edit"] = true;
	$tdataemp_tipoemp[".afterEditAction"] = 1;
	$tdataemp_tipoemp[".closePopupAfterEdit"] = 1;
	$tdataemp_tipoemp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataemp_tipoemp[".add"] = true;
$tdataemp_tipoemp[".afterAddAction"] = 1;
$tdataemp_tipoemp[".closePopupAfterAdd"] = 1;
$tdataemp_tipoemp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataemp_tipoemp[".list"] = true;
}



$tdataemp_tipoemp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataemp_tipoemp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataemp_tipoemp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataemp_tipoemp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataemp_tipoemp[".printFriendly"] = true;
}



$tdataemp_tipoemp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataemp_tipoemp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataemp_tipoemp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataemp_tipoemp[".isUseAjaxSuggest"] = true;

$tdataemp_tipoemp[".rowHighlite"] = true;





$tdataemp_tipoemp[".ajaxCodeSnippetAdded"] = false;

$tdataemp_tipoemp[".buttonsAdded"] = false;

$tdataemp_tipoemp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemp_tipoemp[".isUseTimeForSearch"] = false;


$tdataemp_tipoemp[".badgeColor"] = "E8926F";


$tdataemp_tipoemp[".allSearchFields"] = array();
$tdataemp_tipoemp[".filterFields"] = array();
$tdataemp_tipoemp[".requiredSearchFields"] = array();

$tdataemp_tipoemp[".googleLikeFields"] = array();
$tdataemp_tipoemp[".googleLikeFields"][] = "TipoEmpleado";
$tdataemp_tipoemp[".googleLikeFields"][] = "Descripcion";



$tdataemp_tipoemp[".tableType"] = "list";

$tdataemp_tipoemp[".printerPageOrientation"] = 0;
$tdataemp_tipoemp[".nPrinterPageScale"] = 100;

$tdataemp_tipoemp[".nPrinterSplitRecords"] = 40;

$tdataemp_tipoemp[".geocodingEnabled"] = false;










$tdataemp_tipoemp[".pageSize"] = 20;

$tdataemp_tipoemp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemp_tipoemp[".strOrderBy"] = $tstrOrderBy;

$tdataemp_tipoemp[".orderindexes"] = array();


$tdataemp_tipoemp[".sqlHead"] = "SELECT TipoEmpleado,  	Descripcion";
$tdataemp_tipoemp[".sqlFrom"] = "FROM emp_tipoemp";
$tdataemp_tipoemp[".sqlWhereExpr"] = "";
$tdataemp_tipoemp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemp_tipoemp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemp_tipoemp[".arrGroupsPerPage"] = $arrGPP;

$tdataemp_tipoemp[".highlightSearchResults"] = true;

$tableKeysemp_tipoemp = array();
$tableKeysemp_tipoemp[] = "TipoEmpleado";
$tdataemp_tipoemp[".Keys"] = $tableKeysemp_tipoemp;


$tdataemp_tipoemp[".hideMobileList"] = array();




//	TipoEmpleado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoEmpleado";
	$fdata["GoodName"] = "TipoEmpleado";
	$fdata["ownerTable"] = "emp_tipoemp";
	$fdata["Label"] = GetFieldLabel("emp_tipoemp","TipoEmpleado");
	$fdata["FieldType"] = 2;

	
	
	
			

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


	$tdataemp_tipoemp["TipoEmpleado"] = $fdata;
		$tdataemp_tipoemp[".searchableFields"][] = "TipoEmpleado";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "emp_tipoemp";
	$fdata["Label"] = GetFieldLabel("emp_tipoemp","Descripcion");
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


	$tdataemp_tipoemp["Descripcion"] = $fdata;
		$tdataemp_tipoemp[".searchableFields"][] = "Descripcion";


$tables_data["emp_tipoemp"]=&$tdataemp_tipoemp;
$field_labels["emp_tipoemp"] = &$fieldLabelsemp_tipoemp;
$fieldToolTips["emp_tipoemp"] = &$fieldToolTipsemp_tipoemp;
$placeHolders["emp_tipoemp"] = &$placeHoldersemp_tipoemp;
$page_titles["emp_tipoemp"] = &$pageTitlesemp_tipoemp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emp_tipoemp"] = array();
//	emp_mstemp
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="emp_mstemp";
		$detailsParam["dOriginalTable"] = "emp_mstemp";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "emp_mstemp";
	$detailsParam["dCaptionTable"] = GetTableCaption("emp_mstemp");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["emp_tipoemp"][$dIndex] = $detailsParam;

	
		$detailsTablesData["emp_tipoemp"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["emp_tipoemp"][$dIndex]["masterKeys"][]="TipoEmpleado";

				$detailsTablesData["emp_tipoemp"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["emp_tipoemp"][$dIndex]["detailKeys"][]="TipoEmpleado";

// tables which are master tables for current table (detail)
$masterTablesData["emp_tipoemp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_emp_tipoemp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoEmpleado,  	Descripcion";
$proto0["m_strFrom"] = "FROM emp_tipoemp";
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
	"m_strTable" => "emp_tipoemp",
	"m_srcTableName" => "emp_tipoemp"
));

$proto6["m_sql"] = "TipoEmpleado";
$proto6["m_srcTableName"] = "emp_tipoemp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "emp_tipoemp",
	"m_srcTableName" => "emp_tipoemp"
));

$proto8["m_sql"] = "Descripcion";
$proto8["m_srcTableName"] = "emp_tipoemp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "emp_tipoemp";
$proto11["m_srcTableName"] = "emp_tipoemp";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TipoEmpleado";
$proto11["m_columns"][] = "Descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "emp_tipoemp";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "emp_tipoemp";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="emp_tipoemp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emp_tipoemp = createSqlQuery_emp_tipoemp();


	
		;

		

$tdataemp_tipoemp[".sqlquery"] = $queryData_emp_tipoemp;



$tableEvents["emp_tipoemp"] = new eventsBase;
$tdataemp_tipoemp[".hasEvents"] = false;

?>