<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once('set.php');
class Blog extends CI_Controller {
	
	public function index()
	{
		//get smarty
		$gets=new s1();
		$s1=$gets->setS();
		
		//get all childrens
		$blogs=array();
		$con=GGmysqlopen();
		$result1 = mysql_query("select * from `GGblog`");
		
		while($blog = mysql_fetch_array($result1)){
			array_push($blogs,$blog);			
		}
		$s1->assign("blogs", $blogs);
		
		
		$s1->display("blog.html");
	}
	public function add(){
		//print_r($_POST);
		$sql="insert into `GGblog` ( `Gblogurl`, `Gpassword`, `Gusername`, `Gblogkey`, `Glinkto`) values ( '".$_POST['Gblogurl']."', '".$_POST['Gpassword']."', '".$_POST['Gusername']."', '".$_POST['Gblogkey']."', '".$_POST['Glinkto']."')";
		$con=GGmysqlopen();
		$result = mysql_query($sql)
		    or die("Invalid query: " . mysql_error());
		GGmysqlclose($con);
		$url= $_SERVER['HTTP_REFERER'];
		if($result != false){echo '<script language="javascript" type="text/javascript">
		window.location.href="'.$url.'"; 
		</script>';}		
	}
	
	public function edit(){
		$url= $_SERVER['HTTP_REFERER'];
		$sql="update `GGblog` set `Gblogurl`='".$_POST['Gblogurl']."', `Gpassword`='".$_POST['Gpassword']."', `Gusername`='".$_POST['Gusername']."', `Gblogkey`='".$_POST['Gblogkey']."', `Glinkto`='".$_POST['Glinkto']."' where `id`='".$_POST['id']."'";
		$con=GGmysqlopen();
		$result = mysql_query($sql)
		    or die("Invalid query: " . mysql_error());
		GGmysqlclose($con);
		if($result != false){echo '<script language="javascript" type="text/javascript">
		window.location.href="'.$url.'"; 
		</script>';}
		
	}
	//delete from `gdcxkjco_seo`.`GGblog` where `id`='2' 
	public function del($id){
		$url= $_SERVER['HTTP_REFERER'];
		
		$sql="delete from `gdcxkjco_seo`.`GGblog` where `id`='".$id."'";
		$con=GGmysqlopen();
		$result = mysql_query($sql)
		    or die("Invalid query: " . mysql_error());
		GGmysqlclose($con);
		if($result != false){echo '<script language="javascript" type="text/javascript">
		window.location.href="'.$url.'"; 
		</script>';}
		
	}
	
}
