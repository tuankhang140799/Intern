<?php

Class Admin extends Controller
{

	public function index()
	{

		$User = $this->load_model('User');
		$user_data = $User->check_login(true, ["admin"]);

		if(is_object($user_data)){
		    $data['user_data'] = $user_data;
	    }

        $data['page_title'] = "Admin";
        $this->view("admin/index",$data);
	}

	public function categories()
	{

		$User = $this->load_model('User');
		$user_data = $User->check_login(true, ["admin"]);

		if(is_object($user_data)){
		    $data['user_data'] = $user_data;
	    }

	    $DB = Database::newInstance();
        $categories = $DB->read("select * from categories order by id desc");

        $category = $this->load_model("Category");
        $tbl_rows = $category->make_table($categories);
        $data['tbl_rows'] = "";
        if(is_array($categories)){
            $data['tbl_rows'] = $tbl_rows;
        }

        $data['page_title'] = "Admin";
        $this->view("admin/categories",$data);
	}


}