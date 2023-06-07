<?php

class c_the_loai
{
    public function the_loai_add()
    {
        $m_the_loai = new m_the_loai();
        if (isset($_POST['btn_add_the_loai'])) {
            $id = NULL;
            $name = $_POST['name'];
            $kq = $m_the_loai->read_the_loai_by_name($name);
            if (!$kq && trim($name) != '') {
                $m_the_loai->insert_the_loai($id, $name);
//                echo "<script>alert('Thêm thành công!');</script>";
                header('Location: ?ctr=the_loai_add&msg=success');

            } elseif (trim($name) == '') {
                $error = 'Vui lòng điền đầy đủ thông tin!';
//                header('Location: ?ctr=the_loai_add&msg=error');

            } else {
                $error = "Tên thể loại đã tồn tại";
            }
        }
        include_once("view/the_loai/v_the_loai_add.php");
    }

    public function the_loai_list()
    {
        $m_the_loai = new m_the_loai();
        $the_loai = $m_the_loai->read_the_loai();
        include_once("view/the_loai/v_the_loai_list.php");
    }

    public function show_the_loai_edit()
    {
        $m_the_loai = new m_the_loai();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $the_loai = $m_the_loai->read_the_loai_by_id($id);
            include_once("view/the_loai/v_the_loai_edit.php");
        }
    }

    public function the_loai_update()
    {
        if (isset($_POST['btn_update_the_loai'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $m_the_loai = new m_the_loai();
            if (trim($name) != '') {
                $m_the_loai->edit_the_loai($name, $id);
//                echo "<script>alert('Thêm thành công!');</script>";
                header('location:?ctr=the_loai_list&msg=success');
            }else {
                header('location: ?ctr=the_loai_edit&id='.$id.'&msg=error');
            }

        }
    }

    public function the_loai_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_the_loai = new m_the_loai();
            $m_the_loai->the_loai_delete($id);
            header('location:?ctr=the_loai_list&dl=success');
        }
    }

}