<?php
$tdatapay_deta = array();
$tdatapay_deta[".searchableFields"] = array();
$tdatapay_deta[".ShortName"] = "pay_deta";
$tdatapay_deta[".OwnerID"] = "";
$tdatapay_deta[".OriginalTable"] = "public.user";


$tdatapay_deta[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapay_deta[".originalPagesByType"] = $tdatapay_deta[".pagesByType"];
$tdatapay_deta[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapay_deta[".originalPages"] = $tdatapay_deta[".pages"];
$tdatapay_deta[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapay_deta[".originalDefaultPages"] = $tdatapay_deta[".defaultPages"];

//	field labels
$fieldLabelspay_deta = array();
$fieldToolTipspay_deta = array();
$pageTitlespay_deta = array();
$placeHolderspay_deta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspay_deta["Spanish"] = array();
	$fieldToolTipspay_deta["Spanish"] = array();
	$placeHolderspay_deta["Spanish"] = array();
	$pageTitlespay_deta["Spanish"] = array();
	$fieldLabelspay_deta["Spanish"]["cuenta"] = "Cuenta";
	$fieldToolTipspay_deta["Spanish"]["cuenta"] = "";
	$placeHolderspay_deta["Spanish"]["cuenta"] = "";
	$fieldLabelspay_deta["Spanish"]["banco"] = "Banco";
	$fieldToolTipspay_deta["Spanish"]["banco"] = "";
	$placeHolderspay_deta["Spanish"]["banco"] = "";
	$fieldLabelspay_deta["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipspay_deta["Spanish"]["cedula"] = "";
	$placeHolderspay_deta["Spanish"]["cedula"] = "";
	$fieldLabelspay_deta["Spanish"]["titular"] = "Titular";
	$fieldToolTipspay_deta["Spanish"]["titular"] = "";
	$placeHolderspay_deta["Spanish"]["titular"] = "";
	$fieldLabelspay_deta["Spanish"]["qr"] = "Qr";
	$fieldToolTipspay_deta["Spanish"]["qr"] = "";
	$placeHolderspay_deta["Spanish"]["qr"] = "";
	if (count($fieldToolTipspay_deta["Spanish"]))
		$tdatapay_deta[".isUseToolTips"] = true;
}


	$tdatapay_deta[".NCSearch"] = true;



$tdatapay_deta[".shortTableName"] = "pay_deta";
$tdatapay_deta[".nSecOptions"] = 0;

$tdatapay_deta[".mainTableOwnerID"] = "";
$tdatapay_deta[".entityType"] = 1;
$tdatapay_deta[".connId"] = "postgres_at_localhost";


$tdatapay_deta[".strOriginalTableName"] = "public.user";

	



$tdatapay_deta[".showAddInPopup"] = false;

$tdatapay_deta[".showEditInPopup"] = false;

$tdatapay_deta[".showViewInPopup"] = false;

$tdatapay_deta[".listAjax"] = false;
//	temporary
//$tdatapay_deta[".listAjax"] = false;

	$tdatapay_deta[".audit"] = false;

	$tdatapay_deta[".locking"] = false;


$pages = $tdatapay_deta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapay_deta[".edit"] = true;
	$tdatapay_deta[".afterEditAction"] = 1;
	$tdatapay_deta[".closePopupAfterEdit"] = 1;
	$tdatapay_deta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapay_deta[".add"] = true;
$tdatapay_deta[".afterAddAction"] = 1;
$tdatapay_deta[".closePopupAfterAdd"] = 1;
$tdatapay_deta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapay_deta[".list"] = true;
}



$tdatapay_deta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapay_deta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapay_deta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapay_deta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapay_deta[".printFriendly"] = true;
}



$tdatapay_deta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapay_deta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapay_deta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapay_deta[".isUseAjaxSuggest"] = true;

$tdatapay_deta[".rowHighlite"] = true;



									

$tdatapay_deta[".ajaxCodeSnippetAdded"] = false;

$tdatapay_deta[".buttonsAdded"] = false;

$tdatapay_deta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapay_deta[".isUseTimeForSearch"] = false;


$tdatapay_deta[".badgeColor"] = "CD853F";


$tdatapay_deta[".allSearchFields"] = array();
$tdatapay_deta[".filterFields"] = array();
$tdatapay_deta[".requiredSearchFields"] = array();

$tdatapay_deta[".googleLikeFields"] = array();
$tdatapay_deta[".googleLikeFields"][] = "cuenta";
$tdatapay_deta[".googleLikeFields"][] = "banco";
$tdatapay_deta[".googleLikeFields"][] = "cedula";
$tdatapay_deta[".googleLikeFields"][] = "titular";
$tdatapay_deta[".googleLikeFields"][] = "qr";



$tdatapay_deta[".tableType"] = "list";

$tdatapay_deta[".printerPageOrientation"] = 0;
$tdatapay_deta[".nPrinterPageScale"] = 100;

$tdatapay_deta[".nPrinterSplitRecords"] = 40;

$tdatapay_deta[".geocodingEnabled"] = false;










$tdatapay_deta[".pageSize"] = 1;

$tdatapay_deta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapay_deta[".strOrderBy"] = $tstrOrderBy;

$tdatapay_deta[".orderindexes"] = array();


$tdatapay_deta[".sqlHead"] = "SELECT '' as cuenta,  	'' as banco,  	'' as cedula,  	'' as titular,  	'' as qr";
$tdatapay_deta[".sqlFrom"] = "FROM \"public\".\"user\"";
$tdatapay_deta[".sqlWhereExpr"] = "";
$tdatapay_deta[".sqlTail"] = "limit 1";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapay_deta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapay_deta[".arrGroupsPerPage"] = $arrGPP;

$tdatapay_deta[".highlightSearchResults"] = true;

$tableKeyspay_deta = array();
$tdatapay_deta[".Keys"] = $tableKeyspay_deta;


$tdatapay_deta[".hideMobileList"] = array();




//	cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cuenta";
	$fdata["GoodName"] = "cuenta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_pay_deta","cuenta");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "cuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatapay_deta["cuenta"] = $fdata;
		$tdatapay_deta[".searchableFields"][] = "cuenta";
//	banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "banco";
	$fdata["GoodName"] = "banco";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_pay_deta","banco");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "banco";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatapay_deta["banco"] = $fdata;
		$tdatapay_deta[".searchableFields"][] = "banco";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_pay_deta","cedula");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "cedula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatapay_deta["cedula"] = $fdata;
		$tdatapay_deta[".searchableFields"][] = "cedula";
//	titular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "titular";
	$fdata["GoodName"] = "titular";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_pay_deta","titular");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "titular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatapay_deta["titular"] = $fdata;
		$tdatapay_deta[".searchableFields"][] = "titular";
//	qr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "qr";
	$fdata["GoodName"] = "qr";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_pay_deta","qr");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "qr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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


	$tdatapay_deta["qr"] = $fdata;
		$tdatapay_deta[".searchableFields"][] = "qr";


$tables_data["public.pay_deta"]=&$tdatapay_deta;
$field_labels["public_pay_deta"] = &$fieldLabelspay_deta;
$fieldToolTips["public_pay_deta"] = &$fieldToolTipspay_deta;
$placeHolders["public_pay_deta"] = &$placeHolderspay_deta;
$page_titles["public_pay_deta"] = &$pageTitlespay_deta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.pay_deta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.pay_deta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pay_deta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'' as cuenta,  	'' as banco,  	'' as cedula,  	'' as titular,  	'' as qr";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto6["m_sql"] = "''";
$proto6["m_srcTableName"] = "public.pay_deta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "cuenta";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto8["m_sql"] = "''";
$proto8["m_srcTableName"] = "public.pay_deta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "banco";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto10["m_sql"] = "''";
$proto10["m_srcTableName"] = "public.pay_deta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "cedula";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto12["m_sql"] = "''";
$proto12["m_srcTableName"] = "public.pay_deta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "titular";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto14["m_sql"] = "''";
$proto14["m_srcTableName"] = "public.pay_deta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "qr";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.user";
$proto17["m_srcTableName"] = "public.pay_deta";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "active";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "fk_id_rol";
$proto17["m_columns"][] = "password";
$proto17["m_columns"][] = "username";
$proto17["m_columns"][] = "reset_token";
$proto17["m_columns"][] = "created";
$proto17["m_columns"][] = "updated";
$proto17["m_columns"][] = "fk_id_people";
$proto17["m_columns"][] = "userpic";
$proto17["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".\"user\"";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.pay_deta";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.pay_deta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pay_deta = createSqlQuery_pay_deta();


	
		;

					

$tdatapay_deta[".sqlquery"] = $queryData_pay_deta;



$tableEvents["public.pay_deta"] = new eventsBase;
$tdatapay_deta[".hasEvents"] = false;

?>