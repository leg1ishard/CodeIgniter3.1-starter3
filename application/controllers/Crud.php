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
                
		$role = $this->session->userdata('userrole');
                
                $this->data['message'] = "Welcome " . $role;
                $this->data['pagebody'] = "template-maintenance";
                
		$this->render('template-maintenance');
	}
}
