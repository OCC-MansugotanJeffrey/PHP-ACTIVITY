<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $student_id     = $_POST["student-id"] ?? "";
    $equipment      = $_POST["equipment-name"] ?? "";
    $quantity       = (int) ($_POST["quantity"] ?? 0);
    $borrow_date    = $_POST["borrow-date"] ?? "";

    $stmt = $conn->prepare(
        "INSERT INTO borrow_requests (student_id, equipment, quantity, borrow_date)
         VALUES (?, ?, ?, ?)"
    );
    $stmt->bind_param("ssis", $student_id, $equipment, $quantity, $borrow_date);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header("Location: borrowing_log.php");
    exit;
}

// If someone opens this page directly without submitting the form
header("Location: borrow.php");
exit;
?>