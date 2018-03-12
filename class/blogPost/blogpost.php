<?php

require_once ('database.php');

class Blogpost extends Database{
    public function save_user_post_info($data){
        $img_url = $this->save_image_info(); /*this line for calling a image function*/

        $query = "INSERT INTO tbl_blog_post (post_title, post_details, related_topic, post_Date, post_image, publication_status)"
            . "VALUES('$data[post_title]', '$data[post_details]', '$data[related_topic]', '$data[post_Date]', '$img_url', '$data[publication_status]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Blog Post Information Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }


    /*all blog post in blog page*/
    public function all_blog_post_info(){
        $query = "SELECT * FROM tbl_blog_post WHERE publication_status = 1 ORDER BY blog_post_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all blog post in admin panel*/
    public function all_blog_post_info_for_admin(){
        $query = "SELECT * FROM tbl_blog_post ORDER BY blog_post_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*single view blog post for blog post details*/
    public function single_view_blog_post_info_by_id($id){
        $query = "SELECT * FROM tbl_blog_post WHERE blog_post_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit blog post in admin panel*/
    public function edit_blog_post_info_by_id($id){
        $query = "SELECT * FROM tbl_blog_post WHERE blog_post_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update blog post*/
    public function update_blog_post_info($data){
        if($_FILES['post_image']['name']) {
            $this->imageUnlink($data);/*this code for image delete(unlink) from the folder*/
            $img_url = $this->save_image_info(); /*this code for calling a image function*/

            $query = "UPDATE tbl_blog_post SET post_title='$data[post_title]', post_details='$data[post_details]', related_topic='$data[related_topic]', post_Date='$data[post_Date]',
                  post_image='$img_url', publication_status='$data[publication_status]' WHERE blog_post_id='$data[blog_post_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Blog Post Information Updated Successfully!";
                header('Location: manage_blog_post.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }else{
            $query = "UPDATE tbl_blog_post SET post_title='$data[post_title]', post_details='$data[post_details]', related_topic='$data[related_topic]', post_Date='$data[post_Date]',
                   publication_status='$data[publication_status]' WHERE blog_post_id='$data[blog_post_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Blog Post Information Updated Successfully!";
                header('Location: manage_blog_post.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }
    }

    public function delete_blog_post_info($id){
        $query = "DELETE FROM tbl_blog_post WHERE blog_post_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Blog Post Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*this function for image uploaded */
    public function save_image_info(){
        $old_image_url  = $_FILES['post_image']['tmp_name'];
        $directory      = '../../../mainSite/assets/blog_post_image/';
        $image_name     = $_FILES['post_image']['name'];
        $new_img_url    = $directory.$image_name;

        $image_type   = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_size = $_FILES['post_image']['size'];
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

    /*this function for image unlink*/
    public function imageUnlink($imgdata){
        $blog_post_id = $imgdata['blog_post_id'];
        $sql = "SELECT post_image FROM tbl_blog_post WHERE blog_post_id='$blog_post_id'";
        $query_result = mysqli_query($this->db_connect, $sql);
        $blog_post_image = mysqli_fetch_assoc($query_result);
        return unlink($blog_post_image['post_image']);
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

    /*blog post for right sidebar*/
    public function all_blog_post_info_for_sidebar(){
        $query = "SELECT * FROM tbl_blog_post WHERE publication_status = 1 ORDER BY blog_post_id ASC LIMIT 3 ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*view all contact address in Blog Page */
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