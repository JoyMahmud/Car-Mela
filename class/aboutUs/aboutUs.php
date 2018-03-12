<?php
require_once ('database.php');

class AboutUs extends Database{

    public function save_rules_info($data){
        $query = "INSERT INTO tbl_aboutus_rules (rules_details, rules_one, rules_two, rules_three, rules_four, video, publication_status)"
            . "VALUES('$data[rules_details]', '$data[rules_one]', '$data[rules_two]', '$data[rules_three]', '$data[rules_four]', '$data[video]', '$data[publication_status]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Rules Regulations Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*about us rules for about us page*/
    public function all_aboutUs_rules_info(){
        $query = "SELECT * FROM tbl_aboutus_rules WHERE publication_status = 1";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*about us rules for ADMIN Panel*/
    public function all_about_us_rules_info_for_admin(){
        $query = "SELECT * FROM tbl_aboutus_rules";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit about us rules*/
    public function edit_about_us_rules_info_by_id($id){
        $query = "SELECT * FROM tbl_aboutus_rules WHERE rules_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update about us rules*/
    public function update_about_us_rules_info($data){
        $query = "UPDATE tbl_aboutus_rules SET rules_details='$data[rules_details]', rules_one='$data[rules_one]', rules_two='$data[rules_two]', rules_three='$data[rules_three]',
                  rules_four='$data[rules_four]', video='$data[video]', publication_status='$data[publication_status]' WHERE rules_id='$data[rules_id]'";
        if (mysqli_query($this->db_connect, $query)) {
            session_start();
            $_SESSION['message'] = "About Us Rules Regulation Updated Successfully!";
            header('Location: manage_rules.php');
        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }


    public function delete_about_us_rules_info($id){
        $query = "DELETE FROM tbl_aboutus_rules WHERE rules_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "About Us Rules Regulation Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /* ........................................About us Rules and Regulations Functionality End Here....................................*/



    public function save_choose_us_info($data){
        $query = "INSERT INTO tbl_aboutus_choose_us (choose_details, reason_one, reason_two, reason_three, reason_four, reason_five, reason_six, publication_status)"
            . "VALUES('$data[choose_details]', '$data[reason_one]', '$data[reason_two]', '$data[reason_three]', '$data[reason_four]', '$data[reason_five]', '$data[reason_six]', '$data[publication_status]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "The Reason of Choosing Us Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*about us choose for about us choose area*/
    public function all_choose_us_info(){
        $query = "SELECT * FROM tbl_aboutus_choose_us WHERE publication_status = 1";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*about us choose for Admin panel*/
    public function all_choose_us_info_for_admin(){
        $query = "SELECT * FROM tbl_aboutus_choose_us";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit about us choose*/
    public function edit_about_us_choose_info_by_id($id){
        $query = "SELECT * FROM tbl_aboutus_choose_us WHERE choose_us_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update about us choose*/
    public function update_about_us_choose_info($data){
        $query = "UPDATE tbl_aboutus_choose_us SET choose_details='$data[choose_details]', reason_one='$data[reason_one]', reason_two='$data[reason_two]', reason_three='$data[reason_three]',
                  reason_four='$data[reason_four]', reason_five='$data[reason_five]', reason_six='$data[reason_six]', publication_status='$data[publication_status]' WHERE choose_us_id='$data[choose_us_id]'";
        if (mysqli_query($this->db_connect, $query)) {
            session_start();
            $_SESSION['message'] = "About Us Choose Reason Updated Successfully!";
            header('Location: manage_choose_us.php');
        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*delete about us choose*/
    public function delete_about_us_choose_info($id){
        $query = "DELETE FROM tbl_aboutus_choose_us WHERE choose_us_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "About Us Choose Reason Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /* ........................................About us Choose Us Reason Functionality End Here....................................*/

    public function save_team_info($data){
        $img_url = $this->save_image_info(); /*this line for calling a image function*/
        $query = "INSERT INTO tbl_aboutus_team (member_name, member_designation, member_sort_desc, facebook_link, twitter_link, linkedin_link, googleplus_link, member_image, publication_status)"
            . "VALUES('$data[member_name]', '$data[member_designation]', '$data[member_sort_desc]', '$data[facebook_link]', '$data[twitter_link]', '$data[linkedin_link]', '$data[googleplus_link]', '$img_url', '$data[publication_status]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Team Member Information Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*about us team member for about us team member area*/
    public function all_team_member_info(){
        $query = "SELECT * FROM tbl_aboutus_team WHERE publication_status = 1 ORDER BY team_member_id DESC LIMIT 4";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*about us team member for admin panel*/
    public function all_about_us_member_info_for_admin(){
        $query = "SELECT * FROM tbl_aboutus_team ORDER BY team_member_id DESC";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*Edit about us team Member*/
    public function edit_about_us_team_info_by_id($id){
        $query = "SELECT * FROM tbl_aboutus_team WHERE team_member_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update about us team member*/
    public function update_about_us_team_info($data){
        if($_FILES['member_image']['name']) {
            $this->imageUnlink($data);/*this code for image delete(unlink) from the folder*/
            $img_url = $this->save_image_info(); /*this code for calling a image function*/

            $query = "UPDATE tbl_aboutus_team SET member_name='$data[member_name]', member_designation='$data[member_designation]', member_sort_desc='$data[member_sort_desc]',
                  facebook_link='$data[facebook_link]', twitter_link='$data[twitter_link]', linkedin_link='$data[linkedin_link]', googleplus_link='$data[googleplus_link]', member_image='$img_url', publication_status='$data[publication_status]' WHERE team_member_id='$data[team_member_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "About us Team member Information Updated Successfully!";
                header('Location: manage_team.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }else{
            $query = "UPDATE tbl_aboutus_team SET member_name='$data[member_name]', member_designation='$data[member_designation]', member_sort_desc='$data[member_sort_desc]',
                  facebook_link='$data[facebook_link]', twitter_link='$data[twitter_link]', linkedin_link='$data[linkedin_link]', googleplus_link='$data[googleplus_link]', publication_status='$data[publication_status]' WHERE team_member_id='$data[team_member_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "About us Team member Information Updated Successfully!";
                header('Location: manage_team.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }
    }

    /*delete about us team member*/
    public function delete_about_us_team_member_info($id){
        $query = "DELETE FROM tbl_aboutus_team WHERE team_member_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "About Us Team Member Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /* ........................................About us Team Member Functionality End Here....................................*/


    public function save_service_info($data){
        $query = "INSERT INTO tbl_aboutus_service (service_icon, service_title, service_desc, publication_status)"
            . "VALUES('$data[service_icon]', '$data[service_title]', '$data[service_desc]', '$data[publication_status]')";

        if (mysqli_query($this->db_connect, $query)) {
            $message = "Service Information Save Successfully!";
            return $message;

        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*about us services for about us page*/
    public function all_service_info(){
        $query = "SELECT * FROM tbl_aboutus_service WHERE publication_status = 1 ORDER BY service_id DESC LIMIT 6";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*about us services for admin panel*/
    public function all_about_us_services_info_for_admin(){
        $query = "SELECT * FROM tbl_aboutus_service ORDER BY service_id DESC";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit about us services*/
    public function edit_about_us_services_info_by_id($id){
        $query = "SELECT * FROM tbl_aboutus_service WHERE service_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update about us services*/
    public function update_about_us_services_info($data){
        $query = "UPDATE tbl_aboutus_service SET service_icon='$data[service_icon]', service_title='$data[service_title]', service_desc='$data[service_desc]', 
                 publication_status='$data[publication_status]' WHERE service_id='$data[service_id]'";
        if (mysqli_query($this->db_connect, $query)) {
            session_start();
            $_SESSION['message'] = "About Us Services Updated Successfully!";
            header('Location: manage_services.php');
        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }

    }

    /*delete about us services*/
    public function delete_about_us_services_info($id){
        $query = "DELETE FROM tbl_aboutus_service WHERE service_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "About Us Services Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


    /* ........................................About us Services Functionality End Here....................................*/

    /*this function for image uploaded */
    public function save_image_info(){
        $old_image_url  = $_FILES['member_image']['tmp_name'];
        $directory      = '../../../mainSite/assets/team_member_image/';
        $image_name     = $_FILES['member_image']['name'];
        $new_img_url    = $directory.$image_name;

        $image_type   = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_size = $_FILES['member_image']['size'];
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
        $about_us_team_member_id = $imgdata['team_member_id'];
        $sql = "SELECT member_image FROM tbl_aboutus_team WHERE team_member_id='$about_us_team_member_id'";
        $query_result = mysqli_query($this->db_connect, $sql);
        $member_image = mysqli_fetch_assoc($query_result);
        return unlink($member_image['member_image']);
    }


    /*user post for car About us page*/
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

    /*view all contact address in about us page in footer  */
    public function all_contact_address_info(){
        $query = "SELECT * FROM tbl_contact_us_address";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*view all social address in about us page in footer*/
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
