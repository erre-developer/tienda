<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $data['tag_page']; ?></title>
</head>
<body>
	<?php echo token(); ?>
	<section id=<?php echo $data['page_id']; ?>>
		<h1><?php echo $data['page_title']; ?></h1>
		<p><?php echo $data['page_content']; ?></p>
	</section>
	<?php echo base_url(); ?>
	<br>
	<?php echo CLMONEY. formatMoney(18500); ?>

</body>
</html>