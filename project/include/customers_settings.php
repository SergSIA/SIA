<?php
$tdatacustomers = array();
$tdatacustomers[".searchableFields"] = array();
$tdatacustomers[".ShortName"] = "customers";
$tdatacustomers[".OwnerID"] = "";
$tdatacustomers[".OriginalTable"] = "public.customers";


$tdatacustomers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustomers[".originalPagesByType"] = $tdatacustomers[".pagesByType"];
$tdatacustomers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustomers[".originalPages"] = $tdatacustomers[".pages"];
$tdatacustomers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustomers[".originalDefaultPages"] = $tdatacustomers[".defaultPages"];

//	field labels
$fieldLabelscustomers = array();
$fieldToolTipscustomers = array();
$pageTitlescustomers = array();
$placeHolderscustomers = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscustomers["Spanish"] = array();
	$fieldToolTipscustomers["Spanish"] = array();
	$placeHolderscustomers["Spanish"] = array();
	$pageTitlescustomers["Spanish"] = array();
	$fieldLabelscustomers["Spanish"]["id"] = "Id";
	$fieldToolTipscustomers["Spanish"]["id"] = "";
	$placeHolderscustomers["Spanish"]["id"] = "";
	$fieldLabelscustomers["Spanish"]["fk_id_people"] = "Persona";
	$fieldToolTipscustomers["Spanish"]["fk_id_people"] = "";
	$placeHolderscustomers["Spanish"]["fk_id_people"] = "";
	$fieldLabelscustomers["Spanish"]["created_by"] = "Creado por";
	$fieldToolTipscustomers["Spanish"]["created_by"] = "";
	$placeHolderscustomers["Spanish"]["created_by"] = "";
	$fieldLabelscustomers["Spanish"]["created_at"] = "Creado el";
	$fieldToolTipscustomers["Spanish"]["created_at"] = "";
	$placeHolderscustomers["Spanish"]["created_at"] = "";
	$fieldLabelscustomers["Spanish"]["updated_by"] = "Actualizado por";
	$fieldToolTipscustomers["Spanish"]["updated_by"] = "";
	$placeHolderscustomers["Spanish"]["updated_by"] = "";
	$fieldLabelscustomers["Spanish"]["updated_at"] = "Actualizado el";
	$fieldToolTipscustomers["Spanish"]["updated_at"] = "";
	$placeHolderscustomers["Spanish"]["updated_at"] = "";
	$fieldLabelscustomers["Spanish"]["status"] = "Estado";
	$fieldToolTipscustomers["Spanish"]["status"] = "";
	$placeHolderscustomers["Spanish"]["status"] = "";
	if (count($fieldToolTipscustomers["Spanish"]))
		$tdatacustomers[".isUseToolTips"] = true;
}


	$tdatacustomers[".NCSearch"] = true;



$tdatacustomers[".shortTableName"] = "customers";
$tdatacustomers[".nSecOptions"] = 0;

$tdatacustomers[".mainTableOwnerID"] = "";
$tdatacustomers[".entityType"] = 0;
$tdatacustomers[".connId"] = "postgres_at_localhost";


$tdatacustomers[".strOriginalTableName"] = "public.customers";

	



$tdatacustomers[".showAddInPopup"] = false;

$tdatacustomers[".showEditInPopup"] = false;

$tdatacustomers[".showViewInPopup"] = false;

$tdatacustomers[".listAjax"] = false;
//	temporary
//$tdatacustomers[".listAjax"] = false;

	$tdatacustomers[".audit"] = false;

	$tdatacustomers[".locking"] = false;


$pages = $tdatacustomers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustomers[".edit"] = true;
	$tdatacustomers[".afterEditAction"] = 1;
	$tdatacustomers[".closePopupAfterEdit"] = 1;
	$tdatacustomers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustomers[".add"] = true;
$tdatacustomers[".afterAddAction"] = 1;
$tdatacustomers[".closePopupAfterAdd"] = 1;
$tdatacustomers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustomers[".list"] = true;
}



$tdatacustomers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustomers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustomers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustomers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustomers[".printFriendly"] = true;
}



$tdatacustomers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustomers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustomers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustomers[".isUseAjaxSuggest"] = true;

$tdatacustomers[".rowHighlite"] = true;



																											

$tdatacustomers[".ajaxCodeSnippetAdded"] = false;

$tdatacustomers[".buttonsAdded"] = false;

$tdatacustomers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomers[".isUseTimeForSearch"] = false;


$tdatacustomers[".badgeColor"] = "4169E1";


$tdatacustomers[".allSearchFields"] = array();
$tdatacustomers[".filterFields"] = array();
$tdatacustomers[".requiredSearchFields"] = array();

$tdatacustomers[".googleLikeFields"] = array();
$tdatacustomers[".googleLikeFields"][] = "id";
$tdatacustomers[".googleLikeFields"][] = "fk_id_people";
$tdatacustomers[".googleLikeFields"][] = "created_by";
$tdatacustomers[".googleLikeFields"][] = "created_at";
$tdatacustomers[".googleLikeFields"][] = "updated_by";
$tdatacustomers[".googleLikeFields"][] = "updated_at";
$tdatacustomers[".googleLikeFields"][] = "status";



$tdatacustomers[".tableType"] = "list";

$tdatacustomers[".printerPageOrientation"] = 0;
$tdatacustomers[".nPrinterPageScale"] = 100;

$tdatacustomers[".nPrinterSplitRecords"] = 40;

$tdatacustomers[".geocodingEnabled"] = false;










$tdatacustomers[".pageSize"] = 20;

$tdatacustomers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacustomers[".strOrderBy"] = $tstrOrderBy;

$tdatacustomers[".orderindexes"] = array();


$tdatacustomers[".sqlHead"] = "SELECT id,  	fk_id_people,  	created_by,  	created_at,  	updated_by,  	updated_at,  	status";
$tdatacustomers[".sqlFrom"] = "FROM \"public\".customers";
$tdatacustomers[".sqlWhereExpr"] = "";
$tdatacustomers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomers[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomers[".highlightSearchResults"] = true;

$tableKeyscustomers = array();
$tableKeyscustomers[] = "id";
$tdatacustomers[".Keys"] = $tableKeyscustomers;


$tdatacustomers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers","id");
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


	$tdatacustomers["id"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "id";
//	fk_id_people
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_people";
	$fdata["GoodName"] = "fk_id_people";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers","fk_id_people");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_people";

		$fdata["sourceSingle"] = "fk_id_people";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_people";

	
	
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


	$tdatacustomers["fk_id_people"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "fk_id_people";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers","created_by");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by";

	
	
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


	$tdatacustomers["created_by"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
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


	$tdatacustomers["created_at"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "created_at";
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers","updated_by");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "updated_by";

		$fdata["sourceSingle"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by";

	
	
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


	$tdatacustomers["updated_by"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "updated_by";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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


	$tdatacustomers["updated_at"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "updated_at";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.customers";
	$fdata["Label"] = GetFieldLabel("public_customers","status");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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


	$tdatacustomers["status"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "status";


$tables_data["public.customers"]=&$tdatacustomers;
$field_labels["public_customers"] = &$fieldLabelscustomers;
$fieldToolTips["public_customers"] = &$fieldToolTipscustomers;
$placeHolders["public_customers"] = &$placeHolderscustomers;
$page_titles["public_customers"] = &$pageTitlescustomers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.customers"] = array();
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


		
	$detailsTablesData["public.customers"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.customers"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.customers"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.customers"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.customers"][$dIndex]["detailKeys"][]="fk_id_customer";
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


		
	$detailsTablesData["public.customers"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.customers"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.customers"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.customers"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.customers"][$dIndex]["detailKeys"][]="fk_id_customer";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.customers"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.people";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.people";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "people";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.customers"][0] = $masterParams;
				$masterTablesData["public.customers"][0]["masterKeys"] = array();
	$masterTablesData["public.customers"][0]["masterKeys"][]="id";
				$masterTablesData["public.customers"][0]["detailKeys"] = array();
	$masterTablesData["public.customers"][0]["detailKeys"][]="fk_id_people";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.people";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.people_user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "people_user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.customers"][1] = $masterParams;
				$masterTablesData["public.customers"][1]["masterKeys"] = array();
	$masterTablesData["public.customers"][1]["masterKeys"][]="id";
				$masterTablesData["public.customers"][1]["detailKeys"] = array();
	$masterTablesData["public.customers"][1]["detailKeys"][]="fk_id_people";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_customers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fk_id_people,  	created_by,  	created_at,  	updated_by,  	updated_at,  	status";
$proto0["m_strFrom"] = "FROM \"public\".customers";
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
	"m_srcTableName" => "public.customers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.customers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers"
));

$proto8["m_sql"] = "fk_id_people";
$proto8["m_srcTableName"] = "public.customers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers"
));

$proto10["m_sql"] = "created_by";
$proto10["m_srcTableName"] = "public.customers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers"
));

$proto12["m_sql"] = "created_at";
$proto12["m_srcTableName"] = "public.customers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers"
));

$proto14["m_sql"] = "updated_by";
$proto14["m_srcTableName"] = "public.customers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers"
));

$proto16["m_sql"] = "updated_at";
$proto16["m_srcTableName"] = "public.customers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.customers"
));

$proto18["m_sql"] = "status";
$proto18["m_srcTableName"] = "public.customers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.customers";
$proto21["m_srcTableName"] = "public.customers";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "fk_id_people";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "status";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".customers";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "public.customers";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.customers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customers = createSqlQuery_customers();


	
		;

							

$tdatacustomers[".sqlquery"] = $queryData_customers;



$tableEvents["public.customers"] = new eventsBase;
$tdatacustomers[".hasEvents"] = false;

?>