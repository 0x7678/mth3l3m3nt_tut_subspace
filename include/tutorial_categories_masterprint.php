<?php
include_once(getabspath("include/tutorial_categories_settings.php"));

function DisplayMasterTableInfo_tutorial_categories($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="tutorial_categories";

//$strSQL = "SELECT cat_id,   cat_name,   cat_description  FROM tutorial_categories ";

	$cipherer = new RunnerCipherer($strTableName);
	$settings = new ProjectSettings($strTableName, PAGE_PRINT);
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","Rounded1Blue_white1","MobileBlue_white1");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["tutorial_categories_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="tutorial")
{
		$where.= GetFullFieldName("cat_id", "", false)."=".$cipherer->MakeDBValue("cat_id",$keys[1-1], "", "", true);
	$showKeys .= " "."ID".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="exploit_store")
{
		$where.= GetFullFieldName("cat_id", "", false)."=".$cipherer->MakeDBValue("cat_id",$keys[1-1], "", "", true);
	$showKeys .= " "."ID".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
	if(strlen($str))
		$where.=" and ".$str;
	
	$strWhere = whereAdd($masterQuery->m_where->toSql($masterQuery),$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL=AddWhere($strSQL,$where);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["cat_id"]));
	

//	cat_name - 
			$xt->assign("cat_name_mastervalue", $viewControls->showDBValue("cat_name", $data, $keylink));

//	cat_description - 
			$xt->assign("cat_description_mastervalue", $viewControls->showDBValue("cat_description", $data, $keylink));
	$xt->display("tutorial_categories_masterprint.htm");
	$strTableName=$oldTableName;

}

?>