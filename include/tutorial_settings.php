<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatutorial = array();
	$tdatatutorial[".NumberOfChars"] = 150; 
	$tdatatutorial[".ShortName"] = "tutorial";
	$tdatatutorial[".OwnerID"] = "";
	$tdatatutorial[".OriginalTable"] = "tutorial";

//	field labels
$fieldLabelstutorial = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstutorial["English"] = array();
	$fieldToolTipstutorial["English"] = array();
	$fieldLabelstutorial["English"]["tutorial_id"] = "ID";
	$fieldToolTipstutorial["English"]["tutorial_id"] = "";
	$fieldLabelstutorial["English"]["tutorial_name"] = "Name";
	$fieldToolTipstutorial["English"]["tutorial_name"] = "Give the tutorial a name that is easy to identify";
	$fieldLabelstutorial["English"]["tutorial_description"] = "Description";
	$fieldToolTipstutorial["English"]["tutorial_description"] = "briefly describe the project that led to the tutorial";
	$fieldLabelstutorial["English"]["tutorial_category"] = "Category";
	$fieldToolTipstutorial["English"]["tutorial_category"] = "choose an domain of categorization for the tutorial ";
	if (count($fieldToolTipstutorial["English"]))
		$tdatatutorial[".isUseToolTips"] = true;
}
	
	
	$tdatatutorial[".NCSearch"] = true;


$tdatatutorial[".scrollGridBody"] = true;	

$tdatatutorial[".shortTableName"] = "tutorial";
$tdatatutorial[".nSecOptions"] = 0;
$tdatatutorial[".recsPerRowList"] = 1;
$tdatatutorial[".mainTableOwnerID"] = "";
$tdatatutorial[".moveNext"] = 1;
$tdatatutorial[".nType"] = 0;

$tdatatutorial[".strOriginalTableName"] = "tutorial";




$tdatatutorial[".showAddInPopup"] = true;

$tdatatutorial[".showEditInPopup"] = true;

$tdatatutorial[".showViewInPopup"] = true;

$tdatatutorial[".fieldsForRegister"] = array();

$tdatatutorial[".listAjax"] = false;

	$tdatatutorial[".audit"] = false;

	$tdatatutorial[".locking"] = false;

$tdatatutorial[".listIcons"] = true;
$tdatatutorial[".edit"] = true;
$tdatatutorial[".view"] = true;



$tdatatutorial[".delete"] = true;

$tdatatutorial[".showSimpleSearchOptions"] = false;

$tdatatutorial[".showSearchPanel"] = true;

if (isMobile())
	$tdatatutorial[".isUseAjaxSuggest"] = false;
else 
	$tdatatutorial[".isUseAjaxSuggest"] = true;

$tdatatutorial[".rowHighlite"] = true;

// button handlers file names

$tdatatutorial[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatutorial[".isUseTimeForSearch"] = false;



$tdatatutorial[".useDetailsPreview"] = true;

$tdatatutorial[".allSearchFields"] = array();

$tdatatutorial[".allSearchFields"][] = "tutorial_name";
$tdatatutorial[".allSearchFields"][] = "tutorial_description";
$tdatatutorial[".allSearchFields"][] = "tutorial_category";

$tdatatutorial[".googleLikeFields"][] = "tutorial_id";
$tdatatutorial[".googleLikeFields"][] = "tutorial_name";
$tdatatutorial[".googleLikeFields"][] = "tutorial_description";
$tdatatutorial[".googleLikeFields"][] = "tutorial_category";


$tdatatutorial[".advSearchFields"][] = "tutorial_name";
$tdatatutorial[".advSearchFields"][] = "tutorial_description";
$tdatatutorial[".advSearchFields"][] = "tutorial_category";

$tdatatutorial[".isTableType"] = "list";

	

$tdatatutorial[".isDisplayLoading"] = true;

$tdatatutorial[".isResizeColumns"] = true;

// Access doesn't support subqueries from the same table as main
	


$tdatatutorial[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatutorial[".strOrderBy"] = $tstrOrderBy;

$tdatatutorial[".orderindexes"] = array();

$tdatatutorial[".sqlHead"] = "SELECT tutorial_id,   tutorial_name,   tutorial_description,   tutorial_category";
$tdatatutorial[".sqlFrom"] = "FROM tutorial";
$tdatatutorial[".sqlWhereExpr"] = "";
$tdatatutorial[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatutorial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatutorial[".arrGroupsPerPage"] = $arrGPP;

$tableKeystutorial = array();
$tableKeystutorial[] = "tutorial_id";
$tdatatutorial[".Keys"] = $tableKeystutorial;

$tdatatutorial[".listFields"] = array();
$tdatatutorial[".listFields"][] = "tutorial_name";
$tdatatutorial[".listFields"][] = "tutorial_description";
$tdatatutorial[".listFields"][] = "tutorial_category";

$tdatatutorial[".viewFields"] = array();
$tdatatutorial[".viewFields"][] = "tutorial_name";
$tdatatutorial[".viewFields"][] = "tutorial_description";
$tdatatutorial[".viewFields"][] = "tutorial_category";

$tdatatutorial[".addFields"] = array();
$tdatatutorial[".addFields"][] = "tutorial_name";
$tdatatutorial[".addFields"][] = "tutorial_description";
$tdatatutorial[".addFields"][] = "tutorial_category";

$tdatatutorial[".inlineAddFields"] = array();

$tdatatutorial[".editFields"] = array();
$tdatatutorial[".editFields"][] = "tutorial_name";
$tdatatutorial[".editFields"][] = "tutorial_description";
$tdatatutorial[".editFields"][] = "tutorial_category";

$tdatatutorial[".inlineEditFields"] = array();

$tdatatutorial[".exportFields"] = array();

$tdatatutorial[".printFields"] = array();
$tdatatutorial[".printFields"][] = "tutorial_name";
$tdatatutorial[".printFields"][] = "tutorial_description";
$tdatatutorial[".printFields"][] = "tutorial_category";

//	tutorial_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tutorial_id";
	$fdata["GoodName"] = "tutorial_id";
	$fdata["ownerTable"] = "tutorial";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tutorial_id"; 
		$fdata["FullName"] = "tutorial_id";
	
		
		
				
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
	
		
		
	$tdatatutorial["tutorial_id"] = $fdata;
//	tutorial_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tutorial_name";
	$fdata["GoodName"] = "tutorial_name";
	$fdata["ownerTable"] = "tutorial";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "tutorial_name"; 
		$fdata["FullName"] = "tutorial_name";
	
		
		
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
	
		
		
	$tdatatutorial["tutorial_name"] = $fdata;
//	tutorial_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tutorial_description";
	$fdata["GoodName"] = "tutorial_description";
	$fdata["ownerTable"] = "tutorial";
	$fdata["Label"] = "Description"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "tutorial_description"; 
		$fdata["FullName"] = "tutorial_description";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 150;
			$edata["nCols"] = 650;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatutorial["tutorial_description"] = $fdata;
//	tutorial_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tutorial_category";
	$fdata["GoodName"] = "tutorial_category";
	$fdata["ownerTable"] = "tutorial";
	$fdata["Label"] = "Category"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "tutorial_category"; 
		$fdata["FullName"] = "tutorial_category";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "cat_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cat_name";
	
		
	$edata["LookupTable"] = "tutorial_categories";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatutorial["tutorial_category"] = $fdata;

	
$tables_data["tutorial"]=&$tdatatutorial;
$field_labels["tutorial"] = &$fieldLabelstutorial;
$fieldToolTips["tutorial"] = &$fieldToolTipstutorial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tutorial"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="steps";
	$detailsParam["dDataSourceTable"]="steps";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="steps";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["tutorial"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["tutorial"][$dIndex]["masterKeys"][]="tutorial_id";
		$detailsTablesData["tutorial"][$dIndex]["detailKeys"][]="tutorial_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["tutorial"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="tutorial_categories";
	$masterParams["mDataSourceTable"]="tutorial_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tutorial_categories";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["tutorial"][$mIndex] = $masterParams;	
		$masterTablesData["tutorial"][$mIndex]["masterKeys"][]="cat_id";
		$masterTablesData["tutorial"][$mIndex]["detailKeys"][]="tutorial_category";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tutorial()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tutorial_id,   tutorial_name,   tutorial_description,   tutorial_category";
$proto0["m_strFrom"] = "FROM tutorial";
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
	"m_strName" => "tutorial_id",
	"m_strTable" => "tutorial"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tutorial_name",
	"m_strTable" => "tutorial"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "tutorial_description",
	"m_strTable" => "tutorial"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "tutorial_category",
	"m_strTable" => "tutorial"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "tutorial";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "tutorial_id";
$proto14["m_columns"][] = "tutorial_name";
$proto14["m_columns"][] = "tutorial_description";
$proto14["m_columns"][] = "tutorial_category";
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
$queryData_tutorial = createSqlQuery_tutorial();
				$tdatatutorial[".sqlquery"] = $queryData_tutorial;
	
if(isset($tdatatutorial["field2"])){
	$tdatatutorial["field2"]["LookupTable"] = "carscars_view";
	$tdatatutorial["field2"]["LookupOrderBy"] = "name";
	$tdatatutorial["field2"]["LookupType"] = 4;
	$tdatatutorial["field2"]["LinkField"] = "email";
	$tdatatutorial["field2"]["DisplayField"] = "name";
	$tdatatutorial[".hasCustomViewField"] = true;
}

$tableEvents["tutorial"] = new eventsBase;
$tdatatutorial[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tutorial");

?>