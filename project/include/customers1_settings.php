<?php
$tdatacustomers1 = array();
$tdatacustomers1[".searchableFields"] = array();
$tdatacustomers1[".ShortName"] = "customers1";
$tdatacustomers1[".OwnerID"] = "";
$tdatacustomers1[".OriginalTable"] = "public.customers";


$tdatacustomers1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustomers1[".originalPagesByType"] = $tdatacustomers1[".pagesByType"];
$tdatacustomers1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustomers1[".originalPages"] = $tdatacustomers1[".pages"];
$tdatacustomers1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustomers1[".originalDefaultPages"] = $tdatacustomers1[".defaultPages"];

//	field labels
$fieldLabelscustomers1 = array();
$fieldToolTipscustomers1 = array();
$pageTitlescustomers1 = array();
$placeHolderscustomers1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscustomers1["Spanish"] = array();
	$fieldToolTipscustomers1["Spanish"] = array();
	$placeHolderscustomers1["Spanish"] = array();
	$pageTitlescustomers1["Spanish"] = array();
	$fieldLabelscustomers1["Spanish"]["id"] = "Id";
	$fieldToolTipscustomers1["Spanish"]["id"] = "";
	$placeHolderscustomers1["Spanish"]["id"] = "";
	$fieldLabelscustomers1["Spanish"]["fk_id_people"] = "Fk Id People";
	$fieldToolTipscustomers1["Spanish"]["fk_id_people"] = "";
	$placeHolderscustomers1["Spanish"]["fk_id_people"] = "";
	$fieldLabelscustomers1["Spanish"]["created_by"] = "Created By";
	$fieldToolTipscustomers1["Spanish"]["created_by"] = "";
	$placeHolderscustomers1["Spanish"]["created_by"] = "";
	$fieldLabelscustomers1["Spanish"]["created_at"] = "Created At";
	$fieldToolTipscustomers1["Spanish"]["created_at"] = "";
	$placeHolderscustomers1["Spanish"]["created_at"] = "";
	$fieldLabelscustomers1["Spanish"]["updated_by"] = "Updated By";
	$fieldToolTipscustomers1["Spanish"]["updated_by"] = "";
	$placeHolderscustomers1["Spanish"]["updated_by"] = "";
	$fieldLabelscustomers1["Spanish"]["updated_at"] = "Updated At";
	$fieldToolTipscustomers1["Spanish"]["updated_at"] = "";
	$placeHolderscustomers1["Spanish"]["updated_at"] = "";
	$fieldLabelscustomers1["Spanish"]["status"] = "Status";
	$fieldToolTipscustomers1["Spanish"]["status"] = "";
	$placeHolderscustomers1["Spanish"]["status"] = "";
	$fieldLabelscustomers1["Spanish"]["name"] = "Name";
	$fieldToolTipscustomers1["Spanish"]["name"] = "";
	$placeHolderscustomers1["Spanish"]["name"] = "";
	$fieldLabelscustomers1["Spanish"]["last_name"] = "Last Name";
	$fieldToolTipscustomers1["Spanish"]["last_name"] = "";
	$placeHolderscustomers1["Spanish"]["last_name"] = "";
	$fieldLabelscustomers1["Spanish"]["document"] = "Document";
	$fieldToolTipscustomers1["Spanish"]["document"] = "";
	$placeHolderscustomers1["Spanish"]["document"] = "";
	if (count($fieldToolTipscustomers1["Spanish"]))
		$tdatacustomers1[".isUseToolTips"] = true;
}


	$tdatacustomers1[".NCSearch"] = true;



$tdatacustomers1[".shortTableName"] = "customers1";
$tdatacustomers1[".nSecOptions"] = 0;

$tdatacustomers1[".mainTableOwnerID"] = "";
$tdatacustomers1[".entityType"] = 1;
$tdatacustomers1[".connId"] = "postgres_at_localhost";


$tdatacustomers1[".strOriginalTableName"] = "public.customers";

	



$tdatacustomers1[".showAddInPopup"] = false;

$tdatacustomers1[".showEditInPopup"] = false;

$tdatacustomers1[".showViewInPopup"] = false;

$tdatacustomers1[".listAjax"] = false;
//	temporary
//$tdatacustomers1[".listAjax"] = false;

	$tdatacustomers1[".audit"] = false;

	$tdatacustomers1[".locking"] = false;


$pages = $tdatacustomers1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustomers1[".edit"] = true;
	$tdatacustomers1[".afterEditAction"] = 1;
	$tdatacustomers1[".closePopupAfterEdit"] = 1;
	$tdatacustomers1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustomers1[".add"] = true;
$tdatacustomers1[".afterAddAction"] = 1;
$tdatacustomers1[".closePopupAfterAdd"] = 1;
$tdatacustomers1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustomers1[".list"] = true;
}



$tdatacustomers1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustomers1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustomers1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustomers1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustomers1[".printFriendly"] = true;
}



$tdatacustomers1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustomers1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustomers1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustomers1[".isUseAjaxSuggest"] = true;

$tdatacustomers1[".rowHighlite"] = true;



									

$tdatacustomers1[".ajaxCodeSnippetAdded"] = false;

$tdatacustomers1[".buttonsAdded"] = false;

$tdatacustomers1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomers1[".isUseTimeForSearch"] = false;


$tdatacustomers1[".badgeColor"] = "6B8E23";


$tdatacustomers1[".allSearchFields"] = array();
$tdatacustomers1[".filterFields"] = array();
$tdatacustomers1[".requiredSearchFields"] = array();

$tdatacustomers1[".googleLikeFields"] = array();
$tdatacustomers1[".googleLikeFields"][] = "id";
$tdatacustomers1[".googleLikeFields"][] = "fk_id_people";
$tdatacustomers1[".googleLikeFields"][] = "created_by";
$tdatacustomers1[".googleLikeFields"][] = "created_at";
$tdatacustomers1[".googleLikeFields"][] = "updated_by";
$tdatacustomers1[".googleLikeFields"][] = "updated_at";
$tdatacustomers1[".googleLikeFields"][] = "status";
$tdatacustomers1[".googleLikeFields"][] = "name";
$tdatacustomers1[".googleLikeFields"][] = "last_name";
$tdatacustomers1[".googleLikeFields"][] = "document";



$tdatacustomers1[".tableType"] = "list";

$tdatacustomers1[".printerPageOrientation"] = 0;
$tdatacustomers1[".nPrinterPageScale"] = 100;

$tdatacustomers1[".nPrinterSplitRecords"] = 40;

$tdatacustomers1[".geocodingEnabled"] = false;










$tdatacustomers1[".pageSize"] = 20;

$tdatacustomers1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacustomers1[".strOrderBy"] = $tstrOrderBy;

$tdatacustomers1[".orderindexes"] = array();


$tdatacustomers1[".sqlHead"] = "SELECT \"public\".customers.id,  \"public\".customers.fk_id_people,  \"public\".customers.created_by,  \"public\".customers.created_at,  \"public\".customers.updated_by,  \"public\".customers.updated_at,  \"public\".customers.status,  \"public\".people.name,  \"public\".people.last_name,  \"public\".people.document";
$tdatacustomers1[".sqlFrom"] = "FROM \"public\".customers  INNER JOIN \"public\".people ON \"public\".people.id = \"public\".customers.fk_id_people";
$tdatacustomers1[".sqlWhereExpr"] = "";
$tdatacustomers1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomers1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomers1[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomers1[".highlightSearchResults"] = true;

$tableKeyscustomers1 = array();
$tableKeyscustomers1[] = "id";
$tdatacustomers1[".Keys"] = $tableKeyscustomers1;


$tdatacustomers1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers1","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".customers.id";

	
	
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


	$tdatacustomers1["id"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "id";
//	fk_id_people
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_people";
	$fdata["GoodName"] = "fk_id_people";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers1","fk_id_people");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_people";

		$fdata["sourceSingle"] = "fk_id_people";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".customers.fk_id_people";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.people";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatacustomers1["fk_id_people"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "fk_id_people";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers1","created_by");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".customers.created_by";

	
	
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


	$tdatacustomers1["created_by"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers1","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".customers.created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacustomers1["created_at"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "created_at";
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers1","updated_by");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "updated_by";

		$fdata["sourceSingle"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".customers.updated_by";

	
	
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


	$tdatacustomers1["updated_by"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "updated_by";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers1","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".customers.updated_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacustomers1["updated_at"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "updated_at";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers1","status");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".customers.status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatacustomers1["status"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "status";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_customers1","name");
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


	$tdatacustomers1["name"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_customers1","last_name");
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


	$tdatacustomers1["last_name"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "last_name";
//	document
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "document";
	$fdata["GoodName"] = "document";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_customers1","document");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "document";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".people.document";

	
	
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


	$tdatacustomers1["document"] = $fdata;
		$tdatacustomers1[".searchableFields"][] = "document";


$tables_data["public.customers1"]=&$tdatacustomers1;
$field_labels["public_customers1"] = &$fieldLabelscustomers1;
$fieldToolTips["public_customers1"] = &$fieldToolTipscustomers1;
$placeHolders["public_customers1"] = &$placeHolderscustomers1;
$page_titles["public_customers1"] = &$pageTitlescustomers1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.customers1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.customers1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_customers1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"public\".customers.id,  \"public\".customers.fk_id_people,  \"public\".customers.created_by,  \"public\".customers.created_at,  \"public\".customers.updated_by,  \"public\".customers.updated_at,  \"public\".customers.status,  \"public\".people.name,  \"public\".people.last_name,  \"public\".people.document";
$proto0["m_strFrom"] = "FROM \"public\".customers  INNER JOIN \"public\".people ON \"public\".people.id = \"public\".customers.fk_id_people";
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
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers1"
));

$proto6["m_sql"] = "\"public\".customers.id";
$proto6["m_srcTableName"] = "public.customers1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers1"
));

$proto8["m_sql"] = "\"public\".customers.fk_id_people";
$proto8["m_srcTableName"] = "public.customers1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers1"
));

$proto10["m_sql"] = "\"public\".customers.created_by";
$proto10["m_srcTableName"] = "public.customers1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers1"
));

$proto12["m_sql"] = "\"public\".customers.created_at";
$proto12["m_srcTableName"] = "public.customers1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers1"
));

$proto14["m_sql"] = "\"public\".customers.updated_by";
$proto14["m_srcTableName"] = "public.customers1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers1"
));

$proto16["m_sql"] = "\"public\".customers.updated_at";
$proto16["m_srcTableName"] = "public.customers1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers1"
));

$proto18["m_sql"] = "\"public\".customers.status";
$proto18["m_srcTableName"] = "public.customers1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.customers1"
));

$proto20["m_sql"] = "\"public\".people.name";
$proto20["m_srcTableName"] = "public.customers1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.customers1"
));

$proto22["m_sql"] = "\"public\".people.last_name";
$proto22["m_srcTableName"] = "public.customers1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "document",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.customers1"
));

$proto24["m_sql"] = "\"public\".people.document";
$proto24["m_srcTableName"] = "public.customers1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.customers";
$proto27["m_srcTableName"] = "public.customers1";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "fk_id_people";
$proto27["m_columns"][] = "created_by";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "updated_by";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "status";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".customers";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "public.customers1";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "public.people";
$proto31["m_srcTableName"] = "public.customers1";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "last_name";
$proto31["m_columns"][] = "birth_date";
$proto31["m_columns"][] = "created_by";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "updated_by";
$proto31["m_columns"][] = "updated_at";
$proto31["m_columns"][] = "fk_type_doc";
$proto31["m_columns"][] = "document";
$proto31["m_columns"][] = "telf";
$proto31["m_columns"][] = "country";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN \"public\".people ON \"public\".people.id = \"public\".customers.fk_id_people";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "public.customers1";
$proto32=array();
$proto32["m_sql"] = "\"public\".people.id = \"public\".customers.fk_id_people";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.customers1"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= \"public\".customers.fk_id_people";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.customers1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customers1 = createSqlQuery_customers1();


	
		;

										

$tdatacustomers1[".sqlquery"] = $queryData_customers1;



$tableEvents["public.customers1"] = new eventsBase;
$tdatacustomers1[".hasEvents"] = false;

?>