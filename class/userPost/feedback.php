<?php
require_once('database.php');

class Feedback extends Database {

    public function save_cliendFeedback_info($data){
        $img_url = $this->save_image_info(); /*this line for calling a image function*/

        $query = "INSERT INTO tbl_client_feedback (client_name, client_type, feeadback_message, client_image, publication_status)"
            . "VALUES('$data[client_name]', '$data[client_type]', '$data[feeadback_message]', '$img_url', '$data[publication_status]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Your Feedback Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }

    }

    public function all_clientFeedback_info(){
        $query = "SELECT * FROM tbl_client_feedback WHERE publication_status = 1 ORDER BY client_feedback_id DESC LIMIT 5";


        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);


            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*this function for image uploaded*/
    public function save_image_info(){
        $old_image_url  = $_FILES['client_image']['tmp_name'];
        $directory      = 'assets/client_feedback_image/';
        $image_name     = $_FILES['client_image']['name'];
        $new_img_url    = $directory.$image_name;

        $image_type   = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_size = $_FILES['client_image']['size'];
        $check      = getimagesize($old_image_url);

        if($check){
            if(file_exists($new_img_url)){
                die('The file alredy exits! Please Try another one.');
            }else{
                if ($image_size>5000000){
                    die('File size is too large! Please upload Small file.');
                }else{
                    if ($image_type != 'jpg' && $image_type != 'png'){
                        die('File type is not valid! Please upload JPG or PNG file.');
                    }else{
                        /*code for move image in our project folder and etc*/
                        move_uploaded_file($old_image_url, $new_img_url);
                        return $new_img_url;
                    }
                }
            }
        }else{
            die('The file you Upload is not an image! Please upload a Valid Image.');
        }

    }

}