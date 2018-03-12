<?php
require_once ('database.php');

class ContactUs extends Database{

    /*insert contact message*/
    public function save_contact_us_form_info($data){
        $query = "INSERT INTO tbl_contact_us_form (full_name, email, phone_number, your_website, message)"
            . "VALUES('$data[full_name]', '$data[email]', '$data[phone_number]', '$data[your_website]', '$data[message]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Contact Us Information Send Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*view all contact message in admin panel*/
    public function all_user_message_info(){
        $query = "SELECT * FROM tbl_contact_us_form ORDER BY contact_form_id";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }
    /* ........................................Contact us Form Functionality End Here....................................*/

    /*insert all contact address*/
    public function save_contact_address_info($data){
        $query = "INSERT INTO tbl_contact_us_address (address, mobile, email)" . "VALUES('$data[address]', '$data[mobile]', '$data[email]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Contact Address Information Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*view all contact address in contact us page */
    public function all_contact_address_info(){
        $query = "SELECT * FROM tbl_contact_us_address";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /* ........................................Contact us Address Functionality End Here....................................*/


    /*insert social address */
    public function save_social_media_info($data){
        $query = "INSERT INTO tbl_contact_us_social_address (facebook, twitter, linkedin, googleplus)"
            . "VALUES('$data[facebook]', '$data[twitter]', '$data[linkedin]', '$data[googleplus]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Social Media Address Information Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*view all social address in contact us page*/
    public function all_social_address_info(){
        $query = "SELECT * FROM tbl_contact_us_social_address";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /* ........................................Contact us Social Address Functionality End Here....................................*/


    /*user post for  Contact us page in footer*/
    public function all_userPost_info_for_footer(){
        $query = "SELECT * FROM tbl_user_post WHERE publication_status = 1 ORDER BY user_post_id DESC LIMIT 3";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*user post picture for contact us page in footer*/
    public function all_userPost_picture_for_footer(){
        $query = "SELECT car_image FROM tbl_user_post WHERE publication_status = 1 ORDER BY user_post_id DESC LIMIT 12";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }
}