
<?php
if($_POST["message"]) {
    mail("reza@mkzadeh.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>