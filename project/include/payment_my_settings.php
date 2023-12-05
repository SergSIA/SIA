<?php
$tdatapayment_my = array();
$tdatapayment_my[".searchableFields"] = array();
$tdatapayment_my[".ShortName"] = "payment_my";
$tdatapayment_my[".OwnerID"] = "";
$tdatapayment_my[".OriginalTable"] = "public.payment";


$tdatapayment_my[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapayment_my[".originalPagesByType"] = $tdatapayment_my[".pagesByType"];
$tdatapayment_my[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapayment_my[".originalPages"] = $tdatapayment_my[".pages"];
$tdatapayment_my[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapayment_my[".originalDefaultPages"] = $tdatapayment_my[".defaultPages"];

//	field labels
$fieldLabelspayment_my = array();
$fieldToolTipspayment_my = array();
$pageTitlespayment_my = array();
$placeHolderspayment_my = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayment_my["English"] = array();
	$fieldToolTipspayment_my["English"] = array();
	$placeHolderspayment_my["English"] = array();
	$pageTitlespayment_my["English"] = array();
	$fieldLabelspayment_my["English"]["id"] = "Id";
	$fieldToolTipspayment_my["English"]["id"] = "";
	$placeHolderspayment_my["English"]["id"] = "";
	$fieldLabelspayment_my["English"]["fk_id_consulting"] = "Consulting";
	$fieldToolTipspayment_my["English"]["fk_id_consulting"] = "";
	$placeHolderspayment_my["English"]["fk_id_consulting"] = "";
	$fieldLabelspayment_my["English"]["price"] = "Price";
	$fieldToolTipspayment_my["English"]["price"] = "";
	$placeHolderspayment_my["English"]["price"] = "";
	$fieldLabelspayment_my["English"]["fk_id_status_payment"] = "Status Payment";
	$fieldToolTipspayment_my["English"]["fk_id_status_payment"] = "";
	$placeHolderspayment_my["English"]["fk_id_status_payment"] = "";
	$fieldLabelspayment_my["English"]["fk_id_method_payment"] = "Method Payment";
	$fieldToolTipspayment_my["English"]["fk_id_method_payment"] = "";
	$placeHolderspayment_my["English"]["fk_id_method_payment"] = "";
	$fieldLabelspayment_my["English"]["obs"] = "Obs";
	$fieldToolTipspayment_my["English"]["obs"] = "";
	$placeHolderspayment_my["English"]["obs"] = "";
	if (count($fieldToolTipspayment_my["English"]))
		$tdatapayment_my[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspayment_my["Spanish"] = array();
	$fieldToolTipspayment_my["Spanish"] = array();
	$placeHolderspayment_my["Spanish"] = array();
	$pageTitlespayment_my["Spanish"] = array();
	$fieldLabelspayment_my["Spanish"]["id"] = "Id";
	$fieldToolTipspayment_my["Spanish"]["id"] = "";
	$placeHolderspayment_my["Spanish"]["id"] = "";
	$fieldLabelspayment_my["Spanish"]["fk_id_consulting"] = "Asesoria";
	$fieldToolTipspayment_my["Spanish"]["fk_id_consulting"] = "";
	$placeHolderspayment_my["Spanish"]["fk_id_consulting"] = "";
	$fieldLabelspayment_my["Spanish"]["price"] = "Costo";
	$fieldToolTipspayment_my["Spanish"]["price"] = "";
	$placeHolderspayment_my["Spanish"]["price"] = "";
	$fieldLabelspayment_my["Spanish"]["fk_id_status_payment"] = "Estado Pago";
	$fieldToolTipspayment_my["Spanish"]["fk_id_status_payment"] = "";
	$placeHolderspayment_my["Spanish"]["fk_id_status_payment"] = "";
	$fieldLabelspayment_my["Spanish"]["fk_id_method_payment"] = "Medio Pago";
	$fieldToolTipspayment_my["Spanish"]["fk_id_method_payment"] = "";
	$placeHolderspayment_my["Spanish"]["fk_id_method_payment"] = "";
	$fieldLabelspayment_my["Spanish"]["obs"] = "Observacion";
	$fieldToolTipspayment_my["Spanish"]["obs"] = "";
	$placeHolderspayment_my["Spanish"]["obs"] = "";
	if (count($fieldToolTipspayment_my["Spanish"]))
		$tdatapayment_my[".isUseToolTips"] = true;
}


	$tdatapayment_my[".NCSearch"] = true;



$tdatapayment_my[".shortTableName"] = "payment_my";
$tdatapayment_my[".nSecOptions"] = 0;

$tdatapayment_my[".mainTableOwnerID"] = "";
$tdatapayment_my[".entityType"] = 1;
$tdatapayment_my[".connId"] = "postgres_at_localhost";


$tdatapayment_my[".strOriginalTableName"] = "public.payment";

	



$tdatapayment_my[".showAddInPopup"] = false;

$tdatapayment_my[".showEditInPopup"] = false;

$tdatapayment_my[".showViewInPopup"] = false;

$tdatapayment_my[".listAjax"] = false;
//	temporary
//$tdatapayment_my[".listAjax"] = false;

	$tdatapayment_my[".audit"] = false;

	$tdatapayment_my[".locking"] = false;


$pages = $tdatapayment_my[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapayment_my[".edit"] = true;
	$tdatapayment_my[".afterEditAction"] = 1;
	$tdatapayment_my[".closePopupAfterEdit"] = 1;
	$tdatapayment_my[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapayment_my[".add"] = true;
$tdatapayment_my[".afterAddAction"] = 1;
$tdatapayment_my[".closePopupAfterAdd"] = 1;
$tdatapayment_my[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapayment_my[".list"] = true;
}



$tdatapayment_my[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapayment_my[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapayment_my[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapayment_my[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapayment_my[".printFriendly"] = true;
}



$tdatapayment_my[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapayment_my[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapayment_my[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapayment_my[".isUseAjaxSuggest"] = true;

$tdatapayment_my[".rowHighlite"] = true;



																																																

$tdatapayment_my[".ajaxCodeSnippetAdded"] = false;

$tdatapayment_my[".buttonsAdded"] = false;

$tdatapayment_my[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayment_my[".isUseTimeForSearch"] = false;


$tdatapayment_my[".badgeColor"] = "EDCA00";


$tdatapayment_my[".allSearchFields"] = array();
$tdatapayment_my[".filterFields"] = array();
$tdatapayment_my[".requiredSearchFields"] = array();

$tdatapayment_my[".googleLikeFields"] = array();
$tdatapayment_my[".googleLikeFields"][] = "id";
$tdatapayment_my[".googleLikeFields"][] = "fk_id_consulting";
$tdatapayment_my[".googleLikeFields"][] = "price";
$tdatapayment_my[".googleLikeFields"][] = "fk_id_status_payment";
$tdatapayment_my[".googleLikeFields"][] = "fk_id_method_payment";
$tdatapayment_my[".googleLikeFields"][] = "obs";



$tdatapayment_my[".tableType"] = "list";

$tdatapayment_my[".printerPageOrientation"] = 0;
$tdatapayment_my[".nPrinterPageScale"] = 100;

$tdatapayment_my[".nPrinterSplitRecords"] = 40;

$tdatapayment_my[".geocodingEnabled"] = false;










$tdatapayment_my[".pageSize"] = 20;

$tdatapayment_my[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapayment_my[".strOrderBy"] = $tstrOrderBy;

$tdatapayment_my[".orderindexes"] = array();


$tdatapayment_my[".sqlHead"] = "SELECT id,  	fk_id_consulting,  	price,  	fk_id_status_payment,  	fk_id_method_payment,  	obs";
$tdatapayment_my[".sqlFrom"] = "FROM \"public\".payment";
$tdatapayment_my[".sqlWhereExpr"] = "";
$tdatapayment_my[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayment_my[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayment_my[".arrGroupsPerPage"] = $arrGPP;

$tdatapayment_my[".highlightSearchResults"] = true;

$tableKeyspayment_my = array();
$tableKeyspayment_my[] = "id";
$tdatapayment_my[".Keys"] = $tableKeyspayment_my;


$tdatapayment_my[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_my","id");
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


	$tdatapayment_my["id"] = $fdata;
		$tdatapayment_my[".searchableFields"][] = "id";
//	fk_id_consulting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_consulting";
	$fdata["GoodName"] = "fk_id_consulting";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_my","fk_id_consulting");
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
	$edata["LookupTable"] = "public.consulting_my_advisor";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id";

				$edata["LookupWhere"] = "fk_id_status_consulting=3";


	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "LABEL", "messageType" => "CustomID");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatapayment_my["fk_id_consulting"] = $fdata;
		$tdatapayment_my[".searchableFields"][] = "fk_id_consulting";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_my","price");
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


	$tdatapayment_my["price"] = $fdata;
		$tdatapayment_my[".searchableFields"][] = "price";
//	fk_id_status_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_id_status_payment";
	$fdata["GoodName"] = "fk_id_status_payment";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_my","fk_id_status_payment");
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


	$tdatapayment_my["fk_id_status_payment"] = $fdata;
		$tdatapayment_my[".searchableFields"][] = "fk_id_status_payment";
//	fk_id_method_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_id_method_payment";
	$fdata["GoodName"] = "fk_id_method_payment";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_my","fk_id_method_payment");
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


	$tdatapayment_my["fk_id_method_payment"] = $fdata;
		$tdatapayment_my[".searchableFields"][] = "fk_id_method_payment";
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_my","obs");
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


	$tdatapayment_my["obs"] = $fdata;
		$tdatapayment_my[".searchableFields"][] = "obs";


$tables_data["public.payment_my"]=&$tdatapayment_my;
$field_labels["public_payment_my"] = &$fieldLabelspayment_my;
$fieldToolTips["public_payment_my"] = &$fieldToolTipspayment_my;
$placeHolders["public_payment_my"] = &$placeHolderspayment_my;
$page_titles["public_payment_my"] = &$pageTitlespayment_my;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.payment_my"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.payment_my"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.consulting";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consulting";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.payment_my"][0] = $masterParams;
				$masterTablesData["public.payment_my"][0]["masterKeys"] = array();
	$masterTablesData["public.payment_my"][0]["masterKeys"][]="id";
				$masterTablesData["public.payment_my"][0]["detailKeys"] = array();
	$masterTablesData["public.payment_my"][0]["detailKeys"][]="fk_id_consulting";
		
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
					$masterTablesData["public.payment_my"][1] = $masterParams;
				$masterTablesData["public.payment_my"][1]["masterKeys"] = array();
	$masterTablesData["public.payment_my"][1]["masterKeys"][]="id";
				$masterTablesData["public.payment_my"][1]["detailKeys"] = array();
	$masterTablesData["public.payment_my"][1]["detailKeys"][]="fk_id_status_payment";
		
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
					$masterTablesData["public.payment_my"][2] = $masterParams;
				$masterTablesData["public.payment_my"][2]["masterKeys"] = array();
	$masterTablesData["public.payment_my"][2]["masterKeys"][]="id";
				$masterTablesData["public.payment_my"][2]["detailKeys"] = array();
	$masterTablesData["public.payment_my"][2]["detailKeys"][]="fk_id_method_payment";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_payment_my()
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
	"m_srcTableName" => "public.payment_my"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.payment_my";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_consulting",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_my"
));

$proto8["m_sql"] = "fk_id_consulting";
$proto8["m_srcTableName"] = "public.payment_my";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_my"
));

$proto10["m_sql"] = "price";
$proto10["m_srcTableName"] = "public.payment_my";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_status_payment",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_my"
));

$proto12["m_sql"] = "fk_id_status_payment";
$proto12["m_srcTableName"] = "public.payment_my";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_method_payment",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_my"
));

$proto14["m_sql"] = "fk_id_method_payment";
$proto14["m_srcTableName"] = "public.payment_my";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_my"
));

$proto16["m_sql"] = "obs";
$proto16["m_srcTableName"] = "public.payment_my";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.payment";
$proto19["m_srcTableName"] = "public.payment_my";
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
$proto18["m_srcTableName"] = "public.payment_my";
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
$proto0["m_srcTableName"]="public.payment_my";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payment_my = createSqlQuery_payment_my();


	
		;

						

$tdatapayment_my[".sqlquery"] = $queryData_payment_my;



$tableEvents["public.payment_my"] = new eventsBase;
$tdatapayment_my[".hasEvents"] = false;

?>