<meta charset="utf-8" >
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<title>
<?
wp_title();
?>
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta HTTP-EQUIV="Cache-Control" content="no-cache" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="apple-touch-icon" sizes="180x180" href="<?=$this->path('favicon');?>/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?=$this->path('favicon');?>/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?=$this->path('favicon');?>/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?=$this->path('favicon');?>/manifest.json">
<link rel="mask-icon" href="<?=$this->path('favicon');?>/safari-pinned-tab.svg" color="#235aa3">
<link rel="shortcut icon" href="<?=$this->path('favicon');?>/favicon.ico">
<meta name="apple-mobile-web-app-title" content="zenit-orel.ru">
<meta name="application-name" content="zenit-orel.ru">
<meta name="msapplication-config" content="<?=$this->path('favicon');?>/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<?

if(is_user_logged_in()) {?>
<link href="<?=$this->path('css');?>/site-new.css" rel="stylesheet">
<?
} else {?>
<link href="<?=$this->path('css');?>/site.css" rel="stylesheet">	
<?	
}
?>
<?

$right_post = get_post(1989);
echo $right_post->post_content;


$this->tpl('_/script/head_safari_patch', array());

?>