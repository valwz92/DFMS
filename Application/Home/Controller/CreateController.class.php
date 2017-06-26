<?php
namespace Home\Controller;
use Think\Controller;
class CreateController extends Controller {
    public function index(){
        $terms = M('Termnumber')->select();
        $this->assign('terms', $terms);
        $this->display();
    }

    public function pay(){
        $info = M('Decoration')->where(I())->find();
        $this->assign('info', $info);
        $this->display();
    }

    public function add(){
        $dec = M("Decoration"); // 实例化dec对象
        
        // 根据表单提交的POST数据创建数据对象
        if($dec->create()){
            $term = M('Termnumber')->where('id=%d', $dec->no_term)->getField('term');
            $dec->term = $term;
            $result = $dec->add(); // 写入数据到数据库
            if($result){
            // 如果主键是自动增长型 成功后返回值就是最新插入的值
                $insertId = $result;
                $this->success("添加成功！");
            }
        }
        
    }

    public function add_pay(){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 1000000000 ;// 设置附件上传大小
            $upload->rootPath = "./Public";
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath = '/img/'; // 设置附件上传目录
            $upload->autoSub = false;
            $upload->saveName = time().'_'.mt_rand();
    
            // 上传单个文件
            $info = $upload->uploadOne($_FILES['url']);
            if(!$info) {// 上传错误提示错误信息
                dump($upload->getError());
            }else{// 上传成功 获取上传文件信息
                dump($info['savepath'].$info['savename']);
            }

        $User = M("Payment"); // 实例化User对象
        // 根据表单提交的POST数据创建数据对象
        if($User->create()){
            $User->url = "./Public".$info['savepath'].$info['savename']; // 增加新的字段数据
            if ($User->date == '') {
                $User->date = null;
            }
            $result = $User->add(); // 写入数据到数据库
            if($result){
            // 如果主键是自动增长型 成功后返回值就是最新插入的值
                $insertId = $result;
                $this->success("添加成功！", U('/show','',''));
            }
        }
        
    }
}