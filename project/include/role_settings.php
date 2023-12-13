<?php
$tdatarole = array();
$tdatarole[".searchableFields"] = array();
$tdatarole[".ShortName"] = "role";
$tdatarole[".OwnerID"] = "";
$tdatarole[".OriginalTable"] = "public.role";


$tdatarole[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarole[".originalPagesByType"] = $tdatarole[".pagesByType"];
$tdatarole[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarole[".originalPages"] = $tdatarole[".pages"];
$tdatarole[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarole[".originalDefaultPages"] = $tdatarole[".defaultPages"];

//	field labels
$fieldLabelsrole = array();
$fieldToolTipsrole = array();
$pageTitlesrole = array();
$placeHoldersrole = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrole["Spanish"] = array();
	$fieldToolTipsrole["Spanish"] = array();
	$placeHoldersrole["Spanish"] = array();
	$pageTitlesrole["Spanish"] = array();
	$fieldLabelsrole["Spanish"]["id"] = "Id";
	$fieldToolTipsrole["Spanish"]["id"] = "";
	$placeHoldersrole["Spanish"]["id"] = "";
	$fieldLabelsrole["Spanish"]["description"] = "Descripcion";
	$fieldToolTipsrole["Spanish"]["description"] = "";
	$placeHoldersrole["Spanish"]["description"] = "";
	if (count($fieldToolTipsrole["Spanish"]))
		$tdatarole[".isUseToolTips"] = true;
}


	$tdatarole[".NCSearch"] = true;



$tdatarole[".shortTableName"] = "role";
$tdatarole[".nSecOptions"] = 0;

$tdatarole[".mainTableOwnerID"] = "";
$tdatarole[".entityType"] = 0;
$tdatarole[".connId"] = "postgres_at_localhost";


$tdatarole[".strOriginalTableName"] = "public.role";

	



$tdatarole[".showAddInPopup"] = false;

$tdatarole[".showEditInPopup"] = false;

$tdatarole[".showViewInPopup"] = false;

$tdatarole[".listAjax"] = false;
//	temporary
//$tdatarole[".listAjax"] = false;

	$tdatarole[".audit"] = false;

	$tdatarole[".locking"] = false;


$pages = $tdatarole[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarole[".edit"] = true;
	$tdatarole[".afterEditAction"] = 1;
	$tdatarole[".closePopupAfterEdit"] = 1;
	$tdatarole[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarole[".add"] = true;
$tdatarole[".afterAddAction"] = 1;
$tdatarole[".closePopupAfterAdd"] = 1;
$tdatarole[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarole[".list"] = true;
}



$tdatarole[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarole[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarole[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarole[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarole[".printFriendly"] = true;
}



$tdatarole[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarole[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarole[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarole[".isUseAjaxSuggest"] = true;

$tdatarole[".rowHighlite"] = true;



									

$tdatarole[".ajaxCodeSnippetAdded"] = false;

$tdatarole[".buttonsAdded"] = false;

$tdatarole[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarole[".isUseTimeForSearch"] = false;


$tdatarole[".badgeColor"] = "E07878";


$tdatarole[".allSearchFields"] = array();
$tdatarole[".filterFields"] = array();
$tdatarole[".requiredSearchFields"] = array();

$tdatarole[".googleLikeFields"] = array();
$tdatarole[".googleLikeFields"][] = "id";
$tdatarole[".googleLikeFields"][] = "description";



$tdatarole[".tableType"] = "list";

$tdatarole[".printerPageOrientation"] = 0;
$tdatarole[".nPrinterPageScale"] = 100;

$tdatarole[".nPrinterSplitRecords"] = 40;

$tdatarole[".geocodingEnabled"] = false;










$tdatarole[".pageSize"] = 20;

$tdatarole[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarole[".strOrderBy"] = $tstrOrderBy;

$tdatarole[".orderindexes"] = array();


$tdatarole[".sqlHead"] = "SELECT id,  	description";
$tdatarole[".sqlFrom"] = "FROM \"public\".\"role\"";
$tdatarole[".sqlWhereExpr"] = "";
$tdatarole[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarole[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarole[".arrGroupsPerPage"] = $arrGPP;

$tdatarole[".highlightSearchResults"] = true;

$tableKeysrole = array();
$tableKeysrole[] = "id";
$tdatarole[".Keys"] = $tableKeysrole;


$tdatarole[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.role";
	$fdata["Label"] = GetFieldLabel("public_role","id");
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


	$tdatarole["id"] = $fdata;
		$tdatarole[".searchableFields"][] = "id";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.role";
	$fdata["Label"] = GetFieldLabel("public_role","description");
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatarole["description"] = $fdata;
		$tdatarole[".searchableFields"][] = "description";


$tables_data["public.role"]=&$tdatarole;
$field_labels["public_role"] = &$fieldLabelsrole;
$fieldToolTips["public_role"] = &$fieldToolTipsrole;
$placeHolders["public_role"] = &$placeHoldersrole;
$page_titles["public_role"] = &$pageTitlesrole;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.role"] = array();
//	public.user
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.user";
		$detailsParam["dOriginalTable"] = "public.user";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "user";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_user");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.role"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.role"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.role"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.role"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.role"][$dIndex]["detailKeys"][]="fk_id_rol";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.role"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_role()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	description";
$proto0["m_strFrom"] = "FROM \"public\".\"role\"";
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
	"m_strTable" => "public.role",
	"m_srcTableName" => "public.role"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.role";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.role",
	"m_srcTableName" => "public.role"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "public.role";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.role";
$proto11["m_srcTableName"] = "public.role";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"role\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.role";
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
$proto0["m_srcTableName"]="public.role";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_role = createSqlQuery_role();


	
		;

		

$tdatarole[".sqlquery"] = $queryData_role;



$tableEvents["public.role"] = new eventsBase;
$tdatarole[".hasEvents"] = false;

?>