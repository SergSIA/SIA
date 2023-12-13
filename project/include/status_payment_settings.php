<?php
$tdatastatus_payment = array();
$tdatastatus_payment[".searchableFields"] = array();
$tdatastatus_payment[".ShortName"] = "status_payment";
$tdatastatus_payment[".OwnerID"] = "";
$tdatastatus_payment[".OriginalTable"] = "public.status_payment";


$tdatastatus_payment[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastatus_payment[".originalPagesByType"] = $tdatastatus_payment[".pagesByType"];
$tdatastatus_payment[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastatus_payment[".originalPages"] = $tdatastatus_payment[".pages"];
$tdatastatus_payment[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastatus_payment[".originalDefaultPages"] = $tdatastatus_payment[".defaultPages"];

//	field labels
$fieldLabelsstatus_payment = array();
$fieldToolTipsstatus_payment = array();
$pageTitlesstatus_payment = array();
$placeHoldersstatus_payment = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsstatus_payment["Spanish"] = array();
	$fieldToolTipsstatus_payment["Spanish"] = array();
	$placeHoldersstatus_payment["Spanish"] = array();
	$pageTitlesstatus_payment["Spanish"] = array();
	$fieldLabelsstatus_payment["Spanish"]["id"] = "Id";
	$fieldToolTipsstatus_payment["Spanish"]["id"] = "";
	$placeHoldersstatus_payment["Spanish"]["id"] = "";
	$fieldLabelsstatus_payment["Spanish"]["description"] = "Descripcion";
	$fieldToolTipsstatus_payment["Spanish"]["description"] = "";
	$placeHoldersstatus_payment["Spanish"]["description"] = "";
	if (count($fieldToolTipsstatus_payment["Spanish"]))
		$tdatastatus_payment[".isUseToolTips"] = true;
}


	$tdatastatus_payment[".NCSearch"] = true;



$tdatastatus_payment[".shortTableName"] = "status_payment";
$tdatastatus_payment[".nSecOptions"] = 0;

$tdatastatus_payment[".mainTableOwnerID"] = "";
$tdatastatus_payment[".entityType"] = 0;
$tdatastatus_payment[".connId"] = "postgres_at_localhost";


$tdatastatus_payment[".strOriginalTableName"] = "public.status_payment";

	



$tdatastatus_payment[".showAddInPopup"] = false;

$tdatastatus_payment[".showEditInPopup"] = false;

$tdatastatus_payment[".showViewInPopup"] = false;

$tdatastatus_payment[".listAjax"] = false;
//	temporary
//$tdatastatus_payment[".listAjax"] = false;

	$tdatastatus_payment[".audit"] = false;

	$tdatastatus_payment[".locking"] = false;


$pages = $tdatastatus_payment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastatus_payment[".edit"] = true;
	$tdatastatus_payment[".afterEditAction"] = 1;
	$tdatastatus_payment[".closePopupAfterEdit"] = 1;
	$tdatastatus_payment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastatus_payment[".add"] = true;
$tdatastatus_payment[".afterAddAction"] = 1;
$tdatastatus_payment[".closePopupAfterAdd"] = 1;
$tdatastatus_payment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastatus_payment[".list"] = true;
}



$tdatastatus_payment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastatus_payment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastatus_payment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastatus_payment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastatus_payment[".printFriendly"] = true;
}



$tdatastatus_payment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastatus_payment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastatus_payment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastatus_payment[".isUseAjaxSuggest"] = true;

$tdatastatus_payment[".rowHighlite"] = true;



									

$tdatastatus_payment[".ajaxCodeSnippetAdded"] = false;

$tdatastatus_payment[".buttonsAdded"] = false;

$tdatastatus_payment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatus_payment[".isUseTimeForSearch"] = false;


$tdatastatus_payment[".badgeColor"] = "7B68EE";


$tdatastatus_payment[".allSearchFields"] = array();
$tdatastatus_payment[".filterFields"] = array();
$tdatastatus_payment[".requiredSearchFields"] = array();

$tdatastatus_payment[".googleLikeFields"] = array();
$tdatastatus_payment[".googleLikeFields"][] = "id";
$tdatastatus_payment[".googleLikeFields"][] = "description";



$tdatastatus_payment[".tableType"] = "list";

$tdatastatus_payment[".printerPageOrientation"] = 0;
$tdatastatus_payment[".nPrinterPageScale"] = 100;

$tdatastatus_payment[".nPrinterSplitRecords"] = 40;

$tdatastatus_payment[".geocodingEnabled"] = false;










$tdatastatus_payment[".pageSize"] = 20;

$tdatastatus_payment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastatus_payment[".strOrderBy"] = $tstrOrderBy;

$tdatastatus_payment[".orderindexes"] = array();


$tdatastatus_payment[".sqlHead"] = "SELECT id,  	description";
$tdatastatus_payment[".sqlFrom"] = "FROM \"public\".status_payment";
$tdatastatus_payment[".sqlWhereExpr"] = "";
$tdatastatus_payment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatus_payment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatus_payment[".arrGroupsPerPage"] = $arrGPP;

$tdatastatus_payment[".highlightSearchResults"] = true;

$tableKeysstatus_payment = array();
$tableKeysstatus_payment[] = "id";
$tdatastatus_payment[".Keys"] = $tableKeysstatus_payment;


$tdatastatus_payment[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.status_payment";
	$fdata["Label"] = GetFieldLabel("public_status_payment","id");
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


	$tdatastatus_payment["id"] = $fdata;
		$tdatastatus_payment[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.status_payment";
	$fdata["Label"] = GetFieldLabel("public_status_payment","description");
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


	$tdatastatus_payment["description"] = $fdata;
		$tdatastatus_payment[".searchableFields"][] = "description";


$tables_data["public.status_payment"]=&$tdatastatus_payment;
$field_labels["public_status_payment"] = &$fieldLabelsstatus_payment;
$fieldToolTips["public_status_payment"] = &$fieldToolTipsstatus_payment;
$placeHolders["public_status_payment"] = &$placeHoldersstatus_payment;
$page_titles["public_status_payment"] = &$pageTitlesstatus_payment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.status_payment"] = array();
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


		
	$detailsTablesData["public.status_payment"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.status_payment"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.status_payment"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.status_payment"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.status_payment"][$dIndex]["detailKeys"][]="fk_id_status_payment";
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


		
	$detailsTablesData["public.status_payment"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.status_payment"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.status_payment"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.status_payment"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.status_payment"][$dIndex]["detailKeys"][]="fk_id_status_payment";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.status_payment"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_status_payment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description";
$proto0["m_strFrom"] = "FROM \"public\".status_payment";
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
	"m_strTable" => "public.status_payment",
	"m_srcTableName" => "public.status_payment"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.status_payment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.status_payment",
	"m_srcTableName" => "public.status_payment"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "public.status_payment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.status_payment";
$proto11["m_srcTableName"] = "public.status_payment";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".status_payment";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.status_payment";
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
$proto0["m_srcTableName"]="public.status_payment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_status_payment = createSqlQuery_status_payment();


	
		;

		

$tdatastatus_payment[".sqlquery"] = $queryData_status_payment;



$tableEvents["public.status_payment"] = new eventsBase;
$tdatastatus_payment[".hasEvents"] = false;

?>