<?php namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class Page extends BaseController
{
	public function about()
	{
		return view("about");
	}
    
    public function contact()
	{
		return view("contact");
	}

}