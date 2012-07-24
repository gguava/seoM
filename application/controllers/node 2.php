<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once('set.php');
class Node extends CI_Controller {
	
	public function index()
	{
		echo 'm';
	}
	public function getNode($nodeid){
		//get smarty
		$gets=new s1();
		$s1=$gets->setS();
		
		$con=GGmysqlopen();
		
		//获取本节点 base infomation
		$result = mysql_query("select * from `gdcxkjco_seo`.`GGkeyword`  where id=".$nodeid);
		while($row = mysql_fetch_array($result)){
			$s1->assign("row", $row);
		}
		
		//get all childrens
		$childrens=array();
		$result1 = mysql_query("select * from `gdcxkjco_seo`.`GGkeyword`  where G_fatherID=".$nodeid);
		
		while($children = mysql_fetch_array($result1)){
			array_push($childrens,$children);			
		}
		$s1->assign("childrens", $childrens);
		
		
		//get ci
		$cis=array();
		$result1 = mysql_query("select * from `gdcxkjco_seo`.`GGci`  where G_positionID=".$nodeid);
		
		while($ci = mysql_fetch_array($result1)){
			array_push($cis,$ci);			
		}
		$s1->assign("cis", $cis);
		
		
		//display
		GGmysqlclose($con);	
		$s1->assign("title", "node管理"); //进行模板变量替换 
		$s1->display("node.html"); //编译并显示位于./templates下的index.htm模板
	}
	public function addNode(){
		print_r($_POST);
		$sql="INSERT INTO `GGkeyword` VALUES (null, '".$_POST['G_position']."', '".$_POST['G_URL']."', '".$_POST['G_fatherID']."')";
		$con=GGmysqlopen();
		$result = mysql_query($sql)
		    or die("Invalid query: " . mysql_error());
		GGmysqlclose($con);
		$url= $_SERVER['HTTP_REFERER'];
		if($result != false){echo "your oder is done,<a href=".$url.">go back</a>";}
		
	}
	public function addCI(){
		//insert into `gdcxkjco_seo`.`GGci` ( `G_keyword`, `G_ci`, `G_positionID`) values ( '珍珠首饰', '报价、批发、珍珠首饰保养', '1')
		$sql="insert into `gdcxkjco_seo`.`GGci` ( `G_keyword`, `G_ci`, `G_positionID`, `G_ciok`) values ( '".$_POST['G_position']."', '".$_POST['G_ci']."', '".$_POST['G_positionID']."', '".$_POST['G_ciok']."')";
		$con=GGmysqlopen();
		$result = mysql_query($sql)
		    or die("Invalid query: " . mysql_error());
		GGmysqlclose($con);
		$url= $_SERVER['HTTP_REFERER'];
		if($result != false){echo "your oder is done,<a href=".$url.">go back</a>";}
	}
	public function editCI(){
		$url= $_SERVER['HTTP_REFERER'];
		$sql="update `gdcxkjco_seo`.`GGci` set `G_keyword`='".$_POST['G_position']."', `G_ci`='".$_POST['G_ci']."', `G_ciok`='".$_POST['G_ciok']."' where `id`='".$_POST['G_positionID']."'";
		$con=GGmysqlopen();
		$result = mysql_query($sql)
		    or die("Invalid query: " . mysql_error());
		GGmysqlclose($con);
		if($result != false){echo "your oder is done,<a href=".$url.">go back</a>";}
		
	}
	//update `gdcxkjco_seo`.`GGci` set `G_ci`='2' where `id`='3' 
	
}
