<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	public function index()
	{
		echo 's';
// 		//get smarty
// 		$gets=new s1();
// 		$s1=$gets->setS();
		
// 		//get all childrens
// 		$blogs=array();
// 		$con=GGmysqlopen();
// 		$result1 = mysql_query("select * from `GGblog`");
		
// 		while($blog = mysql_fetch_array($result1)){
// 			array_push($blogs,$blog);			
// 		}
// 		$s1->assign("blogs", $blogs);
		
		
// 		$s1->display("blog.html");
	}
	public function add(){		
		$this->load->library('doctrine');
		$this->load->library('template');
		$this->load->library('ccik');
		$this->em = $this->doctrine->em;
		$t=new Template();
		$theBlog = new models\Ggblog;
		$this->ccik->fillPost($theBlog);
// 		foreach ($_POST as $key=>$value){
// 			$method="set".$key;
// 			//echo $method;
// 			$theBlog->$method($value);
// 			//$theBlog->setGblogurl($value);
// 			print_r($theBlog);		
// 			echo '<hr>';
// 		}
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
