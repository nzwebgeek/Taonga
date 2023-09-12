<?php
$uploads_directory = "uploads";
// helper fns

function last_id(){
    global $connection;

    return mysqli_insert_id($connection);

}

function set_message($msg){

    if(!empty($msg)){

        $_SESSION['message']=$msg;
    }
    else{
        $msg="";
    }
}

function display_message(){

    if(isset($_SESSION['message'])){

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location){
    header("Location: $location ");
}


function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;
    if(!$result){
        die("Query Failed ".mysqli_error($connection));
    }
}

function escape_string($string){

    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}


 function login_user(){

     if(isset($_POST['submit'])){

        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $qry=query("SELECT * FROM admin WHERE username='{$username}'AND password = '{$password}'");
        confirm($qry);

        if(mysqli_num_rows($qry) == 0){

            set_message('Your Input Is Invalid');

            redirect("login.php");
        }
        else{
            $_SESSION['username'] = $username;
            redirect("admin");
        }

     }
 }

 function send_message(){

     if(isset($_POST['submit'])){

        $to = 'fabricflannigan@gmail.com';
        $from_name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $headers = "From: {$from_name}{$email}";

      $results =  mail($to, $subject, $message, $headers);

      if(!$results){
        set_message('error');
        redirect("contact.php");
      }
      else{
          set_message('sent');
      }        
     }
 }
 /************back end functions***********/


/*************admin products page********/
function display_image($picture){
    global $uploads_directory;
    return $uploads_directory . DS . $picture;
}

function get_contents_in_admin(){

    $sqlQry= query("SELECT * FROM content");
    confirm($sqlQry);
   
while($result=fetch_array($sqlQry)){


$content_image= display_image($result['picture']);

$content = <<<DELIMETER
   <tr>
        <td>{$result['id']}</td>
        <td>{$result['name']}<br>
            <a href="index.php?edit_content&id={$result['id']}">
            <img width='100' src="../../resources/{$content_image}" alt="edit pic"></a>
        </td>
        <td>{$result['description']}</td>
        <td><a class="btn btn-success" href="index.php?edit_content&id={$result['id']}"><i class="glyphicon glyphicon-pencil"></i></a>
        </td>

    </tr>
      
   
DELIMETER;
   
   echo $content;
   }
}

//**********************Update Product*************************/
function update_content(){
    
    if(isset($_POST['update'])){
        
    $content_name = escape_string($_POST['name']);
    $content_description = escape_string( $_POST['description']);
    $content_image = $_FILES['picture']['name'];// name

    $image_temp_location = $_FILES['picture']['tmp_name']; //url

    if(empty($content_image)){
        $get_pic = query("SELECT picture FROM content WHERE id =".escape_string($_GET['id'])."");
        confirm($get_pic);

        while($pic = fetch_array($get_pic)){
                $content_image=$pic['picture'];
        }
    }

    move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $content_image);
    
    $query ="UPDATE content SET ";
    $query.= "name         = '{$content_name}'  ,";
    $query.= "description   = '{$content_description}',";
    $query.= "picture         = '{$content_image}' ";
    $query.="WHERE id=" . escape_string($_GET['id']);

    
    $send_update_query=query($query);
    confirm($send_update_query);

    set_message("Content Updated");
    redirect("index.php?contents");
    }
}
 


?>