<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Search Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="app-wrapper">   
<?php
require_once __DIR__ . '/component/header.php';
require_once __DIR__ . '/component/search.php';
require_once __DIR__ . '/component/history.php';
?>
</div>
<div class="auth-wrapper flex center">
    <div id="auth-container" class="flex flex-col center">
        <?php include __DIR__ . '/login.php'; ?>
    </div>
</div>


</body>
</html>