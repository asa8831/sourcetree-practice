<h1>タイトル</h1>
<div class="welcome_user">Welcome </div>
edited
<?php echo Asset::img('logo.png',array('width'=>'200','alt'=>'タイトル画像')); ?>
<?php echo Html::anchor('welcome','トップへ'); ?>

<?php Asset::add_path('assets/upload/', 'img'); ?>
<?php echo Asset::img('user_img.png',array('width'=>'200','alt'=>'タイトル画像')); ?>