<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    //查询数据
    public function index() {
        $user = M("user");
        $userList = $user->select();
//        dump($userList);
        $hello = 'hello world';
        $this->assign("list",$userList);
        $this->assign('hello',$hello);
        $this->display();
    }

    //添加信息界面
    public function add() {
        $this->display();
    }

    //添加信息
    public function insert() {
        $username = $_POST['username'];
        $sex = $_POST['sex'];
        $area = $_POST['area'];
        $hobby = serialize($_POST["hobby"]);
        $message = $_POST['message'];
        $data = array(
            'username' => $username,
            'sex' => $sex,
            'area' => $area,
            'hobby' => $hobby,
            'message' => $message
        );
        $user = M("user");
        if ($data) {
            $AddList = $user->add($data);
            if ($AddList !== false) {
                $this->success('数据插入成功');
            } else {
                $this->error('数据插入失败');
            }
        } else {
            $this->error($user->getError());
        }
    }

    //修改信息界面
    public function edit() {
        $id = $_GET['id'];
        if (!empty($id)) {
            $user = M("user");
            $vo = $user->getById($id);
            if ($vo) {

            }
        }
        $this->display();
    }

    //修改信息
    public function update() {
        $user = M("user");
        if ($vo = $user->create()) {
            $list = $user->save();
            if ($AddList !== false) {
                $this->success('数据更新成功');
            } else {
                $this->error('数据更新失败');
            }
        } else {
            $this->error($user->getError());
        }
    }

    //删除信息
    public function delete($id) {
        if (!empty($id)) {
            $user = M("user");
            $result = $user->delete($id);
            if ($result !== false) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
            }
        } else {
            $this->error("删除信息失败");
        }
    }

}