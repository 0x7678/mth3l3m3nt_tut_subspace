<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatutorial_categories = array();
	$tdatatutorial_categories[".NumberOfChars"] = 150; 
	$tdatatutorial_categories[".ShortName"] = "tutorial_categories";
	$tdatatutorial_categories[".OwnerID"] = "";
	$tdatatutorial_categories[".OriginalTable"] = "tutorial_categories";

//	field labels
$fieldLabelstutorial_categories = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstutorial_categories["English"] = array();
	$fieldToolTipstutorial_categories["English"] = array();
	$fieldLabelstutorial_categories["English"]["cat_id"] = "ID";
	$fieldToolTipstutorial_categories["English"]["cat_id"] = "";
	$fieldLabelstutorial_categories["English"]["cat_name"] = "Category";
	$fieldToolTipstutorial_categories["English"]["cat_name"] = "category name";
	$fieldLabelstutorial_categories["English"]["cat_description"] = "Description";
	$fieldToolTipstutorial_categories["English"]["cat_description"] = "a description of what this category will hold";
	$fieldLabelstutorial_categories["English"][""] = "";
	$fieldToolTipstutorial_categories["English"][""] = "";
	$fieldLabelstutorial_categories["English"][""] = "";
	$fieldToolTipstutorial_categories["English"][""] = "";
	if (count($fieldToolTipstutorial_categories["English"]))
		$tdatatutorial_categories[".isUseToolTips"] = true;
}
	
	
	$tdatatutorial_categories[".NCSearch"] = true;


$tdatatutorial_categories[".scrollGridBody"] = true;	

$tdatatutorial_categories[".shortTableName"] = "tutorial_categories";
$tdatatutorial_categories[".nSecOptions"] = 0;
$tdatatutorial_categories[".recsPerRowList"] = 1;
$tdatatutorial_categories[".mainTableOwnerID"] = "";
$tdatatutorial_categories[".moveNext"] = 1;
$tdatatutorial_categories[".nType"] = 0;

$tdatatutorial_categories[".strOriginalTableName"] = "tutorial_categories";




$tdatatutorial_categories[".showAddInPopup"] = true;

$tdatatutorial_categories[".showEditInPopup"] = true;

$tdatatutorial_categories[".showViewInPopup"] = true;

$tdatatutorial_categories[".fieldsForRegister"] = array();

$tdatatutorial_categories[".listAjax"] = false;

	$tdatatutorial_categories[".audit"] = false;

	$tdatatutorial_categories[".locking"] = false;

$tdatatutorial_categories[".listIcons"] = true;
$tdatatutorial_categories[".edit"] = true;
$tdatatutorial_categories[".view"] = true;



$tdatatutorial_categories[".delete"] = true;

$tdatatutorial_categories[".showSimpleSearchOptions"] = false;

$tdatatutorial_categories[".showSearchPanel"] = true;

if (isMobile())
	$tdatatutorial_categories[".isUseAjaxSuggest"] = false;
else 
	$tdatatutorial_categories[".isUseAjaxSuggest"] = true;

$tdatatutorial_categories[".rowHighlite"] = true;

// button handlers file names

$tdatatutorial_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatutorial_categories[".isUseTimeForSearch"] = false;



$tdatatutorial_categories[".useDetailsPreview"] = true;

$tdatatutorial_categories[".allSearchFields"] = array();

$tdatatutorial_categories[".allSearchFields"][] = "cat_name";
$tdatatutorial_categories[".allSearchFields"][] = "cat_description";

$tdatatutorial_categories[".googleLikeFields"][] = "cat_id";
$tdatatutorial_categories[".googleLikeFields"][] = "cat_name";
$tdatatutorial_categories[".googleLikeFields"][] = "cat_description";


$tdatatutorial_categories[".advSearchFields"][] = "cat_name";
$tdatatutorial_categories[".advSearchFields"][] = "cat_description";

$tdatatutorial_categories[".isTableType"] = "list";

	

$tdatatutorial_categories[".isDisplayLoading"] = true;

$tdatatutorial_categories[".isResizeColumns"] = true;

// Access doesn't support subqueries from the same table as main
		


$tdatatutorial_categories[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatutorial_categories[".strOrderBy"] = $tstrOrderBy;

$tdatatutorial_categories[".orderindexes"] = array();

$tdatatutorial_categories[".sqlHead"] = "SELECT cat_id,   cat_name,   cat_description";
$tdatatutorial_categories[".sqlFrom"] = "FROM tutorial_categories";
$tdatatutorial_categories[".sqlWhereExpr"] = "";
$tdatatutorial_categories[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatutorial_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatutorial_categories[".arrGroupsPerPage"] = $arrGPP;

$tableKeystutorial_categories = array();
$tableKeystutorial_categories[] = "cat_id";
$tdatatutorial_categories[".Keys"] = $tableKeystutorial_categories;

$tdatatutorial_categories[".listFields"] = array();
$tdatatutorial_categories[".listFields"][] = "cat_name";
$tdatatutorial_categories[".listFields"][] = "cat_description";

$tdatatutorial_categories[".viewFields"] = array();
$tdatatutorial_categories[".viewFields"][] = "cat_name";
$tdatatutorial_categories[".viewFields"][] = "cat_description";

$tdatatutorial_categories[".addFields"] = array();
$tdatatutorial_categories[".addFields"][] = "cat_name";
$tdatatutorial_categories[".addFields"][] = "cat_description";

$tdatatutorial_categories[".inlineAddFields"] = array();

$tdatatutorial_categories[".editFields"] = array();
$tdatatutorial_categories[".editFields"][] = "cat_name";
$tdatatutorial_categories[".editFields"][] = "cat_description";

$tdatatutorial_categories[".inlineEditFields"] = array();

$tdatatutorial_categories[".exportFields"] = array();

$tdatatutorial_categories[".printFields"] = array();
$tdatatutorial_categories[".printFields"][] = "cat_name";
$tdatatutorial_categories[".printFields"][] = "cat_description";

//	cat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_id";
	$fdata["GoodName"] = "cat_id";
	$fdata["ownerTable"] = "tutorial_categories";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "cat_id"; 
		$fdata["FullName"] = "cat_id";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatutorial_categories["cat_id"] = $fdata;
//	cat_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_name";
	$fdata["GoodName"] = "cat_name";
	$fdata["ownerTable"] = "tutorial_categories";
	$fdata["Label"] = "Category"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "cat_name"; 
		$fdata["FullName"] = "cat_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatutorial_categories["cat_name"] = $fdata;
//	cat_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_description";
	$fdata["GoodName"] = "cat_description";
	$fdata["ownerTable"] = "tutorial_categories";
	$fdata["Label"] = "Description"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "cat_description"; 
		$fdata["FullName"] = "cat_description";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatutorial_categories["cat_description"] = $fdata;

	
$tables_data["tutorial_categories"]=&$tdatatutorial_categories;
$field_labels["tutorial_categories"] = &$fieldLabelstutorial_categories;
$fieldToolTips["tutorial_categories"] = &$fieldToolTipstutorial_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tutorial_categories"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="tutorial";
	$detailsParam["dDataSourceTable"]="tutorial";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="tutorial";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["tutorial_categories"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["tutorial_categories"][$dIndex]["masterKeys"][]="cat_id";
		$detailsTablesData["tutorial_categories"][$dIndex]["detailKeys"][]="tutorial_category";

$dIndex = 2-1;
			$strOriginalDetailsTable="exploit_store";
	$detailsParam["dDataSourceTable"]="exploit_store";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="exploit_store";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["tutorial_categories"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["tutorial_categories"][$dIndex]["masterKeys"][]="cat_id";
		$detailsTablesData["tutorial_categories"][$dIndex]["detailKeys"][]="exp_cat";

	
// tables which are master tables for current table (detail)
$masterTablesData["tutorial_categories"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tutorial_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_id,   cat_name,   cat_description";
$proto0["m_strFrom"] = "FROM tutorial_categories";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_id",
	"m_strTable" => "tutorial_categories"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_name",
	"m_strTable" => "tutorial_categories"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_description",
	"m_strTable" => "tutorial_categories"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "tutorial_categories";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "cat_id";
$proto12["m_columns"][] = "cat_name";
$proto12["m_columns"][] = "cat_description";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tutorial_categories = createSqlQuery_tutorial_categories();
			$tdatatutorial_categories[".sqlquery"] = $queryData_tutorial_categories;
	
if(isset($tdatatutorial_categories["field2"])){
	$tdatatutorial_categories["field2"]["LookupTable"] = "carscars_view";
	$tdatatutorial_categories["field2"]["LookupOrderBy"] = "name";
	$tdatatutorial_categories["field2"]["LookupType"] = 4;
	$tdatatutorial_categories["field2"]["LinkField"] = "email";
	$tdatatutorial_categories["field2"]["DisplayField"] = "name";
	$tdatatutorial_categories[".hasCustomViewField"] = true;
}

$tableEvents["tutorial_categories"] = new eventsBase;
$tdatatutorial_categories[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tutorial_categories");

?>