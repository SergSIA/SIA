<?php
$tdataspecialty = array();
$tdataspecialty[".searchableFields"] = array();
$tdataspecialty[".ShortName"] = "specialty";
$tdataspecialty[".OwnerID"] = "";
$tdataspecialty[".OriginalTable"] = "public.specialty";


$tdataspecialty[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataspecialty[".originalPagesByType"] = $tdataspecialty[".pagesByType"];
$tdataspecialty[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataspecialty[".originalPages"] = $tdataspecialty[".pages"];
$tdataspecialty[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataspecialty[".originalDefaultPages"] = $tdataspecialty[".defaultPages"];

//	field labels
$fieldLabelsspecialty = array();
$fieldToolTipsspecialty = array();
$pageTitlesspecialty = array();
$placeHoldersspecialty = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsspecialty["English"] = array();
	$fieldToolTipsspecialty["English"] = array();
	$placeHoldersspecialty["English"] = array();
	$pageTitlesspecialty["English"] = array();
	$fieldLabelsspecialty["English"]["id"] = "Id";
	$fieldToolTipsspecialty["English"]["id"] = "";
	$placeHoldersspecialty["English"]["id"] = "";
	$fieldLabelsspecialty["English"]["description"] = "Description";
	$fieldToolTipsspecialty["English"]["description"] = "";
	$placeHoldersspecialty["English"]["description"] = "";
	if (count($fieldToolTipsspecialty["English"]))
		$tdataspecialty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsspecialty["Spanish"] = array();
	$fieldToolTipsspecialty["Spanish"] = array();
	$placeHoldersspecialty["Spanish"] = array();
	$pageTitlesspecialty["Spanish"] = array();
	$fieldLabelsspecialty["Spanish"]["id"] = "Id";
	$fieldToolTipsspecialty["Spanish"]["id"] = "";
	$placeHoldersspecialty["Spanish"]["id"] = "";
	$fieldLabelsspecialty["Spanish"]["description"] = "Descripcion";
	$fieldToolTipsspecialty["Spanish"]["description"] = "";
	$placeHoldersspecialty["Spanish"]["description"] = "";
	if (count($fieldToolTipsspecialty["Spanish"]))
		$tdataspecialty[".isUseToolTips"] = true;
}


	$tdataspecialty[".NCSearch"] = true;



$tdataspecialty[".shortTableName"] = "specialty";
$tdataspecialty[".nSecOptions"] = 0;

$tdataspecialty[".mainTableOwnerID"] = "";
$tdataspecialty[".entityType"] = 0;
$tdataspecialty[".connId"] = "postgres_at_localhost";


$tdataspecialty[".strOriginalTableName"] = "public.specialty";

	



$tdataspecialty[".showAddInPopup"] = false;

$tdataspecialty[".showEditInPopup"] = false;

$tdataspecialty[".showViewInPopup"] = false;

$tdataspecialty[".listAjax"] = false;
//	temporary
//$tdataspecialty[".listAjax"] = false;

	$tdataspecialty[".audit"] = false;

	$tdataspecialty[".locking"] = false;


$pages = $tdataspecialty[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataspecialty[".edit"] = true;
	$tdataspecialty[".afterEditAction"] = 1;
	$tdataspecialty[".closePopupAfterEdit"] = 1;
	$tdataspecialty[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataspecialty[".add"] = true;
$tdataspecialty[".afterAddAction"] = 1;
$tdataspecialty[".closePopupAfterAdd"] = 1;
$tdataspecialty[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataspecialty[".list"] = true;
}



$tdataspecialty[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataspecialty[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataspecialty[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataspecialty[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataspecialty[".printFriendly"] = true;
}



$tdataspecialty[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataspecialty[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataspecialty[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataspecialty[".isUseAjaxSuggest"] = true;

$tdataspecialty[".rowHighlite"] = true;



												

$tdataspecialty[".ajaxCodeSnippetAdded"] = false;

$tdataspecialty[".buttonsAdded"] = false;

$tdataspecialty[".addPageEvents"] = false;

// use timepicker for search panel
$tdataspecialty[".isUseTimeForSearch"] = false;


$tdataspecialty[".badgeColor"] = "6DA5C8";


$tdataspecialty[".allSearchFields"] = array();
$tdataspecialty[".filterFields"] = array();
$tdataspecialty[".requiredSearchFields"] = array();

$tdataspecialty[".googleLikeFields"] = array();
$tdataspecialty[".googleLikeFields"][] = "id";
$tdataspecialty[".googleLikeFields"][] = "description";



$tdataspecialty[".tableType"] = "list";

$tdataspecialty[".printerPageOrientation"] = 0;
$tdataspecialty[".nPrinterPageScale"] = 100;

$tdataspecialty[".nPrinterSplitRecords"] = 40;

$tdataspecialty[".geocodingEnabled"] = false;










$tdataspecialty[".pageSize"] = 20;

$tdataspecialty[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataspecialty[".strOrderBy"] = $tstrOrderBy;

$tdataspecialty[".orderindexes"] = array();


$tdataspecialty[".sqlHead"] = "SELECT id,  	description";
$tdataspecialty[".sqlFrom"] = "FROM \"public\".specialty";
$tdataspecialty[".sqlWhereExpr"] = "";
$tdataspecialty[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataspecialty[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataspecialty[".arrGroupsPerPage"] = $arrGPP;

$tdataspecialty[".highlightSearchResults"] = true;

$tableKeysspecialty = array();
$tableKeysspecialty[] = "id";
$tdataspecialty[".Keys"] = $tableKeysspecialty;


$tdataspecialty[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.specialty";
	$fdata["Label"] = GetFieldLabel("public_specialty","id");
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


	$tdataspecialty["id"] = $fdata;
		$tdataspecialty[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.specialty";
	$fdata["Label"] = GetFieldLabel("public_specialty","description");
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


	$tdataspecialty["description"] = $fdata;
		$tdataspecialty[".searchableFields"][] = "description";


$tables_data["public.specialty"]=&$tdataspecialty;
$field_labels["public_specialty"] = &$fieldLabelsspecialty;
$fieldToolTips["public_specialty"] = &$fieldToolTipsspecialty;
$placeHolders["public_specialty"] = &$placeHoldersspecialty;
$page_titles["public_specialty"] = &$pageTitlesspecialty;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.specialty"] = array();
//	public.advisor
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.advisor";
		$detailsParam["dOriginalTable"] = "public.advisor";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "advisor";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_advisor");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.specialty"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.specialty"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.specialty"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.specialty"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.specialty"][$dIndex]["detailKeys"][]="fk_id_specialty";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.specialty"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_specialty()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description";
$proto0["m_strFrom"] = "FROM \"public\".specialty";
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
	"m_strTable" => "public.specialty",
	"m_srcTableName" => "public.specialty"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.specialty";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.specialty",
	"m_srcTableName" => "public.specialty"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "public.specialty";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.specialty";
$proto11["m_srcTableName"] = "public.specialty";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".specialty";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.specialty";
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
$proto0["m_srcTableName"]="public.specialty";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_specialty = createSqlQuery_specialty();


	
		;

		

$tdataspecialty[".sqlquery"] = $queryData_specialty;



$tableEvents["public.specialty"] = new eventsBase;
$tdataspecialty[".hasEvents"] = false;

?>