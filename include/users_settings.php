<?php
require_once(getabspath("classes/cipherer.php"));
$tdatausers = array();
	$tdatausers[".NumberOfChars"] = 80; 
	$tdatausers[".ShortName"] = "users";
	$tdatausers[".OwnerID"] = "";
	$tdatausers[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusers = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers["English"] = array();
	$fieldToolTipsusers["English"] = array();
	$fieldLabelsusers["English"]["id"] = "Id";
	$fieldToolTipsusers["English"]["id"] = "";
	$fieldLabelsusers["English"]["username"] = "Username";
	$fieldToolTipsusers["English"]["username"] = "your login username";
	$fieldLabelsusers["English"]["password"] = "Password";
	$fieldToolTipsusers["English"]["password"] = "password you will use (case sensitive)";
	if (count($fieldToolTipsusers["English"]))
		$tdatausers[".isUseToolTips"] = true;
}
	
	
	$tdatausers[".NCSearch"] = true;


$tdatausers[".scrollGridBody"] = true;	

$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 0;
$tdatausers[".recsPerRowList"] = 1;
$tdatausers[".mainTableOwnerID"] = "";
$tdatausers[".moveNext"] = 1;
$tdatausers[".nType"] = 0;

$tdatausers[".strOriginalTableName"] = "users";

$tdatausers[".hasEncryptedFields"] = true;



$tdatausers[".showAddInPopup"] = true;

$tdatausers[".showEditInPopup"] = true;

$tdatausers[".showViewInPopup"] = true;

$tdatausers[".fieldsForRegister"] = array();

$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = false;

	$tdatausers[".locking"] = false;

$tdatausers[".listIcons"] = true;
$tdatausers[".edit"] = true;
$tdatausers[".inlineEdit"] = true;
$tdatausers[".inlineAdd"] = true;
$tdatausers[".view"] = true;



$tdatausers[".delete"] = true;

$tdatausers[".showSimpleSearchOptions"] = false;

$tdatausers[".showSearchPanel"] = true;

if (isMobile())
	$tdatausers[".isUseAjaxSuggest"] = false;
else 
	$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;

// button handlers file names

$tdatausers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;




$tdatausers[".allSearchFields"] = array();

$tdatausers[".allSearchFields"][] = "username";

$tdatausers[".googleLikeFields"][] = "id";
$tdatausers[".googleLikeFields"][] = "username";
$tdatausers[".googleLikeFields"][] = "password";


$tdatausers[".advSearchFields"][] = "username";

$tdatausers[".isTableType"] = "list";

	


$tdatausers[".isResizeColumns"] = true;

// Access doesn't support subqueries from the same table as main



$tdatausers[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers[".strOrderBy"] = $tstrOrderBy;

$tdatausers[".orderindexes"] = array();

$tdatausers[".sqlHead"] = "SELECT id,   username,   password";
$tdatausers[".sqlFrom"] = "FROM users";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

$tableKeysusers = array();
$tableKeysusers[] = "id";
$tdatausers[".Keys"] = $tableKeysusers;

$tdatausers[".listFields"] = array();
$tdatausers[".listFields"][] = "username";

$tdatausers[".viewFields"] = array();
$tdatausers[".viewFields"][] = "username";

$tdatausers[".addFields"] = array();
$tdatausers[".addFields"][] = "username";
$tdatausers[".addFields"][] = "password";

$tdatausers[".inlineAddFields"] = array();

$tdatausers[".editFields"] = array();
$tdatausers[".editFields"][] = "username";
$tdatausers[".editFields"][] = "password";

$tdatausers[".inlineEditFields"] = array();

$tdatausers[".exportFields"] = array();

$tdatausers[".printFields"] = array();
$tdatausers[".printFields"][] = "username";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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
	
		
		
	$tdatausers["id"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = "Username"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "username"; 
		$fdata["FullName"] = "username";
	
		
		
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
	
		
		
	$tdatausers["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = "Password"; 
	$fdata["FieldType"] = 200;
	
		
		$fdata["bIsEncrypted"] = true; 
	
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "password"; 
		$fdata["FullName"] = "password";
	
		
		
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
	
	$edata = array("EditFormat" => "Password");
	
		
		
	
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
	
		
		
	$tdatausers["password"] = $fdata;

	
$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   username,   password";
$proto0["m_strFrom"] = "FROM users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = new RunnerCipherer("users");
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
	"m_strName" => "id",
	"m_strTable" => "users"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "users"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "users"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "users";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "username";
$proto12["m_columns"][] = "password";
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
$queryData_users = createSqlQuery_users();
					 $queryData_users->m_fieldlist[2]->m_isEncrypted = true;
$tdatausers[".sqlquery"] = $queryData_users;
	
if(isset($tdatausers["field2"])){
	$tdatausers["field2"]["LookupTable"] = "carscars_view";
	$tdatausers["field2"]["LookupOrderBy"] = "name";
	$tdatausers["field2"]["LookupType"] = 4;
	$tdatausers["field2"]["LinkField"] = "email";
	$tdatausers["field2"]["DisplayField"] = "name";
	$tdatausers[".hasCustomViewField"] = true;
}

$tableEvents["users"] = new eventsBase;
$tdatausers[".hasEvents"] = false;

$cipherer = new RunnerCipherer("users");

?>