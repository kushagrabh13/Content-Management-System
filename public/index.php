<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/dbc.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">
        <div id="navigation"> 
            <?php echo public_navigation($current_subject, $current_page); ?>
            <br />
            <hr>
            <a href="login.php" style="margin: 1em;">&raquo; Admin Login</a>
            <hr>
        </div>
        <div id="page">
            <?php if($current_page){ 
            $sub = find_subject_by_id($current_page["subject_id"]);
            ?>
            <h2><?php echo $sub["menu_name"] . " : " . $current_page["menu_name"];?></h2>
            <?php echo nl2br(htmlentities($current_page["content"])); ?>
            <?php }else{ ?>
            <h2>Welcome to Wigdet Corp</h2>
                Please select a subject to view content.
            <?php }?>
        </div>
</div>
<?php include("../includes/layouts/footer.php"); ?>