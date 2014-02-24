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

$title_for_layout = 'Twoweeter: timeline';

?>
<!DOCTYPE html>
<html>
<!-- <html lang="ja"> -->
<!-- <html lang="en"> -->
<head>
	<?php echo $this->Html->charset(); ?>
    <meta name="description" content="Twoweeter">
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
        echo $this->Html->css('mypage');

        /* ブロックの呼び出し。
            デフォルトだと何も指定されていないため、動作しない。
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
         */
	?>
</head>
<body>

    <?php echo $this->Session->flash(); ?>

    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">Twoweeter</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#timeline">Timeline</a>
                    </li>
                    <li><a href="#mentions">Mentions</a>
                    </li>
                    <li><a href="#account">Account</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

	<?php echo $this->fetch('content'); ?>

    </div><!-- container -->

    <!-- footer -->
    <div class="container">
        <hr>
        <?php echo $this->element('footer');?>
    </div>
    <!-- /.container -->

	<?php //echo $this->element('sql_dump'); ?>

<!-- JavaScript -->
<?php echo $this->Html->script('jquery-1.10.2');?>
<?php echo $this->Html->script('bootstrap');?>

</body>
</html>
