<?php
$tdatapeople = array();
$tdatapeople[".searchableFields"] = array();
$tdatapeople[".ShortName"] = "people";
$tdatapeople[".OwnerID"] = "";
$tdatapeople[".OriginalTable"] = "public.people";


$tdatapeople[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapeople[".originalPagesByType"] = $tdatapeople[".pagesByType"];
$tdatapeople[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapeople[".originalPages"] = $tdatapeople[".pages"];
$tdatapeople[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapeople[".originalDefaultPages"] = $tdatapeople[".defaultPages"];

//	field labels
$fieldLabelspeople = array();
$fieldToolTipspeople = array();
$pageTitlespeople = array();
$placeHolderspeople = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspeople["English"] = array();
	$fieldToolTipspeople["English"] = array();
	$placeHolderspeople["English"] = array();
	$pageTitlespeople["English"] = array();
	$fieldLabelspeople["English"]["id"] = "Id";
	$fieldToolTipspeople["English"]["id"] = "";
	$placeHolderspeople["English"]["id"] = "";
	$fieldLabelspeople["English"]["name"] = "Name";
	$fieldToolTipspeople["English"]["name"] = "";
	$placeHolderspeople["English"]["name"] = "";
	$fieldLabelspeople["English"]["last_name"] = "Last Name";
	$fieldToolTipspeople["English"]["last_name"] = "";
	$placeHolderspeople["English"]["last_name"] = "";
	$fieldLabelspeople["English"]["birth_date"] = "Birth Date";
	$fieldToolTipspeople["English"]["birth_date"] = "";
	$placeHolderspeople["English"]["birth_date"] = "";
	$fieldLabelspeople["English"]["created_by"] = "Created By";
	$fieldToolTipspeople["English"]["created_by"] = "";
	$placeHolderspeople["English"]["created_by"] = "";
	$fieldLabelspeople["English"]["created_at"] = "Created At";
	$fieldToolTipspeople["English"]["created_at"] = "";
	$placeHolderspeople["English"]["created_at"] = "";
	$fieldLabelspeople["English"]["updated_by"] = "Updated By";
	$fieldToolTipspeople["English"]["updated_by"] = "";
	$placeHolderspeople["English"]["updated_by"] = "";
	$fieldLabelspeople["English"]["updated_at"] = "Updated At";
	$fieldToolTipspeople["English"]["updated_at"] = "";
	$placeHolderspeople["English"]["updated_at"] = "";
	$fieldLabelspeople["English"]["fk_type_doc"] = "Type Doc";
	$fieldToolTipspeople["English"]["fk_type_doc"] = "";
	$placeHolderspeople["English"]["fk_type_doc"] = "";
	$fieldLabelspeople["English"]["document"] = "Document";
	$fieldToolTipspeople["English"]["document"] = "";
	$placeHolderspeople["English"]["document"] = "";
	$fieldLabelspeople["English"]["telf"] = "Telf";
	$fieldToolTipspeople["English"]["telf"] = "";
	$placeHolderspeople["English"]["telf"] = "";
	$fieldLabelspeople["English"]["country"] = "Country";
	$fieldToolTipspeople["English"]["country"] = "";
	$placeHolderspeople["English"]["country"] = "";
	if (count($fieldToolTipspeople["English"]))
		$tdatapeople[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspeople["Spanish"] = array();
	$fieldToolTipspeople["Spanish"] = array();
	$placeHolderspeople["Spanish"] = array();
	$pageTitlespeople["Spanish"] = array();
	$fieldLabelspeople["Spanish"]["id"] = "Id";
	$fieldToolTipspeople["Spanish"]["id"] = "";
	$placeHolderspeople["Spanish"]["id"] = "";
	$fieldLabelspeople["Spanish"]["name"] = "Nombre";
	$fieldToolTipspeople["Spanish"]["name"] = "";
	$placeHolderspeople["Spanish"]["name"] = "";
	$fieldLabelspeople["Spanish"]["last_name"] = "Apellido";
	$fieldToolTipspeople["Spanish"]["last_name"] = "";
	$placeHolderspeople["Spanish"]["last_name"] = "";
	$fieldLabelspeople["Spanish"]["birth_date"] = "Fecha de nacimiento";
	$fieldToolTipspeople["Spanish"]["birth_date"] = "";
	$placeHolderspeople["Spanish"]["birth_date"] = "";
	$fieldLabelspeople["Spanish"]["created_by"] = "Creado Por";
	$fieldToolTipspeople["Spanish"]["created_by"] = "";
	$placeHolderspeople["Spanish"]["created_by"] = "";
	$fieldLabelspeople["Spanish"]["created_at"] = "Creado El";
	$fieldToolTipspeople["Spanish"]["created_at"] = "";
	$placeHolderspeople["Spanish"]["created_at"] = "";
	$fieldLabelspeople["Spanish"]["updated_by"] = "Actualizado Por";
	$fieldToolTipspeople["Spanish"]["updated_by"] = "";
	$placeHolderspeople["Spanish"]["updated_by"] = "";
	$fieldLabelspeople["Spanish"]["updated_at"] = "Actualizado Por";
	$fieldToolTipspeople["Spanish"]["updated_at"] = "";
	$placeHolderspeople["Spanish"]["updated_at"] = "";
	$fieldLabelspeople["Spanish"]["fk_type_doc"] = "Tipo Documento";
	$fieldToolTipspeople["Spanish"]["fk_type_doc"] = "";
	$placeHolderspeople["Spanish"]["fk_type_doc"] = "";
	$fieldLabelspeople["Spanish"]["document"] = "Documento";
	$fieldToolTipspeople["Spanish"]["document"] = "";
	$placeHolderspeople["Spanish"]["document"] = "";
	$fieldLabelspeople["Spanish"]["telf"] = "Telf";
	$fieldToolTipspeople["Spanish"]["telf"] = "";
	$placeHolderspeople["Spanish"]["telf"] = "";
	$fieldLabelspeople["Spanish"]["country"] = "Country";
	$fieldToolTipspeople["Spanish"]["country"] = "";
	$placeHolderspeople["Spanish"]["country"] = "";
	if (count($fieldToolTipspeople["Spanish"]))
		$tdatapeople[".isUseToolTips"] = true;
}


	$tdatapeople[".NCSearch"] = true;



$tdatapeople[".shortTableName"] = "people";
$tdatapeople[".nSecOptions"] = 0;

$tdatapeople[".mainTableOwnerID"] = "";
$tdatapeople[".entityType"] = 0;
$tdatapeople[".connId"] = "postgres_at_localhost";


$tdatapeople[".strOriginalTableName"] = "public.people";

	



$tdatapeople[".showAddInPopup"] = false;

$tdatapeople[".showEditInPopup"] = false;

$tdatapeople[".showViewInPopup"] = false;

$tdatapeople[".listAjax"] = false;
//	temporary
//$tdatapeople[".listAjax"] = false;

	$tdatapeople[".audit"] = false;

	$tdatapeople[".locking"] = false;


$pages = $tdatapeople[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapeople[".edit"] = true;
	$tdatapeople[".afterEditAction"] = 1;
	$tdatapeople[".closePopupAfterEdit"] = 1;
	$tdatapeople[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapeople[".add"] = true;
$tdatapeople[".afterAddAction"] = 1;
$tdatapeople[".closePopupAfterAdd"] = 1;
$tdatapeople[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapeople[".list"] = true;
}



$tdatapeople[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapeople[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapeople[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapeople[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapeople[".printFriendly"] = true;
}



$tdatapeople[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapeople[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapeople[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapeople[".isUseAjaxSuggest"] = true;

$tdatapeople[".rowHighlite"] = true;



																								

$tdatapeople[".ajaxCodeSnippetAdded"] = false;

$tdatapeople[".buttonsAdded"] = false;

$tdatapeople[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapeople[".isUseTimeForSearch"] = false;


$tdatapeople[".badgeColor"] = "8FBC8B";


$tdatapeople[".allSearchFields"] = array();
$tdatapeople[".filterFields"] = array();
$tdatapeople[".requiredSearchFields"] = array();

$tdatapeople[".googleLikeFields"] = array();
$tdatapeople[".googleLikeFields"][] = "id";
$tdatapeople[".googleLikeFields"][] = "name";
$tdatapeople[".googleLikeFields"][] = "last_name";
$tdatapeople[".googleLikeFields"][] = "birth_date";
$tdatapeople[".googleLikeFields"][] = "created_by";
$tdatapeople[".googleLikeFields"][] = "created_at";
$tdatapeople[".googleLikeFields"][] = "updated_by";
$tdatapeople[".googleLikeFields"][] = "updated_at";
$tdatapeople[".googleLikeFields"][] = "fk_type_doc";
$tdatapeople[".googleLikeFields"][] = "document";
$tdatapeople[".googleLikeFields"][] = "telf";
$tdatapeople[".googleLikeFields"][] = "country";



$tdatapeople[".tableType"] = "list";

$tdatapeople[".printerPageOrientation"] = 0;
$tdatapeople[".nPrinterPageScale"] = 100;

$tdatapeople[".nPrinterSplitRecords"] = 40;

$tdatapeople[".geocodingEnabled"] = false;










$tdatapeople[".pageSize"] = 20;

$tdatapeople[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapeople[".strOrderBy"] = $tstrOrderBy;

$tdatapeople[".orderindexes"] = array();


$tdatapeople[".sqlHead"] = "SELECT id,  	name,  	last_name,  	birth_date,  	created_by,  	created_at,  	updated_by,  	updated_at,  	fk_type_doc,  	document,  	telf,  	country";
$tdatapeople[".sqlFrom"] = "FROM \"public\".people";
$tdatapeople[".sqlWhereExpr"] = "";
$tdatapeople[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapeople[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapeople[".arrGroupsPerPage"] = $arrGPP;

$tdatapeople[".highlightSearchResults"] = true;

$tableKeyspeople = array();
$tableKeyspeople[] = "id";
$tdatapeople[".Keys"] = $tableKeyspeople;


$tdatapeople[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","id");
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


	$tdatapeople["id"] = $fdata;
		$tdatapeople[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatapeople["name"] = $fdata;
		$tdatapeople[".searchableFields"][] = "name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

		$fdata["sourceSingle"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
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


	$tdatapeople["last_name"] = $fdata;
		$tdatapeople[".searchableFields"][] = "last_name";
//	birth_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birth_date";
	$fdata["GoodName"] = "birth_date";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","birth_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "birth_date";

		$fdata["sourceSingle"] = "birth_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birth_date";

	
	
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


	$tdatapeople["birth_date"] = $fdata;
		$tdatapeople[".searchableFields"][] = "birth_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","created_by");
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


	$tdatapeople["created_by"] = $fdata;
		$tdatapeople[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","created_at");
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


	$tdatapeople["created_at"] = $fdata;
		$tdatapeople[".searchableFields"][] = "created_at";
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","updated_by");
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


	$tdatapeople["updated_by"] = $fdata;
		$tdatapeople[".searchableFields"][] = "updated_by";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","updated_at");
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


	$tdatapeople["updated_at"] = $fdata;
		$tdatapeople[".searchableFields"][] = "updated_at";
//	fk_type_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fk_type_doc";
	$fdata["GoodName"] = "fk_type_doc";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","fk_type_doc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_type_doc";

		$fdata["sourceSingle"] = "fk_type_doc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_type_doc";

	
	
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
	$edata["LookupTable"] = "public.document";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "description";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatapeople["fk_type_doc"] = $fdata;
		$tdatapeople[".searchableFields"][] = "fk_type_doc";
//	document
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "document";
	$fdata["GoodName"] = "document";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","document");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "document";

		$fdata["sourceSingle"] = "document";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document";

	
	
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


	$tdatapeople["document"] = $fdata;
		$tdatapeople[".searchableFields"][] = "document";
//	telf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "telf";
	$fdata["GoodName"] = "telf";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","telf");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telf";

		$fdata["sourceSingle"] = "telf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telf";

	
	
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


	$tdatapeople["telf"] = $fdata;
		$tdatapeople[".searchableFields"][] = "telf";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people","country");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "country";

		$fdata["sourceSingle"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatapeople["country"] = $fdata;
		$tdatapeople[".searchableFields"][] = "country";


$tables_data["public.people"]=&$tdatapeople;
$field_labels["public_people"] = &$fieldLabelspeople;
$fieldToolTips["public_people"] = &$fieldToolTipspeople;
$placeHolders["public_people"] = &$placeHolderspeople;
$page_titles["public_people"] = &$pageTitlespeople;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.people"] = array();
//	public.advisor
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.advisor";
		$detailsParam["dOriginalTable"] = "public.advisor";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "advisor";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_advisor");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.people"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.people"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.people"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.people"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.people"][$dIndex]["detailKeys"][]="fk_id_people";
//	public.user
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.user";
		$detailsParam["dOriginalTable"] = "public.user";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "user";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_user");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.people"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.people"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.people"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.people"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.people"][$dIndex]["detailKeys"][]="fk_id_people";
//	public.customers
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.customers";
		$detailsParam["dOriginalTable"] = "public.customers";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "customers";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_customers");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.people"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.people"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.people"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.people"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.people"][$dIndex]["detailKeys"][]="fk_id_people";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.people"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.document";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.document";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "document";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.people"][0] = $masterParams;
				$masterTablesData["public.people"][0]["masterKeys"] = array();
	$masterTablesData["public.people"][0]["masterKeys"][]="id";
				$masterTablesData["public.people"][0]["detailKeys"] = array();
	$masterTablesData["public.people"][0]["detailKeys"][]="fk_type_doc";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_people()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	last_name,  	birth_date,  	created_by,  	created_at,  	updated_by,  	updated_at,  	fk_type_doc,  	document,  	telf,  	country";
$proto0["m_strFrom"] = "FROM \"public\".people";
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
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.people";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "public.people";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "public.people";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "birth_date",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto12["m_sql"] = "birth_date";
$proto12["m_srcTableName"] = "public.people";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto14["m_sql"] = "created_by";
$proto14["m_srcTableName"] = "public.people";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "public.people";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto18["m_sql"] = "updated_by";
$proto18["m_srcTableName"] = "public.people";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto20["m_sql"] = "updated_at";
$proto20["m_srcTableName"] = "public.people";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_type_doc",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto22["m_sql"] = "fk_type_doc";
$proto22["m_srcTableName"] = "public.people";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "document",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto24["m_sql"] = "document";
$proto24["m_srcTableName"] = "public.people";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "telf",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto26["m_sql"] = "telf";
$proto26["m_srcTableName"] = "public.people";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people"
));

$proto28["m_sql"] = "country";
$proto28["m_srcTableName"] = "public.people";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "public.people";
$proto31["m_srcTableName"] = "public.people";
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
$proto30["m_sql"] = "\"public\".people";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "public.people";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.people";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_people = createSqlQuery_people();


	
		;

												

$tdatapeople[".sqlquery"] = $queryData_people;



$tableEvents["public.people"] = new eventsBase;
$tdatapeople[".hasEvents"] = false;

?>