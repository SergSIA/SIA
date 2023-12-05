<?php
$tdatacountry = array();
$tdatacountry[".searchableFields"] = array();
$tdatacountry[".ShortName"] = "country";
$tdatacountry[".OwnerID"] = "";
$tdatacountry[".OriginalTable"] = "public.country";


$tdatacountry[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacountry[".originalPagesByType"] = $tdatacountry[".pagesByType"];
$tdatacountry[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacountry[".originalPages"] = $tdatacountry[".pages"];
$tdatacountry[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacountry[".originalDefaultPages"] = $tdatacountry[".defaultPages"];

//	field labels
$fieldLabelscountry = array();
$fieldToolTipscountry = array();
$pageTitlescountry = array();
$placeHolderscountry = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscountry["English"] = array();
	$fieldToolTipscountry["English"] = array();
	$placeHolderscountry["English"] = array();
	$pageTitlescountry["English"] = array();
	$fieldLabelscountry["English"]["id"] = "Id";
	$fieldToolTipscountry["English"]["id"] = "";
	$placeHolderscountry["English"]["id"] = "";
	$fieldLabelscountry["English"]["alfa_2"] = "Alfa 2";
	$fieldToolTipscountry["English"]["alfa_2"] = "";
	$placeHolderscountry["English"]["alfa_2"] = "";
	$fieldLabelscountry["English"]["alfa_3"] = "Alfa 3";
	$fieldToolTipscountry["English"]["alfa_3"] = "";
	$placeHolderscountry["English"]["alfa_3"] = "";
	$fieldLabelscountry["English"]["description"] = "Description";
	$fieldToolTipscountry["English"]["description"] = "";
	$placeHolderscountry["English"]["description"] = "";
	if (count($fieldToolTipscountry["English"]))
		$tdatacountry[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscountry["Spanish"] = array();
	$fieldToolTipscountry["Spanish"] = array();
	$placeHolderscountry["Spanish"] = array();
	$pageTitlescountry["Spanish"] = array();
	$fieldLabelscountry["Spanish"]["id"] = "Id";
	$fieldToolTipscountry["Spanish"]["id"] = "";
	$placeHolderscountry["Spanish"]["id"] = "";
	$fieldLabelscountry["Spanish"]["alfa_2"] = "Alfa 2";
	$fieldToolTipscountry["Spanish"]["alfa_2"] = "";
	$placeHolderscountry["Spanish"]["alfa_2"] = "";
	$fieldLabelscountry["Spanish"]["alfa_3"] = "Alfa 3";
	$fieldToolTipscountry["Spanish"]["alfa_3"] = "";
	$placeHolderscountry["Spanish"]["alfa_3"] = "";
	$fieldLabelscountry["Spanish"]["description"] = "Description";
	$fieldToolTipscountry["Spanish"]["description"] = "";
	$placeHolderscountry["Spanish"]["description"] = "";
	if (count($fieldToolTipscountry["Spanish"]))
		$tdatacountry[".isUseToolTips"] = true;
}


	$tdatacountry[".NCSearch"] = true;



$tdatacountry[".shortTableName"] = "country";
$tdatacountry[".nSecOptions"] = 0;

$tdatacountry[".mainTableOwnerID"] = "";
$tdatacountry[".entityType"] = 0;
$tdatacountry[".connId"] = "postgres_at_localhost";


$tdatacountry[".strOriginalTableName"] = "public.country";

	



$tdatacountry[".showAddInPopup"] = false;

$tdatacountry[".showEditInPopup"] = false;

$tdatacountry[".showViewInPopup"] = false;

$tdatacountry[".listAjax"] = false;
//	temporary
//$tdatacountry[".listAjax"] = false;

	$tdatacountry[".audit"] = false;

	$tdatacountry[".locking"] = false;


$pages = $tdatacountry[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacountry[".edit"] = true;
	$tdatacountry[".afterEditAction"] = 1;
	$tdatacountry[".closePopupAfterEdit"] = 1;
	$tdatacountry[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacountry[".add"] = true;
$tdatacountry[".afterAddAction"] = 1;
$tdatacountry[".closePopupAfterAdd"] = 1;
$tdatacountry[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacountry[".list"] = true;
}



$tdatacountry[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacountry[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacountry[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacountry[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacountry[".printFriendly"] = true;
}



$tdatacountry[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacountry[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacountry[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacountry[".isUseAjaxSuggest"] = true;

$tdatacountry[".rowHighlite"] = true;



												

$tdatacountry[".ajaxCodeSnippetAdded"] = false;

$tdatacountry[".buttonsAdded"] = false;

$tdatacountry[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacountry[".isUseTimeForSearch"] = false;


$tdatacountry[".badgeColor"] = "D2691E";


$tdatacountry[".allSearchFields"] = array();
$tdatacountry[".filterFields"] = array();
$tdatacountry[".requiredSearchFields"] = array();

$tdatacountry[".googleLikeFields"] = array();
$tdatacountry[".googleLikeFields"][] = "id";
$tdatacountry[".googleLikeFields"][] = "alfa_2";
$tdatacountry[".googleLikeFields"][] = "alfa_3";
$tdatacountry[".googleLikeFields"][] = "description";



$tdatacountry[".tableType"] = "list";

$tdatacountry[".printerPageOrientation"] = 0;
$tdatacountry[".nPrinterPageScale"] = 100;

$tdatacountry[".nPrinterSplitRecords"] = 40;

$tdatacountry[".geocodingEnabled"] = false;










$tdatacountry[".pageSize"] = 20;

$tdatacountry[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacountry[".strOrderBy"] = $tstrOrderBy;

$tdatacountry[".orderindexes"] = array();


$tdatacountry[".sqlHead"] = "SELECT id,  	alfa_2,  	alfa_3,  	description";
$tdatacountry[".sqlFrom"] = "FROM \"public\".country";
$tdatacountry[".sqlWhereExpr"] = "";
$tdatacountry[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacountry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacountry[".arrGroupsPerPage"] = $arrGPP;

$tdatacountry[".highlightSearchResults"] = true;

$tableKeyscountry = array();
$tableKeyscountry[] = "id";
$tdatacountry[".Keys"] = $tableKeyscountry;


$tdatacountry[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.country";
	$fdata["Label"] = GetFieldLabel("public_country","id");
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


	$tdatacountry["id"] = $fdata;
		$tdatacountry[".searchableFields"][] = "id";
//	alfa_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "alfa_2";
	$fdata["GoodName"] = "alfa_2";
	$fdata["ownerTable"] = "public.country";
	$fdata["Label"] = GetFieldLabel("public_country","alfa_2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "alfa_2";

		$fdata["sourceSingle"] = "alfa_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alfa_2";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 2;

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


	$tdatacountry["alfa_2"] = $fdata;
		$tdatacountry[".searchableFields"][] = "alfa_2";
//	alfa_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "alfa_3";
	$fdata["GoodName"] = "alfa_3";
	$fdata["ownerTable"] = "public.country";
	$fdata["Label"] = GetFieldLabel("public_country","alfa_3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "alfa_3";

		$fdata["sourceSingle"] = "alfa_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alfa_3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 3;

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


	$tdatacountry["alfa_3"] = $fdata;
		$tdatacountry[".searchableFields"][] = "alfa_3";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.country";
	$fdata["Label"] = GetFieldLabel("public_country","description");
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


	$tdatacountry["description"] = $fdata;
		$tdatacountry[".searchableFields"][] = "description";


$tables_data["public.country"]=&$tdatacountry;
$field_labels["public_country"] = &$fieldLabelscountry;
$fieldToolTips["public_country"] = &$fieldToolTipscountry;
$placeHolders["public_country"] = &$placeHolderscountry;
$page_titles["public_country"] = &$pageTitlescountry;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.country"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.country"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_country()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	alfa_2,  	alfa_3,  	description";
$proto0["m_strFrom"] = "FROM \"public\".country";
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
	"m_strTable" => "public.country",
	"m_srcTableName" => "public.country"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.country";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "alfa_2",
	"m_strTable" => "public.country",
	"m_srcTableName" => "public.country"
));

$proto8["m_sql"] = "alfa_2";
$proto8["m_srcTableName"] = "public.country";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "alfa_3",
	"m_strTable" => "public.country",
	"m_srcTableName" => "public.country"
));

$proto10["m_sql"] = "alfa_3";
$proto10["m_srcTableName"] = "public.country";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.country",
	"m_srcTableName" => "public.country"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "public.country";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.country";
$proto15["m_srcTableName"] = "public.country";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "alfa_2";
$proto15["m_columns"][] = "alfa_3";
$proto15["m_columns"][] = "description";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".country";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.country";
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
$proto0["m_srcTableName"]="public.country";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_country = createSqlQuery_country();


	
		;

				

$tdatacountry[".sqlquery"] = $queryData_country;



$tableEvents["public.country"] = new eventsBase;
$tdatacountry[".hasEvents"] = false;

?>