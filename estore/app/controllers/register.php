<?php

Class Register extends Controller
{

	public function index()
	{

        $data['page_title'] = "Register";
        
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            
            $user = $this->load_model("User");
            $user->register($_POST);
        }

        $this->view("register",$data);
	}


}