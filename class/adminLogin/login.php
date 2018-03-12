<?php
require_once ('database.php');

class Login extends Database {

    public function admin_login_check($data){
        $email_address = $data['email_address'];
        $password = md5($data['password']);
        $query = "SELECT * FROM tbl_admin_login WHERE email_address = '$email_address' AND password = '$password'";
        $query_result = mysqli_query($this->db_connect, $query);
        $admin_info= mysqli_fetch_assoc($query_result);

        if($admin_info){
            session_start();
            $_SESSION['admin_id']   = $admin_info['admin_id'];
            $_SESSION['admin_name'] = $admin_info['admin_name'];

            header('Location:../adminPanel/index.php');
        }else{
            $message = "Your User Id and Password is Not Valid";
            return $message;
        }
    }

    /*this logout for admin panel index page*/
    public function admin_logout(){
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        header('Location: ../admin/index.php');
    }

    /*this logout for admin panel others page*/
    public function admin_logout2(){
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        header('Location: ../../../admin/index.php');
    }

}