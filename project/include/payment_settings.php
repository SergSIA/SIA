<?php
$tdatapayment = array();
$tdatapayment[".searchableFields"] = array();
$tdatapayment[".ShortName"] = "payment";
$tdatapayment[".OwnerID"] = "";
$tdatapayment[".OriginalTable"] = "public.payment";


$tdatapayment[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapayment[".originalPagesByType"] = $tdatapayment[".pagesByType"];
$tdatapayment[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapayment[".originalPages"] = $tdatapayment[".pages"];
$tdatapayment[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapayment[".originalDefaultPages"] = $tdatapayment[".defaultPages"];

//	field labels
$fieldLabelspayment = array();
$fieldToolTipspayment = array();
$pageTitlespayment = array();
$placeHolderspayment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayment["English"] = array();
	$fieldToolTipspayment["English"] = array();
	$placeHolderspayment["English"] = array();
	$pageTitlespayment["English"] = array();
	$fieldLabelspayment["English"]["id"] = "Id";
	$fieldToolTipspayment["English"]["id"] = "";
	$placeHolderspayment["English"]["id"] = "";
	$fieldLabelspayment["English"]["fk_id_consulting"] = "Consulting";
	$fieldToolTipspayment["English"]["fk_id_consulting"] = "";
	$placeHolderspayment["English"]["fk_id_consulting"] = "";
	$fieldLabelspayment["English"]["price"] = "Price";
	$fieldToolTipspayment["English"]["price"] = "";
	$placeHolderspayment["English"]["price"] = "";
	$fieldLabelspayment["English"]["fk_id_status_payment"] = "Status Payment";
	$fieldToolTipspayment["English"]["fk_id_status_payment"] = "";
	$placeHolderspayment["English"]["fk_id_status_payment"] = "";
	$fieldLabelspayment["English"]["fk_id_method_payment"] = "Method Payment";
	$fieldToolTipspayment["English"]["fk_id_method_payment"] = "";
	$placeHolderspayment["English"]["fk_id_method_payment"] = "";
	$fieldLabelspayment["English"]["obs"] = "Obs";
	$fieldToolTipspayment["English"]["obs"] = "";
	$placeHolderspayment["English"]["obs"] = "";
	if (count($fieldToolTipspayment["English"]))
		$tdatapayment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspayment["Spanish"] = array();
	$fieldToolTipspayment["Spanish"] = array();
	$placeHolderspayment["Spanish"] = array();
	$pageTitlespayment["Spanish"] = array();
	$fieldLabelspayment["Spanish"]["id"] = "Id";
	$fieldToolTipspayment["Spanish"]["id"] = "";
	$placeHolderspayment["Spanish"]["id"] = "";
	$fieldLabelspayment["Spanish"]["fk_id_consulting"] = "Asesoria";
	$fieldToolTipspayment["Spanish"]["fk_id_consulting"] = "";
	$placeHolderspayment["Spanish"]["fk_id_consulting"] = "";
	$fieldLabelspayment["Spanish"]["price"] = "Costo";
	$fieldToolTipspayment["Spanish"]["price"] = "";
	$placeHolderspayment["Spanish"]["price"] = "";
	$fieldLabelspayment["Spanish"]["fk_id_status_payment"] = "Estado Pago";
	$fieldToolTipspayment["Spanish"]["fk_id_status_payment"] = "";
	$placeHolderspayment["Spanish"]["fk_id_status_payment"] = "";
	$fieldLabelspayment["Spanish"]["fk_id_method_payment"] = "Medio Pago";
	$fieldToolTipspayment["Spanish"]["fk_id_method_payment"] = "";
	$placeHolderspayment["Spanish"]["fk_id_method_payment"] = "";
	$fieldLabelspayment["Spanish"]["obs"] = "Observacion";
	$fieldToolTipspayment["Spanish"]["obs"] = "";
	$placeHolderspayment["Spanish"]["obs"] = "";
	if (count($fieldToolTipspayment["Spanish"]))
		$tdatapayment[".isUseToolTips"] = true;
}


	$tdatapayment[".NCSearch"] = true;



$tdatapayment[".shortTableName"] = "payment";
$tdatapayment[".nSecOptions"] = 0;

$tdatapayment[".mainTableOwnerID"] = "";
$tdatapayment[".entityType"] = 0;
$tdatapayment[".connId"] = "postgres_at_localhost";


$tdatapayment[".strOriginalTableName"] = "public.payment";

	



$tdatapayment[".showAddInPopup"] = false;

$tdatapayment[".showEditInPopup"] = false;

$tdatapayment[".showViewInPopup"] = false;

$tdatapayment[".listAjax"] = false;
//	temporary
//$tdatapayment[".listAjax"] = false;

	$tdatapayment[".audit"] = false;

	$tdatapayment[".locking"] = false;


$pages = $tdatapayment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapayment[".edit"] = true;
	$tdatapayment[".afterEditAction"] = 1;
	$tdatapayment[".closePopupAfterEdit"] = 1;
	$tdatapayment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapayment[".add"] = true;
$tdatapayment[".afterAddAction"] = 1;
$tdatapayment[".closePopupAfterAdd"] = 1;
$tdatapayment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapayment[".list"] = true;
}



$tdatapayment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapayment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapayment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapayment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapayment[".printFriendly"] = true;
}



$tdatapayment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapayment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapayment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapayment[".isUseAjaxSuggest"] = true;

$tdatapayment[".rowHighlite"] = true;



																																																																								

$tdatapayment[".ajaxCodeSnippetAdded"] = false;

$tdatapayment[".buttonsAdded"] = false;

$tdatapayment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayment[".isUseTimeForSearch"] = false;


$tdatapayment[".badgeColor"] = "EDCA00";


$tdatapayment[".allSearchFields"] = array();
$tdatapayment[".filterFields"] = array();
$tdatapayment[".requiredSearchFields"] = array();

$tdatapayment[".googleLikeFields"] = array();
$tdatapayment[".googleLikeFields"][] = "id";
$tdatapayment[".googleLikeFields"][] = "fk_id_consulting";
$tdatapayment[".googleLikeFields"][] = "price";
$tdatapayment[".googleLikeFields"][] = "fk_id_status_payment";
$tdatapayment[".googleLikeFields"][] = "fk_id_method_payment";
$tdatapayment[".googleLikeFields"][] = "obs";



$tdatapayment[".tableType"] = "list";

$tdatapayment[".printerPageOrientation"] = 0;
$tdatapayment[".nPrinterPageScale"] = 100;

$tdatapayment[".nPrinterSplitRecords"] = 40;

$tdatapayment[".geocodingEnabled"] = false;










$tdatapayment[".pageSize"] = 20;

$tdatapayment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapayment[".strOrderBy"] = $tstrOrderBy;

$tdatapayment[".orderindexes"] = array();


$tdatapayment[".sqlHead"] = "SELECT id,  	fk_id_consulting,  	price,  	fk_id_status_payment,  	fk_id_method_payment,  	obs";
$tdatapayment[".sqlFrom"] = "FROM \"public\".payment";
$tdatapayment[".sqlWhereExpr"] = "";
$tdatapayment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayment[".arrGroupsPerPage"] = $arrGPP;

$tdatapayment[".highlightSearchResults"] = true;

$tableKeyspayment = array();
$tableKeyspayment[] = "id";
$tdatapayment[".Keys"] = $tableKeyspayment;


$tdatapayment[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment","id");
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


	$tdatapayment["id"] = $fdata;
		$tdatapayment[".searchableFields"][] = "id";
//	fk_id_consulting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_consulting";
	$fdata["GoodName"] = "fk_id_consulting";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment","fk_id_consulting");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_consulting";

		$fdata["sourceSingle"] = "fk_id_consulting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_consulting";

	
	
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
	$edata["LookupTable"] = "public.consulting";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id";

	

	
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


	$tdatapayment["fk_id_consulting"] = $fdata;
		$tdatapayment[".searchableFields"][] = "fk_id_consulting";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment","price");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "price";

		$fdata["sourceSingle"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdatapayment["price"] = $fdata;
		$tdatapayment[".searchableFields"][] = "price";
//	fk_id_status_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_id_status_payment";
	$fdata["GoodName"] = "fk_id_status_payment";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment","fk_id_status_payment");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_status_payment";

		$fdata["sourceSingle"] = "fk_id_status_payment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_status_payment";

	
	
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
	$edata["LookupTable"] = "public.status_payment";
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


	$tdatapayment["fk_id_status_payment"] = $fdata;
		$tdatapayment[".searchableFields"][] = "fk_id_status_payment";
//	fk_id_method_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_id_method_payment";
	$fdata["GoodName"] = "fk_id_method_payment";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment","fk_id_method_payment");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_method_payment";

		$fdata["sourceSingle"] = "fk_id_method_payment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_method_payment";

	
	
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
	$edata["LookupTable"] = "public.method_payment";
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


	$tdatapayment["fk_id_method_payment"] = $fdata;
		$tdatapayment[".searchableFields"][] = "fk_id_method_payment";
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment","obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "obs";

		$fdata["sourceSingle"] = "obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obs";

	
	
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


	$tdatapayment["obs"] = $fdata;
		$tdatapayment[".searchableFields"][] = "obs";


$tables_data["public.payment"]=&$tdatapayment;
$field_labels["public_payment"] = &$fieldLabelspayment;
$fieldToolTips["public_payment"] = &$fieldToolTipspayment;
$placeHolders["public_payment"] = &$placeHolderspayment;
$page_titles["public_payment"] = &$pageTitlespayment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.payment"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.payment"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.consulting";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consulting";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.payment"][0] = $masterParams;
				$masterTablesData["public.payment"][0]["masterKeys"] = array();
	$masterTablesData["public.payment"][0]["masterKeys"][]="id";
				$masterTablesData["public.payment"][0]["detailKeys"] = array();
	$masterTablesData["public.payment"][0]["detailKeys"][]="fk_id_consulting";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.method_payment";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.method_payment";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "method_payment";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.payment"][1] = $masterParams;
				$masterTablesData["public.payment"][1]["masterKeys"] = array();
	$masterTablesData["public.payment"][1]["masterKeys"][]="id";
				$masterTablesData["public.payment"][1]["detailKeys"] = array();
	$masterTablesData["public.payment"][1]["detailKeys"][]="fk_id_method_payment";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.status_payment";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.status_payment";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "status_payment";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.payment"][2] = $masterParams;
				$masterTablesData["public.payment"][2]["masterKeys"] = array();
	$masterTablesData["public.payment"][2]["masterKeys"][]="id";
				$masterTablesData["public.payment"][2]["detailKeys"] = array();
	$masterTablesData["public.payment"][2]["detailKeys"][]="fk_id_status_payment";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.consulting_my";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consulting_my";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.payment"][3] = $masterParams;
				$masterTablesData["public.payment"][3]["masterKeys"] = array();
	$masterTablesData["public.payment"][3]["masterKeys"][]="id";
				$masterTablesData["public.payment"][3]["detailKeys"] = array();
	$masterTablesData["public.payment"][3]["detailKeys"][]="fk_id_consulting";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.consulting_my_advisor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_consulting_my_advisor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.payment"][4] = $masterParams;
				$masterTablesData["public.payment"][4]["masterKeys"] = array();
	$masterTablesData["public.payment"][4]["masterKeys"][]="id";
				$masterTablesData["public.payment"][4]["detailKeys"] = array();
	$masterTablesData["public.payment"][4]["detailKeys"][]="fk_id_consulting";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_payment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fk_id_consulting,  	price,  	fk_id_status_payment,  	fk_id_method_payment,  	obs";
$proto0["m_strFrom"] = "FROM \"public\".payment";
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
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.payment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_consulting",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment"
));

$proto8["m_sql"] = "fk_id_consulting";
$proto8["m_srcTableName"] = "public.payment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment"
));

$proto10["m_sql"] = "price";
$proto10["m_srcTableName"] = "public.payment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_status_payment",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment"
));

$proto12["m_sql"] = "fk_id_status_payment";
$proto12["m_srcTableName"] = "public.payment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_method_payment",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment"
));

$proto14["m_sql"] = "fk_id_method_payment";
$proto14["m_srcTableName"] = "public.payment";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment"
));

$proto16["m_sql"] = "obs";
$proto16["m_srcTableName"] = "public.payment";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.payment";
$proto19["m_srcTableName"] = "public.payment";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "fk_id_consulting";
$proto19["m_columns"][] = "price";
$proto19["m_columns"][] = "fk_id_status_payment";
$proto19["m_columns"][] = "fk_id_method_payment";
$proto19["m_columns"][] = "obs";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".payment";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.payment";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.payment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payment = createSqlQuery_payment();


	
		;

						

$tdatapayment[".sqlquery"] = $queryData_payment;



$tableEvents["public.payment"] = new eventsBase;
$tdatapayment[".hasEvents"] = false;

?>