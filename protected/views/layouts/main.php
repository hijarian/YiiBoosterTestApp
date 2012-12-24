<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div class="container">
		<header>

			<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>

		</header>

		<?php $this->renderPartial('application.views.layouts._topmenu');?>

		<?php $this->renderPartial('application.views.layouts._breadcrumbs');?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<footer>
			<?php echo Yii::powered(); ?>
		</footer>
	</div>
</body>
</html>
