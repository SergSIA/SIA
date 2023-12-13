<?php
$tdataadvisor1 = array();
$tdataadvisor1[".searchableFields"] = array();
$tdataadvisor1[".ShortName"] = "advisor1";
$tdataadvisor1[".OwnerID"] = "";
$tdataadvisor1[".OriginalTable"] = "public.advisor";


$tdataadvisor1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataadvisor1[".originalPagesByType"] = $tdataadvisor1[".pagesByType"];
$tdataadvisor1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataadvisor1[".originalPages"] = $tdataadvisor1[".pages"];
$tdataadvisor1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataadvisor1[".originalDefaultPages"] = $tdataadvisor1[".defaultPages"];

//	field labels
$fieldLabelsadvisor1 = array();
$fieldToolTipsadvisor1 = array();
$pageTitlesadvisor1 = array();
$placeHoldersadvisor1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadvisor1["Spanish"] = array();
	$fieldToolTipsadvisor1["Spanish"] = array();
	$placeHoldersadvisor1["Spanish"] = array();
	$pageTitlesadvisor1["Spanish"] = array();
	$fieldLabelsadvisor1["Spanish"]["name"] = "Nombre";
	$fieldToolTipsadvisor1["Spanish"]["name"] = "";
	$placeHoldersadvisor1["Spanish"]["name"] = "";
	$fieldLabelsadvisor1["Spanish"]["last_name"] = "Apellido";
	$fieldToolTipsadvisor1["Spanish"]["last_name"] = "";
	$placeHoldersadvisor1["Spanish"]["last_name"] = "";
	$fieldLabelsadvisor1["Spanish"]["description"] = "Especialidad";
	$fieldToolTipsadvisor1["Spanish"]["description"] = "";
	$placeHoldersadvisor1["Spanish"]["description"] = "";
	$fieldLabelsadvisor1["Spanish"]["id"] = "Id";
	$fieldToolTipsadvisor1["Spanish"]["id"] = "";
	$placeHoldersadvisor1["Spanish"]["id"] = "";
	if (count($fieldToolTipsadvisor1["Spanish"]))
		$tdataadvisor1[".isUseToolTips"] = true;
}


	$tdataadvisor1[".NCSearch"] = true;



$tdataadvisor1[".shortTableName"] = "advisor1";
$tdataadvisor1[".nSecOptions"] = 0;

$tdataadvisor1[".mainTableOwnerID"] = "";
$tdataadvisor1[".entityType"] = 1;
$tdataadvisor1[".connId"] = "postgres_at_localhost";


$tdataadvisor1[".strOriginalTableName"] = "public.advisor";

	



$tdataadvisor1[".showAddInPopup"] = false;

$tdataadvisor1[".showEditInPopup"] = false;

$tdataadvisor1[".showViewInPopup"] = false;

$tdataadvisor1[".listAjax"] = false;
//	temporary
//$tdataadvisor1[".listAjax"] = false;

	$tdataadvisor1[".audit"] = false;

	$tdataadvisor1[".locking"] = false;


$pages = $tdataadvisor1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadvisor1[".edit"] = true;
	$tdataadvisor1[".afterEditAction"] = 1;
	$tdataadvisor1[".closePopupAfterEdit"] = 1;
	$tdataadvisor1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadvisor1[".add"] = true;
$tdataadvisor1[".afterAddAction"] = 1;
$tdataadvisor1[".closePopupAfterAdd"] = 1;
$tdataadvisor1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadvisor1[".list"] = true;
}



$tdataadvisor1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadvisor1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadvisor1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadvisor1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadvisor1[".printFriendly"] = true;
}



$tdataadvisor1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadvisor1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadvisor1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadvisor1[".isUseAjaxSuggest"] = true;

$tdataadvisor1[".rowHighlite"] = true;



									

$tdataadvisor1[".ajaxCodeSnippetAdded"] = false;

$tdataadvisor1[".buttonsAdded"] = false;

$tdataadvisor1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadvisor1[".isUseTimeForSearch"] = false;


$tdataadvisor1[".badgeColor"] = "E67349";


$tdataadvisor1[".allSearchFields"] = array();
$tdataadvisor1[".filterFields"] = array();
$tdataadvisor1[".requiredSearchFields"] = array();

$tdataadvisor1[".googleLikeFields"] = array();
$tdataadvisor1[".googleLikeFields"][] = "name";
$tdataadvisor1[".googleLikeFields"][] = "last_name";
$tdataadvisor1[".googleLikeFields"][] = "description";
$tdataadvisor1[".googleLikeFields"][] = "id";



$tdataadvisor1[".tableType"] = "list";

$tdataadvisor1[".printerPageOrientation"] = 0;
$tdataadvisor1[".nPrinterPageScale"] = 100;

$tdataadvisor1[".nPrinterSplitRecords"] = 40;

$tdataadvisor1[".geocodingEnabled"] = false;










$tdataadvisor1[".pageSize"] = 20;

$tdataadvisor1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataadvisor1[".strOrderBy"] = $tstrOrderBy;

$tdataadvisor1[".orderindexes"] = array();


$tdataadvisor1[".sqlHead"] = "SELECT \"public\".people.name,  \"public\".people.last_name,  \"public\".specialty.description,  \"public\".advisor.id";
$tdataadvisor1[".sqlFrom"] = "FROM \"public\".advisor  INNER JOIN \"public\".specialty ON \"public\".advisor.fk_id_specialty = \"public\".specialty.id  INNER JOIN \"public\".people ON \"public\".advisor.fk_id_people = \"public\".people.id";
$tdataadvisor1[".sqlWhereExpr"] = "";
$tdataadvisor1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadvisor1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadvisor1[".arrGroupsPerPage"] = $arrGPP;

$tdataadvisor1[".highlightSearchResults"] = true;

$tableKeysadvisor1 = array();
$tableKeysadvisor1[] = "id";
$tdataadvisor1[".Keys"] = $tableKeysadvisor1;


$tdataadvisor1[".hideMobileList"] = array();




//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_advisor1","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".people.name";

	
	
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


	$tdataadvisor1["name"] = $fdata;
		$tdataadvisor1[".searchableFields"][] = "name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_advisor1","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".people.last_name";

	
	
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


	$tdataadvisor1["last_name"] = $fdata;
		$tdataadvisor1[".searchableFields"][] = "last_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.specialty";
	$fdata["Label"] = GetFieldLabel("public_advisor1","description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".specialty.description";

	
	
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


	$tdataadvisor1["description"] = $fdata;
		$tdataadvisor1[".searchableFields"][] = "description";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor1","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".advisor.id";

	
	
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


	$tdataadvisor1["id"] = $fdata;
		$tdataadvisor1[".searchableFields"][] = "id";


$tables_data["public.advisor1"]=&$tdataadvisor1;
$field_labels["public_advisor1"] = &$fieldLabelsadvisor1;
$fieldToolTips["public_advisor1"] = &$fieldToolTipsadvisor1;
$placeHolders["public_advisor1"] = &$placeHoldersadvisor1;
$page_titles["public_advisor1"] = &$pageTitlesadvisor1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.advisor1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.advisor1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_advisor1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"public\".people.name,  \"public\".people.last_name,  \"public\".specialty.description,  \"public\".advisor.id";
$proto0["m_strFrom"] = "FROM \"public\".advisor  INNER JOIN \"public\".specialty ON \"public\".advisor.fk_id_specialty = \"public\".specialty.id  INNER JOIN \"public\".people ON \"public\".advisor.fk_id_people = \"public\".people.id";
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
	"m_strName" => "name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.advisor1"
));

$proto6["m_sql"] = "\"public\".people.name";
$proto6["m_srcTableName"] = "public.advisor1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.advisor1"
));

$proto8["m_sql"] = "\"public\".people.last_name";
$proto8["m_srcTableName"] = "public.advisor1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.specialty",
	"m_srcTableName" => "public.advisor1"
));

$proto10["m_sql"] = "\"public\".specialty.description";
$proto10["m_srcTableName"] = "public.advisor1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor1"
));

$proto12["m_sql"] = "\"public\".advisor.id";
$proto12["m_srcTableName"] = "public.advisor1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.advisor";
$proto15["m_srcTableName"] = "public.advisor1";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "fk_id_people";
$proto15["m_columns"][] = "fk_id_specialty";
$proto15["m_columns"][] = "created_by";
$proto15["m_columns"][] = "created_at";
$proto15["m_columns"][] = "updated_by";
$proto15["m_columns"][] = "updated_at";
$proto15["m_columns"][] = "status";
$proto15["m_columns"][] = "commission";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".advisor";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.advisor1";
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
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "public.specialty";
$proto19["m_srcTableName"] = "public.advisor1";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "description";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN \"public\".specialty ON \"public\".advisor.fk_id_specialty = \"public\".specialty.id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.advisor1";
$proto20=array();
$proto20["m_sql"] = "\"public\".advisor.fk_id_specialty = \"public\".specialty.id";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_id_specialty",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor1"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= \"public\".specialty.id";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "public.people";
$proto23["m_srcTableName"] = "public.advisor1";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "last_name";
$proto23["m_columns"][] = "birth_date";
$proto23["m_columns"][] = "created_by";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "updated_by";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "fk_type_doc";
$proto23["m_columns"][] = "document";
$proto23["m_columns"][] = "telf";
$proto23["m_columns"][] = "country";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN \"public\".people ON \"public\".advisor.fk_id_people = \"public\".people.id";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.advisor1";
$proto24=array();
$proto24["m_sql"] = "\"public\".advisor.fk_id_people = \"public\".people.id";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor1"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= \"public\".people.id";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.advisor1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_advisor1 = createSqlQuery_advisor1();


	
		;

				

$tdataadvisor1[".sqlquery"] = $queryData_advisor1;



include_once(getabspath("include/advisor1_events.php"));
$tableEvents["public.advisor1"] = new eventclass_advisor1;
$tdataadvisor1[".hasEvents"] = true;

?>