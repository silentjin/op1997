<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends CommonController{
	public function index(){
			    $cate=D('cate');
    $cateid=17;
    $cateids=$cate->find($cateid);
   $this->assign('cateids',$cateids);
		$this->display();
	}
}