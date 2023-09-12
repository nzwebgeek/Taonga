<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . "/header.php"); ?>

<?php
if(!isset($_SESSION['username'])){
    redirect("../../public");
}


?>


<div id="page-wrapper">
    <div class="container-fluid">

        <?php 
        if($_SERVER['REQUEST_URI'] == "/TaongaBeta2/public/admin/" || $_SERVER['REQUEST_URI'] == "/TaongaBeta2/public/admin/index.php"){
            include(TEMPLATE_BACK . "/admin_content.php");
        }

        if(isset($_GET['contents'])){
            include(TEMPLATE_BACK . "/contents.php");
        }
        

        if(isset($_GET['edit_content'])){
            include(TEMPLATE_BACK . "/edit_content.php");
        }

        ?>


    </div>
</div>
<?php include(TEMPLATE_BACK . "/footer.php"); ?>
