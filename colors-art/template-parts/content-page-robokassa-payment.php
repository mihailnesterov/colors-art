<?php
/**
 * Template part for displaying robokassa-payment content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors-Art
 */
 ?>

<div class="container text-center">
	<div class="row">
		<div class="col-12">
<input type="text" placeholder="Ваше имя" />
<br>
<input type="text" placeholder="Телефон" />
 <br>
 <?php

	// Оплата Robokassa
	
	// 1.
	// Оплата заданной суммы с выбором валюты на сайте мерчанта
	// Payment of the set sum with a choice of currency on merchant site 
	
	// регистрационная информация (логин, пароль #1)
	// registration info (login, password #1)
	$mrh_login = "colors-art";
	$mrh_pass1 = "N9I829r6HjaZmBPPkweJ";
	
	// номер заказа
	// number of order
	$inv_id = 1;
	
	// описание заказа
	// order description
	$inv_desc = "Colors-Art (тестовый) заказ № " . $inv_id . " от " . date('d.m.Y h:i:s');
	
	// сумма заказа
	// sum of order
	$out_summ = "15.37";
	
	// тип товара
	// code of goods
	$shp_item = 1;
	
	// язык
	// language
	$culture = "ru";
	
	// кодировка
	// encoding
	$encoding = "utf-8";
	
	// формирование подписи
	// generate signature
	$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");
	
	// HTML-страница с кассой
	// ROBOKASSA HTML-page
	print "<html><script language=JavaScript ".
	      "src='https://auth.robokassa.ru/Merchant/PaymentForm/FormS.js?".
	      "MerchantLogin=$mrh_login&OutSum=$out_summ&InvId=$inv_id&IncCurrLabel=$in_curr".
	      "&Description=$inv_desc&SignatureValue=$crc&Shp_item=$shp_item".
	      "&Culture=$culture&Encoding=$encoding'></script></html>";
	
	// build URL
	$url = "https://auth.robokassa.ru/Merchant/PaymentForm/FormS.js?".
	      "MerchantLogin=$mrh_login&OutSum=$out_summ&InvId=$inv_id&IncCurrLabel=$in_curr".
	      "&Description=$inv_desc&SignatureValue=$crc&Shp_item=$shp_item".
	      "&Culture=$culture&Encoding=$encoding";
	
	//$s = $_GET['s'];
	//$t = $_GET['t'];
	
	echo '<br>'.$url;
	//echo '<br>'.$s.' = '.$t;
	//echo '<script>document.location.href="' . $url . '"</script>';
?>
</div>
</div>
</div>