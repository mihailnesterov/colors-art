<?php
/**
 * все модальные окна
 */
?>

<div id="order" class="modal animated fadeIn" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content p-3">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white">Творческая студия <strong>COLORS-ART</strong></h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center bg-white p-0">
        <form id="submit-form" name="submit-form" action="" method="post" class="border" style="border-top:0 !important;">
        	<div class="bg-light1 px-4 pt-4 pb-0 mb-2">
	          <div class="form-group">
	            <input type="text" class="form-control" id="your-name-modal" name="your-name-modal" placeholder="Ваше имя" required>
	          </div>
	          <div class="form-group">
	            <input type="text" class="form-control" id="your-phone-modal" name="your-phone-modal" placeholder="Ваш телефон" required>
	          </div>
	          <div class="form-group">
	            <input type="text" class="form-control" id="your-email-modal" name="your-email-modal" placeholder="Ваш email">
	          </div>
	          <div class="form-group mb-2">
	            <textarea class="form-control" id="your-comment-modal" name="your-comment-modal" rows="3" placeholder="Комментарий"></textarea>
	          </div>
	        </div>
	          <div class="form-group form-check mb-3 ml-3">
	            <input checked type="checkbox" class="form-check-input mb-0 mt-2" id="privacy-policy" name="privacy-policy">
	            <label class="form-check-label small text-secondary" for="privacy-policy">Согласен с условиями <a href="/privacy-policy" target="_blank" class="text-secondary">Политики конфиденциальности</a></label>
	          </div>
	          <div class="form-group mb-4">
	          	<button id="submit-btn-modal" name="submit-btn-modal" type="submit" class="btn btn-success btn-lg">Записаться</button>
	        </div>
        </form>
        
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

<div id="popup" class="modal mt-5 animated fadeIn" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-center p-0">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white">Записаться на занятия в <strong>COLORS-ART</strong></h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
        <form id="popup-form" name="popup-form" action="" method="post" class="border1" style="border-top:0 !important;">
        	<div class="px-4 pt-4 pb-0 mb-2">
	          <div class="form-group">
	            <input type="text" class="form-control" id="your-name-popup" name="your-name-popup" placeholder="Ваше имя" required>
	          </div>
	          <div class="form-group">
	            <input type="text" class="form-control" id="your-phone-popup" name="your-phone-popup" placeholder="Ваш телефон" required>
	          </div>
	        </div>
	          <div class="form-group form-check mb-3">
	            <input checked type="checkbox" class="form-check-input mb-0 mt-2" id="privacy-policy" name="privacy-policy">
	            <label class="form-check-label small text-secondary" for="privacy-policy">Согласен с условиями <a href="/privacy-policy" target="_blank" class="text-secondary">Политики конфиденциальности</a></label>
	          </div>
	          <div class="form-group mb-4">
	          	<button id="submit-btn-popup" name="submit-btn-popup" type="submit" class="btn btn-success btn-lg">Записаться</button>
	        </div>
        </form>
        
      </div>
    </div>
  </div>
</div>

<?php
            
// PHP-скрипты обработки форм заявок

// форма заявки
if ( isset($_POST['submit-btn-modal'])) { // проверяем была ли нажата кнопка ОТПРАВИТЬ
    
    // получаем данные из формы и заносим их в переменные
    $name=$_POST['your-name-modal'];
    $email=$_POST['your-email-modal'];
    $phone=$_POST['your-phone-modal'];
    $comment=$_POST['your-comment-modal'];
    
    // получаем url и дату-время
    $url = $_SERVER['REQUEST_URI'];
    date_default_timezone_set('Europe/Moscow');
    $date = date('d-m-Y H:i:s');

    // отправка почтового сообщения:
    
    // формируем заголовок и тело письма
    $headers = array(
		'From: COLORS-ART <zgrmarket@mail.ru>',	// !!! поменять везде zgrmarket на realty2010 и перенастроить плагин WP Mail SMTP
		'content-type: text/html',	// формат сообщения = html
		//'Cc: Copy <vladilena777@list.ru>',	// можно так отправлять копию
		//'Cc: any@mail.ru', // можно подключить другие копии, но использовать только простой email адрес
	);
    $theme_self = 'Заявка с сайта от пользователя '.$name;
    $mail_to_self = 'realty2010@mail.ru, vladilena777@list.ru'; // адрес(а) куда отправлять письмо: realty2010@mail.ru, vladilena777@list.ru
    
    // тело письма для себя:
    $message_self = '
    <html>
    <head>
      <meta charset="utf-8">
      <style>
      	#wrapper {
      		margin: 0 auto;
      		max-width: 900px;
      		background-color: #f5f5f5;
      		padding: 30px;
      	}
      	table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            background-color: #fff;
          }
          table td {
            border: 1px black solid;
            padding: 10px;
          }
      </style>
    </head>
    <body>
    <div id="wrapper">
    <h1>Заявка с сайта colors-art.ru:</h1>
      <table>
      	<tbody>
          <tr>
              <td width="30%">Имя:</td>
              <td>'.$name.'</td>
          </tr>
          <tr>
              <td>email:</td>
              <td>'.$email.'</td>
          </tr>
          <tr>
              <td>Телефон:</td>
              <td>'.$phone.'</td>
          </tr>
          <tr>
              <td>Текст:</td>
              <td>'.$comment.'</td>
          </tr>
          <tr>
              <td>Дата/время:</td>
              <td>'.$date.'</td>
          </tr>
          <tr>
              <td>URL:</td>
              <td>'.$url.'</td>
          </tr>
          </tbody>
      </table>
      </div>
    </body>
    </html>
    ';
    
    // тема письма для клиента:
    $theme_client = 'Оформлена заявка на сайте colors-art.ru';
    // добавляем блок с кнопками оплаты, если блок не пустой
    $payments = '';
    /*if(get_payments()) {
    	$payments += '<h3>Оплатить курс:</h3>'.get_payments();
    }*/
    // тело письма для клиента:
    $message_client = '
    <html>
    <head>
      <meta charset="utf-8">
      <style>
      	#wrapper {
      		margin: 0 auto;
      		max-width: 900px;
      		background-color: #f5f5f5;
      		padding: 30px;
      	}
      </style>
    </head>
    <body>
	    <div id="wrapper">
		    <h1>Здравствуйте, <strong>'.$name.'!</strong></h1>
		    <hr>
		    <h3>Ваша заявка получена, в течение рабочего дня мы свяжемся с Вами</h3>
		    <h3>Спасибо, что обратились в <strong>COLORS-ART</strong>!</h3>
			<hr>
			'.$payments.'
			<h3>Наши контакты:</h3>
			<ul>
				<li><strong>Творческая студия Colors-Art</strong></li>
				<li>+7 (929) 909-29-25</li>
				<li><a href="https://colors-art.ru">colors-art.ru</li>
				<li><a href="mailto:realty2010@mail.ru">realty2010@mail.ru</a></li>
				<li>г. Москва, ул. Средняя Первомайская, д.4 каб.18</li>
				<li>пн-вс 09:00 - 21:00</li>
			</ul>
	    </div>
    </body>
    </html>
    ';
    
    // Отправляем письмо себе на $mail_to с помощью WP-PHP-функции wp_mail()
    wp_mail($mail_to_self, $theme_self, $message_self, $headers);
    // Отправляем отбивку клиенту, если email не пустой
    if($email) {
    	wp_mail($email, $theme_client, $message_client, $headers);
    }
    
    
    // перенаправляем на страницу "Спасибо..." с помощью JS
    echo '<script>location.replace("'."/thank-you-page".'");</script>';
}
// всплывающее окно
if ( isset($_POST['submit-btn-popup'])) { // проверяем была ли нажата кнопка ОТПРАВИТЬ
    
    // получаем данные из формы и заносим их в переменные
    $name=$_POST['your-name-popup'];
    $phone=$_POST['your-phone-popup'];
    
    // получаем url и дату-время
    $url = $_SERVER['REQUEST_URI'];
    date_default_timezone_set('Europe/Moscow');
    $date = date('d-m-Y H:i:s');

    // отправка почтового сообщения:
    
    // формируем заголовок и тело письма
    $headers = array(
		'From: COLORS-ART <zgrmarket@mail.ru>',	// !!! поменять везде zgrmarket на realty2010 и перенастроить плагин WP Mail SMTP
		'content-type: text/html',	// формат сообщения = html
		//'Cc: Copy <vladilena777@list.ru>',	// можно так отправлять копию
		//'Cc: any@mail.ru', // можно подключить другие копии, но использовать только простой email адрес
	);
    $theme_self = 'Заявка из всплывающего окна от пользователя '.$name;
    $mail_to_self = 'realty2010@mail.ru, vladilena777@list.ru'; // адрес(а) куда отправлять письмо: realty2010@mail.ru, vladilena777@list.ru
    
    // тело письма для себя:
    $message_self = '
    <html>
    <head>
      <meta charset="utf-8">
      <style>
      	#wrapper {
      		margin: 0 auto;
      		max-width: 900px;
      		background-color: #f5f5f5;
      		padding: 30px;
      	}
      	table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            background-color: #fff;
          }
          table td {
            border: 1px black solid;
            padding: 10px;
          }
      </style>
    </head>
    <body>
    <div id="wrapper">
    <h1>Заявка из всплывающего окна с сайта colors-art.ru:</h1>
      <table>
      	<tbody>
          <tr>
              <td width="30%">Имя:</td>
              <td>'.$name.'</td>
          </tr>
          <tr>
              <td>Телефон:</td>
              <td>'.$phone.'</td>
          </tr>
          <tr>
              <td>Дата/время:</td>
              <td>'.$date.'</td>
          </tr>
          <tr>
              <td>URL:</td>
              <td>'.$url.'</td>
          </tr>
          </tbody>
      </table>
      </div>
    </body>
    </html>
    ';
    
    // тема письма для клиента:
    $theme_client = 'Оформлена заявка на сайте colors-art.ru';
    // добавляем блок с кнопками оплаты, если блок не пустой
    $payments = '';
    /*if(get_payments()) {
    	$payments += '<h3>Оплатить курс:</h3>'.get_payments();
    }*/
    // тело письма для клиента:
    $message_client = '
    <html>
    <head>
      <meta charset="utf-8">
      <style>
      	#wrapper {
      		margin: 0 auto;
      		max-width: 900px;
      		background-color: #f5f5f5;
      		padding: 30px;
      	}
      </style>
    </head>
    <body>
	    <div id="wrapper">
		    <h1>Здравствуйте, <strong>'.$name.'!</strong></h1>
		    <hr>
		    <h3>Ваша заявка получена, в течение рабочего дня мы свяжемся с Вами</h3>
		    <h3>Спасибо, что обратились в <strong>COLORS-ART</strong>!</h3>
			<hr>
			'.$payments.'
			<h3>Наши контакты:</h3>
			<ul>
				<li><strong>Творческая студия Colors-Art</strong></li>
				<li>+7 (929) 909-29-25</li>
				<li><a href="https://colors-art.ru">colors-art.ru</li>
				<li><a href="mailto:realty2010@mail.ru">realty2010@mail.ru</a></li>
				<li>г. Москва, ул. Средняя Первомайская, д.4 каб.18</li>
				<li>пн-вс 09:00 - 21:00</li>
			</ul>
	    </div>
    </body>
    </html>
    ';
    
    // Отправляем письмо себе на $mail_to с помощью WP-PHP-функции wp_mail()
    wp_mail($mail_to_self, $theme_self, $message_self, $headers);
    // Отправляем отбивку клиенту, если email не пустой
    if($email) {
    	wp_mail($email, $theme_client, $message_client, $headers);
    }
    
    
    // перенаправляем на страницу "Спасибо..." с помощью JS
    echo '<script>location.replace("'."/thank-you-page".'");</script>';
}
?>


