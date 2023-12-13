<?php
$tdatapeople_user = array();
$tdatapeople_user[".searchableFields"] = array();
$tdatapeople_user[".ShortName"] = "people_user";
$tdatapeople_user[".OwnerID"] = "";
$tdatapeople_user[".OriginalTable"] = "public.people";


$tdatapeople_user[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapeople_user[".originalPagesByType"] = $tdatapeople_user[".pagesByType"];
$tdatapeople_user[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapeople_user[".originalPages"] = $tdatapeople_user[".pages"];
$tdatapeople_user[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapeople_user[".originalDefaultPages"] = $tdatapeople_user[".defaultPages"];

//	field labels
$fieldLabelspeople_user = array();
$fieldToolTipspeople_user = array();
$pageTitlespeople_user = array();
$placeHolderspeople_user = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspeople_user["Spanish"] = array();
	$fieldToolTipspeople_user["Spanish"] = array();
	$placeHolderspeople_user["Spanish"] = array();
	$pageTitlespeople_user["Spanish"] = array();
	$fieldLabelspeople_user["Spanish"]["id"] = "Id";
	$fieldToolTipspeople_user["Spanish"]["id"] = "";
	$placeHolderspeople_user["Spanish"]["id"] = "";
	$fieldLabelspeople_user["Spanish"]["name"] = "Nombre";
	$fieldToolTipspeople_user["Spanish"]["name"] = "";
	$placeHolderspeople_user["Spanish"]["name"] = "";
	$fieldLabelspeople_user["Spanish"]["last_name"] = "Apellido";
	$fieldToolTipspeople_user["Spanish"]["last_name"] = "";
	$placeHolderspeople_user["Spanish"]["last_name"] = "";
	$fieldLabelspeople_user["Spanish"]["birth_date"] = "Fecha Nacimiento";
	$fieldToolTipspeople_user["Spanish"]["birth_date"] = "";
	$placeHolderspeople_user["Spanish"]["birth_date"] = "";
	$fieldLabelspeople_user["Spanish"]["created_by"] = "Creado por";
	$fieldToolTipspeople_user["Spanish"]["created_by"] = "";
	$placeHolderspeople_user["Spanish"]["created_by"] = "";
	$fieldLabelspeople_user["Spanish"]["created_at"] = "Creado el";
	$fieldToolTipspeople_user["Spanish"]["created_at"] = "";
	$placeHolderspeople_user["Spanish"]["created_at"] = "";
	$fieldLabelspeople_user["Spanish"]["updated_by"] = "Actualizado por";
	$fieldToolTipspeople_user["Spanish"]["updated_by"] = "";
	$placeHolderspeople_user["Spanish"]["updated_by"] = "";
	$fieldLabelspeople_user["Spanish"]["updated_at"] = "Actualizado el";
	$fieldToolTipspeople_user["Spanish"]["updated_at"] = "";
	$placeHolderspeople_user["Spanish"]["updated_at"] = "";
	$fieldLabelspeople_user["Spanish"]["fk_type_doc"] = "Tipo Documento";
	$fieldToolTipspeople_user["Spanish"]["fk_type_doc"] = "";
	$placeHolderspeople_user["Spanish"]["fk_type_doc"] = "";
	$fieldLabelspeople_user["Spanish"]["document"] = "Documento";
	$fieldToolTipspeople_user["Spanish"]["document"] = "";
	$placeHolderspeople_user["Spanish"]["document"] = "";
	$fieldLabelspeople_user["Spanish"]["telf"] = "Telefono";
	$fieldToolTipspeople_user["Spanish"]["telf"] = "";
	$placeHolderspeople_user["Spanish"]["telf"] = "";
	$fieldLabelspeople_user["Spanish"]["country"] = "Nacionalidad";
	$fieldToolTipspeople_user["Spanish"]["country"] = "";
	$placeHolderspeople_user["Spanish"]["country"] = "";
	if (count($fieldToolTipspeople_user["Spanish"]))
		$tdatapeople_user[".isUseToolTips"] = true;
}


	$tdatapeople_user[".NCSearch"] = true;



$tdatapeople_user[".shortTableName"] = "people_user";
$tdatapeople_user[".nSecOptions"] = 0;

$tdatapeople_user[".mainTableOwnerID"] = "";
$tdatapeople_user[".entityType"] = 1;
$tdatapeople_user[".connId"] = "postgres_at_localhost";


$tdatapeople_user[".strOriginalTableName"] = "public.people";

	



$tdatapeople_user[".showAddInPopup"] = false;

$tdatapeople_user[".showEditInPopup"] = false;

$tdatapeople_user[".showViewInPopup"] = false;

$tdatapeople_user[".listAjax"] = false;
//	temporary
//$tdatapeople_user[".listAjax"] = false;

	$tdatapeople_user[".audit"] = false;

	$tdatapeople_user[".locking"] = false;


$pages = $tdatapeople_user[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapeople_user[".edit"] = true;
	$tdatapeople_user[".afterEditAction"] = 1;
	$tdatapeople_user[".closePopupAfterEdit"] = 1;
	$tdatapeople_user[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapeople_user[".add"] = true;
$tdatapeople_user[".afterAddAction"] = 1;
$tdatapeople_user[".closePopupAfterAdd"] = 1;
$tdatapeople_user[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapeople_user[".list"] = true;
}



$tdatapeople_user[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapeople_user[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapeople_user[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapeople_user[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapeople_user[".printFriendly"] = true;
}



$tdatapeople_user[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapeople_user[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapeople_user[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapeople_user[".isUseAjaxSuggest"] = true;

$tdatapeople_user[".rowHighlite"] = true;



																		

$tdatapeople_user[".ajaxCodeSnippetAdded"] = false;

$tdatapeople_user[".buttonsAdded"] = false;

$tdatapeople_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapeople_user[".isUseTimeForSearch"] = false;


$tdatapeople_user[".badgeColor"] = "7B68EE";


$tdatapeople_user[".allSearchFields"] = array();
$tdatapeople_user[".filterFields"] = array();
$tdatapeople_user[".requiredSearchFields"] = array();

$tdatapeople_user[".googleLikeFields"] = array();
$tdatapeople_user[".googleLikeFields"][] = "id";
$tdatapeople_user[".googleLikeFields"][] = "name";
$tdatapeople_user[".googleLikeFields"][] = "last_name";
$tdatapeople_user[".googleLikeFields"][] = "birth_date";
$tdatapeople_user[".googleLikeFields"][] = "created_by";
$tdatapeople_user[".googleLikeFields"][] = "created_at";
$tdatapeople_user[".googleLikeFields"][] = "updated_by";
$tdatapeople_user[".googleLikeFields"][] = "updated_at";
$tdatapeople_user[".googleLikeFields"][] = "fk_type_doc";
$tdatapeople_user[".googleLikeFields"][] = "document";
$tdatapeople_user[".googleLikeFields"][] = "telf";
$tdatapeople_user[".googleLikeFields"][] = "country";



$tdatapeople_user[".tableType"] = "list";

$tdatapeople_user[".printerPageOrientation"] = 0;
$tdatapeople_user[".nPrinterPageScale"] = 100;

$tdatapeople_user[".nPrinterSplitRecords"] = 40;

$tdatapeople_user[".geocodingEnabled"] = false;










$tdatapeople_user[".pageSize"] = 20;

$tdatapeople_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapeople_user[".strOrderBy"] = $tstrOrderBy;

$tdatapeople_user[".orderindexes"] = array();


$tdatapeople_user[".sqlHead"] = "SELECT id,  	name,  	last_name,  	birth_date,  	created_by,  	created_at,  	updated_by,  	updated_at,  	fk_type_doc,  	document,  	telf,  	country";
$tdatapeople_user[".sqlFrom"] = "FROM \"public\".people";
$tdatapeople_user[".sqlWhereExpr"] = "";
$tdatapeople_user[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapeople_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapeople_user[".arrGroupsPerPage"] = $arrGPP;

$tdatapeople_user[".highlightSearchResults"] = true;

$tableKeyspeople_user = array();
$tableKeyspeople_user[] = "id";
$tdatapeople_user[".Keys"] = $tableKeyspeople_user;


$tdatapeople_user[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","id");
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


	$tdatapeople_user["id"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","name");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatapeople_user["name"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","last_name");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatapeople_user["last_name"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "last_name";
//	birth_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birth_date";
	$fdata["GoodName"] = "birth_date";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","birth_date");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatapeople_user["birth_date"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "birth_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","created_by");
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


	$tdatapeople_user["created_by"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "created_by";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","created_at");
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


	$tdatapeople_user["created_at"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "created_at";
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","updated_by");
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


	$tdatapeople_user["updated_by"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "updated_by";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","updated_at");
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


	$tdatapeople_user["updated_at"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "updated_at";
//	fk_type_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fk_type_doc";
	$fdata["GoodName"] = "fk_type_doc";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","fk_type_doc");
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


	$tdatapeople_user["fk_type_doc"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "fk_type_doc";
//	document
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "document";
	$fdata["GoodName"] = "document";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","document");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
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


	$tdatapeople_user["document"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "document";
//	telf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "telf";
	$fdata["GoodName"] = "telf";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","telf");
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


	$tdatapeople_user["telf"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "telf";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_people_user","country");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.country";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "description";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatapeople_user["country"] = $fdata;
		$tdatapeople_user[".searchableFields"][] = "country";


$tables_data["public.people_user"]=&$tdatapeople_user;
$field_labels["public_people_user"] = &$fieldLabelspeople_user;
$fieldToolTips["public_people_user"] = &$fieldToolTipspeople_user;
$placeHolders["public_people_user"] = &$placeHolderspeople_user;
$page_titles["public_people_user"] = &$pageTitlespeople_user;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.people_user"] = array();
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


		
	$detailsTablesData["public.people_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.people_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.people_user"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.people_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.people_user"][$dIndex]["detailKeys"][]="fk_id_people";
//	public.customers
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.customers";
		$detailsParam["dOriginalTable"] = "public.customers";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "customers";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_customers");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.people_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.people_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.people_user"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.people_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.people_user"][$dIndex]["detailKeys"][]="fk_id_people";
//	public.user
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.user";
		$detailsParam["dOriginalTable"] = "public.user";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "user";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_user");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.people_user"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.people_user"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.people_user"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.people_user"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.people_user"][$dIndex]["detailKeys"][]="fk_id_people";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.people_user"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.document";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.document";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "document";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.people_user"][0] = $masterParams;
				$masterTablesData["public.people_user"][0]["masterKeys"] = array();
	$masterTablesData["public.people_user"][0]["masterKeys"][]="id";
				$masterTablesData["public.people_user"][0]["detailKeys"] = array();
	$masterTablesData["public.people_user"][0]["detailKeys"][]="fk_type_doc";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_people_user()
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
	"m_srcTableName" => "public.people_user"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.people_user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "public.people_user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "public.people_user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "birth_date",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto12["m_sql"] = "birth_date";
$proto12["m_srcTableName"] = "public.people_user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto14["m_sql"] = "created_by";
$proto14["m_srcTableName"] = "public.people_user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "public.people_user";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto18["m_sql"] = "updated_by";
$proto18["m_srcTableName"] = "public.people_user";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto20["m_sql"] = "updated_at";
$proto20["m_srcTableName"] = "public.people_user";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_type_doc",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto22["m_sql"] = "fk_type_doc";
$proto22["m_srcTableName"] = "public.people_user";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "document",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto24["m_sql"] = "document";
$proto24["m_srcTableName"] = "public.people_user";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "telf",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto26["m_sql"] = "telf";
$proto26["m_srcTableName"] = "public.people_user";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.people_user"
));

$proto28["m_sql"] = "country";
$proto28["m_srcTableName"] = "public.people_user";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "public.people";
$proto31["m_srcTableName"] = "public.people_user";
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
$proto30["m_srcTableName"] = "public.people_user";
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
$proto0["m_srcTableName"]="public.people_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_people_user = createSqlQuery_people_user();


	
		;

												

$tdatapeople_user[".sqlquery"] = $queryData_people_user;



include_once(getabspath("include/people_user_events.php"));
$tableEvents["public.people_user"] = new eventclass_people_user;
$tdatapeople_user[".hasEvents"] = true;

?>