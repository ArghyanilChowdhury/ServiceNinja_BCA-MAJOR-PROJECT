<?php
include('session.php');
include('dbconnection.php');

// Get the candidate ID from the URL
$candidateID = $_GET['q'];

// Fetch the candidate's PDF file name from the database
$query = "SELECT AppCV FROM jobreqs WHERE AppID = ?";
$stmt = $con->prepare($query);
$stmt->bind_param('i', $candidateID);
$stmt->execute();
$stmt->bind_result($cvFileName);
$stmt->fetch();
$stmt->close();

// Define the path to the CV files
$cvFilePath = "C:/xampp/htdocs/Service Ninja.com/USER SECTION/candcv/" . $cvFileName;

// Check if the file exists
if (file_exists($cvFilePath)) {
    // Set headers to display the PDF file
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $cvFileName . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    // Read the file
    @readfile($cvFilePath);
} else {
    echo "The file does not exist.";
}
?>
