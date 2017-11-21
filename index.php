<?php 
$goobs_body = "<div class='product-img'>
				<img src=''>
			</div>
				<div class='description'>
				<p class='name'></p>
				<p class='color'></p>
				<p class='price'></p>
			</div>
			<div class='buttons'>
				<a href='#x' class='more'>Подробнее</a>
				<a href='#x' class='btn'>купить</a>
			</div>";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="assets/img/fav.png" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700|Roboto:400,500,700,900" rel="stylesheet"> 
	<title> МНОГО МИШЕК </title>
	<link href="assets/css/style.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/7894f79ab5.js"></script>
</head>
<body>

	<section id="s01">
		<nav id="nav" class="pc_nav">
			<div class="wrap">
				<div class="block logo">
					<p>Много Мишек</p>
				</div>
				<div class="block pc7">
					<p>
						<i class="fa fa-map-marker"></i>
						г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
					</p>
				</div>
				<div class="block time">
					<p>		
						<i class="fa fa-clock-o"></i>
						Пн-Вс 9.00-21.00
					</p>
				</div>
				<div class="block tel pc5">
					<a href="tel:89281317304">8 928 131-73-04</a>
				</div>
				<div class="block">
					<a href="#x" class="btn" onclick="popup(2)">заказать звонок</a>
				</div>
			</div>
		</nav>
		<nav class="tablet_nav tablet">
			<div class="wrap">
				<div class="block">
					<p>
						<i class="fa fa-map-marker"></i>
						г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
					</p>
				</div>
				<div class="block time">
					<p>		
						<i class="fa fa-clock-o"></i>
						Пн-Вс 9.00-21.00
					</p>
				</div>
				<div class="block tel">
					<i class="fa fa-phone"></i>
					<a href="tel:89281317304">8 928 131-73-04</a>
				</div>
			</div>
		</nav>
		<div class="tablet pre_nav">
			<div class="wrap">
				<div class="block logo">
					<p>Много Мишек</p>
				</div>
				<div class="block knopka">
					<a href="#x" class="btn" onclick="popup(2)">заказать звонок</a>
				</div>
			</div>
		</div>
		<nav class="mob">
			<div class="wrap">
				<div class="block logo">
					<p>Много Мишек</p>
				</div>
				<div class="block geo">
					<p>
						<i class="fa fa-map-marker"></i>
						г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
					</p>
				</div>
				<div class="block tel">
					<i class="fa fa-phone"></i>
					<a href="tel:89281317304">8 928 131-73-04</a>
				</div>
				<div class="block time">
					<p>		
						<i class="fa fa-clock-o"></i>
						Пн-Вс 9.00-21.00
					</p>
				</div>
			</div>
		</nav>
		<hr class="devider">

		<div class="wrap">
			<div class="wrap_for_tablet">
				<h1 class="Slab">Большие плюшевые медведи <br> XXL размера в Ростове-на-Дону</h1>
				<div class="description mt5 mb5 pc">
					<span>Она будет визжать от счатья Уже через 3 часа</span>
				</div>
				<div class="description mt5 mb5 tablet">
					<span>Она будет визжать</span> <br>
					<span>от счатья Уже через 3 часа</span>
				</div>
				<p class="present">
					Подари любимой большого медведя XXL размера
				</p>
				<div class="order mt5">
					<p class="now">
						<span>Закажи прямо сейчас</span>
					</p>
					<p class="free">
						<span>Бесплатно</span> доставим за 3 часа!
					</p>
				</div>
			</div>
			<div class="mishka-block">
				<div class="img">
					<img src="assets/img/maintoy.png">
				</div>
				<div class="desc">
					<div class="name">
						<p>Мишка «Барт»</p>
						<p><small>170см, бежевый</small></p>
					</div>
					<div class="price">
						<p> 
							<i class="fa fa-tag orange"></i>
							5300
							<i class="fa fa-rub"></i>
						</p>
					</div>
				</div>
				<form action="spasibo.php" method="post">
					<label for="tel1"><strong>Ваш номер телефона</strong></label>
					<input type="tel" name="tel" required="" placeholder="+7 (___) ___-__-__" id="tel1">
					<input type="hidden" name="comment" value="Мишка «Барт» 170см, бежевый">
					<input type="submit" value="заказать">
					<div class="btn-group" data-toggle="buttons">
						<label class="active">
				          	<input type="checkbox" name='agree' checked required="">
				          	<i class="fa fa-square-o fa-2x"></i>
				          	<i class="fa fa-check-square-o fa-2x"></i> 
				          	<span> Вы принимаете условия <a href="Politika_konfidentcialnosti.docx">Пользовательского соглашения</a></span>
				        </label>
				    </div>
				</form>
			</div>
		</div>
	</section>

	<hr class="devider">


	<section id="s02">
		<div class="wrap">
			<h1>Наши преимущества</h1>
			<div class="box tac fw">
				<div class="cc50">
					<div class="blocks">
						<p class="title">
							<span>большой XXl размер</span>
						</p>
						<p class="text">
							Наши медведи реально <span>большие и классные</span>
						</p>
					</div>
				</div>
				<div class="cc50">
					<div class="blocks">
						<p class="title">
							<span>всегда в наличии</span>
						</p>
						<p class="text">
							Выбирай медведя, мы <span>привезем его сегодня</span>, так все медведи у нас в наличии на складе
						</p>
					</div>
				</div>
				<div class="cc50">
					<div class="blocks">
						<p class="title">
							<span>экспресс доставка</span>
						</p>
						<p class="text">
							<span>Доставим за 3 часа</span> в г. Ростов-на-Дону или в день заказа по Ростовской обл.
						</p>
					</div>
				</div>
				<div class="cc50">
					<div class="blocks">
						<p class="title">
							<span>Оплата при получении</span>
						</p>
						<p class="text">
							Оплачивайте вашу покупку при получении <span>наличными, картой или онлайн на сайте</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="s03">
		<div class="wrap">
			<h1>Каталог мягких игрушек</h1>
			<h1 class="mob">Каталог</h1>
			<div class="catalog">
				<div class="desktop">
	
					<div class='block' id="anchor1" data-page="1" data-number="1">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor2" data-page="1" data-number="2">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor3" data-page="1" data-number="3">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor4" data-page="1" data-number="4">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor5" data-page="2" data-number="5">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor6" data-page="2" data-number="6">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor7" data-page="2" data-number="7">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor8" data-page="2" data-number="8">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor9" data-page="3" data-number="9">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor10" data-page="3" data-number="10">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor11" data-page="3" data-number="11">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor12" data-page="3" data-number="12">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor13" data-page="4" data-number="13">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor14" data-page="4" data-number="14">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor15" data-page="4" data-number="15">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor16" data-page="4" data-number="16">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor17" data-page="5" data-number="17">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor18" data-page="5" data-number="18">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor19" data-page="5" data-number="19">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor20" data-page="5" data-number="20">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor21" data-page="6" data-number="21">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor22" data-page="6" data-number="22">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor23" data-page="6" data-number="23">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor24" data-page="6" data-number="24">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor25" data-page="7" data-number="25">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor26" data-page="7" data-number="26">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor27" data-page="7" data-number="27">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor28"  data-page="7" data-number="28">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor29" data-page="8" data-number="29">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor30" data-page="8" data-number="30">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor31" data-page="8" data-number="31">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor32" data-page="8" data-number="32">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor33" data-page="9" data-number="33">
						<?= $goobs_body ?>
					</div>

					<div class='block' id="anchor34" data-page="9" data-number="34">
						<?= $goobs_body ?>
					</div>
					
					<div class='block' id="anchor35" data-page="9" data-number="35">
						<?= $goobs_body ?>
					</div>
					
					<div class='block' id="anchor36" data-page="9" data-number="36">
						<?= $goobs_body ?>
					</div>
					
					<div class='block' id="anchor37" data-page="10" data-number="37">
						<?= $goobs_body ?>
					</div>
					
					<div class='block' id="anchor38" data-page="10" data-number="38">
						<?= $goobs_body ?>
					</div>
					
					<div class='block' id="anchor39" data-page="10" data-number="39">
						<?= $goobs_body ?>
					</div>
					
					<div class='block' id="anchor40" data-page="10" data-number="40">
						<?= $goobs_body ?>
					</div>

				</div> <!-- End of desktop  -->
			</div> <!-- End of catalog  -->

			<div class="pagination">
				<ul>
					<li class="arrow prev"><i class="fa fa-angle-double-left"></i></li>
					<li class="active num first">1</li>
					<li class="num second">2</li>
					<li class="dotes">...</li>
					<li class="num third">7</li>
					<li class="num fourth">8</li>
					<li class="arrow next"><i class="fa fa-angle-double-right"></i></li>
				</ul>
			</div>

		</div>
	</section>


	<section id="s04">
		<div class="wrap">
			<h1>Наш подход к качеству</h1>
			<div class="fw mt7">
				<div class="item">
					<div class="cc25">
						<img src="assets/img/img1.jpg" alt="">
					</div>
					<div class="cc50">
						<div class="box">
							<p class="title">
								<span>контроль качества</span>
							</p>
							<p class="mt-1">Используем <span>прочную нить</span></p>
							<p>и контролируем <span>качество швов</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="item pc">
					<div class="cc50">
						<div class="box">
							<p class="title">
								<span>качественный мех</span>
							</p>
							<p class="mt-1">Используем <span>качественный густой <br> искусственный мех</span></p>
						</div>
					</div>
					<div class="cc25">
						<img src="assets/img/img2.jpg" alt="">
					</div>
				</div>

				<div class="item tablet">
					<div class="cc25">
						<img src="assets/img/img2.jpg" alt="">
					</div>
					<div class="cc50">
						<div class="box">
							<p class="title">
								<span>качественный мех</span>
							</p>
							<p class="mt-1">Используем <span>качественный густой <br> искусственный мех</span></p>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="item">
					<div class="cc25">
						<img src="assets/img/img3.jpg" alt="">
					</div>
					<div class="cc50">
						<div class="box">
							<p class="title">
								<span>соверменный наполнитель</span>
							</p>
							<p class="mt-1">Плотно наполнены <span>халофайбером</span></p>
							<p>игрушки  <span>не деформируется</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="item pc">
					<div class="cc50">
						<div class="box">
							<p class="title">
								<span>экологичность</span>
							</p>
							<p class="mt-1">Используем только качественные <br> <span>гипоаллергенные</span> метериалы</p>
						</div>
					</div>
					<div class="cc25">
						<img src="assets/img/img4.jpg" alt="">
					</div>
				</div>

				<div class="item tablet">
					<div class="cc25">
						<img src="assets/img/img4.jpg" alt="">
					</div>
					<div class="cc50">
						<div class="box">
							<p class="title">
								<span>экологичность</span>
							</p>
							<p class="mt-1">Используем только качественные <br> <span>гипоаллергенные</span> метериалы</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
	</section>


	<section id="s05">
		<div class="wrap">
			<h1>Часто задавемые вопросы</h1>
			<div class="fw mt2">
				<div class="cc50">
					<img src="assets/img/faq.png" alt="">
				</div>
				<div class="cc50 mt7">
					<div class="accordion">
						<p class="head"> Какие мишки есть в наличии?</p>
						<div class="content">Мы стараемся чтобы все медведи были в наличии и могли порадовать Вас в нужный момент.</div>
					</div>
					<div class="accordion">
						<p class="head"> Сколько стоит доставка мишки?</p>
						<div class="content">
							<p>
								Доставка по г.Ростову-на-Дону – бесплатная, в день заказа или в назначенный вами день и время. 
							</p>
							<p>
								Стоимость доставки в другие города Ростовской области можно уточнить у нашего менеджера.
							</p>
						</div>
					</div>
					<div class="accordion">
						<p class="head"> Как можно оплатить мишку?</p>
						<div class="content">
							<p>
								Оплатить можно наличными курьеру при получении медведя, безналичным переводом на карту Сбербанка 
							</p>
							<p>
								(подробности и условия можно уточнить у нашего менеджера) либо на сайте. 
							</p>
						</div>
					</div>
					<div class="accordion">
						<p class="head"> Как посмотреть медведя в живую?</p>
						<div class="content">
							<p>
								Все наши фото соответствуют медведям в живую. 
							</p>
							<p>
								Но если вы сами хотите убедиться в их качестве, то можете приехать к нам в офис по адресу г. Ростов-на-Дону, пр. Космонавтов 32Б, 09:00 - 21:00 
							</p>
							<p>
								А еще мы можем сфотографировать понравившегося вам медведя и отправить фотографии в WhatsApp, Viber, Telegram.
							</p>
						</div>
					</div>
					<div class="accordion">
						<p class="head"> Какие гарантии вы даете?</p>
						<div class="content">
							<p>
								Мы дорожим своей репутацией и очень хотим чтобы вы к нам вернулись за новым плюшевым другом. 
							</p>
							<p>
								А еще рассказали о нас друзьям. Мы уважаем и ценим своих клиентов, а так же хотим сохранить своё доброе имя. 
							</p>
							<p>
								Поэтому работаем честно и дарим вам только положительные эмоции! 
							</p>
							<p>
								На всех наших мишек и других плюшевых игрушек мы даем гарантию 12 месяцев.
							</p>
						</div>
					</div>
					<div class="accordion">
						<p class="head"> Даете ли вы чек при покупке?</p>
						<div class="content">
							<p>
								Всем нашим покупателям мы предоставляем чек или товарную накладную. 
							</p>
						</div>
					</div>
					<div class="accordion">
						<p class="head">Где можно посмотреть отзывы о вас?</p>
						<div class="content">
							<p>
								Все отзывы можно посмотреть в нашей группе вк. И убедиться в их реальности. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="s06">
		<div class="wrap">
			<div class="question">
				<h1><span>Остались вопросы? Задайте их нам!</span></h1>
				<form action="spasibo.php" method="post">
					<div class="left-block">
						<label for="text">Ваш вопрос</label>
						<textarea name="comment" id="text"></textarea>
					</div>
					<div class="right-block">
						<label for="tel2">Ваш номер телефона</label>
						<input type="tel" name="tel" id="tel2" required="" placeholder="+7 (___) ___-__-__">
						<div class="btn-group" data-toggle="buttons">
							<input type="submit" value="задать вопрос" class="mob">
							<label class="active">
					          	<input type="checkbox" name='agree' checked required="">
					          	<i class="fa fa-square-o fa-2x"></i>
					          	<i class="fa fa-check-square-o fa-2x"></i> 
					          	<span> Вы принимаете условия <a href="Politika_konfidentcialnosti.docx">Пользовательского соглашения</a></span>
					        </label>
					        <input type="submit" value="задать вопрос" class="hide">
					    </div>
					</div>

				</form>
			</div>
		</div>
	</section>


	<section id="s07">
		<div class="wrap">
			<h1>Отзывы наших клиентов</h1>

			<div class="slider">
			  	<div class="slide_viewer">
				    <div class="slide_group">
				      	<div class="slide">
				      		<div class="rev_block">
				      			<p class="title">
				      				<span>«...медведь ей пришелся по душе...»</span>
				      			</p>
				      			<p class="text">
				      				«Добрый день! Хотел бы выразить огромную благодарность за то что вы есть! Купил медведя в середине августа, второй половинке на подарок) Медведь ей пришелся по душе))) Планирую повторить заказ для себя) Еще раз спасибо!!!»
				      			</p>
				      			<p class="name">
				      				Игорь Васильцов, 
				      				<a href="https://vk.com/lekacov" target="_blank">https://vk.com/lekacov</a>
				      			</p>
				      		</div>
				      	</div>
				      	<div class="slide">
				      		<div class="rev_block">
				      			<p class="title">
				      				<span>«...ждите новый заказ...»</span>
				      			</p>
				      			<p class="text">
				      				«Здравствуйте, вчера заказал медведя, подруге на подарок доставили сегодня уже, сидит красавец и ждёт своего времени, в связи этим, за вашу оперативность, за ваше качество, за ваши не дорогие цены хотел выразить огромное благодарность <br> ПС что то мне подсказывает что меня разведут на друга этому медведю, так что ждите новый заказ)спасибо)»
				      			</p>
				      			<p class="name">
				      				Александр Кириченко, 
				      				<a href="https://vk.com/remont_pc_kss" target="_blank">https://vk.com/remont_pc_kss</a>
				      			</p>
				      		</div>
				      	</div>
				      	<div class="slide">
				      		<div class="rev_block">
				      			<p class="title">
				      				<span>«Медведи шикарные, господа...»</span>
				      			</p>
				      			<p class="text">
				      				«Медведи шикарные, господа, плотная обивка, пружинистая, мягкий, хороший мех. Привезли примерно через час, занесли прямо в квартиру, обаятельная, веселая девушка и не менее приветливый парень, на месте распаковали игрушку, проверили. Чертовски доволен выбором продавца, правда. )»
				      			</p>
				      			<p class="name">
				      				Александр Вольнов, 
				      				<a href="https://vk.com/vaultdesign" target="_blank">https://vk.com/vaultdesign</a>
				      			</p>
				      		</div>
				      	</div>
				      	<div class="slide">
				      		<div class="rev_block">
				      			<p class="title">
				      				<span>«...а девушка в восторге...»</span>
				      			</p>
				      			<p class="text">
				      				«Хотел бы выразить свою благодарность за Вашу оперативность в доставке(в течение часа привезли по адресу)Благадарю за качественную работу,приемлемые цены и качественные товары. Рад буду и в дальнейшем пользоваться вашими услугами... Я доволен заказом,а девушка в восторге от медведя.. Спасибо большое....»
				      			</p>
				      			<p class="name">
				      				Иван Кирченков, 
				      				<a href=" https://vk.com/id64079257" target="_blank">https://vk.com/id64079257</a>
				      			</p>
				      		</div>
				      	</div>
				    </div>
			  	</div>
			</div><!-- End // .slider -->


			<div class="directional_nav">
			  	<div class="previous_btn" title="Previous">
			    	<i class="fa fa-chevron-left"></i>
			  	</div>
			  	<div class="next_btn" title="Next">
			    	<i class="fa fa-chevron-right"></i>
			  	</div>
			</div><!-- End // .directional_nav -->

			<a href="https://vk.com/mnogo_mishek161" target="_blank" class="more-revs">Больше отзывов смотрите в нашей группе VK</a>
		</div>
	</section>


	<section id="map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4385456e60b60164bd726733155c419db4423876ec7fed9d224f44d2ebb7609f&amp;width=100%&amp;height=340&amp;lang=ru_RU&amp;scroll=true"></script>
	</section>


	<section id="s09">
		<div class="wrap">
			<div class="fw">
				<div class="cc33">
					<p class="logo">Много Мишек</p>
					<p>Большие плюшевые медведи <br> в г. Ростове-на-Дону</p>
				</div>
				<div class="cc33">
					<p class="title">О нас</p>
					<ul>
						<li>
							<i class="fa fa-caret-right"></i>
							<a href="#s02" class="scrollto">Преимущества</a>
						</li>
						<li>
							<i class="fa fa-caret-right"></i>
							<a href="#s03" class="scrollto">Каталог</a>
						</li>
						<li>
							<i class="fa fa-caret-right"></i>
							<a href="#s04" class="scrollto">Наш подход к качеству</a>
						</li>
						<li>
							<i class="fa fa-caret-right"></i>
							<a href="#s05" class="scrollto">Часто задаваемые вопросы</a>
						</li>
						<li>
							<i class="fa fa-caret-right"></i>
							<a href="#s07" class="scrollto">Отзывы о наших медведях</a>
						</li>
					</ul>
				</div>
				<div class="cc33">
					<p class="title">Контакты</p>
					<ul>
						<li>
							<i class="fa fa-map-marker"></i>
							г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
						</li>
						<li>
							<i class="fa fa-phone"></i>
							<a href="tel:89281317304">8 928 131-73-04</a>
						</li>
						<li>
							<i class="fa fa-facebook-official"></i>
							<a href="www.facebook.com/mnogomishek" target="_blank">www.facebook.com/mnogomishek</a>
						</li>
						<li>
							<i class="fa fa-odnoklassniki-square"></i>
							<a href="www.ok.ru/group/57809037754431" target="_blank">www.ok.ru/group/57809037754431</a>
						</li>
						<li>
							<i class="fa fa-instagram"></i>
							<a href="www.instagram.com/mnogo_mishek" target="_blank">www.instagram.com/mnogo_mishek</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="mob">
				<p class="title">Контакты</p>
				<p class="geo">
					<i class="fa fa-map-marker"></i>
					г. Ростов-на-Дону, пр-кт Космонавтов, 32Б
				</p>
				<p class="tel">
					<i class="fa fa-phone"></i>
					<a href="tel:89281317304">8 928 131-73-04</a>
				</p>
				<div class="socials tac">
					<a href="https://vk.com/mnogo_mishek161" target="_blank"><i class="fa fa-vk"></i></a>
					<a href="www.ok.ru/group/57809037754431" target="_blank"><i class="fa fa-odnoklassniki-square"></i></a>
					<a href="www.facebook.com/mnogomishek" target="_blank"><i class="fa fa-facebook-official"></i></a>
				</div>
			</div>
		</div>
	</section>
	<hr class="grey"></hr>

	<footer id="footer">
		<div class="wrap">
			<p>Все права защищены © 2017 Много мишек</p>
		</div>
	</footer>


	
	<div class="popup-bg" id="popup-bg">

	    <div class="popup" id="popup1">
	        <div class="close" onclick="popup(-1)"><i class="fa fa-times"></i></div>
	        <div class="content">
	            <div class="fw">
	            	<div class="cc45 images">
	            		<div class="big-img">
	            			<div class="img">
            					<img src="" id="big_mishka">
	            			</div>
	            		</div>
	            		<div class="small-images">
	            			<div class="img">
            					<img src="" alt="" id="small1">
            				</div>
	            			<div class="img">
            					<img src="" alt="" id="small2">
            				</div>
	            			<div class="img">
            					<img src="" alt="" id="small3">
            				</div>
	            		</div>
	            	</div>
	            	<div class="cc55 text-part">
	            		<p class="name">  </p>
	            		<p class="params">
	            			<span class="size">  </span><span class="coma">,</span>
	            			<span class="color">  </span>
	            		</p>
	            		<p class="opisanie"></p>
	            		<div class="btn-group pc" data-toggle="buttons">
							<label class="active">
					          	<input type="checkbox" name='agree' checked required="">
					          	<i class="fa fa-square-o fa-2x"></i>
					          	<i class="fa fa-check-square-o fa-2x"></i> 
					          	<span> Вы принимаете условия <a href="Politika_konfidentcialnosti.docx">Пользовательского соглашения</a></span>
					        </label>
					    </div>
				    	<a href="#x" class="video_rev ytbtn">видеообзор</a>
			            <form action="spasibo.php" method="post">
			            	<label for="popup_tel">Ваш номер телефона</label>
			                <input type="tel" name="tel" required="" placeholder="+7 (___) ___-__-__" id="popup_tel">
			                <input type="hidden" name="product_name">
			                <input type="hidden" name="size">
			                <input type="hidden" name="color">
			                <input type="hidden" name="price">
			                <input type="submit" value="купить мишку">
			                <div class="btn-group tablet" data-toggle="buttons">
								<label class="active">
						          	<input type="checkbox" name='agree' checked required="">
						          	<i class="fa fa-square-o fa-2x"></i>
						          	<i class="fa fa-check-square-o fa-2x"></i> 
						          	<span> Вы принимаете условия <a href="Politika_konfidentcialnosti.docx">Пользовательского соглашения</a></span>
						        </label>
						    </div>
			            </form>
	            	</div>
	            </div>
	        </div>    
	    </div>

	    <div class="popup" id="popup2">
	        <div class="head">
	            <div class="close" onclick="popup(-1)"><i class="fa fa-times"></i></div>
	            <span>Оставьте заявку и мы свяжемся с вами в ближайшее время</span>
	        </div>
	        <div class="content">
	            <form action="spasiboAfterCallBack.php" method="post">
	            	<!-- <input type="text" name="name"  placeholder="Ваше имя"> -->
	                <input type="tel" name="tel" required="" placeholder="+7 (___) ___-__-__">
	                <input type="hidden" name="comment" value="Обратный звонок">
	                <input type="submit" value="Отправить">
	            </form>
	        </div>    
	    </div>

	    <div class="popup" id="popup3">
	        <div class="head">
	            <div class="close" onclick="popup(-1)"><i class="fa fa-times"></i></div>
	            <span>Оставьте заявку и мы свяжемся с вами в ближайшее время</span>
	        </div>
	        <div class="content">
	            <form action="spasibo.php" method="post">
	            	<!-- <input type="text" name="name"  placeholder="Ваше имя"> -->
	                <input type="tel" name="tel" required="" placeholder="+7 (___) ___-__-__">
	                <input type="hidden" name="product_name">
	                <input type="hidden" name="size">
	                <input type="hidden" name="color">
	                <input type="hidden" name="price">
	                <input type="submit" value="Отправить">
	            </form>
	        </div>    
	    </div>


	    <div class="popup" id="popup4">
            <div class="close" onclick="popup(-1)"><i class="fa fa-times"></i></div>
	        <div class="content">
	        	<h1><span>Подарок</span></h1>
	        	<div class="fw">
	        		<div class="cc50">
	        			<img src="assets/img/gift.png" alt="">
	        		</div>
	        		<div class="cc50">
	        			<p class="title">
	        				Получите список <br> ТОП-10 подарков <br> для любимой
	        			</p>
	        			<p class="we">
	        				Мы точно знаем что ей понравится
	        			</p>
	        			<p class="enter">
	        				Введите ваш e-mail на который мы отправим список
	        			</p>
	        			<form action="spasiboAfterPresent.php" method="post" id="spasiboAfterPresent">
	        				<label for="email">Ваш e-mail</label>
			            	<input type="email" name="email"  placeholder="Ваш E-mail" required="" id="email">
			                <input type="hidden" name="comment" value="Получите список ТОП-10 подарков для любимой">
			                <input type="hidden" name="type" value="present">
			                <input type="submit" value="Получить">
			                <div class="btn-group" data-toggle="buttons">
								<label class="active">
						          	<input type="checkbox" name='agree' checked required="">
						          	<i class="fa fa-square-o fa-2x"></i>
						          	<i class="fa fa-check-square-o fa-2x"></i> 
						          	<span> Вы принимаете условия <a href="Politika_konfidentcialnosti.docx">Пользовательского соглашения</a></span>
						        </label>
						    </div>
			            </form>
	        		</div>
	        	</div>
	        </div>    
	    </div>
	    	
	</div>


<div id="submit">
	<div class="content">
		<p class="title Bold"><strong>СПАСИБО ЗА <br> ОСТАВЛЕННУЮ ЗАЯВКУ</strong></p>
		<p class="mt2 text">На указанный Email был отправлен список ТОП-10 подарков</p>
		<button type="button" id="button" class="close">Закрыть</button>
	</div>
</div>

<div class='popupTube'></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/mask.js"></script>
<script src='assets/js/jquery.elevatezoom.js'></script>
<script src='assets/js/script.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<link type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
	


<script>

var Bears = {
	'1': {
		name: 'Мишка «Барт»',
		color: 'Бежевый',
		size: '110см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	}, 
	'2': {
		name: 'Мишка «Тедди»',
		color: 'Серый',
		size: '130см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'3': {
		name: 'Мишка «Барт»',
		color: 'Белый',
		size: '140см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'4': {
		name: 'Мишка «Барт»',
		color: 'Бежевый',
		size: '170см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'5': {
		name: 'Мишка «Барт»',
		color: 'Белый',
		size: '220см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'6': {
		name: 'Мишка «Барт»',
		color: 'Бежевый',
		size: '220см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'7': {
		name: 'Мишка «Тедди»',
		color: 'Белый',
		size: '190см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'8': {
		name: 'Мишка «Тедди»',
		color: 'Серый',
		size: '190см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'9': {
		name: 'Мишка «Барт»',
		color: 'Белый',
		size: '170см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'10': {
		name: 'Мишка «Барт»',
		color: 'Бурый',
		size: '170см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'11': {
		name: 'Панда',
		color: '',
		size: '175см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'12': {
		name: 'Мишка «Барт»',
		color: 'Бежевый',
		size: '140см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'13': {
		name: 'Панда',
		color: '',
		size: '135см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'14': {
		name: 'Мишка «Тедди»',
		color: 'Белый',
		size: '130см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'15': {
		name: 'Мишка «Барт»',
		color: 'Люкс',
		size: '110см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'16': {
		name: 'Мишка «Барт»',
		color: 'Белый',
		size: '110см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'17': {
		name: 'Мишка «Барт»',
		color: 'Бурый',
		size: '110см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'18': {
		name: 'Мишка «Добрыня»',
		color: 'Бежевый',
		size: '130см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'19': {
		name: 'Мишка «Добрыня»',
		color: 'Бежевый',
		size: '180см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'20': {
		name: 'Джек',
		color: '',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'21': {
		name: 'Спайк',
		color: '',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'22': {
		name: 'Вольт',
		color: '',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'23': {
		name: 'Роджер',
		color: 'Молочный',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'24': {
		name: 'Роджер',
		color: 'Серый',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'25': {
		name: 'Роджер',
		color: 'Персиковый',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'26': {
		name: 'Лесли',
		color: 'Белый',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'27': {
		name: 'Лесли',
		color: 'Персиковый',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'28': {
		name: 'Лесли',
		color: 'Розовый',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'29': {
		name: 'Лесли',
		color: 'Серый',
		size: '',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'30': {
		name: 'Мишка «Добрыня»',
		color: 'Белый',
		size: '130см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'31': {
		name: 'Мишка «Добрыня»',
		color: 'Белый',
		size: '180см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'32': {
		name: 'Мишка «Добрыня»',
		color: 'Светло-коричневый',
		size: '130см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'33': {
		name: 'Мишка «Добрыня»',
		color: 'Светло-коричневый',
		size: '180см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'34': {
		name: 'Мишка «Алекс»',
		color: '',
		size: '90см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'35': {
		name: 'Мишка «Алекс»',
		color: '',
		size: '165см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'36': {
		name: 'Мишка «Алекс»',
		color: '',
		size: '210см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'37': {
		name: 'Мишка «Алекс»',
		color: '',
		size: '250см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'38': {
		name: 'Мишка «Тимми»',
		color: 'Молочный',
		size: '140см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'39': {
		name: 'Мишка «Тимми»',
		color: 'Песочный',
		size: '140см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	},
	'40': {
		name: 'Мишка «Тимми»',
		color: 'Серый',
		size: '140см',
		price: '4 990',
		description: "Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития. Задача организации, в особенности же дальнейшее развитие различных форм деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач." ,
		description_mobile: "Таким образом постоянное информационно пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм.",
		video_ID: "GL0rbxB9Lqg" 
	}
}


/* Заполнение блоков с товаром данными из объекта */
for(var key in Bears){
	var product = $('#s03 .desktop')
	var k = key;
	if(typeof k !== 'undefined'){
		$(product).find('.block[data-number="' + k + '"]')
			.find('.name').html( Bears[k].name + " " + Bears[k].size)
			.end().find('.color').html( Bears[k].color )
			.end().find('.price').html( Bears[k].price + " руб." );
	}
}

</script>




<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46596048 = new Ya.Metrika({
                    id:46596048,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46596048" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>