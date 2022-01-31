<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $title ?? '' ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<header>
    <div class="logo">
        <div class="logo_title">My site</div>
    </div>
</header>
<div class="container">
    <?php echo $content ?? '' ?>
</div>
<footer>
    &copy; my site
</footer>
</body>
</html>