<?php
class tt extends CI_Controller {

	function index()
	{
		// This example is taken from the Smarty demo and modified slightly
		//$this->smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill");
		//$this->smarty->display('base.tpl');
		$this->smarty->display('index.tpl');
		 //$smarty->display('mypage.tpl');
	}
}