<?php 
namespace app\daili\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
	public function __construct(Request $request=null)
	{
		parent::__construct($request);
		if(!session('dailiname'))
		{
			$this->redirect('\daili\login');
		}
	}
}
