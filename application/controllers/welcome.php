<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('template');
		$t=new Template();
		$t->assign('title','funny?');
		$t->display('welcome');
// 		$this->load->library('doctrine');
// 		$this->load->library('template');
// 		$user = new models\Gguser;
// 		$user->setUsername('ss2ss');
// 		$user->setPassword('ss2ss');
// 		$user->setEmail('ss2sss@gmail.com');
		
// 		$this->em = $this->doctrine->em;
// 		$this->em->persist($user);
// 		$this->em->flush();
		
// 		$t=new Template();
// 		$t->assign('title','funny?');
// 		$t->display('welcome');
		//$this->load->view('welcome_message', array('user' => $user));	
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */