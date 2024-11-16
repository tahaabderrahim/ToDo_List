<?php

include 'db.php';
$id = $_GET['id']; // Correctly access the URL parameter using $_GET
if ($id) {
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id=?"); // Correct spelling of DELETE
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: index.php");
exit;
?>
