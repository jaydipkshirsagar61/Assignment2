<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Search Project</title>
    <link rel="stylesheet" href="/frontend/styles/style.css">
</head>
<body>
   <?php $login=true ?>
    <?php if ($login==true): ?>
        <div class="app-wrapper">
            <?php
            require_once __DIR__ . '/frontend/component/header.php';
            require_once __DIR__ . '/frontend/component/search.php';
            require_once __DIR__ . '/frontend/component/history.php';
            ?>
        </div>
    <?php else: ?>
        <div class="auth-wrapper flex center">
            <div id="auth-container" class="flex flex-col center">
                <?php include __DIR__ . '/frontend/pages/login.php'; ?>
            </div>
        </div>
    <?php endif; ?>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/script/login.js"></script>
    <script src="/script/search.js"></script>
    <script src="/script/history.js"></script>

</body>
</html>