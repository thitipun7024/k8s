
<?php
$sql = "SELECT * FROM your_table_name";
$result = sqlsrv_query($conn, $sql);

if ($result === false) {
    die(print_r(sqlsrv_errors(), true));
}

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    // Display other data fields as needed
}

sqlsrv_free_stmt($result);
?>