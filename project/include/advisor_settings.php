<?php
$tdataadvisor = array();
$tdataadvisor[".searchableFields"] = array();
$tdataadvisor[".ShortName"] = "advisor";
$tdataadvisor[".OwnerID"] = "";
$tdataadvisor[".OriginalTable"] = "public.advisor";


$tdataadvisor[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadvisor[".originalPagesByType"] = $tdataadvisor[".pagesByType"];
$tdataadvisor[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadvisor[".originalPages"] = $tdataadvisor[".pages"];
$tdataadvisor[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadvisor[".originalDefaultPages"] = $tdataadvisor[".defaultPages"];

//	field labels
$fieldLabelsadvisor = array();
$fieldToolTipsadvisor = array();
$pageTitlesadvisor = array();
$placeHoldersadvisor = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadvisor["English"] = array();
	$fieldToolTipsadvisor["English"] = array();
	$placeHoldersadvisor["English"] = array();
	$pageTitlesadvisor["English"] = array();
	$fieldLabelsadvisor["English"]["id"] = "Id";
	$fieldToolTipsadvisor["English"]["id"] = "";
	$placeHoldersadvisor["English"]["id"] = "";
	$fieldLabelsadvisor["English"]["fk_id_people"] = "People";
	$fieldToolTipsadvisor["English"]["fk_id_people"] = "";
	$placeHoldersadvisor["English"]["fk_id_people"] = "";
	$fieldLabelsadvisor["English"]["fk_id_specialty"] = "Specialty";
	$fieldToolTipsadvisor["English"]["fk_id_specialty"] = "";
	$placeHoldersadvisor["English"]["fk_id_specialty"] = "";
	$fieldLabelsadvisor["English"]["created_by"] = "Created By";
	$fieldToolTipsadvisor["English"]["created_by"] = "";
	$placeHoldersadvisor["English"]["created_by"] = "";
	$fieldLabelsadvisor["English"]["created_at"] = "Created At";
	$fieldToolTipsadvisor["English"]["created_at"] = "";
	$placeHoldersadvisor["English"]["created_at"] = "";
	$fieldLabelsadvisor["English"]["updated_by"] = "Updated By";
	$fieldToolTipsadvisor["English"]["updated_by"] = "";
	$placeHoldersadvisor["English"]["updated_by"] = "";
	$fieldLabelsadvisor["English"]["updated_at"] = "Updated At";
	$fieldToolTipsadvisor["English"]["updated_at"] = "";
	$placeHoldersadvisor["English"]["updated_at"] = "";
	$fieldLabelsadvisor["English"]["status"] = "Status";
	$fieldToolTipsadvisor["English"]["status"] = "";
	$placeHoldersadvisor["English"]["status"] = "";
	$fieldLabelsadvisor["English"]["commission"] = "% Commission";
	$fieldToolTipsadvisor["English"]["commission"] = "";
	$placeHoldersadvisor["English"]["commission"] = "";
	if (count($fieldToolTipsadvisor["English"]))
		$tdataadvisor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadvisor["Spanish"] = array();
	$fieldToolTipsadvisor["Spanish"] = array();
	$placeHoldersadvisor["Spanish"] = array();
	$pageTitlesadvisor["Spanish"] = array();
	$fieldLabelsadvisor["Spanish"]["id"] = "Id";
	$fieldToolTipsadvisor["Spanish"]["id"] = "";
	$placeHoldersadvisor["Spanish"]["id"] = "";
	$fieldLabelsadvisor["Spanish"]["fk_id_people"] = "Persona";
	$fieldToolTipsadvisor["Spanish"]["fk_id_people"] = "";
	$placeHoldersadvisor["Spanish"]["fk_id_people"] = "";
	$fieldLabelsadvisor["Spanish"]["fk_id_specialty"] = "Especialidad";
	$fieldToolTipsadvisor["Spanish"]["fk_id_specialty"] = "";
	$placeHoldersadvisor["Spanish"]["fk_id_specialty"] = "";
	$fieldLabelsadvisor["Spanish"]["created_by"] = "Creado Por";
	$fieldToolTipsadvisor["Spanish"]["created_by"] = "";
	$placeHoldersadvisor["Spanish"]["created_by"] = "";
	$fieldLabelsadvisor["Spanish"]["created_at"] = "Credo El";
	$fieldToolTipsadvisor["Spanish"]["created_at"] = "";
	$placeHoldersadvisor["Spanish"]["created_at"] = "";
	$fieldLabelsadvisor["Spanish"]["updated_by"] = "Actualizado Por";
	$fieldToolTipsadvisor["Spanish"]["updated_by"] = "";
	$placeHoldersadvisor["Spanish"]["updated_by"] = "";
	$fieldLabelsadvisor["Spanish"]["updated_at"] = "Actualizado El";
	$fieldToolTipsadvisor["Spanish"]["updated_at"] = "";
	$placeHoldersadvisor["Spanish"]["updated_at"] = "";
	$fieldLabelsadvisor["Spanish"]["status"] = "Estado";
	$fieldToolTipsadvisor["Spanish"]["status"] = "";
	$placeHoldersadvisor["Spanish"]["status"] = "";
	$fieldLabelsadvisor["Spanish"]["commission"] = "% Comision";
	$fieldToolTipsadvisor["Spanish"]["commission"] = "";
	$placeHoldersadvisor["Spanish"]["commission"] = "";
	if (count($fieldToolTipsadvisor["Spanish"]))
		$tdataadvisor[".isUseToolTips"] = true;
}


	$tdataadvisor[".NCSearch"] = true;



$tdataadvisor[".shortTableName"] = "advisor";
$tdataadvisor[".nSecOptions"] = 0;

$tdataadvisor[".mainTableOwnerID"] = "";
$tdataadvisor[".entityType"] = 0;
$tdataadvisor[".connId"] = "postgres_at_localhost";


$tdataadvisor[".strOriginalTableName"] = "public.advisor";

	



$tdataadvisor[".showAddInPopup"] = false;

$tdataadvisor[".showEditInPopup"] = false;

$tdataadvisor[".showViewInPopup"] = false;

$tdataadvisor[".listAjax"] = false;
//	temporary
//$tdataadvisor[".listAjax"] = false;

	$tdataadvisor[".audit"] = false;

	$tdataadvisor[".locking"] = false;


$pages = $tdataadvisor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadvisor[".edit"] = true;
	$tdataadvisor[".afterEditAction"] = 1;
	$tdataadvisor[".closePopupAfterEdit"] = 1;
	$tdataadvisor[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadvisor[".add"] = true;
$tdataadvisor[".afterAddAction"] = 1;
$tdataadvisor[".closePopupAfterAdd"] = 1;
$tdataadvisor[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadvisor[".list"] = true;
}



$tdataadvisor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadvisor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadvisor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadvisor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadvisor[".printFriendly"] = true;
}



$tdataadvisor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadvisor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadvisor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadvisor[".isUseAjaxSuggest"] = true;

$tdataadvisor[".rowHighlite"] = true;



																																																

$tdataadvisor[".ajaxCodeSnippetAdded"] = false;

$tdataadvisor[".buttonsAdded"] = false;

$tdataadvisor[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadvisor[".isUseTimeForSearch"] = false;


$tdataadvisor[".badgeColor"] = "7B68EE";


$tdataadvisor[".allSearchFields"] = array();
$tdataadvisor[".filterFields"] = array();
$tdataadvisor[".requiredSearchFields"] = array();

$tdataadvisor[".googleLikeFields"] = array();
$tdataadvisor[".googleLikeFields"][] = "id";
$tdataadvisor[".googleLikeFields"][] = "fk_id_people";
$tdataadvisor[".googleLikeFields"][] = "fk_id_specialty";
$tdataadvisor[".googleLikeFields"][] = "created_by";
$tdataadvisor[".googleLikeFields"][] = "created_at";
$tdataadvisor[".googleLikeFields"][] = "updated_by";
$tdataadvisor[".googleLikeFields"][] = "updated_at";
$tdataadvisor[".googleLikeFields"][] = "status";
$tdataadvisor[".googleLikeFields"][] = "commission";



$tdataadvisor[".tableType"] = "list";

$tdataadvisor[".printerPageOrientation"] = 0;
$tdataadvisor[".nPrinterPageScale"] = 100;

$tdataadvisor[".nPrinterSplitRecords"] = 40;

$tdataadvisor[".geocodingEnabled"] = false;










$tdataadvisor[".pageSize"] = 20;

$tdataadvisor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataadvisor[".strOrderBy"] = $tstrOrderBy;

$tdataadvisor[".orderindexes"] = array();


$tdataadvisor[".sqlHead"] = "SELECT id,  	fk_id_people,  	fk_id_specialty,  	created_by,  	created_at,  	updated_by,  	updated_at,  	status,  	commission";
$tdataadvisor[".sqlFrom"] = "FROM \"public\".advisor";
$tdataadvisor[".sqlWhereExpr"] = "";
$tdataadvisor[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadvisor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadvisor[".arrGroupsPerPage"] = $arrGPP;

$tdataadvisor[".highlightSearchResults"] = true;

$tableKeysadvisor = array();
$tableKeysadvisor[] = "id";
$tdataadvisor[".Keys"] = $tableKeysadvisor;


$tdataadvisor[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","id");
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


	$tdataadvisor["id"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "id";
//	fk_id_people
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_people";
	$fdata["GoodName"] = "fk_id_people";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","fk_id_people");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataadvisor["fk_id_people"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "fk_id_people";
//	fk_id_specialty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_specialty";
	$fdata["GoodName"] = "fk_id_specialty";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","fk_id_specialty");
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


	$tdataadvisor["fk_id_specialty"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "fk_id_specialty";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","created_by");
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


	$tdataadvisor["created_by"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","created_at");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataadvisor["created_at"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "created_at";
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","updated_by");
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


	$tdataadvisor["updated_by"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "updated_by";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","updated_at");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataadvisor["updated_at"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "updated_at";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","status");
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


	$tdataadvisor["status"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "status";
//	commission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "commission";
	$fdata["GoodName"] = "commission";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor","commission");
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


	$tdataadvisor["commission"] = $fdata;
		$tdataadvisor[".searchableFields"][] = "commission";


$tables_data["public.advisor"]=&$tdataadvisor;
$field_labels["public_advisor"] = &$fieldLabelsadvisor;
$fieldToolTips["public_advisor"] = &$fieldToolTipsadvisor;
$placeHolders["public_advisor"] = &$placeHoldersadvisor;
$page_titles["public_advisor"] = &$pageTitlesadvisor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.advisor"] = array();
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


		
	$detailsTablesData["public.advisor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.advisor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.advisor"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.advisor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.advisor"][$dIndex]["detailKeys"][]="fk_id_advisor";
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


		
	$detailsTablesData["public.advisor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.advisor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.advisor"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.advisor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.advisor"][$dIndex]["detailKeys"][]="fk_id_advisor";
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


		
	$detailsTablesData["public.advisor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.advisor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.advisor"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.advisor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.advisor"][$dIndex]["detailKeys"][]="fk_id_advisor";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.advisor"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.people";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.people";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "people";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.advisor"][0] = $masterParams;
				$masterTablesData["public.advisor"][0]["masterKeys"] = array();
	$masterTablesData["public.advisor"][0]["masterKeys"][]="id";
				$masterTablesData["public.advisor"][0]["detailKeys"] = array();
	$masterTablesData["public.advisor"][0]["detailKeys"][]="fk_id_people";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.specialty";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.specialty";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "specialty";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.advisor"][1] = $masterParams;
				$masterTablesData["public.advisor"][1]["masterKeys"] = array();
	$masterTablesData["public.advisor"][1]["masterKeys"][]="id";
				$masterTablesData["public.advisor"][1]["detailKeys"] = array();
	$masterTablesData["public.advisor"][1]["detailKeys"][]="fk_id_specialty";
		
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
					$masterTablesData["public.advisor"][2] = $masterParams;
				$masterTablesData["public.advisor"][2]["masterKeys"] = array();
	$masterTablesData["public.advisor"][2]["masterKeys"][]="id";
				$masterTablesData["public.advisor"][2]["detailKeys"] = array();
	$masterTablesData["public.advisor"][2]["detailKeys"][]="fk_id_people";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_advisor()
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
	"m_srcTableName" => "public.advisor"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.advisor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor"
));

$proto8["m_sql"] = "fk_id_people";
$proto8["m_srcTableName"] = "public.advisor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_specialty",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor"
));

$proto10["m_sql"] = "fk_id_specialty";
$proto10["m_srcTableName"] = "public.advisor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor"
));

$proto12["m_sql"] = "created_by";
$proto12["m_srcTableName"] = "public.advisor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "public.advisor";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor"
));

$proto16["m_sql"] = "updated_by";
$proto16["m_srcTableName"] = "public.advisor";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor"
));

$proto18["m_sql"] = "updated_at";
$proto18["m_srcTableName"] = "public.advisor";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor"
));

$proto20["m_sql"] = "status";
$proto20["m_srcTableName"] = "public.advisor";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "commission",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor"
));

$proto22["m_sql"] = "commission";
$proto22["m_srcTableName"] = "public.advisor";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.advisor";
$proto25["m_srcTableName"] = "public.advisor";
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
$proto24["m_srcTableName"] = "public.advisor";
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
$proto0["m_srcTableName"]="public.advisor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_advisor = createSqlQuery_advisor();


	
		;

									

$tdataadvisor[".sqlquery"] = $queryData_advisor;



include_once(getabspath("include/advisor_events.php"));
$tableEvents["public.advisor"] = new eventclass_advisor;
$tdataadvisor[".hasEvents"] = true;

?>