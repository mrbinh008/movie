<?php

class c_user
{
    public function show_user()
    {
        $m_user = new m_user();
        $id = $_SESSION['user']->id;
        $user = $m_user->show_edit_user($id);
        include_once 'view/v_user_edit.php';
    }

    public function update_user()
    {
        $m_user = new m_user();
        $flag=false;
        if (isset($_POST['btn_update_user'])) {
            $id = $_POST['id'];
            $email = $_POST['email'];
//            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $user= $m_user->show_edit_user($id);
            if ($email!=$user->email) {
                $check=$m_user->read_user_email($email);
            }
            if($_POST['password']==$user->password) {
                $password = $_POST['password'];
            }else{
                $password=md5($_POST['password']);
            }
            if (empty(trim($email)) || empty(trim($password)) || empty(trim($full_name))) {
                header("location:?ctr=home&error=");
                $flag=true;
            }
            if (isset($check)&&$check) {
                header("location:?ctr=home&error=email");
                $flag=true;
            }
            if ($flag===false) {
                $m_user->update_user($email,$password, $full_name, $id);
                header('location:?ctr=home&update=success');
            }
        }
    }

    public function list_ve()
    {
        $m_user = new m_user();
        $id = $_SESSION['user']->id;
        $ve = $m_user->show_ve($id);
        include_once 'view/v_ve_list.php';
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('location: http://localhost/movie/client/');
    }
}