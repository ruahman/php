<html>
<body>

<a href="_get.php?subject=test&web=foo?subject=PHP&web=W3schools.com">Test $GET</a>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
</html>