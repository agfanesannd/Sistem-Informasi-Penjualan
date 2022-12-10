<?php 

/**
 * Home Page Controller
 * @category  Controller
 */
class HomeController extends BaseController{
	/**
     * Index Action
     * @return View
     */
	function index(){
		
		$this->render_view("home/index.php" , null , "main_layout.php");

	}
}
