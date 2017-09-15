<?php if(!isset($layout_context)){
    $layout_context = "public";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
        <title>Widget Corp <?php if($layout_context == "admin"){ echo "Admin"; }?></title>
        <link href="css/public.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
       <div id="header">
            <h1>Widget Corp <?php if($layout_context == "admin"){ echo "Admin";} ?></h1>
        </div>