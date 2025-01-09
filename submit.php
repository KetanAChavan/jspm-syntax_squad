<?php
include 'connect.php';
session_start();

if (!isset($_SESSION['Id'])) {
    header("Location: index.php");
    exit();
}

$message = "Your application has been submitted successfully";
$statusClass = "success";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST['studentName'];
    $address = $_POST['address'];
    $stream = $_POST['stream'];
    $lastSchool = $_POST['lastSchool'];
    $marks = $_POST['marks'];

    // File upload directory
    $uploadDir = "uploads/";

    // Ensure the directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Validate uploaded files
    if ($_FILES['marksPDF']['type'] != 'application/pdf' || $_FILES['leavingCertificate']['type'] != 'application/pdf') {
        echo "Only PDF files are allowed.";
        exit();
    }

    // Handle Marks PDF
    $marksPDFPath = $uploadDir . basename($_FILES['marksPDF']['name']);
    if (!move_uploaded_file($_FILES['marksPDF']['tmp_name'], $marksPDFPath)) {
        echo "Error uploading Marks PDF.";
        exit();
    }

    // Handle Leaving Certificate PDF
    $leavingCertificatePath = $uploadDir . basename($_FILES['leavingCertificate']['name']);
    if (!move_uploaded_file($_FILES['leavingCertificate']['tmp_name'], $leavingCertificatePath)) {
        echo "Error uploading Leaving Certificate.";
        exit();
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO student_applications (student_name, address, stream, last_school, marks, marks_pdf, leaving_certificate) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $studentName, $address, $stream, $lastSchool, $marks, $marksPDFPath, $leavingCertificatePath);

    if ($stmt->execute()) {
        // Update application_status in user table
        $userId = $_SESSION['Id'];
        $updateStatus = "UPDATE USERS SET application_status = 1 WHERE Id = ?";
        $stmtUpdate = $conn->prepare($updateStatus);
        $stmtUpdate->bind_param("i", $userId);
        $stmtUpdate->execute();

        $_SESSION['application_status'] = 1;

        $message = "Application submitted successfully!";
        $statusClass = "success";
    } else {
        $message = "Error: " . $stmt->error;
        $statusClass = "error";
    }

    $stmt->close();
    $stmtUpdate->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }

        .success {
            color: green;
            font-size: 18px;
            font-weight: bold;
        }

        .error {
            color: red;
            font-size: 18px;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="<?php echo htmlspecialchars($statusClass); ?>">
            <?php echo htmlspecialchars($message); ?>
        </h1>
        <p>Your application has been submitted successfully and is now under processing</p>
        <a href="homepage.php">Go Back to Home</a>
    </div>
</body>
</html>
    