<?php
$tdatastatus_consulting = array();
$tdatastatus_consulting[".searchableFields"] = array();
$tdatastatus_consulting[".ShortName"] = "status_consulting";
$tdatastatus_consulting[".OwnerID"] = "";
$tdatastatus_consulting[".OriginalTable"] = "public.status_consulting";


$tdatastatus_consulting[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastatus_consulting[".originalPagesByType"] = $tdatastatus_consulting[".pagesByType"];
$tdatastatus_consulting[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastatus_consulting[".originalPages"] = $tdatastatus_consulting[".pages"];
$tdatastatus_consulting[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastatus_consulting[".originalDefaultPages"] = $tdatastatus_consulting[".defaultPages"];

//	field labels
$fieldLabelsstatus_consulting = array();
$fieldToolTipsstatus_consulting = array();
$pageTitlesstatus_consulting = array();
$placeHoldersstatus_consulting = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstatus_consulting["English"] = array();
	$fieldToolTipsstatus_consulting["English"] = array();
	$placeHoldersstatus_consulting["English"] = array();
	$pageTitlesstatus_consulting["English"] = array();
	$fieldLabelsstatus_consulting["English"]["id"] = "Id";
	$fieldToolTipsstatus_consulting["English"]["id"] = "";
	$placeHoldersstatus_consulting["English"]["id"] = "";
	$fieldLabelsstatus_consulting["English"]["description"] = "Description";
	$fieldToolTipsstatus_consulting["English"]["description"] = "";
	$placeHoldersstatus_consulting["English"]["description"] = "";
	if (count($fieldToolTipsstatus_consulting["English"]))
		$tdatastatus_consulting[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsstatus_consulting["Spanish"] = array();
	$fieldToolTipsstatus_consulting["Spanish"] = array();
	$placeHoldersstatus_consulting["Spanish"] = array();
	$pageTitlesstatus_consulting["Spanish"] = array();
	$fieldLabelsstatus_consulting["Spanish"]["id"] = "Id";
	$fieldToolTipsstatus_consulting["Spanish"]["id"] = "";
	$placeHoldersstatus_consulting["Spanish"]["id"] = "";
	$fieldLabelsstatus_consulting["Spanish"]["description"] = "Descripcion";
	$fieldToolTipsstatus_consulting["Spanish"]["description"] = "";
	$placeHoldersstatus_consulting["Spanish"]["description"] = "";
	if (count($fieldToolTipsstatus_consulting["Spanish"]))
		$tdatastatus_consulting[".isUseToolTips"] = true;
}


	$tdatastatus_consulting[".NCSearch"] = true;



$tdatastatus_consulting[".shortTableName"] = "status_consulting";
$tdatastatus_consulting[".nSecOptions"] = 0;

$tdatastatus_consulting[".mainTableOwnerID"] = "";
$tdatastatus_consulting[".entityType"] = 0;
$tdatastatus_consulting[".connId"] = "postgres_at_localhost";


$tdatastatus_consulting[".strOriginalTableName"] = "public.status_consulting";

	



$tdatastatus_consulting[".showAddInPopup"] = false;

$tdatastatus_consulting[".showEditInPopup"] = false;

$tdatastatus_consulting[".showViewInPopup"] = false;

$tdatastatus_consulting[".listAjax"] = false;
//	temporary
//$tdatastatus_consulting[".listAjax"] = false;

	$tdatastatus_consulting[".audit"] = false;

	$tdatastatus_consulting[".locking"] = false;


$pages = $tdatastatus_consulting[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastatus_consulting[".edit"] = true;
	$tdatastatus_consulting[".afterEditAction"] = 1;
	$tdatastatus_consulting[".closePopupAfterEdit"] = 1;
	$tdatastatus_consulting[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastatus_consulting[".add"] = true;
$tdatastatus_consulting[".afterAddAction"] = 1;
$tdatastatus_consulting[".closePopupAfterAdd"] = 1;
$tdatastatus_consulting[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastatus_consulting[".list"] = true;
}



$tdatastatus_consulting[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastatus_consulting[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastatus_consulting[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastatus_consulting[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastatus_consulting[".printFriendly"] = true;
}



$tdatastatus_consulting[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastatus_consulting[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastatus_consulting[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastatus_consulting[".isUseAjaxSuggest"] = true;

$tdatastatus_consulting[".rowHighlite"] = true;



												

$tdatastatus_consulting[".ajaxCodeSnippetAdded"] = false;

$tdatastatus_consulting[".buttonsAdded"] = false;

$tdatastatus_consulting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatus_consulting[".isUseTimeForSearch"] = false;


$tdatastatus_consulting[".badgeColor"] = "4682B4";


$tdatastatus_consulting[".allSearchFields"] = array();
$tdatastatus_consulting[".filterFields"] = array();
$tdatastatus_consulting[".requiredSearchFields"] = array();

$tdatastatus_consulting[".googleLikeFields"] = array();
$tdatastatus_consulting[".googleLikeFields"][] = "id";
$tdatastatus_consulting[".googleLikeFields"][] = "description";



$tdatastatus_consulting[".tableType"] = "list";

$tdatastatus_consulting[".printerPageOrientation"] = 0;
$tdatastatus_consulting[".nPrinterPageScale"] = 100;

$tdatastatus_consulting[".nPrinterSplitRecords"] = 40;

$tdatastatus_consulting[".geocodingEnabled"] = false;










$tdatastatus_consulting[".pageSize"] = 20;

$tdatastatus_consulting[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastatus_consulting[".strOrderBy"] = $tstrOrderBy;

$tdatastatus_consulting[".orderindexes"] = array();


$tdatastatus_consulting[".sqlHead"] = "SELECT id,  	description";
$tdatastatus_consulting[".sqlFrom"] = "FROM \"public\".status_consulting";
$tdatastatus_consulting[".sqlWhereExpr"] = "";
$tdatastatus_consulting[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatus_consulting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatus_consulting[".arrGroupsPerPage"] = $arrGPP;

$tdatastatus_consulting[".highlightSearchResults"] = true;

$tableKeysstatus_consulting = array();
$tableKeysstatus_consulting[] = "id";
$tdatastatus_consulting[".Keys"] = $tableKeysstatus_consulting;


$tdatastatus_consulting[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.status_consulting";
	$fdata["Label"] = GetFieldLabel("public_status_consulting","id");
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


	$tdatastatus_consulting["id"] = $fdata;
		$tdatastatus_consulting[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.status_consulting";
	$fdata["Label"] = GetFieldLabel("public_status_consulting","description");
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


	$tdatastatus_consulting["description"] = $fdata;
		$tdatastatus_consulting[".searchableFields"][] = "description";


$tables_data["public.status_consulting"]=&$tdatastatus_consulting;
$field_labels["public_status_consulting"] = &$fieldLabelsstatus_consulting;
$fieldToolTips["public_status_consulting"] = &$fieldToolTipsstatus_consulting;
$placeHolders["public_status_consulting"] = &$placeHoldersstatus_consulting;
$page_titles["public_status_consulting"] = &$pageTitlesstatus_consulting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.status_consulting"] = array();
//	public.consulting
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.consulting";
		$detailsParam["dOriginalTable"] = "public.consulting";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consulting";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_consulting");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.status_consulting"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.status_consulting"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.status_consulting"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.status_consulting"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.status_consulting"][$dIndex]["detailKeys"][]="fk_id_status_consulting";
//	public.consulting_my
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.consulting_my";
		$detailsParam["dOriginalTable"] = "public.consulting";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consulting_my";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_consulting_my");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.status_consulting"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.status_consulting"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.status_consulting"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.status_consulting"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.status_consulting"][$dIndex]["detailKeys"][]="fk_id_status_consulting";
//	public.consulting_my_advisor
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.consulting_my_advisor";
		$detailsParam["dOriginalTable"] = "public.consulting";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "public_consulting_my_advisor";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_consulting_my_advisor");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.status_consulting"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.status_consulting"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.status_consulting"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.status_consulting"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.status_consulting"][$dIndex]["detailKeys"][]="fk_id_status_consulting";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.status_consulting"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_status_consulting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description";
$proto0["m_strFrom"] = "FROM \"public\".status_consulting";
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
	"m_strTable" => "public.status_consulting",
	"m_srcTableName" => "public.status_consulting"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.status_consulting";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.status_consulting",
	"m_srcTableName" => "public.status_consulting"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "public.status_consulting";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.status_consulting";
$proto11["m_srcTableName"] = "public.status_consulting";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".status_consulting";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.status_consulting";
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
$proto0["m_srcTableName"]="public.status_consulting";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_status_consulting = createSqlQuery_status_consulting();


	
		;

		

$tdatastatus_consulting[".sqlquery"] = $queryData_status_consulting;



$tableEvents["public.status_consulting"] = new eventsBase;
$tdatastatus_consulting[".hasEvents"] = false;

?>