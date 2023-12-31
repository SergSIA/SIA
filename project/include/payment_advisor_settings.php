<?php
$tdatapayment_advisor = array();
$tdatapayment_advisor[".searchableFields"] = array();
$tdatapayment_advisor[".ShortName"] = "payment_advisor";
$tdatapayment_advisor[".OwnerID"] = "";
$tdatapayment_advisor[".OriginalTable"] = "public.payment";


$tdatapayment_advisor[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapayment_advisor[".originalPagesByType"] = $tdatapayment_advisor[".pagesByType"];
$tdatapayment_advisor[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapayment_advisor[".originalPages"] = $tdatapayment_advisor[".pages"];
$tdatapayment_advisor[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapayment_advisor[".originalDefaultPages"] = $tdatapayment_advisor[".defaultPages"];

//	field labels
$fieldLabelspayment_advisor = array();
$fieldToolTipspayment_advisor = array();
$pageTitlespayment_advisor = array();
$placeHolderspayment_advisor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspayment_advisor["Spanish"] = array();
	$fieldToolTipspayment_advisor["Spanish"] = array();
	$placeHolderspayment_advisor["Spanish"] = array();
	$pageTitlespayment_advisor["Spanish"] = array();
	$fieldLabelspayment_advisor["Spanish"]["id"] = "Id";
	$fieldToolTipspayment_advisor["Spanish"]["id"] = "";
	$placeHolderspayment_advisor["Spanish"]["id"] = "";
	$fieldLabelspayment_advisor["Spanish"]["fk_id_consulting"] = "Asesoria";
	$fieldToolTipspayment_advisor["Spanish"]["fk_id_consulting"] = "";
	$placeHolderspayment_advisor["Spanish"]["fk_id_consulting"] = "";
	$fieldLabelspayment_advisor["Spanish"]["price"] = "Precio";
	$fieldToolTipspayment_advisor["Spanish"]["price"] = "";
	$placeHolderspayment_advisor["Spanish"]["price"] = "";
	$fieldLabelspayment_advisor["Spanish"]["fk_id_status_payment"] = "Estado Pago";
	$fieldToolTipspayment_advisor["Spanish"]["fk_id_status_payment"] = "";
	$placeHolderspayment_advisor["Spanish"]["fk_id_status_payment"] = "";
	$fieldLabelspayment_advisor["Spanish"]["fk_id_method_payment"] = "Metodo de Pago";
	$fieldToolTipspayment_advisor["Spanish"]["fk_id_method_payment"] = "";
	$placeHolderspayment_advisor["Spanish"]["fk_id_method_payment"] = "";
	$fieldLabelspayment_advisor["Spanish"]["obs"] = "Observacion";
	$fieldToolTipspayment_advisor["Spanish"]["obs"] = "";
	$placeHolderspayment_advisor["Spanish"]["obs"] = "";
	if (count($fieldToolTipspayment_advisor["Spanish"]))
		$tdatapayment_advisor[".isUseToolTips"] = true;
}


	$tdatapayment_advisor[".NCSearch"] = true;



$tdatapayment_advisor[".shortTableName"] = "payment_advisor";
$tdatapayment_advisor[".nSecOptions"] = 0;

$tdatapayment_advisor[".mainTableOwnerID"] = "";
$tdatapayment_advisor[".entityType"] = 1;
$tdatapayment_advisor[".connId"] = "postgres_at_localhost";


$tdatapayment_advisor[".strOriginalTableName"] = "public.payment";

	



$tdatapayment_advisor[".showAddInPopup"] = false;

$tdatapayment_advisor[".showEditInPopup"] = false;

$tdatapayment_advisor[".showViewInPopup"] = false;

$tdatapayment_advisor[".listAjax"] = false;
//	temporary
//$tdatapayment_advisor[".listAjax"] = false;

	$tdatapayment_advisor[".audit"] = false;

	$tdatapayment_advisor[".locking"] = false;


$pages = $tdatapayment_advisor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapayment_advisor[".edit"] = true;
	$tdatapayment_advisor[".afterEditAction"] = 1;
	$tdatapayment_advisor[".closePopupAfterEdit"] = 1;
	$tdatapayment_advisor[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapayment_advisor[".add"] = true;
$tdatapayment_advisor[".afterAddAction"] = 1;
$tdatapayment_advisor[".closePopupAfterAdd"] = 1;
$tdatapayment_advisor[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapayment_advisor[".list"] = true;
}



$tdatapayment_advisor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapayment_advisor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapayment_advisor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapayment_advisor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapayment_advisor[".printFriendly"] = true;
}



$tdatapayment_advisor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapayment_advisor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapayment_advisor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapayment_advisor[".isUseAjaxSuggest"] = true;

$tdatapayment_advisor[".rowHighlite"] = true;



																																													

$tdatapayment_advisor[".ajaxCodeSnippetAdded"] = false;

$tdatapayment_advisor[".buttonsAdded"] = false;

$tdatapayment_advisor[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayment_advisor[".isUseTimeForSearch"] = false;


$tdatapayment_advisor[".badgeColor"] = "cd853f";


$tdatapayment_advisor[".allSearchFields"] = array();
$tdatapayment_advisor[".filterFields"] = array();
$tdatapayment_advisor[".requiredSearchFields"] = array();

$tdatapayment_advisor[".googleLikeFields"] = array();
$tdatapayment_advisor[".googleLikeFields"][] = "id";
$tdatapayment_advisor[".googleLikeFields"][] = "fk_id_consulting";
$tdatapayment_advisor[".googleLikeFields"][] = "price";
$tdatapayment_advisor[".googleLikeFields"][] = "fk_id_status_payment";
$tdatapayment_advisor[".googleLikeFields"][] = "fk_id_method_payment";
$tdatapayment_advisor[".googleLikeFields"][] = "obs";



$tdatapayment_advisor[".tableType"] = "list";

$tdatapayment_advisor[".printerPageOrientation"] = 0;
$tdatapayment_advisor[".nPrinterPageScale"] = 100;

$tdatapayment_advisor[".nPrinterSplitRecords"] = 40;

$tdatapayment_advisor[".geocodingEnabled"] = false;










$tdatapayment_advisor[".pageSize"] = 20;

$tdatapayment_advisor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapayment_advisor[".strOrderBy"] = $tstrOrderBy;

$tdatapayment_advisor[".orderindexes"] = array();


$tdatapayment_advisor[".sqlHead"] = "SELECT id,  	fk_id_consulting,  	price,  	fk_id_status_payment,  	fk_id_method_payment,  	obs";
$tdatapayment_advisor[".sqlFrom"] = "FROM \"public\".payment";
$tdatapayment_advisor[".sqlWhereExpr"] = "";
$tdatapayment_advisor[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayment_advisor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayment_advisor[".arrGroupsPerPage"] = $arrGPP;

$tdatapayment_advisor[".highlightSearchResults"] = true;

$tableKeyspayment_advisor = array();
$tableKeyspayment_advisor[] = "id";
$tdatapayment_advisor[".Keys"] = $tableKeyspayment_advisor;


$tdatapayment_advisor[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_advisor","id");
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


	$tdatapayment_advisor["id"] = $fdata;
		$tdatapayment_advisor[".searchableFields"][] = "id";
//	fk_id_consulting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_consulting";
	$fdata["GoodName"] = "fk_id_consulting";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_advisor","fk_id_consulting");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "access";

	

	
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


	$tdatapayment_advisor["fk_id_consulting"] = $fdata;
		$tdatapayment_advisor[".searchableFields"][] = "fk_id_consulting";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_advisor","price");
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


	$tdatapayment_advisor["price"] = $fdata;
		$tdatapayment_advisor[".searchableFields"][] = "price";
//	fk_id_status_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_id_status_payment";
	$fdata["GoodName"] = "fk_id_status_payment";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_advisor","fk_id_status_payment");
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


	$tdatapayment_advisor["fk_id_status_payment"] = $fdata;
		$tdatapayment_advisor[".searchableFields"][] = "fk_id_status_payment";
//	fk_id_method_payment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_id_method_payment";
	$fdata["GoodName"] = "fk_id_method_payment";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_advisor","fk_id_method_payment");
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


	$tdatapayment_advisor["fk_id_method_payment"] = $fdata;
		$tdatapayment_advisor[".searchableFields"][] = "fk_id_method_payment";
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "public.payment";
	$fdata["Label"] = GetFieldLabel("public_payment_advisor","obs");
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


	$tdatapayment_advisor["obs"] = $fdata;
		$tdatapayment_advisor[".searchableFields"][] = "obs";


$tables_data["public.payment_advisor"]=&$tdatapayment_advisor;
$field_labels["public_payment_advisor"] = &$fieldLabelspayment_advisor;
$fieldToolTips["public_payment_advisor"] = &$fieldToolTipspayment_advisor;
$placeHolders["public_payment_advisor"] = &$placeHolderspayment_advisor;
$page_titles["public_payment_advisor"] = &$pageTitlespayment_advisor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.payment_advisor"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.payment_advisor"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.consulting";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consulting";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.payment_advisor"][0] = $masterParams;
				$masterTablesData["public.payment_advisor"][0]["masterKeys"] = array();
	$masterTablesData["public.payment_advisor"][0]["masterKeys"][]="id";
				$masterTablesData["public.payment_advisor"][0]["detailKeys"] = array();
	$masterTablesData["public.payment_advisor"][0]["detailKeys"][]="fk_id_consulting";
		
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
					$masterTablesData["public.payment_advisor"][1] = $masterParams;
				$masterTablesData["public.payment_advisor"][1]["masterKeys"] = array();
	$masterTablesData["public.payment_advisor"][1]["masterKeys"][]="id";
				$masterTablesData["public.payment_advisor"][1]["detailKeys"] = array();
	$masterTablesData["public.payment_advisor"][1]["detailKeys"][]="fk_id_status_payment";
		
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
					$masterTablesData["public.payment_advisor"][2] = $masterParams;
				$masterTablesData["public.payment_advisor"][2]["masterKeys"] = array();
	$masterTablesData["public.payment_advisor"][2]["masterKeys"][]="id";
				$masterTablesData["public.payment_advisor"][2]["detailKeys"] = array();
	$masterTablesData["public.payment_advisor"][2]["detailKeys"][]="fk_id_method_payment";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.consulting_my_advisor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consulting_my_advisor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.payment_advisor"][3] = $masterParams;
				$masterTablesData["public.payment_advisor"][3]["masterKeys"] = array();
	$masterTablesData["public.payment_advisor"][3]["masterKeys"][]="id";
				$masterTablesData["public.payment_advisor"][3]["detailKeys"] = array();
	$masterTablesData["public.payment_advisor"][3]["detailKeys"][]="fk_id_consulting";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_payment_advisor()
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
	"m_srcTableName" => "public.payment_advisor"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.payment_advisor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_consulting",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_advisor"
));

$proto8["m_sql"] = "fk_id_consulting";
$proto8["m_srcTableName"] = "public.payment_advisor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_advisor"
));

$proto10["m_sql"] = "price";
$proto10["m_srcTableName"] = "public.payment_advisor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_status_payment",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_advisor"
));

$proto12["m_sql"] = "fk_id_status_payment";
$proto12["m_srcTableName"] = "public.payment_advisor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_method_payment",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_advisor"
));

$proto14["m_sql"] = "fk_id_method_payment";
$proto14["m_srcTableName"] = "public.payment_advisor";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "public.payment",
	"m_srcTableName" => "public.payment_advisor"
));

$proto16["m_sql"] = "obs";
$proto16["m_srcTableName"] = "public.payment_advisor";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.payment";
$proto19["m_srcTableName"] = "public.payment_advisor";
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
$proto18["m_srcTableName"] = "public.payment_advisor";
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
$proto0["m_srcTableName"]="public.payment_advisor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payment_advisor = createSqlQuery_payment_advisor();


	
		;

						

$tdatapayment_advisor[".sqlquery"] = $queryData_payment_advisor;



$tableEvents["public.payment_advisor"] = new eventsBase;
$tdatapayment_advisor[".hasEvents"] = false;

?>