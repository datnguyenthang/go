<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Goolutu: Chuyên trang dành cho dịch vụ du lịch';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <?php echo $this->Html->css('bootstrap.min.css');?>
    <?php // echo $this->Html->css('style.css');?>
    <?php echo $this->Html->css('styleadmin.css');?>
    <?php echo $this->Html->script('bootstrap.min.js');?>
    <?php echo $this->Html->script('admin.js');?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php //echo $this->element('layout/_header', [], ['plugin' => false]);?>
    <div id="wrapper">
        <?php echo $this->element('layout/_navadmin', [], ['plugin' => false]);?>
        <div class="container-fluid clearfix">
            <div class="row">
                <nav class="large-3 medium-4 columns" id="actions-sidebar">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide/Show Menu</a>
                    <?= $this->Html->link(__('New'), ['action' => 'add'], [ 'class' => 'btn btn-default']) ?>
                </nav>
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <?php //echo $this->element('layout/_footer', [], ['plugin' => false]);?>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
