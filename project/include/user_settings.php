<?php
$tdatauser = array();
$tdatauser[".searchableFields"] = array();
$tdatauser[".ShortName"] = "user";
$tdatauser[".OwnerID"] = "";
$tdatauser[".OriginalTable"] = "public.user";


$tdatauser[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatauser[".originalPagesByType"] = $tdatauser[".pagesByType"];
$tdatauser[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatauser[".originalPages"] = $tdatauser[".pages"];
$tdatauser[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatauser[".originalDefaultPages"] = $tdatauser[".defaultPages"];

//	field labels
$fieldLabelsuser = array();
$fieldToolTipsuser = array();
$pageTitlesuser = array();
$placeHoldersuser = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsuser["Spanish"] = array();
	$fieldToolTipsuser["Spanish"] = array();
	$placeHoldersuser["Spanish"] = array();
	$pageTitlesuser["Spanish"] = array();
	$fieldLabelsuser["Spanish"]["id"] = "Id";
	$fieldToolTipsuser["Spanish"]["id"] = "";
	$placeHoldersuser["Spanish"]["id"] = "";
	$fieldLabelsuser["Spanish"]["active"] = "Active";
	$fieldToolTipsuser["Spanish"]["active"] = "";
	$placeHoldersuser["Spanish"]["active"] = "";
	$fieldLabelsuser["Spanish"]["email"] = "Email";
	$fieldToolTipsuser["Spanish"]["email"] = "";
	$placeHoldersuser["Spanish"]["email"] = "";
	$fieldLabelsuser["Spanish"]["fk_id_rol"] = "Rol";
	$fieldToolTipsuser["Spanish"]["fk_id_rol"] = "";
	$placeHoldersuser["Spanish"]["fk_id_rol"] = "";
	$fieldLabelsuser["Spanish"]["password"] = "Password";
	$fieldToolTipsuser["Spanish"]["password"] = "";
	$placeHoldersuser["Spanish"]["password"] = "";
	$fieldLabelsuser["Spanish"]["username"] = "Username";
	$fieldToolTipsuser["Spanish"]["username"] = "";
	$placeHoldersuser["Spanish"]["username"] = "";
	$fieldLabelsuser["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsuser["Spanish"]["reset_token"] = "";
	$placeHoldersuser["Spanish"]["reset_token"] = "";
	$fieldLabelsuser["Spanish"]["created"] = "Created";
	$fieldToolTipsuser["Spanish"]["created"] = "";
	$placeHoldersuser["Spanish"]["created"] = "";
	$fieldLabelsuser["Spanish"]["updated"] = "Updated";
	$fieldToolTipsuser["Spanish"]["updated"] = "";
	$placeHoldersuser["Spanish"]["updated"] = "";
	$fieldLabelsuser["Spanish"]["fk_id_people"] = "Persona";
	$fieldToolTipsuser["Spanish"]["fk_id_people"] = "";
	$placeHoldersuser["Spanish"]["fk_id_people"] = "";
	$fieldLabelsuser["Spanish"]["userpic"] = "Userpic";
	$fieldToolTipsuser["Spanish"]["userpic"] = "";
	$placeHoldersuser["Spanish"]["userpic"] = "";
	$fieldLabelsuser["Spanish"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsuser["Spanish"]["ext_security_id"] = "";
	$placeHoldersuser["Spanish"]["ext_security_id"] = "";
	if (count($fieldToolTipsuser["Spanish"]))
		$tdatauser[".isUseToolTips"] = true;
}


	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 0;

$tdatauser[".mainTableOwnerID"] = "";
$tdatauser[".entityType"] = 0;
$tdatauser[".connId"] = "postgres_at_localhost";


$tdatauser[".strOriginalTableName"] = "public.user";

	



$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

$tdatauser[".listAjax"] = false;
//	temporary
//$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = false;


$pages = $tdatauser[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatauser[".edit"] = true;
	$tdatauser[".afterEditAction"] = 1;
	$tdatauser[".closePopupAfterEdit"] = 1;
	$tdatauser[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatauser[".add"] = true;
$tdatauser[".afterAddAction"] = 1;
$tdatauser[".closePopupAfterAdd"] = 1;
$tdatauser[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatauser[".list"] = true;
}



$tdatauser[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatauser[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatauser[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatauser[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatauser[".printFriendly"] = true;
}



$tdatauser[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatauser[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatauser[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;



																																				

$tdatauser[".ajaxCodeSnippetAdded"] = false;

$tdatauser[".buttonsAdded"] = false;

$tdatauser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;


$tdatauser[".badgeColor"] = "B22222";


$tdatauser[".allSearchFields"] = array();
$tdatauser[".filterFields"] = array();
$tdatauser[".requiredSearchFields"] = array();

$tdatauser[".googleLikeFields"] = array();
$tdatauser[".googleLikeFields"][] = "id";
$tdatauser[".googleLikeFields"][] = "active";
$tdatauser[".googleLikeFields"][] = "email";
$tdatauser[".googleLikeFields"][] = "fk_id_rol";
$tdatauser[".googleLikeFields"][] = "password";
$tdatauser[".googleLikeFields"][] = "username";
$tdatauser[".googleLikeFields"][] = "reset_token";
$tdatauser[".googleLikeFields"][] = "created";
$tdatauser[".googleLikeFields"][] = "updated";
$tdatauser[".googleLikeFields"][] = "fk_id_people";
$tdatauser[".googleLikeFields"][] = "ext_security_id";



$tdatauser[".tableType"] = "list";

$tdatauser[".printerPageOrientation"] = 0;
$tdatauser[".nPrinterPageScale"] = 100;

$tdatauser[".nPrinterSplitRecords"] = 40;

$tdatauser[".geocodingEnabled"] = false;










$tdatauser[".pageSize"] = 20;

$tdatauser[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();


$tdatauser[".sqlHead"] = "SELECT id,  	active,  	email,  	fk_id_rol,  	password,  	username,  	reset_token,  	created,  	updated,  	fk_id_people,  	userpic,  	ext_security_id";
$tdatauser[".sqlFrom"] = "FROM \"public\".\"user\"";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;

$tdatauser[".highlightSearchResults"] = true;

$tableKeysuser = array();
$tableKeysuser[] = "id";
$tdatauser[".Keys"] = $tableKeysuser;


$tdatauser[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","id");
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


	$tdatauser["id"] = $fdata;
		$tdatauser[".searchableFields"][] = "id";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","active");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatauser["active"] = $fdata;
		$tdatauser[".searchableFields"][] = "active";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
	
	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
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


	$tdatauser["email"] = $fdata;
		$tdatauser[".searchableFields"][] = "email";
//	fk_id_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_id_rol";
	$fdata["GoodName"] = "fk_id_rol";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","fk_id_rol");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_rol";

		$fdata["sourceSingle"] = "fk_id_rol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_rol";

	
	
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
	$edata["LookupTable"] = "public.role";
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


	$tdatauser["fk_id_rol"] = $fdata;
		$tdatauser[".searchableFields"][] = "fk_id_rol";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatauser["password"] = $fdata;
		$tdatauser[".searchableFields"][] = "password";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatauser["username"] = $fdata;
		$tdatauser[".searchableFields"][] = "username";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","reset_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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


	$tdatauser["reset_token"] = $fdata;
		$tdatauser[".searchableFields"][] = "reset_token";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

		$fdata["sourceSingle"] = "created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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


	$tdatauser["created"] = $fdata;
		$tdatauser[".searchableFields"][] = "created";
//	updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated";
	$fdata["GoodName"] = "updated";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","updated");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated";

		$fdata["sourceSingle"] = "updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated";

	
	
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


	$tdatauser["updated"] = $fdata;
		$tdatauser[".searchableFields"][] = "updated";
//	fk_id_people
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fk_id_people";
	$fdata["GoodName"] = "fk_id_people";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","fk_id_people");
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


	$tdatauser["fk_id_people"] = $fdata;
		$tdatauser[".searchableFields"][] = "fk_id_people";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatauser["userpic"] = $fdata;
	//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "public.user";
	$fdata["Label"] = GetFieldLabel("public_user","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdatauser["ext_security_id"] = $fdata;
		$tdatauser[".searchableFields"][] = "ext_security_id";


$tables_data["public.user"]=&$tdatauser;
$field_labels["public_user"] = &$fieldLabelsuser;
$fieldToolTips["public_user"] = &$fieldToolTipsuser;
$placeHolders["public_user"] = &$placeHoldersuser;
$page_titles["public_user"] = &$pageTitlesuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.user"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.user"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.people";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.people";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "people";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.user"][0] = $masterParams;
				$masterTablesData["public.user"][0]["masterKeys"] = array();
	$masterTablesData["public.user"][0]["masterKeys"][]="id";
				$masterTablesData["public.user"][0]["detailKeys"] = array();
	$masterTablesData["public.user"][0]["detailKeys"][]="fk_id_people";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.role";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.role";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "role";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.user"][1] = $masterParams;
				$masterTablesData["public.user"][1]["masterKeys"] = array();
	$masterTablesData["public.user"][1]["masterKeys"][]="id";
				$masterTablesData["public.user"][1]["detailKeys"] = array();
	$masterTablesData["public.user"][1]["detailKeys"][]="fk_id_rol";
		
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
					$masterTablesData["public.user"][2] = $masterParams;
				$masterTablesData["public.user"][2]["masterKeys"] = array();
	$masterTablesData["public.user"][2]["masterKeys"][]="id";
				$masterTablesData["public.user"][2]["detailKeys"] = array();
	$masterTablesData["public.user"][2]["detailKeys"][]="fk_id_people";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	active,  	email,  	fk_id_rol,  	password,  	username,  	reset_token,  	created,  	updated,  	fk_id_people,  	userpic,  	ext_security_id";
$proto0["m_strFrom"] = "FROM \"public\".\"user\"";
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
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto8["m_sql"] = "active";
$proto8["m_srcTableName"] = "public.user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "public.user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_rol",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto12["m_sql"] = "fk_id_rol";
$proto12["m_srcTableName"] = "public.user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto14["m_sql"] = "password";
$proto14["m_srcTableName"] = "public.user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto16["m_sql"] = "username";
$proto16["m_srcTableName"] = "public.user";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto18["m_sql"] = "reset_token";
$proto18["m_srcTableName"] = "public.user";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto20["m_sql"] = "created";
$proto20["m_srcTableName"] = "public.user";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto22["m_sql"] = "updated";
$proto22["m_srcTableName"] = "public.user";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto24["m_sql"] = "fk_id_people";
$proto24["m_srcTableName"] = "public.user";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto26["m_sql"] = "userpic";
$proto26["m_srcTableName"] = "public.user";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "public.user",
	"m_srcTableName" => "public.user"
));

$proto28["m_sql"] = "ext_security_id";
$proto28["m_srcTableName"] = "public.user";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "public.user";
$proto31["m_srcTableName"] = "public.user";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "active";
$proto31["m_columns"][] = "email";
$proto31["m_columns"][] = "fk_id_rol";
$proto31["m_columns"][] = "password";
$proto31["m_columns"][] = "username";
$proto31["m_columns"][] = "reset_token";
$proto31["m_columns"][] = "created";
$proto31["m_columns"][] = "updated";
$proto31["m_columns"][] = "fk_id_people";
$proto31["m_columns"][] = "userpic";
$proto31["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "\"public\".\"user\"";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "public.user";
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
$proto0["m_srcTableName"]="public.user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user = createSqlQuery_user();


	
		;

												

$tdatauser[".sqlquery"] = $queryData_user;



$tableEvents["public.user"] = new eventsBase;
$tdatauser[".hasEvents"] = false;

?>