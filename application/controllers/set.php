<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH.'libraries/smarty/Smarty.class.php'); //包含smarty类文件 

class s1{
	public function setS(){
		$smarty = new Smarty(); //建立smarty实例对象$smarty 
		$smarty->debugging = true;
		$smarty->cache_lifetime = 0; //缓存时间 
		$smarty->caching = true; //缓存方式  
		//$smarty->template_dir='../views/';
		$smarty->left_delimiter = "<{"; 
		$smarty->right_delimiter = "}>";
		return $smarty;
	}
}
function GGmysqlopen(){
	$con = mysql_connect("localhost","gdcxkjco_seo","guavaguava00");
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("gdcxkjco_seo", $con);
	mysql_query("set names 'utf8'"); 
	return $con;
}
function GGmysqlclose($con){
	mysql_close($con);
}