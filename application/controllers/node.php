<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Node extends CI_Controller {
	private $em=null;
	public function index()
	{
		echo 'm';
	}
	public function getNode($nodeid){
		$this->load->library('doctrine');
		$this->load->library('template');
		
		$this->em = $this->doctrine->em;
		$t=new Template();
		
		//$theNode = new models\Ggkeyword;
		$theNode = $this->em->find('models\Ggkeyword', $nodeid);
		//echo $theNode->getGUrl();
		$row['G_fatherID']=$theNode->getGFatherid();
		$row['G_URL']=$theNode->getGUrl();
		$row['id']=$theNode->getId();
		//echo $theNode->getId();
		$row['G_position']=$theNode->getGPosition();


		$t->assign("row",$row); 
				$childrens=array();
		$thechildrens=$this->em->getRepository('models\Ggkeyword')->findBy(array('gFatherid'=>$nodeid));
		//print_r($thechildrens);
		
		foreach($thechildrens as $thechildren){
			//print_r($thechildren);
			$children['id']=$thechildren->getId();
			$children['G_position']=$thechildren->getGPosition();
			//print_r($ci);
			array_push($childrens,$children);
			//$cis[$cis_num]['G_keyword']=$theCi->getGKeyword();
			//echo '<hr>';
		}
		//print_r($cis);
		
		$t->assign("childrens", $childrens);
		
		
		$cis=array();
		$theCis=$this->em->getRepository('models\Ggci')->findBy(array('gPositionid'=>$nodeid));
		//print_r($theCis);
		
		foreach($theCis as $theCi){
			//print_r($theCi);
			$ci['G_keyword']=$theCi->getGKeyword();
			$ci['G_ci']=$theCi->getGCi();
			$ci['id']=$theCi->getId();
			$ci['G_ciok']=$theCi->getGCiok();
			//print_r($ci);
			array_push($cis,$ci);
			//$cis[$cis_num]['G_keyword']=$theCi->getGKeyword();
			//echo '<hr>';
		}
		//print_r($cis);
		
		$t->assign("cis",$cis);	
		$t->assign("title", "node管理"); //进行模板变量替换 
		$t->display("node"); //编译并显示位于./templates下的index.htm模板
	}
	public function addNode(){
		$this->load->library('doctrine');		
		$this->em = $this->doctrine->em;
		
		$theNode = new models\Ggkeyword;
		$theNode->setGPosition($_POST['G_position']);
		$theNode->setGUrl($_POST['G_URL']);
		$theNode->setGFatherid($_POST['G_fatherID']);
		
		$this->em->persist($user);
		$this->em->flush();

		$url= $_SERVER['HTTP_REFERER'];
		if($result != false)echo '<script language="javascript" type="text/javascript">
		window.location.href="'.$url.'"; 
		</script>';
		}
	public function addCI(){
		$this->load->library('doctrine');
		$this->em = $this->doctrine->em;
		
		$theCi = new models\Ggci;
		$theCi->setGKeyword($_POST['G_position']);
		$theCi->setGCiok($_POST['G_ciok']);
		$theCi->setGCi($_POST['G_ci']);
		$theCi->setGPositionid($_POST['G_positionID']);
		$this->em->persist($theCi);
		$this->em->flush();
		$url= $_SERVER['HTTP_REFERER'];
		echo '<script language="javascript" type="text/javascript">
		window.location.href="'.$url.'"; 
		</script>';
	}
	public function editCI(){
// 		$sql="update `gdcxkjco_seo`.`GGci` set `G_keyword`='".$_POST['G_position']."', `G_ci`='".$_POST['G_ci']."', `G_ciok`='".$_POST['G_ciok']."' where `id`='".$_POST['G_positionID']."'";
// 		$con=GGmysqlopen();
// 		$result = mysql_query($sql)
// 		    or die("Invalid query: " . mysql_error());
// 		GGmysqlclose($con);
		$this->load->library('doctrine');
		$this->em = $this->doctrine->em;

		$theCi = new models\Ggci;
		echo $_POST['G_positionID'];
		$theCis=$this->em->getRepository('models\Ggci')->findBy(array('id'=>$_POST['G_positionID']));
		$theCi=$theCis[0];
		$theCi->setGCiok($_POST['G_ciok']);
		$theCi->setGCi($_POST['G_ci']);
		$theCi->setGPositionid($_POST['G_positionID']);
		$this->em->persist($theCi);
		$this->em->flush();
		
		$url= $_SERVER['HTTP_REFERER'];
		echo '<script language="javascript" type="text/javascript">
		window.location.href="'.$url.'"; 
		</script>';

		
	}
	//update `gdcxkjco_seo`.`GGci` set `G_ci`='2' where `id`='3' 
	
}
