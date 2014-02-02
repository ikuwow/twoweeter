<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$title_for_layout = 'Twoweeter';

?>
<!DOCTYPE html>
<html>
<!-- <html lang="ja"> -->
<!-- <html lang="en"> -->
<head>
	<?php echo $this->Html->charset(); ?>
    <meta name="description" content="">
    <meta name="author" content="ゐくを ikuwow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('font-awesome/css/font-awesome.min.css');

        /* ブロックの呼び出し。
            デフォルトだと何も指定されていないため、動作しない。
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
         */
	?>
</head>
<body>
    <!--
	<div id="container">
		<div id="header">
			<h1>Twoweeter</h1>
		</div>
		<div id="content">
    -->

<!-- JavaScript -->
<?php echo $this->Html->script('jquery-1.10.2');?>
<?php echo $this->Html->script('bootstrap');?>
<!-- 本当は後ろで読み込みたいけど、contentの中に
　　 どんなjsがくるかわからない。 -->

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
    <!--
		</div>
		<div id="footer">
		</div>
	</div>
    -->
    <?php echo $this->element('footer');?>

	<?php echo $this->element('sql_dump'); ?>


</body>
</html>
