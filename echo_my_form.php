<!DOCTYPE html>
<html>
<body>

<h1>ECHO MY FORM says ...</h1>

<?php
echo "Let's look at this form!<br>";
foreach ($_POST as $param_name => $param_val) {
    echo "This param is: $param_name; With a value of: $param_val<br>\n";
}
echo "Amazing!";
?>

</body>


</html>
