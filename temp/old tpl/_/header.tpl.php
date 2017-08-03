<?

$body_class = '';

if(is_front_page()) {
	$body_class = $body_class . ' index-page ';
}

?><!DOCTYPE html>
<html dir="ltr" lang="ru-RU"> 
<head>
<?
$this->tpl('_/head', array());
wp_head();
?>
</head>
<body <?php body_class($body_class); ?> >

<?
$this->tpl('_/page-loader', array());
?>

<?
$this->tpl('_/navbar', array());
?>

<div class="site-wrap <? if(is_front_page()) { ?>is--hidden<? } ?> ">