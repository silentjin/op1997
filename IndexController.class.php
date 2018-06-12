<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
   //蓝色背景
    $cate=D('cate');
    $cateid=19;
    $cateids=$cate->find($cateid);
   $this->assign('cateids',$cateids);


//文章内容循环
   $first=D('first');
   $firsts=$first->select();
   $this->assign('firsts',$firsts);

  //  $first=D('first');
   // $first=$first->select();
   // $this->assign('firsts',$firsts);



    $this->display();
}
	public function article(){

//蓝色背景
 $cate=D('cate');
    $cateid=19;
    $cateids=$cate->find($cateid);
   $this->assign('cateids',$cateids);


//获取文章内容
		$first=D('first');
		$firstid=I('id');
		$firsts=$first->find($firstid);
		$this->assign('firsts',$firsts);
		$this->display();
	}
}