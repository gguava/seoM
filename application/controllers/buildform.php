<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buildform extends CI_Controller {
	private $em=null;
	public function index()
	{
		$this->load->library('doctrine');
		
		$this->load->library('template');
		$this->em = $this->doctrine->em;
		$t=new Template();
		
		$this->load->library('ccik');
		$this->cc = $this->ccik;
		
		$this->load->helper('url');
		
		$theGgformtemplate = $this->em->find('models\Ggformtemplate', 1);
		
		$this->cc->setsForm($theGgformtemplate,base_url().'index.php/');
		
		$theFields=$this->em->getRepository('models\Ggformfield')->findBy(array('ggformtemplateid'=>$theGgformtemplate->getId()));
		
		$this->cc->addFields($theFields);
// 		foreach ($theFields as $theField){
// 			//echo '<hr>';
// 			//print_r($theField);
// 			$this->cc->addField($theField);
// 		}
		$formss= $this->cc->getFormString();
		$t->assign("formss", $formss);
		$t->display("buildform_index");
	}
	public function show($ggformtemplateid){
		$this->load->library('doctrine');
		
		$this->load->library('template');
		$this->em = $this->doctrine->em;
		$t=new Template();
		
		$this->load->library('ccik');
		$this->cc = $this->ccik;
		
		$this->load->helper('url');
		
		$theGgformtemplate = $this->em->find('models\Ggformtemplate', $ggformtemplateid);
		
		$this->cc->setsForm($theGgformtemplate,base_url().'index.php/');
		
		$theFields=$this->em->getRepository('models\Ggformfield')->findBy(array('ggformtemplateid'=>$theGgformtemplate->getId()));
		
		$this->cc->addFields($theFields);

		$formss= $this->cc->getFormString();
		$t->assign("formss", $formss);
		$t->display("buildform_index");
	}
	public function add(){
		print_r( $_POST);
	}
		
		
// 		//$theNode = new models\Ggkeyword;
// 		$theNode = $this->em->find('models\Ggkeyword', $nodeid);
// 		//echo $theNode->getGUrl();
// 		$row['G_fatherID']=$theNode->getGFatherid();
// 		$row['G_URL']=$theNode->getGUrl();
// 		$row['id']=$theNode->getId();
// 		//echo $row['id'];
// 		//echo $theNode->getId();
// 		$row['G_position']=$theNode->getGPosition();

// 		//print_r($row);
// 		$t->assign("row",$row); 
// 				$childrens=array();
// 		$thechildrens=$this->em->getRepository('models\Ggkeyword')->findBy(array('gFatherid'=>$nodeid));
// 		//print_r($thechildrens);
		
}
