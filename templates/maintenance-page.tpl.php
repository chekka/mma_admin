<!DOCTYPE html>
<html data-theme="mma_2018_admin">
	<head>
			<title><?php print $head_title; ?></title>
			<?php print $head; ?>
			<?php print $styles; ?>
			<?php print $scripts; ?>
	</head>
	<body class="<?php print $classes; ?>">
		<div style="margin: 12vh auto 0;max-width:400px;padding-bottom:50px">
			<a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home" style="display:block;width:150px">
			 <img src="<?php print $GLOBALS['base_url']; ?>/<?php print $directory; ?>/images/mma-logo-2017.svg" alt="<?php print t('Home'); ?>" />
			</a>
		</div>	
		<div style="margin: 3vh auto 0;max-width:400px;">
			<div style="padding-left:77px;font-size:16px"><?php print $content; ?></div>
		</div>
	</body>
</html>
