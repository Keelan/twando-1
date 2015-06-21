<?php

global $header_info;
$header_info['js_scripts'] =  '<script type="text/javascript" src="inc/scripts/anytime.c.js"></script>' . "\n" . '<link rel="stylesheet" type="text/css" href="inc/scripts/anytime.c.css" />' . "\n" .'<script type="text/javascript" src="inc/scripts/jquery.form.js"></script>' . "\n" . '<script type="text/javascript" src="inc/scripts/jquery.form.min.js"></script>' . "\n" . '';
if (empty($header_info['on_load'])) { $header_info['on_load'] = ""; }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?=BASE_LINK_URL?>" />
<title>Twitter App</title>
<meta name="robots" content="noindex, follow" />
<!-- Style -->
<link href="inc/style/style.css" rel="stylesheet" type="text/css" />
<link href="inc/style/anytime.c.css" rel="stylesheet" type="text/css" />
<!-- Scripts -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="inc/scripts/ajax_scripts.js"></script>



<?=$header_info['js_scripts']?>

<!-- Favicon -->
<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<?php
if ($header_info['on_load']) {
?>
<script type="text/javascript">
$(document).ready(function() {
 <?=$header_info['on_load']?>

});
</script>
<?php
}
?>
<body>

<!-- Start of container -->
<div id="container">

<!-- Header -->
<div id="header_main">
  <a href="<?=BASE_LINK_URL?>"><img src="inc/images/logo.gif" width="407" height="147" alt="Twando" /></a>
</div>

<!-- Centre main -->
<div id="centre_main">


