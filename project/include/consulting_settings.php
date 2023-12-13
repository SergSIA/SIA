<?php
$tdataconsulting = array();
$tdataconsulting[".searchableFields"] = array();
$tdataconsulting[".ShortName"] = "consulting";
$tdataconsulting[".OwnerID"] = "";
$tdataconsulting[".OriginalTable"] = "public.consulting";


$tdataconsulting[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconsulting[".originalPagesByType"] = $tdataconsulting[".pagesByType"];
$tdataconsulting[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconsulting[".originalPages"] = $tdataconsulting[".pages"];
$tdataconsulting[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconsulting[".originalDefaultPages"] = $tdataconsulting[".defaultPages"];

//	field labels
$fieldLabelsconsulting = array();
$fieldToolTipsconsulting = array();
$pageTitlesconsulting = array();
$placeHoldersconsulting = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulting["Spanish"] = array();
	$fieldToolTipsconsulting["Spanish"] = array();
	$placeHoldersconsulting["Spanish"] = array();
	$pageTitlesconsulting["Spanish"] = array();
	$fieldLabelsconsulting["Spanish"]["id"] = "Id";
	$fieldToolTipsconsulting["Spanish"]["id"] = "";
	$placeHoldersconsulting["Spanish"]["id"] = "";
	$fieldLabelsconsulting["Spanish"]["fk_id_advisor"] = "Asesor";
	$fieldToolTipsconsulting["Spanish"]["fk_id_advisor"] = "";
	$placeHoldersconsulting["Spanish"]["fk_id_advisor"] = "";
	$fieldLabelsconsulting["Spanish"]["fk_id_customer"] = "Cliente";
	$fieldToolTipsconsulting["Spanish"]["fk_id_customer"] = "";
	$placeHoldersconsulting["Spanish"]["fk_id_customer"] = "";
	$fieldLabelsconsulting["Spanish"]["start"] = "Inicia";
	$fieldToolTipsconsulting["Spanish"]["start"] = "";
	$placeHoldersconsulting["Spanish"]["start"] = "";
	$fieldLabelsconsulting["Spanish"]["end"] = "Termina";
	$fieldToolTipsconsulting["Spanish"]["end"] = "";
	$placeHoldersconsulting["Spanish"]["end"] = "";
	$fieldLabelsconsulting["Spanish"]["fk_id_status_consulting"] = "Estado";
	$fieldToolTipsconsulting["Spanish"]["fk_id_status_consulting"] = "";
	$placeHoldersconsulting["Spanish"]["fk_id_status_consulting"] = "";
	$fieldLabelsconsulting["Spanish"]["access"] = "Acceso";
	$fieldToolTipsconsulting["Spanish"]["access"] = "";
	$placeHoldersconsulting["Spanish"]["access"] = "";
	$fieldLabelsconsulting["Spanish"]["start_h"] = "Hora";
	$fieldToolTipsconsulting["Spanish"]["start_h"] = "";
	$placeHoldersconsulting["Spanish"]["start_h"] = "";
	$fieldLabelsconsulting["Spanish"]["end_h"] = "Hora";
	$fieldToolTipsconsulting["Spanish"]["end_h"] = "";
	$placeHoldersconsulting["Spanish"]["end_h"] = "";
	if (count($fieldToolTipsconsulting["Spanish"]))
		$tdataconsulting[".isUseToolTips"] = true;
}


	$tdataconsulting[".NCSearch"] = true;



$tdataconsulting[".shortTableName"] = "consulting";
$tdataconsulting[".nSecOptions"] = 0;

$tdataconsulting[".mainTableOwnerID"] = "";
$tdataconsulting[".entityType"] = 0;
$tdataconsulting[".connId"] = "postgres_at_localhost";


$tdataconsulting[".strOriginalTableName"] = "public.consulting";

	



$tdataconsulting[".showAddInPopup"] = false;

$tdataconsulting[".showEditInPopup"] = false;

$tdataconsulting[".showViewInPopup"] = false;

$tdataconsulting[".listAjax"] = false;
//	temporary
//$tdataconsulting[".listAjax"] = false;

	$tdataconsulting[".audit"] = false;

	$tdataconsulting[".locking"] = false;


$pages = $tdataconsulting[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulting[".edit"] = true;
	$tdataconsulting[".afterEditAction"] = 1;
	$tdataconsulting[".closePopupAfterEdit"] = 1;
	$tdataconsulting[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulting[".add"] = true;
$tdataconsulting[".afterAddAction"] = 1;
$tdataconsulting[".closePopupAfterAdd"] = 1;
$tdataconsulting[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulting[".list"] = true;
}



$tdataconsulting[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulting[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulting[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulting[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulting[".printFriendly"] = true;
}



$tdataconsulting[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulting[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulting[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulting[".isUseAjaxSuggest"] = true;

$tdataconsulting[".rowHighlite"] = true;



																																													

$tdataconsulting[".ajaxCodeSnippetAdded"] = false;

$tdataconsulting[".buttonsAdded"] = false;

$tdataconsulting[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulting[".isUseTimeForSearch"] = false;


$tdataconsulting[".badgeColor"] = "778899";


$tdataconsulting[".allSearchFields"] = array();
$tdataconsulting[".filterFields"] = array();
$tdataconsulting[".requiredSearchFields"] = array();

$tdataconsulting[".googleLikeFields"] = array();
$tdataconsulting[".googleLikeFields"][] = "id";
$tdataconsulting[".googleLikeFields"][] = "fk_id_advisor";
$tdataconsulting[".googleLikeFields"][] = "fk_id_customer";
$tdataconsulting[".googleLikeFields"][] = "start";
$tdataconsulting[".googleLikeFields"][] = "end";
$tdataconsulting[".googleLikeFields"][] = "fk_id_status_consulting";
$tdataconsulting[".googleLikeFields"][] = "access";
$tdataconsulting[".googleLikeFields"][] = "start_h";
$tdataconsulting[".googleLikeFields"][] = "end_h";



$tdataconsulting[".tableType"] = "list";

$tdataconsulting[".printerPageOrientation"] = 0;
$tdataconsulting[".nPrinterPageScale"] = 100;

$tdataconsulting[".nPrinterSplitRecords"] = 40;

$tdataconsulting[".geocodingEnabled"] = false;










$tdataconsulting[".pageSize"] = 20;

$tdataconsulting[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulting[".strOrderBy"] = $tstrOrderBy;

$tdataconsulting[".orderindexes"] = array();


$tdataconsulting[".sqlHead"] = "SELECT id,  	fk_id_advisor,  	fk_id_customer,  	\"start\",  	\"end\",  	fk_id_status_consulting,  	\"access\",  	start_h,  	end_h";
$tdataconsulting[".sqlFrom"] = "FROM \"public\".consulting";
$tdataconsulting[".sqlWhereExpr"] = "";
$tdataconsulting[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulting[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulting[".highlightSearchResults"] = true;

$tableKeysconsulting = array();
$tableKeysconsulting[] = "id";
$tdataconsulting[".Keys"] = $tableKeysconsulting;


$tdataconsulting[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","id");
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


	$tdataconsulting["id"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "id";
//	fk_id_advisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_advisor";
	$fdata["GoodName"] = "fk_id_advisor";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","fk_id_advisor");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_advisor";

		$fdata["sourceSingle"] = "fk_id_advisor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_advisor";

	
	
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
	$edata["LookupTable"] = "public.advisor1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name|| '  ' || last_name";

	

		$edata["CustomDisplay"] = "true";

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


	$tdataconsulting["fk_id_advisor"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "fk_id_advisor";
//	fk_id_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_customer";
	$fdata["GoodName"] = "fk_id_customer";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","fk_id_customer");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_customer";

		$fdata["sourceSingle"] = "fk_id_customer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_customer";

	
	
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
	$edata["LookupTable"] = "public.customers1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name || ' ' || last_name";

	

		$edata["CustomDisplay"] = "true";

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


	$tdataconsulting["fk_id_customer"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "fk_id_customer";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","start");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start";

		$fdata["sourceSingle"] = "start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"start\"";

	
	
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


	$tdataconsulting["start"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","end");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end";

		$fdata["sourceSingle"] = "end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"end\"";

	
	
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


	$tdataconsulting["end"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "end";
//	fk_id_status_consulting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_id_status_consulting";
	$fdata["GoodName"] = "fk_id_status_consulting";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","fk_id_status_consulting");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_status_consulting";

		$fdata["sourceSingle"] = "fk_id_status_consulting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_status_consulting";

	
	
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
	$edata["LookupTable"] = "public.status_consulting";
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


	$tdataconsulting["fk_id_status_consulting"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "fk_id_status_consulting";
//	access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "access";
	$fdata["GoodName"] = "access";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","access");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "access";

		$fdata["sourceSingle"] = "access";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"access\"";

	
	
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


	$tdataconsulting["access"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "access";
//	start_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "start_h";
	$fdata["GoodName"] = "start_h";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","start_h");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "start_h";

		$fdata["sourceSingle"] = "start_h";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_h";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdataconsulting["start_h"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "start_h";
//	end_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "end_h";
	$fdata["GoodName"] = "end_h";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting","end_h");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "end_h";

		$fdata["sourceSingle"] = "end_h";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_h";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdataconsulting["end_h"] = $fdata;
		$tdataconsulting[".searchableFields"][] = "end_h";


$tables_data["public.consulting"]=&$tdataconsulting;
$field_labels["public_consulting"] = &$fieldLabelsconsulting;
$fieldToolTips["public_consulting"] = &$fieldToolTipsconsulting;
$placeHolders["public_consulting"] = &$placeHoldersconsulting;
$page_titles["public_consulting"] = &$pageTitlesconsulting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.consulting"] = array();
//	public.payment
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.payment";
		$detailsParam["dOriginalTable"] = "public.payment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_payment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.consulting"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.consulting"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.consulting"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.consulting"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.consulting"][$dIndex]["detailKeys"][]="fk_id_consulting";
//	public.payment_advisor
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.payment_advisor";
		$detailsParam["dOriginalTable"] = "public.payment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment_advisor";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_payment_advisor");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.consulting"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.consulting"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.consulting"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.consulting"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.consulting"][$dIndex]["detailKeys"][]="fk_id_consulting";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.consulting"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.advisor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.advisor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "advisor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting"][0] = $masterParams;
				$masterTablesData["public.consulting"][0]["masterKeys"] = array();
	$masterTablesData["public.consulting"][0]["masterKeys"][]="id";
				$masterTablesData["public.consulting"][0]["detailKeys"] = array();
	$masterTablesData["public.consulting"][0]["detailKeys"][]="fk_id_advisor";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.customers";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.customers";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "customers";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting"][1] = $masterParams;
				$masterTablesData["public.consulting"][1]["masterKeys"] = array();
	$masterTablesData["public.consulting"][1]["masterKeys"][]="id";
				$masterTablesData["public.consulting"][1]["detailKeys"] = array();
	$masterTablesData["public.consulting"][1]["detailKeys"][]="fk_id_customer";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.status_consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.status_consulting";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "status_consulting";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting"][2] = $masterParams;
				$masterTablesData["public.consulting"][2]["masterKeys"] = array();
	$masterTablesData["public.consulting"][2]["masterKeys"][]="id";
				$masterTablesData["public.consulting"][2]["detailKeys"] = array();
	$masterTablesData["public.consulting"][2]["detailKeys"][]="fk_id_status_consulting";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.advisor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.advisor_user";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "advisor_user";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting"][3] = $masterParams;
				$masterTablesData["public.consulting"][3]["masterKeys"] = array();
	$masterTablesData["public.consulting"][3]["masterKeys"][]="id";
				$masterTablesData["public.consulting"][3]["detailKeys"] = array();
	$masterTablesData["public.consulting"][3]["detailKeys"][]="fk_id_advisor";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fk_id_advisor,  	fk_id_customer,  	\"start\",  	\"end\",  	fk_id_status_consulting,  	\"access\",  	start_h,  	end_h";
$proto0["m_strFrom"] = "FROM \"public\".consulting";
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
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.consulting";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_advisor",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto8["m_sql"] = "fk_id_advisor";
$proto8["m_srcTableName"] = "public.consulting";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_customer",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto10["m_sql"] = "fk_id_customer";
$proto10["m_srcTableName"] = "public.consulting";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto12["m_sql"] = "\"start\"";
$proto12["m_srcTableName"] = "public.consulting";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto14["m_sql"] = "\"end\"";
$proto14["m_srcTableName"] = "public.consulting";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_status_consulting",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto16["m_sql"] = "fk_id_status_consulting";
$proto16["m_srcTableName"] = "public.consulting";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "access",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto18["m_sql"] = "\"access\"";
$proto18["m_srcTableName"] = "public.consulting";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "start_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto20["m_sql"] = "start_h";
$proto20["m_srcTableName"] = "public.consulting";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "end_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting"
));

$proto22["m_sql"] = "end_h";
$proto22["m_srcTableName"] = "public.consulting";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.consulting";
$proto25["m_srcTableName"] = "public.consulting";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "fk_id_advisor";
$proto25["m_columns"][] = "fk_id_customer";
$proto25["m_columns"][] = "start";
$proto25["m_columns"][] = "end";
$proto25["m_columns"][] = "fk_id_status_consulting";
$proto25["m_columns"][] = "access";
$proto25["m_columns"][] = "start_h";
$proto25["m_columns"][] = "end_h";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".consulting";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.consulting";
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
$proto0["m_srcTableName"]="public.consulting";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulting = createSqlQuery_consulting();


	
		;

									

$tdataconsulting[".sqlquery"] = $queryData_consulting;



$tableEvents["public.consulting"] = new eventsBase;
$tdataconsulting[".hasEvents"] = false;

?>