<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasteps = array();
	$tdatasteps[".NumberOfChars"] = 150; 
	$tdatasteps[".ShortName"] = "steps";
	$tdatasteps[".OwnerID"] = "";
	$tdatasteps[".OriginalTable"] = "steps";

//	field labels
$fieldLabelssteps = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssteps["English"] = array();
	$fieldToolTipssteps["English"] = array();
	$fieldLabelssteps["English"]["step_id"] = "ID";
	$fieldToolTipssteps["English"]["step_id"] = "";
	$fieldLabelssteps["English"]["tutorial_id"] = "Tutorial";
	$fieldToolTipssteps["English"]["tutorial_id"] = "This holds the name of the tutorial that this item falls in";
	$fieldLabelssteps["English"]["step_title"] = "Title";
	$fieldToolTipssteps["English"]["step_title"] = "Give a simple one liner for your process";
	$fieldLabelssteps["English"]["step_description"] = "Description";
	$fieldToolTipssteps["English"]["step_description"] = "Give a detailed account of what is involved in this step";
	$fieldLabelssteps["English"]["step_screenshot"] = "Screenshot";
	$fieldToolTipssteps["English"]["step_screenshot"] = "Upload an image of evidence or reference";
	$fieldLabelssteps["English"]["thumb"] = "Thumb";
	$fieldToolTipssteps["English"]["thumb"] = "";
	if (count($fieldToolTipssteps["English"]))
		$tdatasteps[".isUseToolTips"] = true;
}
	
	
	$tdatasteps[".NCSearch"] = true;


$tdatasteps[".scrollGridBody"] = true;	

$tdatasteps[".shortTableName"] = "steps";
$tdatasteps[".nSecOptions"] = 0;
$tdatasteps[".recsPerRowList"] = 1;
$tdatasteps[".mainTableOwnerID"] = "";
$tdatasteps[".moveNext"] = 1;
$tdatasteps[".nType"] = 0;

$tdatasteps[".strOriginalTableName"] = "steps";




$tdatasteps[".showAddInPopup"] = true;

$tdatasteps[".showEditInPopup"] = true;

$tdatasteps[".showViewInPopup"] = true;

$tdatasteps[".fieldsForRegister"] = array();

$tdatasteps[".listAjax"] = false;

	$tdatasteps[".audit"] = false;

	$tdatasteps[".locking"] = false;

$tdatasteps[".listIcons"] = true;
$tdatasteps[".edit"] = true;
$tdatasteps[".view"] = true;



$tdatasteps[".delete"] = true;

$tdatasteps[".showSimpleSearchOptions"] = false;

$tdatasteps[".showSearchPanel"] = true;

if (isMobile())
	$tdatasteps[".isUseAjaxSuggest"] = false;
else 
	$tdatasteps[".isUseAjaxSuggest"] = true;

$tdatasteps[".rowHighlite"] = true;

// button handlers file names

$tdatasteps[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasteps[".isUseTimeForSearch"] = false;




$tdatasteps[".allSearchFields"] = array();

$tdatasteps[".allSearchFields"][] = "tutorial_id";
$tdatasteps[".allSearchFields"][] = "step_title";
$tdatasteps[".allSearchFields"][] = "step_description";

$tdatasteps[".googleLikeFields"][] = "step_id";
$tdatasteps[".googleLikeFields"][] = "tutorial_id";
$tdatasteps[".googleLikeFields"][] = "step_title";
$tdatasteps[".googleLikeFields"][] = "step_description";


$tdatasteps[".advSearchFields"][] = "tutorial_id";
$tdatasteps[".advSearchFields"][] = "step_title";
$tdatasteps[".advSearchFields"][] = "step_description";

$tdatasteps[".isTableType"] = "list";

	

$tdatasteps[".isDisplayLoading"] = true;

$tdatasteps[".isResizeColumns"] = true;

// Access doesn't support subqueries from the same table as main



$tdatasteps[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasteps[".strOrderBy"] = $tstrOrderBy;

$tdatasteps[".orderindexes"] = array();

$tdatasteps[".sqlHead"] = "SELECT step_id,   tutorial_id,   step_title,   step_description,   step_screenshot,   thumb";
$tdatasteps[".sqlFrom"] = "FROM steps";
$tdatasteps[".sqlWhereExpr"] = "";
$tdatasteps[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasteps[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasteps[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssteps = array();
$tableKeyssteps[] = "step_id";
$tdatasteps[".Keys"] = $tableKeyssteps;

$tdatasteps[".listFields"] = array();
$tdatasteps[".listFields"][] = "tutorial_id";
$tdatasteps[".listFields"][] = "step_title";
$tdatasteps[".listFields"][] = "step_description";
$tdatasteps[".listFields"][] = "step_screenshot";

$tdatasteps[".viewFields"] = array();
$tdatasteps[".viewFields"][] = "tutorial_id";
$tdatasteps[".viewFields"][] = "step_title";
$tdatasteps[".viewFields"][] = "step_description";
$tdatasteps[".viewFields"][] = "step_screenshot";

$tdatasteps[".addFields"] = array();
$tdatasteps[".addFields"][] = "tutorial_id";
$tdatasteps[".addFields"][] = "step_title";
$tdatasteps[".addFields"][] = "step_description";
$tdatasteps[".addFields"][] = "step_screenshot";

$tdatasteps[".inlineAddFields"] = array();

$tdatasteps[".editFields"] = array();
$tdatasteps[".editFields"][] = "tutorial_id";
$tdatasteps[".editFields"][] = "step_title";
$tdatasteps[".editFields"][] = "step_description";
$tdatasteps[".editFields"][] = "step_screenshot";

$tdatasteps[".inlineEditFields"] = array();

$tdatasteps[".exportFields"] = array();

$tdatasteps[".printFields"] = array();

//	step_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "step_id";
	$fdata["GoodName"] = "step_id";
	$fdata["ownerTable"] = "steps";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "step_id"; 
		$fdata["FullName"] = "step_id";
	
		
		
				
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
	
		
		
	$tdatasteps["step_id"] = $fdata;
//	tutorial_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tutorial_id";
	$fdata["GoodName"] = "tutorial_id";
	$fdata["ownerTable"] = "steps";
	$fdata["Label"] = "Tutorial"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tutorial_id"; 
		$fdata["FullName"] = "tutorial_id";
	
		
		
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
				
		
			
	$edata["LinkField"] = "tutorial_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tutorial_name";
	
		
	$edata["LookupTable"] = "tutorial";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasteps["tutorial_id"] = $fdata;
//	step_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "step_title";
	$fdata["GoodName"] = "step_title";
	$fdata["ownerTable"] = "steps";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "step_title"; 
		$fdata["FullName"] = "step_title";
	
		
		
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
	
		
		
	$tdatasteps["step_title"] = $fdata;
//	step_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "step_description";
	$fdata["GoodName"] = "step_description";
	$fdata["ownerTable"] = "steps";
	$fdata["Label"] = "Description"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "step_description"; 
		$fdata["FullName"] = "step_description";
	
		
		
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
	
		
		
	$tdatasteps["step_description"] = $fdata;
//	step_screenshot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "step_screenshot";
	$fdata["GoodName"] = "step_screenshot";
	$fdata["ownerTable"] = "steps";
	$fdata["Label"] = "Screenshot"; 
	$fdata["FieldType"] = 128;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "step_screenshot"; 
		$fdata["FullName"] = "step_screenshot";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "pandisha";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
				$vdata["ShowThumbnail"] = true; 
	$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 200;
	
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|tiff";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "thumb";
			$edata["ThumbnailSize"] = 200;
	
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasteps["step_screenshot"] = $fdata;
//	thumb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "thumb";
	$fdata["GoodName"] = "thumb";
	$fdata["ownerTable"] = "steps";
	$fdata["Label"] = "Thumb"; 
	$fdata["FieldType"] = 128;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "thumb"; 
		$fdata["FullName"] = "thumb";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
				$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;
	
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasteps["thumb"] = $fdata;

	
$tables_data["steps"]=&$tdatasteps;
$field_labels["steps"] = &$fieldLabelssteps;
$fieldToolTips["steps"] = &$fieldToolTipssteps;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["steps"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["steps"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="tutorial";
	$masterParams["mDataSourceTable"]="tutorial";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tutorial";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["steps"][$mIndex] = $masterParams;	
		$masterTablesData["steps"][$mIndex]["masterKeys"][]="tutorial_id";
		$masterTablesData["steps"][$mIndex]["detailKeys"][]="tutorial_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_steps()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "step_id,   tutorial_id,   step_title,   step_description,   step_screenshot,   thumb";
$proto0["m_strFrom"] = "FROM steps";
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
	"m_strName" => "step_id",
	"m_strTable" => "steps"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tutorial_id",
	"m_strTable" => "steps"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "step_title",
	"m_strTable" => "steps"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "step_description",
	"m_strTable" => "steps"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "step_screenshot",
	"m_strTable" => "steps"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "thumb",
	"m_strTable" => "steps"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "steps";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "step_id";
$proto18["m_columns"][] = "tutorial_id";
$proto18["m_columns"][] = "step_title";
$proto18["m_columns"][] = "step_description";
$proto18["m_columns"][] = "step_screenshot";
$proto18["m_columns"][] = "thumb";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_steps = createSqlQuery_steps();
						$tdatasteps[".sqlquery"] = $queryData_steps;
	
if(isset($tdatasteps["field2"])){
	$tdatasteps["field2"]["LookupTable"] = "carscars_view";
	$tdatasteps["field2"]["LookupOrderBy"] = "name";
	$tdatasteps["field2"]["LookupType"] = 4;
	$tdatasteps["field2"]["LinkField"] = "email";
	$tdatasteps["field2"]["DisplayField"] = "name";
	$tdatasteps[".hasCustomViewField"] = true;
}

$tableEvents["steps"] = new eventsBase;
$tdatasteps[".hasEvents"] = false;

$cipherer = new RunnerCipherer("steps");

?>