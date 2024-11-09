<?php
$root = "ironix-website";  // Root directory

// List of folders to create
$folders = [
    "$root/assets/css",
    "$root/assets/images",
    "$root/assets/js",
    "$root/includes",
    "$root/pages",
    "$root/admin", // Admin folder
];

// Create folders
foreach ($folders as $folder) {
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
        echo "Folder '$folder' created successfully.<br>";
    }
}

// Create the basic PHP files for includes and pages
$files = [
    "$root/includes/header.php" => '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Ironix Gym</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="../assets/css/style.css"></head><body><nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #17153B;"><div class="container-fluid"><a class="navbar-brand" href="#">Ironix</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarNav"><ul class="navbar-nav ms-auto"><li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li><li class="nav-item"><a class="nav-link" href="../about.php">About Us</a></li><li class="nav-item"><a class="nav-link" href="../services.php">Services</a></li><li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li></ul></div></div></nav>',
    
    "$root/includes/footer.php" => '<footer class="text-center p-4 mt-5" style="background-color: #17153B; color: #C8ACD6;"><p>&copy; 2024 Ironix Gym. All rights reserved.</p><p><a href="../privacy-policy.php" class="text-light">Privacy Policy</a></p></footer><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script></body></html>',
    
    "$root/pages/index.php" => '<?php include("../includes/header.php"); ?><div class="container mt-5"><h1>Welcome to Ironix Gym</h1><p>Your fitness journey starts here!</p></div><?php include("../includes/footer.php"); ?>',
    
    "$root/pages/about.php" => '<?php include("../includes/header.php"); ?><div class="container mt-5"><h1>About Us</h1><p>Learn more about Ironix Gym and our mission!</p></div><?php include("../includes/footer.php"); ?>',
    
    "$root/pages/services.php" => '<?php include("../includes/header.php"); ?><div class="container mt-5"><h1>Our Services</h1><p>Explore our gym services and membership plans!</p></div><?php include("../includes/footer.php"); ?>',
    
    "$root/pages/contact.php" => '<?php include("../includes/header.php"); ?><div class="container mt-5"><h1>Contact Us</h1><p>Get in touch with us for more information!</p></div><?php include("../includes/footer.php"); ?>',
    
    // Admin Portal Files
    "$root/admin/index.php" => '<?php include("../includes/header.php"); ?><div class="container mt-5"><h1>Admin Portal</h1><p>Manage Gym Operations</p></div><?php include("../includes/footer.php"); ?>',
    "$root/admin/login.php" => '<?php include("../includes/header.php"); ?><div class="container mt-5"><h1>Admin Login</h1><form action="" method="POST"><div class="mb-3"><label for="username" class="form-label">Username</label><input type="text" class="form-control" id="username" name="username" required></div><div class="mb-3"><label for="password" class="form-label">Password</label><input type="password" class="form-control" id="password" name="password" required></div><button type="submit" class="btn btn-primary">Login</button></form></div><?php include("../includes/footer.php"); ?>',
    "$root/admin/dashboard.php" => '<?php include("../includes/header.php"); ?><div class="container mt-5"><h1>Dashboard</h1><p>Welcome to the Admin Dashboard. Manage your Gym operations here.</p></div><?php include("../includes/footer.php"); ?>',
    
    // Admin Styles
    "$root/assets/css/admin-style.css" => 'body { background-color: #f4f4f4; color: #433D8B; } .container { padding: 20px; } h1 { color: #17153B; } .btn { background-color: #2E236C; }',
];

// Create the files with the content
foreach ($files as $file => $content) {
    if (!file_exists($file)) {
        file_put_contents($file, $content);
        echo "File '$file' created successfully.<br>";
    }
}

// Create an initial CSS file for custom styles
$cssFile = "$root/assets/css/style.css";
if (!file_exists($cssFile)) {
    file_put_contents($cssFile, 'body { font-family: Arial, sans-serif; background-color: #f4f4f4; color: #433D8B; } h1 { color: #17153B; }');
    echo "CSS file '$cssFile' created successfully.<br>";
}

echo "Folder structure and initial files have been set up.";
?>
