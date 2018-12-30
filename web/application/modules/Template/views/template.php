<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="<?php echo DISTPATH.'app.css' ?>">
<?php $this->load->view('add-on/script'); ?>
<?php $this->load->view('add-on/link'); ?>
<title><?php echo $title ?></title>
</head>
<body>
<?php
echo Modules::run('template/navbar');
echo '<div class="container" >';
$this->load->view($module.'/'.$view_file);
echo '</div>';
?>

<script src="<?php echo DISTPATH .'app.js'?>"></script>
</body>
</html>