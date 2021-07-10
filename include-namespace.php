<?php
require_once "create-namespace.php";

use Html\Table as Table;
use Html\Row as Row;

//$table = new Html\Table();
$table = new Table();

$table->title = "My table";
$table->numRows = 5;

//$row = new Html\Row();
$row = new Row();

$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>