<?php
// Establish Oracle database connection
$connection = oci_connect('c##saiman', 'Stha_12', '//192.168.1.69/XE');

if (!$connection) {
    $error_message = oci_error();
    echo "Failed to connect to Oracle: " . $error_message['message'];
    exit();
}

oci_close($connection);

?>