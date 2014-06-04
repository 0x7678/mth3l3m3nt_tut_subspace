<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password");
	$dalTableusers["id"]["key"]=true;
$dal_info["users"]=&$dalTableusers;

?>