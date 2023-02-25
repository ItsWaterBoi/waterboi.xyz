<?php 
    
    $errortype = htmlspecialchars($_GET["error"]);

?>
<?php define("tabname", "Error"); ?>
<?php include_once("core/inc/header.php"); ?>
<h1>Uh Oh! <?php if (!isset($_GET["error"])){ echo "Looks like you encountered a " . $errortype . " Error!</h1>";}
