<?php
$tdatadocument = array();
$tdatadocument[".searchableFields"] = array();
$tdatadocument[".ShortName"] = "document";
$tdatadocument[".OwnerID"] = "";
$tdatadocument[".OriginalTable"] = "public.document";


$tdatadocument[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadocument[".originalPagesByType"] = $tdatadocument[".pagesByType"];
$tdatadocument[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadocument[".originalPages"] = $tdatadocument[".pages"];
$tdatadocument[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadocument[".originalDefaultPages"] = $tdatadocument[".defaultPages"];

//	field labels
$fieldLabelsdocument = array();
$fieldToolTipsdocument = array();
$pageTitlesdocument = array();
$placeHoldersdocument = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdocument["English"] = array();
	$fieldToolTipsdocument["English"] = array();
	$placeHoldersdocument["English"] = array();
	$pageTitlesdocument["English"] = array();
	$fieldLabelsdocument["English"]["id"] = "Id";
	$fieldToolTipsdocument["English"]["id"] = "";
	$placeHoldersdocument["English"]["id"] = "";
	$fieldLabelsdocument["English"]["description"] = "Description";
	$fieldToolTipsdocument["English"]["description"] = "";
	$placeHoldersdocument["English"]["description"] = "";
	if (count($fieldToolTipsdocument["English"]))
		$tdatadocument[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdocument["Spanish"] = array();
	$fieldToolTipsdocument["Spanish"] = array();
	$placeHoldersdocument["Spanish"] = array();
	$pageTitlesdocument["Spanish"] = array();
	$fieldLabelsdocument["Spanish"]["id"] = "Id";
	$fieldToolTipsdocument["Spanish"]["id"] = "";
	$placeHoldersdocument["Spanish"]["id"] = "";
	$fieldLabelsdocument["Spanish"]["description"] = "Descripcion";
	$fieldToolTipsdocument["Spanish"]["description"] = "";
	$placeHoldersdocument["Spanish"]["description"] = "";
	if (count($fieldToolTipsdocument["Spanish"]))
		$tdatadocument[".isUseToolTips"] = true;
}


	$tdatadocument[".NCSearch"] = true;



$tdatadocument[".shortTableName"] = "document";
$tdatadocument[".nSecOptions"] = 0;

$tdatadocument[".mainTableOwnerID"] = "";
$tdatadocument[".entityType"] = 0;
$tdatadocument[".connId"] = "postgres_at_localhost";


$tdatadocument[".strOriginalTableName"] = "public.document";

	



$tdatadocument[".showAddInPopup"] = false;

$tdatadocument[".showEditInPopup"] = false;

$tdatadocument[".showViewInPopup"] = false;

$tdatadocument[".listAjax"] = false;
//	temporary
//$tdatadocument[".listAjax"] = false;

	$tdatadocument[".audit"] = false;

	$tdatadocument[".locking"] = false;


$pages = $tdatadocument[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadocument[".edit"] = true;
	$tdatadocument[".afterEditAction"] = 1;
	$tdatadocument[".closePopupAfterEdit"] = 1;
	$tdatadocument[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadocument[".add"] = true;
$tdatadocument[".afterAddAction"] = 1;
$tdatadocument[".closePopupAfterAdd"] = 1;
$tdatadocument[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadocument[".list"] = true;
}



$tdatadocument[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadocument[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadocument[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadocument[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadocument[".printFriendly"] = true;
}



$tdatadocument[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadocument[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadocument[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadocument[".isUseAjaxSuggest"] = true;

$tdatadocument[".rowHighlite"] = true;



												

$tdatadocument[".ajaxCodeSnippetAdded"] = false;

$tdatadocument[".buttonsAdded"] = false;

$tdatadocument[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadocument[".isUseTimeForSearch"] = false;


$tdatadocument[".badgeColor"] = "4682B4";


$tdatadocument[".allSearchFields"] = array();
$tdatadocument[".filterFields"] = array();
$tdatadocument[".requiredSearchFields"] = array();

$tdatadocument[".googleLikeFields"] = array();
$tdatadocument[".googleLikeFields"][] = "id";
$tdatadocument[".googleLikeFields"][] = "description";



$tdatadocument[".tableType"] = "list";

$tdatadocument[".printerPageOrientation"] = 0;
$tdatadocument[".nPrinterPageScale"] = 100;

$tdatadocument[".nPrinterSplitRecords"] = 40;

$tdatadocument[".geocodingEnabled"] = false;










$tdatadocument[".pageSize"] = 20;

$tdatadocument[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadocument[".strOrderBy"] = $tstrOrderBy;

$tdatadocument[".orderindexes"] = array();


$tdatadocument[".sqlHead"] = "SELECT id,  	description";
$tdatadocument[".sqlFrom"] = "FROM \"public\".document";
$tdatadocument[".sqlWhereExpr"] = "";
$tdatadocument[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadocument[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadocument[".arrGroupsPerPage"] = $arrGPP;

$tdatadocument[".highlightSearchResults"] = true;

$tableKeysdocument = array();
$tableKeysdocument[] = "id";
$tdatadocument[".Keys"] = $tableKeysdocument;


$tdatadocument[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.document";
	$fdata["Label"] = GetFieldLabel("public_document","id");
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


	$tdatadocument["id"] = $fdata;
		$tdatadocument[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.document";
	$fdata["Label"] = GetFieldLabel("public_document","description");
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


	$tdatadocument["description"] = $fdata;
		$tdatadocument[".searchableFields"][] = "description";


$tables_data["public.document"]=&$tdatadocument;
$field_labels["public_document"] = &$fieldLabelsdocument;
$fieldToolTips["public_document"] = &$fieldToolTipsdocument;
$placeHolders["public_document"] = &$placeHoldersdocument;
$page_titles["public_document"] = &$pageTitlesdocument;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.document"] = array();
//	public.people
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.people";
		$detailsParam["dOriginalTable"] = "public.people";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "people";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_people");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.document"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.document"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.document"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.document"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.document"][$dIndex]["detailKeys"][]="fk_type_doc";
//	public.people_user
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.people_user";
		$detailsParam["dOriginalTable"] = "public.people";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "people_user";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_people_user");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.document"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.document"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.document"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.document"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.document"][$dIndex]["detailKeys"][]="fk_type_doc";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.document"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_document()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description";
$proto0["m_strFrom"] = "FROM \"public\".document";
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
	"m_strTable" => "public.document",
	"m_srcTableName" => "public.document"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.document";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.document",
	"m_srcTableName" => "public.document"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "public.document";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.document";
$proto11["m_srcTableName"] = "public.document";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".document";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.document";
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
$proto0["m_srcTableName"]="public.document";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_document = createSqlQuery_document();


	
		;

		

$tdatadocument[".sqlquery"] = $queryData_document;



$tableEvents["public.document"] = new eventsBase;
$tdatadocument[".hasEvents"] = false;

?>