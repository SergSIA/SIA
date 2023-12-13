<?php
$tdatamethod_payment = array();
$tdatamethod_payment[".searchableFields"] = array();
$tdatamethod_payment[".ShortName"] = "method_payment";
$tdatamethod_payment[".OwnerID"] = "";
$tdatamethod_payment[".OriginalTable"] = "public.method_payment";


$tdatamethod_payment[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamethod_payment[".originalPagesByType"] = $tdatamethod_payment[".pagesByType"];
$tdatamethod_payment[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamethod_payment[".originalPages"] = $tdatamethod_payment[".pages"];
$tdatamethod_payment[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamethod_payment[".originalDefaultPages"] = $tdatamethod_payment[".defaultPages"];

//	field labels
$fieldLabelsmethod_payment = array();
$fieldToolTipsmethod_payment = array();
$pageTitlesmethod_payment = array();
$placeHoldersmethod_payment = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmethod_payment["Spanish"] = array();
	$fieldToolTipsmethod_payment["Spanish"] = array();
	$placeHoldersmethod_payment["Spanish"] = array();
	$pageTitlesmethod_payment["Spanish"] = array();
	$fieldLabelsmethod_payment["Spanish"]["id"] = "Id";
	$fieldToolTipsmethod_payment["Spanish"]["id"] = "";
	$placeHoldersmethod_payment["Spanish"]["id"] = "";
	$fieldLabelsmethod_payment["Spanish"]["description"] = "Descripcion";
	$fieldToolTipsmethod_payment["Spanish"]["description"] = "";
	$placeHoldersmethod_payment["Spanish"]["description"] = "";
	if (count($fieldToolTipsmethod_payment["Spanish"]))
		$tdatamethod_payment[".isUseToolTips"] = true;
}


	$tdatamethod_payment[".NCSearch"] = true;



$tdatamethod_payment[".shortTableName"] = "method_payment";
$tdatamethod_payment[".nSecOptions"] = 0;

$tdatamethod_payment[".mainTableOwnerID"] = "";
$tdatamethod_payment[".entityType"] = 0;
$tdatamethod_payment[".connId"] = "postgres_at_localhost";


$tdatamethod_payment[".strOriginalTableName"] = "public.method_payment";

	



$tdatamethod_payment[".showAddInPopup"] = false;

$tdatamethod_payment[".showEditInPopup"] = false;

$tdatamethod_payment[".showViewInPopup"] = false;

$tdatamethod_payment[".listAjax"] = false;
//	temporary
//$tdatamethod_payment[".listAjax"] = false;

	$tdatamethod_payment[".audit"] = false;

	$tdatamethod_payment[".locking"] = false;


$pages = $tdatamethod_payment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamethod_payment[".edit"] = true;
	$tdatamethod_payment[".afterEditAction"] = 1;
	$tdatamethod_payment[".closePopupAfterEdit"] = 1;
	$tdatamethod_payment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamethod_payment[".add"] = true;
$tdatamethod_payment[".afterAddAction"] = 1;
$tdatamethod_payment[".closePopupAfterAdd"] = 1;
$tdatamethod_payment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamethod_payment[".list"] = true;
}



$tdatamethod_payment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamethod_payment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamethod_payment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamethod_payment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamethod_payment[".printFriendly"] = true;
}



$tdatamethod_payment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamethod_payment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamethod_payment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamethod_payment[".isUseAjaxSuggest"] = true;

$tdatamethod_payment[".rowHighlite"] = true;



									

$tdatamethod_payment[".ajaxCodeSnippetAdded"] = false;

$tdatamethod_payment[".buttonsAdded"] = false;

$tdatamethod_payment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamethod_payment[".isUseTimeForSearch"] = false;


$tdatamethod_payment[".badgeColor"] = "4169E1";


$tdatamethod_payment[".allSearchFields"] = array();
$tdatamethod_payment[".filterFields"] = array();
$tdatamethod_payment[".requiredSearchFields"] = array();

$tdatamethod_payment[".googleLikeFields"] = array();
$tdatamethod_payment[".googleLikeFields"][] = "id";
$tdatamethod_payment[".googleLikeFields"][] = "description";



$tdatamethod_payment[".tableType"] = "list";

$tdatamethod_payment[".printerPageOrientation"] = 0;
$tdatamethod_payment[".nPrinterPageScale"] = 100;

$tdatamethod_payment[".nPrinterSplitRecords"] = 40;

$tdatamethod_payment[".geocodingEnabled"] = false;










$tdatamethod_payment[".pageSize"] = 20;

$tdatamethod_payment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamethod_payment[".strOrderBy"] = $tstrOrderBy;

$tdatamethod_payment[".orderindexes"] = array();


$tdatamethod_payment[".sqlHead"] = "SELECT id,  	description";
$tdatamethod_payment[".sqlFrom"] = "FROM \"public\".method_payment";
$tdatamethod_payment[".sqlWhereExpr"] = "";
$tdatamethod_payment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamethod_payment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamethod_payment[".arrGroupsPerPage"] = $arrGPP;

$tdatamethod_payment[".highlightSearchResults"] = true;

$tableKeysmethod_payment = array();
$tableKeysmethod_payment[] = "id";
$tdatamethod_payment[".Keys"] = $tableKeysmethod_payment;


$tdatamethod_payment[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.method_payment";
	$fdata["Label"] = GetFieldLabel("public_method_payment","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatamethod_payment["id"] = $fdata;
		$tdatamethod_payment[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.method_payment";
	$fdata["Label"] = GetFieldLabel("public_method_payment","description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamethod_payment["description"] = $fdata;
		$tdatamethod_payment[".searchableFields"][] = "description";


$tables_data["public.method_payment"]=&$tdatamethod_payment;
$field_labels["public_method_payment"] = &$fieldLabelsmethod_payment;
$fieldToolTips["public_method_payment"] = &$fieldToolTipsmethod_payment;
$placeHolders["public_method_payment"] = &$placeHoldersmethod_payment;
$page_titles["public_method_payment"] = &$pageTitlesmethod_payment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.method_payment"] = array();
//	public.payment
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.payment";
		$detailsParam["dOriginalTable"] = "public.payment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_payment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.method_payment"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.method_payment"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.method_payment"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.method_payment"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.method_payment"][$dIndex]["detailKeys"][]="fk_id_method_payment";
//	public.payment_advisor
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.payment_advisor";
		$detailsParam["dOriginalTable"] = "public.payment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment_advisor";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_payment_advisor");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.method_payment"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.method_payment"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.method_payment"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.method_payment"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.method_payment"][$dIndex]["detailKeys"][]="fk_id_method_payment";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.method_payment"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_method_payment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description";
$proto0["m_strFrom"] = "FROM \"public\".method_payment";
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
	"m_strName" => "id",
	"m_strTable" => "public.method_payment",
	"m_srcTableName" => "public.method_payment"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.method_payment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.method_payment",
	"m_srcTableName" => "public.method_payment"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "public.method_payment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.method_payment";
$proto11["m_srcTableName"] = "public.method_payment";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".method_payment";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.method_payment";
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
$proto0["m_srcTableName"]="public.method_payment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_method_payment = createSqlQuery_method_payment();


	
		;

		

$tdatamethod_payment[".sqlquery"] = $queryData_method_payment;



$tableEvents["public.method_payment"] = new eventsBase;
$tdatamethod_payment[".hasEvents"] = false;

?>