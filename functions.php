<?php
// Sanitize input data
function sanitize($data) {
    global $conn;
    return htmlspecialchars(strip_tags(trim($conn->real_escape_string($data))));
}

// Handle file upload
function upload_profile_pic($file, $user_id) {
    $target_dir = PROFILE_PIC_DIR;
    $imageFileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $new_filename = "user_" . $user_id . "_" . time() . "." . $imageFileType;
    $target_file = $target_dir . $new_filename;
    
    // Check if image file is actual image
    $check = getimagesize($file['tmp_name']);
    if ($check === false) {
        return ['success' => false, 'error' => 'File is not an image.'];
    }
    
    // Check file size (max 2MB)
    if ($file['size'] > 2000000) {
        return ['success' => false, 'error' => 'File is too large (max 2MB).'];
    }
    
    // Allow certain file formats
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed_types)) {
        return ['success' => false, 'error' => 'Only JPG, JPEG, PNG & GIF files are allowed.'];
    }
    
    // Try to upload file
    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        return ['success' => true, 'filename' => $new_filename];
    } else {
        return ['success' => false, 'error' => 'Error uploading file.'];
    }
}
?>