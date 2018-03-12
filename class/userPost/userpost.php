<?php

require_once ('database.php');
class Userpost extends Database{

    protected $uploadFilePath;

    function __construct()
    {
        parent::__construct();
        $this->uploadFilePath = $_SERVER["DOCUMENT_ROOT"].'/carMela/';
    }

    public function save_userPost_info($data){
        $img_url = $this->save_image_info(); /*this line for calling a image function*/

        $query = "INSERT INTO tbl_user_post (car_name, car_price, car_details, car_model, car_registration, cng_status, cng_com, fuel_type, car_cc,
                  gear, all_option, music, serial_number, engine, mileage, doors, condtion, passenger, color, others, car_image, publication_status)"
            . "VALUES('$data[car_name]', '$data[car_price]', '$data[car_details]', '$data[car_model]', '$data[car_registration]', '$data[cng_status]', 
            '$data[cng_com]', '$data[fuel_type]', '$data[car_cc]', '$data[gear]', '$data[all_option]', '$data[music]', '$data[serial_number]', '$data[engine]', 
            '$data[mileage]', '$data[doors]', '$data[condtion]', '$data[passenger]', '$data[color]', '$data[others]','$img_url', '$data[publication_status]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Blog Information Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*all user post for index page*/
    public function all_userPost_info(){
        $query = "SELECT * FROM tbl_user_post WHERE publication_status = 1";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }
    /*all user post for admin panel*/
    public function all_userPost_info_for_admin(){
        $query = "SELECT * FROM tbl_user_post";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*single view for car details page*/
    public function single_view_userPost_info_by_id($id){
        $query = "SELECT * FROM tbl_user_post WHERE user_post_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*user post for car details page*/
    public function all_userPost_info_for_footer(){
        $query = "SELECT * FROM tbl_user_post WHERE publication_status = 1 ORDER BY user_post_id DESC LIMIT 3";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*user post picture for footer*/
    public function all_userPost_picture_for_footer(){
        $query = "SELECT car_image FROM tbl_user_post WHERE publication_status = 1 ORDER BY user_post_id DESC LIMIT 12";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


    /*edit user post in admin panel*/
    public function edit_user_post_info_by_id($id){
        $query = "SELECT * FROM tbl_user_post WHERE user_post_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update user post in admin panel*/
    public function update_user_post_info($data){
        if($_FILES['car_image']['name']) {
            $this->imageUnlink($data);/*this code for image delete(unlink) from the folder*/
            $img_url = $this->save_image_info(); /*this code for calling a image function*/

            $query = "UPDATE tbl_user_post SET car_name='$data[car_name]', car_price='$data[car_price]', car_details='$data[car_details]', car_model='$data[car_model]',
                  car_registration='$data[car_registration]', cng_status='$data[cng_status]', cng_com='$data[cng_com]', fuel_type='$data[fuel_type]',
                   car_cc='$data[car_cc]', gear='$data[gear]', all_option='$data[all_option]', music='$data[music]', serial_number='$data[serial_number]',
                   engine='$data[engine]', mileage='$data[mileage]', doors='$data[doors]', condtion='$data[condtion]', passenger='$data[passenger]', 
                   color='$data[color]', others='$data[others]', car_image='$img_url', publication_status='$data[publication_status]' WHERE user_post_id='$data[user_post_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "User Post Information Updated Successfully!";
                header('Location: manage_user_post.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }else{
            $query = "UPDATE tbl_user_post SET car_name='$data[car_name]', car_price='$data[car_price]', car_details='$data[car_details]', car_model='$data[car_model]',
                  car_registration='$data[car_registration]', cng_status='$data[cng_status]', cng_com='$data[cng_com]', fuel_type='$data[fuel_type]',
                   car_cc='$data[car_cc]', gear='$data[gear]', all_option='$data[all_option]', music='$data[music]', serial_number='$data[serial_number]',
                   engine='$data[engine]', mileage='$data[mileage]', doors='$data[doors]', condtion='$data[condtion]', passenger='$data[passenger]', 
                   color='$data[color]', others='$data[others]', publication_status='$data[publication_status]' WHERE user_post_id='$data[user_post_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "User Post Information Updated Successfully!";
                header('Location: manage_user_post.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }
    }


    /*delete user post in admin panel*/
    public function delete_user_post_info($id){
        $query = "DELETE FROM tbl_user_post WHERE user_post_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "User Post Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


    /*this function for image uploaded */
    public function save_image_info(){

        $image_extensions_allowed = array("gif", "jpeg", "jpg", "png");
        $file_name = $_FILES["car_image"]["name"];
        $ext = strtolower(substr(strrchr($file_name, "."), 1));
        $directory = $this->uploadFilePath.'mainSite/assets/image/';
        $target = $directory . basename( $file_name) ;
        $image_name     = basename($file_name);
        $new_img_url    = $image_name;
        $image_size = $_FILES['car_image']['size'];

        if (!empty($_FILES)) {
            if ($image_size > 5000000) {
                die('File size is too large! Please upload Small file.');
            } elseif(!in_array($ext, $image_extensions_allowed)) {
                die("You must upload a file with one of the following extensions: ".$ext);
            }
            else{
                //Now upload here
                if(move_uploaded_file($_FILES['car_image']['tmp_name'], $target))
                {
                    return $new_img_url;
                }
                else {
                    die('Sorry, there was a problem uploading your file.');
                }
            }
        } else {
            die('The file you Upload is not an image! Please upload a Valid Image.');
        }
    }



    /*this function for image unlink*/
    public function imageUnlink($imgdata){
        $aboutme_id = $imgdata['user_post_id'];
        $sql = "SELECT car_image FROM tbl_user_post WHERE user_post_id='$aboutme_id'";
        $query_result = mysqli_query($this->db_connect, $sql);
        $user_post_image = mysqli_fetch_assoc($query_result);
        return unlink($user_post_image['car_image']);
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
}