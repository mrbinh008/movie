<?php


class c_phim
{
    public function phim_add()
    {
        $m_phim = new m_phim();
        $fileAllow = array('jpg', 'png', 'jpeg');
        if (isset($_POST['btn_add_phim'])) {
            $id = NULL;
            $name = $_POST['name'];
            $description = $_POST['description'];
            $thoi_luong = $_POST['thoi_luong'];
            $rate = $_POST['rate'];
            $avatar = $_FILES['avatar']['name'];
            $ngay_khoi_chieu = date_format(date_create($_POST['ngay_khoi_chieu']), "Y-m-d");
            $trailer = $_POST['trailer'];
            $the_loai = $_POST['the_loai'] ?? array();
            $status = 1;
//            $check_file = getimagesize($_FILES['avatar']['tmp_name']);
            $imageFileType = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
            $check_name = $m_phim->read_phim_by_name($name);
            if (empty(trim($name)) || empty(trim($description))
                || empty(trim($thoi_luong)) || empty(trim($rate)) || empty($avatar)
                || empty(trim($ngay_khoi_chieu)) || empty(trim($trailer)) || empty($the_loai)) {
                $error = "Vui lòng nhập đầy đủ thông tin";
            }
            if ($check_name) {
                $error = "Tên phim đã tồn tại";
            }
//            if ($check_file === false) {
//                $error = "File upload phải là File ảnh.";
//            }
            if (!in_array($imageFileType, $fileAllow)) {
                $error = "File ảnh phải có định dạng jpg,png,jpeg";
            }
            if (strtotime(date("Y-m-d")) > strtotime($_POST['ngay_khoi_chieu'])) {
                $error = "Ngày khởi chiếu phải lớn hơn ngày hiện tại";
            }

            if (!isset($error)) {
                $kq = $m_phim->insert_phim($id, $name, $description, $thoi_luong, $rate, $avatar, $ngay_khoi_chieu, $trailer, $status);
                foreach ($the_loai as $tl) {
                    $m_phim->insert_the_loai_of_phim($id, $tl, $kq);
                }
                if ($kq) {
                    if ($_FILES["avatar"]["error"] == 0) {
                        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../public/image/$avatar");
                    }
//                    echo "<script>alert('Thêm thành công')</script>";
                    header('Location: ?ctr=phim_add&msg=success');
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }
        }
        $m_the_loai = new m_the_loai();
        $the_loai = $m_the_loai->read_the_loai();
        include_once("view/phim/v_phim_add.php");
    }

    public function phim_list()
    {
        $m_phim = new m_phim();
        $phim = $m_phim->read_phim();
        include_once("view/phim/v_phim_list.php");
    }

    public function show_phim_edit()
    {
        $m_the_loai = new m_the_loai();
        $m_phim = new m_phim();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $the_loai = $m_the_loai->read_the_loai();
            $theLoai = $m_phim->read_the_loai_of_phim($id);
            $phim = $m_phim->read_phim_by_id($id);
            include_once("view/phim/v_phim_edit.php");
        }
    }

    public function phim_update()
    {
        $m_phim = new m_phim();
        $fileAllow = array('jpg', 'png', 'jpeg');
        if (isset($_POST['btn_update_phim'])) {
            $id = $_POST['id'];
            $image = $m_phim->read_phim_by_id($id);
            $name = $_POST['name'];
            $description = $_POST['description'];
            $thoi_luong = $_POST['thoi_luong'];
            $rate = $_POST['rate'];
            $ngay_khoi_chieu = date_format(date_create($_POST['ngay_khoi_chieu']), "Y-m-d");
            $trailer = $_POST['trailer'];
            $avatar = !empty($_FILES['avatar']['name']) ? $_FILES['avatar']['name'] : $image->avatar;
            $imageFileType = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
//            $the_loai = $_POST['the_loai'];


            if (empty(trim($name)) || empty(trim($description))
                || empty(trim($thoi_luong)) || empty(trim($rate)) || empty($avatar)
                || empty(trim($ngay_khoi_chieu)) || empty(trim($trailer))) {
                $error = "Vui lòng nhập đầy đủ thông tin";
            }
            if (!empty($_FILES['avatar']['name']) && !in_array($imageFileType, $fileAllow)) {
                $error = "File ảnh phải có định dạng jpg,png,jpeg";
            }

            if (!isset($error)) {
                $kq = $m_phim->edit_phim($name, $description, $thoi_luong, $rate, $avatar, $ngay_khoi_chieu, $trailer, $id);
//                foreach ($the_loai as $tl) {
//                    $m_phim->edit_the_loai_of_phim($tl, $id);
//                }
                if ($kq) {
                    if ($_FILES["avatar"]["error"] == 0) {
                        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../public/image/$avatar");
                    }
                    header('location:?ctr=phim_list&msg=success');

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            } else {
                header('Location: ?ctr=phim_edit&id=' . $id . '&msg=error');
            }
        }
    }

    public function phim_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_phim = new m_phim();
            $m_phim->phim_delete($id);
            header('location:?ctr=phim_list&dl=success');
        }
    }

    public function active_phim()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_phim = new m_phim();
            $m_phim->active_phim($id);
            header('location:?ctr=phim_list&act=success');
        }
    }
}