<!DOCTYPE html>
<html>
<head>
<title><?php print $head_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php print $head; ?><?php print $styles; ?><?php print $scripts; ?>
<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
<!--[if lt IE 9]>
<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body class="<?php print $classes; ?> <?php print $attributes;?>">
<?php print $page_top; ?> <?php print $page; ?> <?php print $page_bottom; ?>
</body>
</html>