<?php
require_once ('common.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ja">
<head>
<title><?php echo $lang['ERROR.TITLE'];?></title>
<meta http-equive="Content-type" content="text/html; charset=EUC-JP">
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="./style_m.css" type="text/css"
	media="only screen and (max-width:480px)" />
<link rel="stylesheet" href="./style.css" type="text/css"
	media="only screen and (min-width:481px)" />
<!--[if IE]>
		<link rel="stylesheet" href="./style.css" type="text/css" media="all"/>	
		<![endif]-->
</head>
<body>
	<div class="contents">
		<h1><?php echo $lang['ERROR.HEADER'];?></h1>
		<br /> <br /> <br /> <br />
		<div class="resultMessage">
			<b> <?php echo $lang['ERROR.MESSAGE1'];?><br />
				<?php echo $lang['ERROR.MESSAGE2'];?>
			</b> <br> <br> <a href="../index.php" target="_parent"><?php echo $lang['ERROR.RETURN'];?></a>
		</div>
	</div>
</body>
</html>