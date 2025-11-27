<?php
/**
 * download.php
 * 
 * Simple PHP script to handle CV/Resume download
 * 
 * This script:
 * 1. Sets the appropriate headers for file download
 * 2. Reads the resume.pdf file
 * 3. Sends it to the browser for download
 */

// Define the file path - resume.pdf should be in the assets folder
$file = 'assets/resume.pdf';

// Check if the file exists
if (file_exists($file)) {
    // Set headers to force download
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="resume.pdf"');
    header('Content-Length: ' . filesize($file));
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    
    // Clear any output buffers
    ob_clean();
    flush();
    
    // Read the file and output it
    readfile($file);
    
    // Exit to prevent any additional output
    exit;
} else {
    // If file doesn't exist, show an error message
    header('HTTP/1.0 404 Not Found');
    echo 'Resume file not found.';
    exit;
}
?>

