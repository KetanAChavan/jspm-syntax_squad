<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['Id'])){
    header("Location: index.php");
    exit();
}else if ($_SESSION['application_status'] ==1){
    header("Location:submit.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group input[type="file"] {
            padding: 0;
        }

        .form-group .form-error {
            color: red;
            font-size: 12px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .form-group select:invalid {
            color: gray;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Application Form</h2>
    <form id="applicationForm" action="submit.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="studentName">Student Name</label>
            <input type="text" id="studentName" name="studentName" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <select id="address" name="address" required>
                <option value="" disabled selected>Select Address (Location) in Pune</option>
                <option value="Pune City Center, Pune - 411001">Pune City Center, Pune - 411001</option>
                <option value="Kothrud, Pune - 411038">Kothrud, Pune - 411038</option>
                <option value="Hadapsar, Pune - 411028">Hadapsar, Pune - 411028</option>
                <option value="Viman Nagar, Pune - 411014">Viman Nagar, Pune - 411014</option>
                <option value="Hinjewadi, Pune - 411057">Hinjewadi, Pune - 411057</option>
                <option value="Baner, Pune - 411045">Baner, Pune - 411045</option>
                <option value="Wakad, Pune - 411057">Wakad, Pune - 411057</option>
                <option value="Pimpri-Chinchwad, Pune - 411017">Pimpri-Chinchwad, Pune - 411017</option>
            </select>
        </div>

        <div class="form-group">
            <label for="stream">Student Stream</label>
            <select id="stream" name="stream" required>
                <option value="" disabled selected>Select Stream</option>
                <option value="Arts">Arts</option>
                <option value="Science">Science</option>
                <option value="Commerce">Commerce</option>
            </select>
        </div>

        <div class="form-group">
            <label for="lastSchool">Last School</label>
            <input type="text" id="lastSchool" name="lastSchool" required>
        </div>

        <div class="form-group">
            <label for="marks">10th Class Marks</label>
            <input type="number" id="marks" name="marks" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="marksPDF">Attach 10th Class Marks PDF</label>
            <input type="file" id="marksPDF" name="marksPDF" accept="application/pdf" required>
        </div>

        <div class="form-group">
            <label for="leavingCertificate">Attach Leaving Certificate PDF</label>
            <input type="file" id="leavingCertificate" name="leavingCertificate" accept="application/pdf" required>
        </div>

        <div class="form-group">
            <button type="submit">Submit Application</button>
        </div>
    </form>
</div>

</body>
</html>
