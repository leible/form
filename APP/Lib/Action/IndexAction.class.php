<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    //查询数据
    public function index() {

        $this->display();
    }
    //添加信息
    public function insert(){
        $user=M("user");
        if($vo=$user->create()){
            $AddList=$user->add();
            if($AddList!==false){
                $this->success('数据插入成功');
            }else{
                $this->error('数据插入失败');
            }
        }else{
            $this->error($user->getError());
        }


    }

}