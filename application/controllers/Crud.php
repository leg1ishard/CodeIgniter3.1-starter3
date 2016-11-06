<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crud
 *
 * @author Pika
 */
class Crud extends Application {
    
    
        function __construct() {
            parent::__construct();
        }
        
	public function index()	{
        $this->data['pagebody'] = "template-maintenance";    

		$role = $this->session->userdata('userrole');
        if ($role == 'admin') {        
	        $this->data['message'] = "Welcome " . $role;
        } else {
        	$this->data['message'] = "You are not authorized to access this page. Go away.";
        }
                
		$this->render('template-maintenance');
	}
}
