<?php
$tdataadvisor_user = array();
$tdataadvisor_user[".searchableFields"] = array();
$tdataadvisor_user[".ShortName"] = "advisor_user";
$tdataadvisor_user[".OwnerID"] = "";
$tdataadvisor_user[".OriginalTable"] = "public.advisor";


$tdataadvisor_user[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadvisor_user[".originalPagesByType"] = $tdataadvisor_user[".pagesByType"];
$tdataadvisor_user[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadvisor_user[".originalPages"] = $tdataadvisor_user[".pages"];
$tdataadvisor_user[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadvisor_user[".originalDefaultPages"] = $tdataadvisor_user[".defaultPages"];

//	field labels
$fieldLabelsadvisor_user = array();
$fieldToolTipsadvisor_user = array();
$pageTitlesadvisor_user = array();
$placeHoldersadvisor_user = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadvisor_user["Spanish"] = array();
	$fieldToolTipsadvisor_user["Spanish"] = array();
	$placeHoldersadvisor_user["Spanish"] = array();
	$pageTitlesadvisor_user["Spanish"] = array();
	$fieldLabelsadvisor_user["Spanish"]["id"] = "Id";
	$fieldToolTipsadvisor_user["Spanish"]["id"] = "";
	$placeHoldersadvisor_user["Spanish"]["id"] = "";
	$fieldLabelsadvisor_user["Spanish"]["fk_id_people"] = "Persona";
	$fieldToolTipsadvisor_user["Spanish"]["fk_id_people"] = "";
	$placeHoldersadvisor_user["Spanish"]["fk_id_people"] = "";
	$fieldLabelsadvisor_user["Spanish"]["fk_id_specialty"] = "Especialidad";
	$fieldToolTipsadvisor_user["Spanish"]["fk_id_specialty"] = "";
	$placeHoldersadvisor_user["Spanish"]["fk_id_specialty"] = "";
	$fieldLabelsadvisor_user["Spanish"]["created_by"] = "Creado por";
	$fieldToolTipsadvisor_user["Spanish"]["created_by"] = "";
	$placeHoldersadvisor_user["Spanish"]["created_by"] = "";
	$fieldLabelsadvisor_user["Spanish"]["created_at"] = "Creado el";
	$fieldToolTipsadvisor_user["Spanish"]["created_at"] = "";
	$placeHoldersadvisor_user["Spanish"]["created_at"] = "";
	$fieldLabelsadvisor_user["Spanish"]["updated_by"] = "Actualizado por";
	$fieldToolTipsadvisor_user["Spanish"]["updated_by"] = "";
	$placeHoldersadvisor_user["Spanish"]["updated_by"] = "";
	$fieldLabelsadvisor_user["Spanish"]["updated_at"] = "Actualizado el";
	$fieldToolTipsadvisor_user["Spanish"]["updated_at"] = "";
	$placeHoldersadvisor_user["Spanish"]["updated_at"] = "";
	$fieldLabelsadvisor_user["Spanish"]["status"] = "Estado";
	$fieldToolTipsadvisor_user["Spanish"]["status"] = "";
	$placeHoldersadvisor_user["Spanish"]["status"] = "";
	$fieldLabelsadvisor_user["Spanish"]["commission"] = "Comision %";
	$fieldToolTipsadvisor_user["Spanish"]["commission"] = "";
	$placeHoldersadvisor_user["Spanish"]["commission"] = "";
	if (count($fieldToolTipsadvisor_user["Spanish"]))
		$tdataadvisor_user[".isUseToolTips"] = true;
}


	$tdataadvisor_user[".NCSearch"] = true;



$tdataadvisor_user[".shortTableName"] = "advisor_user";
$tdataadvisor_user[".nSecOptions"] = 0;

$tdataadvisor_user[".mainTableOwnerID"] = "";
$tdataadvisor_user[".entityType"] = 1;
$tdataadvisor_user[".connId"] = "postgres_at_localhost";


$tdataadvisor_user[".strOriginalTableName"] = "public.advisor";

	



$tdataadvisor_user[".showAddInPopup"] = false;

$tdataadvisor_user[".showEditInPopup"] = false;

$tdataadvisor_user[".showViewInPopup"] = false;

$tdataadvisor_user[".listAjax"] = false;
//	temporary
//$tdataadvisor_user[".listAjax"] = false;

	$tdataadvisor_user[".audit"] = false;

	$tdataadvisor_user[".locking"] = false;


$pages = $tdataadvisor_user[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadvisor_user[".edit"] = true;
	$tdataadvisor_user[".afterEditAction"] = 1;
	$tdataadvisor_user[".closePopupAfterEdit"] = 1;
	$tdataadvisor_user[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadvisor_user[".add"] = true;
$tdataadvisor_user[".afterAddAction"] = 1;
$tdataadvisor_user[".closePopupAfterAdd"] = 1;
$tdataadvisor_user[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadvisor_user[".list"] = true;
}



$tdataadvisor_user[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadvisor_user[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadvisor_user[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadvisor_user[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadvisor_user[".printFriendly"] = true;
}



$tdataadvisor_user[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadvisor_user[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadvisor_user[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadvisor_user[".isUseAjaxSuggest"] = true;

$tdataadvisor_user[".rowHighlite"] = true;



																											

$tdataadvisor_user[".ajaxCodeSnippetAdded"] = false;

$tdataadvisor_user[".buttonsAdded"] = false;

$tdataadvisor_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadvisor_user[".isUseTimeForSearch"] = false;


$tdataadvisor_user[".badgeColor"] = "4169E1";


$tdataadvisor_user[".allSearchFields"] = array();
$tdataadvisor_user[".filterFields"] = array();
$tdataadvisor_user[".requiredSearchFields"] = array();

$tdataadvisor_user[".googleLikeFields"] = array();
$tdataadvisor_user[".googleLikeFields"][] = "id";
$tdataadvisor_user[".googleLikeFields"][] = "fk_id_people";
$tdataadvisor_user[".googleLikeFields"][] = "fk_id_specialty";
$tdataadvisor_user[".googleLikeFields"][] = "created_by";
$tdataadvisor_user[".googleLikeFields"][] = "created_at";
$tdataadvisor_user[".googleLikeFields"][] = "updated_by";
$tdataadvisor_user[".googleLikeFields"][] = "updated_at";
$tdataadvisor_user[".googleLikeFields"][] = "status";
$tdataadvisor_user[".googleLikeFields"][] = "commission";



$tdataadvisor_user[".tableType"] = "list";

$tdataadvisor_user[".printerPageOrientation"] = 0;
$tdataadvisor_user[".nPrinterPageScale"] = 100;

$tdataadvisor_user[".nPrinterSplitRecords"] = 40;

$tdataadvisor_user[".geocodingEnabled"] = false;










$tdataadvisor_user[".pageSize"] = 20;

$tdataadvisor_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataadvisor_user[".strOrderBy"] = $tstrOrderBy;

$tdataadvisor_user[".orderindexes"] = array();


$tdataadvisor_user[".sqlHead"] = "SELECT id,  	fk_id_people,  	fk_id_specialty,  	created_by,  	created_at,  	updated_by,  	updated_at,  	status,  	commission";
$tdataadvisor_user[".sqlFrom"] = "FROM \"public\".advisor";
$tdataadvisor_user[".sqlWhereExpr"] = "";
$tdataadvisor_user[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadvisor_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadvisor_user[".arrGroupsPerPage"] = $arrGPP;

$tdataadvisor_user[".highlightSearchResults"] = true;

$tableKeysadvisor_user = array();
$tableKeysadvisor_user[] = "id";
$tdataadvisor_user[".Keys"] = $tableKeysadvisor_user;


$tdataadvisor_user[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","id");
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


	$tdataadvisor_user["id"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "id";
//	fk_id_people
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_people";
	$fdata["GoodName"] = "fk_id_people";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","fk_id_people");
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


	$tdataadvisor_user["fk_id_people"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "fk_id_people";
//	fk_id_specialty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_specialty";
	$fdata["GoodName"] = "fk_id_specialty";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","fk_id_specialty");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_specialty";

		$fdata["sourceSingle"] = "fk_id_specialty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_specialty";

	
	
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
	$edata["LookupTable"] = "public.specialty";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "description";

	

	
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


	$tdataadvisor_user["fk_id_specialty"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "fk_id_specialty";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","created_by");
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


	$tdataadvisor_user["created_by"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","created_at");
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


	$tdataadvisor_user["created_at"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "created_at";
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","updated_by");
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


	$tdataadvisor_user["updated_by"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "updated_by";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","updated_at");
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


	$tdataadvisor_user["updated_at"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "updated_at";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","status");
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


	$tdataadvisor_user["status"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "status";
//	commission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "commission";
	$fdata["GoodName"] = "commission";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","commission");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "commission";

		$fdata["sourceSingle"] = "commission";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "commission";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdataadvisor_user["commission"] = $fdata;
		$tdataadvisor_user[".searchableFields"][] = "commission";


$tables_data["public.advisor_user"]=&$tdataadvisor_user;
$field_labels["public_advisor_user"] = &$fieldLabelsadvisor_user;
$fieldToolTips["public_advisor_user"] = &$fieldToolTipsadvisor_user;
$placeHolders["public_advisor_user"] = &$placeHoldersadvisor_user;
$page_titles["public_advisor_user"] = &$pageTitlesadvisor_user;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.advisor_user"] = array();
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


		
	$detailsTablesData["public.advisor_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.advisor_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.advisor_user"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.advisor_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.advisor_user"][$dIndex]["detailKeys"][]="fk_id_advisor";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.advisor_user"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.specialty";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.specialty";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "specialty";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.advisor_user"][0] = $masterParams;
				$masterTablesData["public.advisor_user"][0]["masterKeys"] = array();
	$masterTablesData["public.advisor_user"][0]["masterKeys"][]="id";
				$masterTablesData["public.advisor_user"][0]["detailKeys"] = array();
	$masterTablesData["public.advisor_user"][0]["detailKeys"][]="fk_id_specialty";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.people";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.people";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "people";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.advisor_user"][1] = $masterParams;
				$masterTablesData["public.advisor_user"][1]["masterKeys"] = array();
	$masterTablesData["public.advisor_user"][1]["masterKeys"][]="id";
				$masterTablesData["public.advisor_user"][1]["detailKeys"] = array();
	$masterTablesData["public.advisor_user"][1]["detailKeys"][]="fk_id_people";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_advisor_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fk_id_people,  	fk_id_specialty,  	created_by,  	created_at,  	updated_by,  	updated_at,  	status,  	commission";
$proto0["m_strFrom"] = "FROM \"public\".advisor";
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
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.advisor_user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto8["m_sql"] = "fk_id_people";
$proto8["m_srcTableName"] = "public.advisor_user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_specialty",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto10["m_sql"] = "fk_id_specialty";
$proto10["m_srcTableName"] = "public.advisor_user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto12["m_sql"] = "created_by";
$proto12["m_srcTableName"] = "public.advisor_user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.advisor_user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto16["m_sql"] = "updated_by";
$proto16["m_srcTableName"] = "public.advisor_user";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto18["m_sql"] = "updated_at";
$proto18["m_srcTableName"] = "public.advisor_user";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto20["m_sql"] = "status";
$proto20["m_srcTableName"] = "public.advisor_user";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "commission",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto22["m_sql"] = "commission";
$proto22["m_srcTableName"] = "public.advisor_user";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.advisor";
$proto25["m_srcTableName"] = "public.advisor_user";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "fk_id_people";
$proto25["m_columns"][] = "fk_id_specialty";
$proto25["m_columns"][] = "created_by";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_by";
$proto25["m_columns"][] = "updated_at";
$proto25["m_columns"][] = "status";
$proto25["m_columns"][] = "commission";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".advisor";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.advisor_user";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.advisor_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_advisor_user = createSqlQuery_advisor_user();


	
		;

									

$tdataadvisor_user[".sqlquery"] = $queryData_advisor_user;



$tableEvents["public.advisor_user"] = new eventsBase;
$tdataadvisor_user[".hasEvents"] = false;

?>