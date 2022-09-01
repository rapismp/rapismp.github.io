<?php

if($_POST["message"]) {

mail("rfesko5@gmail.com", "Here is the subject line",

$_POST["insert your message here"]. "From: an@email.address");

}

?>

<!DOCTYPE html>
<html>
<form method="post" action="subscriberform.php">

<textarea name="message"></textarea>

<input type="submit">

</form>
</html>
