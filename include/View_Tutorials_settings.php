<?php
require_once(getabspath("classes/cipherer.php"));
$tdataView_Tutorials = array();
	$tdataView_Tutorials[".NumberOfChars"] = 80; 
	$tdataView_Tutorials[".ShortName"] = "View_Tutorials";
	$tdataView_Tutorials[".OwnerID"] = "";
	$tdataView_Tutorials[".OriginalTable"] = "report_by_group";

//	field labels
$fieldLabelsView_Tutorials = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsView_Tutorials["English"] = array();
	$fieldToolTipsView_Tutorials["English"] = array();
	$fieldLabelsView_Tutorials["English"]["steps_step_title"] = "Title";
	$fieldToolTipsView_Tutorials["English"]["steps_step_title"] = "";
	$fieldLabelsView_Tutorials["English"]["steps_step_description"] = "Description";
	$fieldToolTipsView_Tutorials["English"]["steps_step_description"] = "";
	$fieldLabelsView_Tutorials["English"]["steps_step_screenshot"] = "Screenshot";
	$fieldToolTipsView_Tutorials["English"]["steps_step_screenshot"] = "";
	$fieldLabelsView_Tutorials["English"]["tutorial_tutorial_name"] = "Tutorial";
	$fieldToolTipsView_Tutorials["English"]["tutorial_tutorial_name"] = "";
	$fieldLabelsView_Tutorials["English"][""] = "";
	$fieldToolTipsView_Tutorials["English"][""] = "";
	$fieldLabelsView_Tutorials["English"][""] = "";
	$fieldToolTipsView_Tutorials["English"][""] = "";
	if (count($fieldToolTipsView_Tutorials["English"]))
		$tdataView_Tutorials[".isUseToolTips"] = true;
}
	
	
	$tdataView_Tutorials[".NCSearch"] = true;



$tdataView_Tutorials[".shortTableName"] = "View_Tutorials";
$tdataView_Tutorials[".nSecOptions"] = 0;
$tdataView_Tutorials[".recsPerRowList"] = 1;
$tdataView_Tutorials[".mainTableOwnerID"] = "";
$tdataView_Tutorials[".moveNext"] = 1;
$tdataView_Tutorials[".nType"] = 2;

$tdataView_Tutorials[".strOriginalTableName"] = "report_by_group";




$tdataView_Tutorials[".showAddInPopup"] = false;

$tdataView_Tutorials[".showEditInPopup"] = false;

$tdataView_Tutorials[".showViewInPopup"] = false;

$tdataView_Tutorials[".fieldsForRegister"] = array();

$tdataView_Tutorials[".listAjax"] = false;

	$tdataView_Tutorials[".audit"] = false;

	$tdataView_Tutorials[".locking"] = false;

$tdataView_Tutorials[".listIcons"] = true;

$tdataView_Tutorials[".exportTo"] = true;

$tdataView_Tutorials[".printFriendly"] = true;


$tdataView_Tutorials[".showSimpleSearchOptions"] = false;

$tdataView_Tutorials[".showSearchPanel"] = true;

if (isMobile())
	$tdataView_Tutorials[".isUseAjaxSuggest"] = false;
else 
	$tdataView_Tutorials[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataView_Tutorials[".addPageEvents"] = false;

// use timepicker for search panel
$tdataView_Tutorials[".isUseTimeForSearch"] = false;




$tdataView_Tutorials[".allSearchFields"] = array();

$tdataView_Tutorials[".allSearchFields"][] = "steps_step_title";
$tdataView_Tutorials[".allSearchFields"][] = "steps_step_description";
$tdataView_Tutorials[".allSearchFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".googleLikeFields"][] = "steps_step_title";
$tdataView_Tutorials[".googleLikeFields"][] = "steps_step_description";
$tdataView_Tutorials[".googleLikeFields"][] = "tutorial_tutorial_name";


$tdataView_Tutorials[".advSearchFields"][] = "steps_step_title";
$tdataView_Tutorials[".advSearchFields"][] = "steps_step_description";
$tdataView_Tutorials[".advSearchFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".isTableType"] = "report";

$tdataView_Tutorials[".reportGroupFields"] = true;
	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataView_Tutorials[".strOrderBy"] = $tstrOrderBy;

$tdataView_Tutorials[".orderindexes"] = array();

$tdataView_Tutorials[".sqlHead"] = "SELECT steps_step_title,   steps_step_description,   steps_step_screenshot,   tutorial_tutorial_name";
$tdataView_Tutorials[".sqlFrom"] = "FROM report_by_group";
$tdataView_Tutorials[".sqlWhereExpr"] = "";
$tdataView_Tutorials[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataView_Tutorials[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataView_Tutorials[".arrGroupsPerPage"] = $arrGPP;

$tableKeysView_Tutorials = array();
$tdataView_Tutorials[".Keys"] = $tableKeysView_Tutorials;

$tdataView_Tutorials[".listFields"] = array();
$tdataView_Tutorials[".listFields"][] = "steps_step_title";
$tdataView_Tutorials[".listFields"][] = "steps_step_description";
$tdataView_Tutorials[".listFields"][] = "steps_step_screenshot";
$tdataView_Tutorials[".listFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".viewFields"] = array();
$tdataView_Tutorials[".viewFields"][] = "steps_step_title";
$tdataView_Tutorials[".viewFields"][] = "steps_step_description";
$tdataView_Tutorials[".viewFields"][] = "steps_step_screenshot";
$tdataView_Tutorials[".viewFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".addFields"] = array();
$tdataView_Tutorials[".addFields"][] = "steps_step_title";
$tdataView_Tutorials[".addFields"][] = "steps_step_description";
$tdataView_Tutorials[".addFields"][] = "steps_step_screenshot";
$tdataView_Tutorials[".addFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".inlineAddFields"] = array();
$tdataView_Tutorials[".inlineAddFields"][] = "steps_step_title";
$tdataView_Tutorials[".inlineAddFields"][] = "steps_step_description";
$tdataView_Tutorials[".inlineAddFields"][] = "steps_step_screenshot";
$tdataView_Tutorials[".inlineAddFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".editFields"] = array();
$tdataView_Tutorials[".editFields"][] = "steps_step_title";
$tdataView_Tutorials[".editFields"][] = "steps_step_description";
$tdataView_Tutorials[".editFields"][] = "steps_step_screenshot";
$tdataView_Tutorials[".editFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".inlineEditFields"] = array();
$tdataView_Tutorials[".inlineEditFields"][] = "steps_step_title";
$tdataView_Tutorials[".inlineEditFields"][] = "steps_step_description";
$tdataView_Tutorials[".inlineEditFields"][] = "steps_step_screenshot";
$tdataView_Tutorials[".inlineEditFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".exportFields"] = array();
$tdataView_Tutorials[".exportFields"][] = "steps_step_title";
$tdataView_Tutorials[".exportFields"][] = "steps_step_description";
$tdataView_Tutorials[".exportFields"][] = "tutorial_tutorial_name";

$tdataView_Tutorials[".printFields"] = array();
$tdataView_Tutorials[".printFields"][] = "steps_step_title";
$tdataView_Tutorials[".printFields"][] = "steps_step_description";
$tdataView_Tutorials[".printFields"][] = "steps_step_screenshot";
$tdataView_Tutorials[".printFields"][] = "tutorial_tutorial_name";

//	steps_step_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "steps_step_title";
	$fdata["GoodName"] = "steps_step_title";
	$fdata["ownerTable"] = "report_by_group";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "steps_step_title"; 
		$fdata["FullName"] = "steps_step_title";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataView_Tutorials["steps_step_title"] = $fdata;
//	steps_step_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "steps_step_description";
	$fdata["GoodName"] = "steps_step_description";
	$fdata["ownerTable"] = "report_by_group";
	$fdata["Label"] = "Description"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "steps_step_description"; 
		$fdata["FullName"] = "steps_step_description";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataView_Tutorials["steps_step_description"] = $fdata;
//	steps_step_screenshot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "steps_step_screenshot";
	$fdata["GoodName"] = "steps_step_screenshot";
	$fdata["ownerTable"] = "report_by_group";
	$fdata["Label"] = "Screenshot"; 
	$fdata["FieldType"] = 128;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "steps_step_screenshot"; 
		$fdata["FullName"] = "steps_step_screenshot";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
				$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;
	
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataView_Tutorials["steps_step_screenshot"] = $fdata;
//	tutorial_tutorial_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tutorial_tutorial_name";
	$fdata["GoodName"] = "tutorial_tutorial_name";
	$fdata["ownerTable"] = "report_by_group";
	$fdata["Label"] = "Tutorial"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tutorial_tutorial_name"; 
		$fdata["FullName"] = "tutorial_tutorial_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataView_Tutorials["tutorial_tutorial_name"] = $fdata;

	
$tables_data["View_Tutorials"]=&$tdataView_Tutorials;
$field_labels["View_Tutorials"] = &$fieldLabelsView_Tutorials;
$fieldToolTips["View_Tutorials"] = &$fieldToolTipsView_Tutorials;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["View_Tutorials"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["View_Tutorials"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_View_Tutorials()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "steps_step_title,   steps_step_description,   steps_step_screenshot,   tutorial_tutorial_name";
$proto0["m_strFrom"] = "FROM report_by_group";
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
	"m_strName" => "steps_step_title",
	"m_strTable" => "report_by_group"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "steps_step_description",
	"m_strTable" => "report_by_group"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "steps_step_screenshot",
	"m_strTable" => "report_by_group"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "tutorial_tutorial_name",
	"m_strTable" => "report_by_group"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "report_by_group";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "steps_step_title";
$proto14["m_columns"][] = "steps_step_description";
$proto14["m_columns"][] = "steps_step_screenshot";
$proto14["m_columns"][] = "tutorial_tutorial_name";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_View_Tutorials = createSqlQuery_View_Tutorials();
				$tdataView_Tutorials[".sqlquery"] = $queryData_View_Tutorials;
	
if(isset($tdataView_Tutorials["field2"])){
	$tdataView_Tutorials["field2"]["LookupTable"] = "carscars_view";
	$tdataView_Tutorials["field2"]["LookupOrderBy"] = "name";
	$tdataView_Tutorials["field2"]["LookupType"] = 4;
	$tdataView_Tutorials["field2"]["LinkField"] = "email";
	$tdataView_Tutorials["field2"]["DisplayField"] = "name";
	$tdataView_Tutorials[".hasCustomViewField"] = true;
}

$tableEvents["View_Tutorials"] = new eventsBase;
$tdataView_Tutorials[".hasEvents"] = false;

$cipherer = new RunnerCipherer("View_Tutorials");

?>