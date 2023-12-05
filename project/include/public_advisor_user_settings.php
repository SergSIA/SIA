<?php
$tdatapublic_advisor_user = array();
$tdatapublic_advisor_user[".searchableFields"] = array();
$tdatapublic_advisor_user[".ShortName"] = "public_advisor_user";
$tdatapublic_advisor_user[".OwnerID"] = "";
$tdatapublic_advisor_user[".OriginalTable"] = "public.advisor";


$tdatapublic_advisor_user[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublic_advisor_user[".originalPagesByType"] = $tdatapublic_advisor_user[".pagesByType"];
$tdatapublic_advisor_user[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublic_advisor_user[".originalPages"] = $tdatapublic_advisor_user[".pages"];
$tdatapublic_advisor_user[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapublic_advisor_user[".originalDefaultPages"] = $tdatapublic_advisor_user[".defaultPages"];

//	field labels
$fieldLabelspublic_advisor_user = array();
$fieldToolTipspublic_advisor_user = array();
$pageTitlespublic_advisor_user = array();
$placeHolderspublic_advisor_user = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspublic_advisor_user["English"] = array();
	$fieldToolTipspublic_advisor_user["English"] = array();
	$placeHolderspublic_advisor_user["English"] = array();
	$pageTitlespublic_advisor_user["English"] = array();
	$fieldLabelspublic_advisor_user["English"]["id"] = "Id";
	$fieldToolTipspublic_advisor_user["English"]["id"] = "";
	$placeHolderspublic_advisor_user["English"]["id"] = "";
	$fieldLabelspublic_advisor_user["English"]["fk_id_people"] = "Name";
	$fieldToolTipspublic_advisor_user["English"]["fk_id_people"] = "";
	$placeHolderspublic_advisor_user["English"]["fk_id_people"] = "";
	$fieldLabelspublic_advisor_user["English"]["fk_id_specialty"] = "Specialty";
	$fieldToolTipspublic_advisor_user["English"]["fk_id_specialty"] = "";
	$placeHolderspublic_advisor_user["English"]["fk_id_specialty"] = "";
	$fieldLabelspublic_advisor_user["English"]["name"] = "Name";
	$fieldToolTipspublic_advisor_user["English"]["name"] = "";
	$placeHolderspublic_advisor_user["English"]["name"] = "";
	$fieldLabelspublic_advisor_user["English"]["last_name"] = "Last Name";
	$fieldToolTipspublic_advisor_user["English"]["last_name"] = "";
	$placeHolderspublic_advisor_user["English"]["last_name"] = "";
	$fieldLabelspublic_advisor_user["English"]["advisor"] = "Advisor";
	$fieldToolTipspublic_advisor_user["English"]["advisor"] = "";
	$placeHolderspublic_advisor_user["English"]["advisor"] = "";
	$fieldLabelspublic_advisor_user["English"]["commission"] = "Commission";
	$fieldToolTipspublic_advisor_user["English"]["commission"] = "";
	$placeHolderspublic_advisor_user["English"]["commission"] = "";
	$fieldLabelspublic_advisor_user["English"]["created_by"] = "Created By";
	$fieldToolTipspublic_advisor_user["English"]["created_by"] = "";
	$placeHolderspublic_advisor_user["English"]["created_by"] = "";
	$fieldLabelspublic_advisor_user["English"]["created_at"] = "Created At";
	$fieldToolTipspublic_advisor_user["English"]["created_at"] = "";
	$placeHolderspublic_advisor_user["English"]["created_at"] = "";
	$fieldLabelspublic_advisor_user["English"]["updated_by"] = "Updated By";
	$fieldToolTipspublic_advisor_user["English"]["updated_by"] = "";
	$placeHolderspublic_advisor_user["English"]["updated_by"] = "";
	$fieldLabelspublic_advisor_user["English"]["updated_at"] = "Updated At";
	$fieldToolTipspublic_advisor_user["English"]["updated_at"] = "";
	$placeHolderspublic_advisor_user["English"]["updated_at"] = "";
	$fieldLabelspublic_advisor_user["English"]["status"] = "Status";
	$fieldToolTipspublic_advisor_user["English"]["status"] = "";
	$placeHolderspublic_advisor_user["English"]["status"] = "";
	if (count($fieldToolTipspublic_advisor_user["English"]))
		$tdatapublic_advisor_user[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_advisor_user["Spanish"] = array();
	$fieldToolTipspublic_advisor_user["Spanish"] = array();
	$placeHolderspublic_advisor_user["Spanish"] = array();
	$pageTitlespublic_advisor_user["Spanish"] = array();
	$fieldLabelspublic_advisor_user["Spanish"]["id"] = "Id";
	$fieldToolTipspublic_advisor_user["Spanish"]["id"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["id"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["fk_id_people"] = "Nombre";
	$fieldToolTipspublic_advisor_user["Spanish"]["fk_id_people"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["fk_id_people"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["fk_id_specialty"] = "Especialidad";
	$fieldToolTipspublic_advisor_user["Spanish"]["fk_id_specialty"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["fk_id_specialty"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["name"] = "Nombre";
	$fieldToolTipspublic_advisor_user["Spanish"]["name"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["name"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["last_name"] = "Apellido";
	$fieldToolTipspublic_advisor_user["Spanish"]["last_name"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["last_name"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["advisor"] = "Advisor";
	$fieldToolTipspublic_advisor_user["Spanish"]["advisor"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["advisor"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["commission"] = "Comision";
	$fieldToolTipspublic_advisor_user["Spanish"]["commission"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["commission"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["created_by"] = "Created By";
	$fieldToolTipspublic_advisor_user["Spanish"]["created_by"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["created_by"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["created_at"] = "Created At";
	$fieldToolTipspublic_advisor_user["Spanish"]["created_at"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["created_at"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["updated_by"] = "Updated By";
	$fieldToolTipspublic_advisor_user["Spanish"]["updated_by"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["updated_by"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["updated_at"] = "Updated At";
	$fieldToolTipspublic_advisor_user["Spanish"]["updated_at"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["updated_at"] = "";
	$fieldLabelspublic_advisor_user["Spanish"]["status"] = "Activo";
	$fieldToolTipspublic_advisor_user["Spanish"]["status"] = "";
	$placeHolderspublic_advisor_user["Spanish"]["status"] = "";
	if (count($fieldToolTipspublic_advisor_user["Spanish"]))
		$tdatapublic_advisor_user[".isUseToolTips"] = true;
}


	$tdatapublic_advisor_user[".NCSearch"] = true;



$tdatapublic_advisor_user[".shortTableName"] = "public_advisor_user";
$tdatapublic_advisor_user[".nSecOptions"] = 0;

$tdatapublic_advisor_user[".mainTableOwnerID"] = "";
$tdatapublic_advisor_user[".entityType"] = 1;
$tdatapublic_advisor_user[".connId"] = "postgres_at_localhost";


$tdatapublic_advisor_user[".strOriginalTableName"] = "public.advisor";

	



$tdatapublic_advisor_user[".showAddInPopup"] = false;

$tdatapublic_advisor_user[".showEditInPopup"] = false;

$tdatapublic_advisor_user[".showViewInPopup"] = false;

$tdatapublic_advisor_user[".listAjax"] = false;
//	temporary
//$tdatapublic_advisor_user[".listAjax"] = false;

	$tdatapublic_advisor_user[".audit"] = false;

	$tdatapublic_advisor_user[".locking"] = false;


$pages = $tdatapublic_advisor_user[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_advisor_user[".edit"] = true;
	$tdatapublic_advisor_user[".afterEditAction"] = 1;
	$tdatapublic_advisor_user[".closePopupAfterEdit"] = 1;
	$tdatapublic_advisor_user[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_advisor_user[".add"] = true;
$tdatapublic_advisor_user[".afterAddAction"] = 1;
$tdatapublic_advisor_user[".closePopupAfterAdd"] = 1;
$tdatapublic_advisor_user[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_advisor_user[".list"] = true;
}



$tdatapublic_advisor_user[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_advisor_user[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_advisor_user[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_advisor_user[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_advisor_user[".printFriendly"] = true;
}



$tdatapublic_advisor_user[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_advisor_user[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_advisor_user[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_advisor_user[".isUseAjaxSuggest"] = true;

$tdatapublic_advisor_user[".rowHighlite"] = true;



												

$tdatapublic_advisor_user[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_advisor_user[".buttonsAdded"] = false;

$tdatapublic_advisor_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_advisor_user[".isUseTimeForSearch"] = false;


$tdatapublic_advisor_user[".badgeColor"] = "6493EA";


$tdatapublic_advisor_user[".allSearchFields"] = array();
$tdatapublic_advisor_user[".filterFields"] = array();
$tdatapublic_advisor_user[".requiredSearchFields"] = array();

$tdatapublic_advisor_user[".googleLikeFields"] = array();
$tdatapublic_advisor_user[".googleLikeFields"][] = "id";
$tdatapublic_advisor_user[".googleLikeFields"][] = "fk_id_people";
$tdatapublic_advisor_user[".googleLikeFields"][] = "fk_id_specialty";
$tdatapublic_advisor_user[".googleLikeFields"][] = "name";
$tdatapublic_advisor_user[".googleLikeFields"][] = "last_name";
$tdatapublic_advisor_user[".googleLikeFields"][] = "advisor";
$tdatapublic_advisor_user[".googleLikeFields"][] = "commission";
$tdatapublic_advisor_user[".googleLikeFields"][] = "created_by";
$tdatapublic_advisor_user[".googleLikeFields"][] = "created_at";
$tdatapublic_advisor_user[".googleLikeFields"][] = "updated_by";
$tdatapublic_advisor_user[".googleLikeFields"][] = "updated_at";
$tdatapublic_advisor_user[".googleLikeFields"][] = "status";



$tdatapublic_advisor_user[".tableType"] = "list";

$tdatapublic_advisor_user[".printerPageOrientation"] = 0;
$tdatapublic_advisor_user[".nPrinterPageScale"] = 100;

$tdatapublic_advisor_user[".nPrinterSplitRecords"] = 40;

$tdatapublic_advisor_user[".geocodingEnabled"] = false;










$tdatapublic_advisor_user[".pageSize"] = 20;

$tdatapublic_advisor_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_advisor_user[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_advisor_user[".orderindexes"] = array();


$tdatapublic_advisor_user[".sqlHead"] = "SELECT \"public\".advisor.id,  \"public\".advisor.fk_id_people,  \"public\".advisor.fk_id_specialty,  \"public\".people.name,  \"public\".people.last_name,  \"public\".specialty.description||'-'||\"public\".people.name||' '||\"public\".people.last_name AS advisor,  \"public\".advisor.commission,  \"public\".advisor.created_by,  \"public\".advisor.created_at,  \"public\".advisor.updated_by,  \"public\".advisor.updated_at,  \"public\".advisor.status";
$tdatapublic_advisor_user[".sqlFrom"] = "FROM \"public\".advisor  INNER JOIN \"public\".people ON \"public\".advisor.fk_id_people = \"public\".people.id  INNER JOIN \"public\".specialty ON \"public\".advisor.fk_id_specialty = \"public\".specialty.id";
$tdatapublic_advisor_user[".sqlWhereExpr"] = "(\"public\".advisor.status = true)";
$tdatapublic_advisor_user[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_advisor_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_advisor_user[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_advisor_user[".highlightSearchResults"] = true;

$tableKeyspublic_advisor_user = array();
$tableKeyspublic_advisor_user[] = "id";
$tdatapublic_advisor_user[".Keys"] = $tableKeyspublic_advisor_user;


$tdatapublic_advisor_user[".hideMobileList"] = array();




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


	$tdatapublic_advisor_user["id"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "id";
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
	$fdata["FullName"] = "\"public\".advisor.fk_id_people";

	
	
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


	$tdatapublic_advisor_user["fk_id_people"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "fk_id_people";
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
	$fdata["FullName"] = "\"public\".advisor.fk_id_specialty";

	
	
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


	$tdatapublic_advisor_user["fk_id_specialty"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "fk_id_specialty";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","name");
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


	$tdatapublic_advisor_user["name"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","last_name");
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


	$tdatapublic_advisor_user["last_name"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "last_name";
//	advisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "advisor";
	$fdata["GoodName"] = "advisor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","advisor");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "advisor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".specialty.description||'-'||\"public\".people.name||' '||\"public\".people.last_name";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatapublic_advisor_user["advisor"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "advisor";
//	commission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "commission";
	$fdata["GoodName"] = "commission";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","commission");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "commission";

		$fdata["sourceSingle"] = "commission";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".advisor.commission";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatapublic_advisor_user["commission"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "commission";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","created_by");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".advisor.created_by";

	
	
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


	$tdatapublic_advisor_user["created_by"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".advisor.created_at";

	
	
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


	$tdatapublic_advisor_user["created_at"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "created_at";
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","updated_by");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "updated_by";

		$fdata["sourceSingle"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".advisor.updated_by";

	
	
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


	$tdatapublic_advisor_user["updated_by"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "updated_by";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".advisor.updated_at";

	
	
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


	$tdatapublic_advisor_user["updated_at"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "updated_at";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_advisor_user","status");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".advisor.status";

	
	
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


	$tdatapublic_advisor_user["status"] = $fdata;
		$tdatapublic_advisor_user[".searchableFields"][] = "status";


$tables_data["public.advisor_user"]=&$tdatapublic_advisor_user;
$field_labels["public_advisor_user"] = &$fieldLabelspublic_advisor_user;
$fieldToolTips["public_advisor_user"] = &$fieldToolTipspublic_advisor_user;
$placeHolders["public_advisor_user"] = &$placeHolderspublic_advisor_user;
$page_titles["public_advisor_user"] = &$pageTitlespublic_advisor_user;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.advisor_user"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.advisor_user"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_advisor_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"public\".advisor.id,  \"public\".advisor.fk_id_people,  \"public\".advisor.fk_id_specialty,  \"public\".people.name,  \"public\".people.last_name,  \"public\".specialty.description||'-'||\"public\".people.name||' '||\"public\".people.last_name AS advisor,  \"public\".advisor.commission,  \"public\".advisor.created_by,  \"public\".advisor.created_at,  \"public\".advisor.updated_by,  \"public\".advisor.updated_at,  \"public\".advisor.status";
$proto0["m_strFrom"] = "FROM \"public\".advisor  INNER JOIN \"public\".people ON \"public\".advisor.fk_id_people = \"public\".people.id  INNER JOIN \"public\".specialty ON \"public\".advisor.fk_id_specialty = \"public\".specialty.id";
$proto0["m_strWhere"] = "(\"public\".advisor.status = true)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "\"public\".advisor.status = true";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= true";
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

$proto6["m_sql"] = "\"public\".advisor.id";
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

$proto8["m_sql"] = "\"public\".advisor.fk_id_people";
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

$proto10["m_sql"] = "\"public\".advisor.fk_id_specialty";
$proto10["m_srcTableName"] = "public.advisor_user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.advisor_user"
));

$proto12["m_sql"] = "\"public\".people.name";
$proto12["m_srcTableName"] = "public.advisor_user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.advisor_user"
));

$proto14["m_sql"] = "\"public\".people.last_name";
$proto14["m_srcTableName"] = "public.advisor_user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"public\".specialty.description||'-'||\"public\".people.name||' '||\"public\".people.last_name"
));

$proto16["m_sql"] = "\"public\".specialty.description||'-'||\"public\".people.name||' '||\"public\".people.last_name";
$proto16["m_srcTableName"] = "public.advisor_user";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "advisor";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "commission",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto18["m_sql"] = "\"public\".advisor.commission";
$proto18["m_srcTableName"] = "public.advisor_user";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto20["m_sql"] = "\"public\".advisor.created_by";
$proto20["m_srcTableName"] = "public.advisor_user";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto22["m_sql"] = "\"public\".advisor.created_at";
$proto22["m_srcTableName"] = "public.advisor_user";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto24["m_sql"] = "\"public\".advisor.updated_by";
$proto24["m_srcTableName"] = "public.advisor_user";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto26["m_sql"] = "\"public\".advisor.updated_at";
$proto26["m_srcTableName"] = "public.advisor_user";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto28["m_sql"] = "\"public\".advisor.status";
$proto28["m_srcTableName"] = "public.advisor_user";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "public.advisor";
$proto31["m_srcTableName"] = "public.advisor_user";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "fk_id_people";
$proto31["m_columns"][] = "fk_id_specialty";
$proto31["m_columns"][] = "created_by";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "updated_by";
$proto31["m_columns"][] = "updated_at";
$proto31["m_columns"][] = "status";
$proto31["m_columns"][] = "commission";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "\"public\".advisor";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "public.advisor_user";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "public.people";
$proto35["m_srcTableName"] = "public.advisor_user";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "name";
$proto35["m_columns"][] = "last_name";
$proto35["m_columns"][] = "birth_date";
$proto35["m_columns"][] = "created_by";
$proto35["m_columns"][] = "created_at";
$proto35["m_columns"][] = "updated_by";
$proto35["m_columns"][] = "updated_at";
$proto35["m_columns"][] = "fk_type_doc";
$proto35["m_columns"][] = "document";
$proto35["m_columns"][] = "telf";
$proto35["m_columns"][] = "country";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN \"public\".people ON \"public\".advisor.fk_id_people = \"public\".people.id";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "public.advisor_user";
$proto36=array();
$proto36["m_sql"] = "\"public\".advisor.fk_id_people = \"public\".people.id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= \"public\".people.id";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "public.specialty";
$proto39["m_srcTableName"] = "public.advisor_user";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "description";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN \"public\".specialty ON \"public\".advisor.fk_id_specialty = \"public\".specialty.id";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "public.advisor_user";
$proto40=array();
$proto40["m_sql"] = "\"public\".advisor.fk_id_specialty = \"public\".specialty.id";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_id_specialty",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.advisor_user"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= \"public\".specialty.id";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.advisor_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_advisor_user = createSqlQuery_public_advisor_user();


	
		;

												

$tdatapublic_advisor_user[".sqlquery"] = $queryData_public_advisor_user;



include_once(getabspath("include/public_advisor_user_events.php"));
$tableEvents["public.advisor_user"] = new eventclass_public_advisor_user;
$tdatapublic_advisor_user[".hasEvents"] = true;

?>