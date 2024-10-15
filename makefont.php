<?php

$output = "this.pdfMake = this.pdfMake || {}; this.pdfMake.vfs = {";
$phpDir = dir('.');

// Process only .ttf or .otf font files in the directory
while (($file = $phpDir->read()) !== false) {
    if (pathinfo($file, PATHINFO_EXTENSION) == 'ttf' || pathinfo($file, PATHINFO_EXTENSION) == 'otf') {
        $output .= '"';
        $output .= $file;
        $output .= '":"';
        $output .= base64_encode(file_get_contents($file));
        $output .= '",';
    }
}

$phpDir->close();

// Remove the last comma and close the JavaScript object
$output = rtrim($output, ',');
$output .= "}";

// Write the output to the vfs_fonts.js file
$fh = fopen('vfs_fonts.js', 'w') or die("CAN'T OPEN FILE FOR WRITING");
fwrite($fh, $output);
fclose($fh);

echo 'vfs_fonts.js created successfully!';
