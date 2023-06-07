<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

class c_user
{
    public function login()
    {
        if (isset($_POST["btn_login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $m_user = new m_user();
            $this->luu_dang_nhap($email, $password);
            $user = $m_user->read_user_by_email($email);
            if (isset($_SESSION['user'])) {
                header('location:?ctr=home');
                echo "<script>alert('Đăng nhập thành công')</script>";
            } else {
                header('location:?ctr=home&loginfail&email=' . $email);
                echo "<script> alert('Sai tài khoản hoặc mật khẩu') </script>";
            }
        }
    }

    public function luu_dang_nhap($email, $password)
    {
        session_start();
        $m_user = new m_user();
        $user = $m_user->read_user_by_email_pass($email, $password);
        if (!empty($user)) {
            $_SESSION['user'] = $user;
        }
    }

    public function logout()
    {
        //  session_destroy();
        unset($_SESSION['user']);
        header("location:?ctr=home&logout=success");
    }

    public function signup()
    {
        $m_user = new m_user();
        if (isset($_POST['btn_signup'])) {
            $id = null;
            $email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $vai_tro = 1;
            $kq = $m_user->read_user_by_email($email);
            $check_email = $this->validate_email($email);
            if (!empty($kq)) {
                header('location:?ctr=home&signup=fail&email_da_ton_tai');
            } elseif ($check_email == false) {
                header('location:?ctr=home&signup=fail&email_sai_định_dạng');
            } else {
                $m_user->insert_user($id, $email, md5($password), $full_name, $vai_tro);
                header('location:?ctr=home&signup=success');
            }
        }
    }

    public function forgot_password()
    {
        $m_user = new m_user();
        if (isset($_POST['btn_forgot_password'])) {
            $email = $_POST['email'];
            $check = $m_user->read_user_by_email($email);
            if (!empty($check)) {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'binhvt12003@gmail.com';
                $mail->Password = 'uoxleyozosvdbhvb';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
//setup form send
                $mail->setFrom('binhvt12003@gmail.com');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = "FORGOT PASSWORD";
                $mail->Body = "Ấn vào link để đặt lại mật khẩu: http://localhost/movie/client/?ctr=reset_password&id_user=" . $check->id;
                $mail->send();
                echo "<script>
                            alert('Vui lòng kiểm tra email để lấy mật khẩu');
                      </script>";
                header('location:?ctr=home');
            } else {

                echo "<script>
                         alert('Không tồn tại email này. Vui lòng kiểm tra lại email');
                    </script>";
                header('location:?ctr=home');
            }
        }
    }

    public function reset_password()
    {
        $m_user = new m_user();
        if (isset($_GET['id_user'])) {
            $id = $_GET['id_user'];
            if (isset($_POST['btn_reset'])) {
                $password = $_POST['password'];
                $m_user->reset_pass(md5($password), $id);
                header("location:?ctr=home&resetpass=success");
            }
            include_once 'view/reset_password.php';
        }

    }

    public function validate_email($email)
    {
        $isValid = true;
        $atIndex = strrpos($email, "@");

        if (is_bool($atIndex) && !$atIndex) {
            $isValid = false;
        } else {
            $domain = substr($email, $atIndex + 1);
            $local = substr($email, 0, $atIndex);
            $localLen = strlen($local);
            $domainLen = strlen($domain);

            if ($localLen < 1 || $localLen > 64) {
                $isValid = false;
            } else if ($domainLen < 1 || $domainLen > 255) {
                $isValid = false;
            } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
                $isValid = false;
            } else if (preg_match('/\\.\\./', $local)) {
                $isValid = false;
            } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
                $isValid = false;
            } else if (preg_match('/\\.\\./', $domain)) {
                $isValid = false;
            } else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
                if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                    $isValid = false;
                }
            }

            if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
                $isValid = false;
            }
        }

        return $isValid;
    }

}