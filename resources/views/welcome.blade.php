@extends('layouts.main')

@section('page')
	<section class="page__section main">
		<div class="main__container _container">
			<div class="main__head main-head">
				<h1 class="main-head__title" data-aos="fade-right" data-aos-delay="800">Эксперт</h1>
				<p class="main-head__label" data-aos="fade-up" data-aos-delay="1000">по верске сайтов<br>любой сложности</p>
			</div>
			<div class="main__content main-body">
				<h2 class="main-body__title main-body-title">
					<div class="main-body-title__first">
						<span data-aos="fade-right">Идеальная</span><span data-aos="fade-right">вёрстка</span>
					</div>
					<div class="main-body-title__second">
						<span data-aos="fade-left">идеального</span><span data-aos="fade-left">сайта</span>
					</div>
				</h2>
				<div class="main-body__content" data-aos="fade-up">
					<div class="main-body__text">Доверьте ваш дизайн профессионалу, и даже самые смелые идеи будут воплощены в реальность</div>
					<button class="main-body__btn btn btn_gradient" type="button" data-goto="request">Заказать верску</button>
				</div>
			</div>
		</div>
		<div class="main__bacground _ibg">
			<video autoplay muted loop data-aos="fade">
				<source src="{{ Vite::video('abstract_animation.webm') }}" type="video/webm; codecs=&quot;vp9, vorbis&quot;">
				<source src="{{ Vite::video('abstract_animation.mp4') }}" type="video/mp4">
			</video>
		</div>
	</section>

	<section class="page__section advantages">
		<div class="advantages__container _container">
			<div class="advantages__body">
				<header class="advantages__head" data-aos="fade-down">
					<h2 class="advantages__title"><span>Более 350</span> клиентов уже оценили качество выполненных работ</h2>
					<p class="advantages__label">уникальный дизайн и чистый код - залог успеха вашего сайта</p>
				</header>
				<div class="advantages__cards" data-aos="fade-up">
					<div class="advantages__card advantages-card">
						<h5 class="advantages-card__title">Выгоднее, чем корпоративная разработка</h5>
						<div class="advantages-card__img">
							<img src="{{ Vite::image('adv1.png') }}" alt="adv1.png">
						</div>
					</div>
					<div class="advantages__card advantages-card">
						<h5 class="advantages-card__title">Пунктуальность и ответственность</h5>
						<div class="advantages-card__img">
							<img src="{{ Vite::image('adv4.png') }}" alt="adv4.png">
						</div>
					</div>
					<div class="advantages__card advantages-card">
						<h5 class="advantages-card__title">Гарантия безопасной сделки</h5>
						<div class="advantages-card__img">
							<img src="{{ Vite::image('adv3.png') }}" alt="adv3.png">
						</div>
					</div>
					<div class="advantages__card advantages-card">
						<h5 class="advantages-card__title">Высокий уровень поддержки</h5>
						<div class="advantages-card__img">
							<img src="{{ Vite::image('adv5.png') }}" alt="adv5.png">
						</div>
					</div>
					<div class="advantages__card advantages-card">
						<h5 class="advantages-card__title">Гарантия интеграции решения под целевую CMS</h5>
						<div class="advantages-card__img">
							<img src="{{ Vite::image('adv2.png') }}" alt="adv2.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page__section sticky" data-sticky-container="sticky">
		<div class="sticky__container _container">
			<div class="sticky__body">
				<div class="sticky__column sticky__column_left">
					<div class="sticky__wrapper sticky__wrapper_left">

						<div class="sticky__content sticky__content_left" data-aos="fade-up">

							<div class="sticky__section">
								<h2 class="sticky__title">Разработка</h2>
								<div class="sticky__nav sticky-nav" data-spoiler="sticky">
									<div class="sticky-nav__section" data-spoiler-item>
										<button class="sticky-nav__control h4" type="button" data-spoiler-control>HTML/CSS вёрстка</button>
										<div class="sticky-nav__container" data-spoiler-container>
											<div class="sticky-nav__list-block">
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Вёрстка по готовому макету figma, psd или другие аналоги</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Чистая вёрстка по технологии BEM (Block-Element-Modifier)</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Вёрстка с соблюдением семантических стандартов</span></li>
												</ul>
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Использование SASS/SCSS препроцессора</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Стилистические анимации</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Соблюдение концепции Pixel Perfect</span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sticky-nav__section" data-spoiler-item>
										<button class="sticky-nav__control h4" type="button" data-spoiler-control>Адаптация сайта</button>
										<div class="sticky-nav__container" data-spoiler-container>
											<div class="sticky-nav__list-block">
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Адекватное отображение сайта на всех устройствах и при любом соотношении сторон</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Ленивая загрузка (Lazy-Load) для ускорения работы сайта</span></li>
												</ul>
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Совместимость вёрстки со всеми актуальными браузерами</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Адаптивная подгрузка разноформатных изображений в зависимости от размера экрана</span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sticky-nav__section" data-spoiler-item>
										<button class="sticky-nav__control h4" type="button" data-spoiler-control>Интересные JS решения</button>
										<div class="sticky-nav__container" data-spoiler-container>
											<div class="sticky-nav__list-block">
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Динамические слайдеры, спойлеры, модальные окна и многое другое, что приятно оживит ваш сайт</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Валидация форм на стороне клиента</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Анимация елементов при просмотре страниц</span></li>
												</ul>
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Динамические галереи для просмотра медиа-файлов</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Параллакс эффекты</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Плавная навигация по странице</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Индивидуальные решения под конкретный проект</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="sticky__section">
								<h2 class="sticky__title">Поддержка</h2>
								<nav class="sticky__nav sticky-nav">
									<div class="sticky-nav__section">
										<div class="sticky-nav__container">
											<div class="sticky-nav__list-block">
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Детальное обсуждение проекта на этапе подготовки и в процессе работы</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Разработка новых функциональных возможностей и улучшение существующих</span></li>
												</ul>
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Помощь в составлении технического задания</span></li>
													<li class="sticky-nav__item"><span class="sticky-nav__link">Техническая поддержка в случае возникновения проблем с отображением или функциональностью верстки</span></li>
												</ul>
											</div>
										</div>
									</div>
								</nav>
							</div>
							
							<div class="sticky__section">
								<h2 class="sticky__title">Защита</h2>
								<nav class="sticky__nav sticky-nav">
									<div class="sticky-nav__section">
										<div class="sticky-nav__container">
											<div class="sticky-nav__list-block">
												<ul class="sticky-nav__list">
													<li class="sticky-nav__item"><span class="sticky-nav__link">Система резервного копирования и аварийного восстановления данных</span></li>
												</ul>
											</div>
										</div>
									</div>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
				<div class="sticky__column sticky__column_right">
					<div class="sticky__wrapper sticky__wrapper_right" data-sticky-item="sticky">
						<div class="sticky__content sticky__content_right"  data-aos="fade-left">
							<h5 class="sticky__title-sub">Я знаю свою работу, я люблю свою работу, <br>и я делаю свою работу хорошо</h5>
							<blockquote class="sticky__quote">
								<div class="sticky__quote-text">
									Вам не нужно тратить время, деньги и нервы в поиске квалифицированного специалиста на фриланс биржах с котом в мешке. Я решу вашу проблему качественно и в срок.
								</div>
							</blockquote>
							<div class="sticky__persone sticky-persone">
								<div class="sticky-persone__name">Моисеев<br>Евгений,</div>
								<div class="sticky-persone__position">WEB-разработчик с<br>10-летним стажем</div>
								<div class="sticky-persone__photo">
									<img src="{{ Vite::image('persone.png') }}" alt="persone.png">
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="sticky__bg _ibg" data-sticky-item="sticky">
			<img src="{{ Vite::image('background2.jpg') }}" alt="background2.jpg">
		</div>
	</section>

	<section class="page__section works">
		<div class="works__container _container">
			<h3 class="works__title" data-aos="fade-down">Последние работы</h3>
			<div class="works__slider works-slider" data-swiper data-aos="fade-left">
				<div class="works-slider__slides">
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_blue">верстка</span>
								</div>
								<h4 class="works-slide__title"><a href="https://galaxy4400.github.io/aurum/" target="_blank">Aurum - атмосферный ресторан с панорамным видом</a></h4>
								<div class="works-slide__text">Стильный многостраничный сайт с множеством интересных JS решений</div>
								<ul class="works-slide__list">
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/aurum/" target="_blank">Главная страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/aurum/about.html" target="_blank">Cтраницa "О нас"</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/aurum/gallery.html" target="_blank">Cтраницa "Галлерея"</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/aurum/kitchen.html" target="_blank">Cтраницa "Кухня"</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/aurum/bar.html" target="_blank">Cтраницa "Бар"</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/aurum/vine.html" target="_blank">Cтраницa "Винная карта"</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/aurum/billboard.html" target="_blank">Cтраницa "Афиша"</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/aurum/contacts.html" target="_blank">Cтраницa "Контакты"</a></li>
								</ul>
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ Vite::image('aurum.jpg') }}">
								<img src="{{ Vite::image('aurum.jpg') }}" alt="aurum.jpg"/>
							</figure>
						</div>
					</article>
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_red">сайт</span>
								</div>
								<h4 class="works-slide__title"><a href="https://msch9fmba.ru/" target="_blank">ФБУЗ МСЧ № 9 ФМБА РОССИИ</a></h4>
								<div class="works-slide__text">Многофункциональный медицинский сайт с версией для слабовидящих и многоуровневым меню</div>
								<ul class="works-slide__list">
									<li class="works-slide__item"><a class="works-slide__link" href="https://msch9fmba.ru/" target="_blank">Главная страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://msch9fmba.ru/o-nas/" target="_blank">Типовая страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://msch9fmba.ru/attachment/" target="_blank">страница прикрепления к поликлинике</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://msch9fmba.ru/news/" target="_blank">страница новостей</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://msch9fmba.ru/news/117" target="_blank">страница отдельной новости</a></li>
								</ul>
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ Vite::image('msch9.jpg') }}">
								<img src="{{ Vite::image('msch9.jpg') }}" alt="msch9.jpg"/>
							</figure>
						</div>
					</article>
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_blue">верстка</span>
								</div>
								<h4 class="works-slide__title"><a href="https://galaxy4400.github.io/freshnesecom/" target="_blank">Freshnesecom - заказ еды на дом</a></h4>
								<div class="works-slide__text">Многостраничный интернет магазин с фильтрами, галереями, корзиной и системой оплаты</div>
								<ul class="works-slide__list">
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/" target="_blank">Главная страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/catalog.html" target="_blank">страница каталога</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/details.html" target="_blank">страница продукта</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/order.html" target="_blank">страница заказа</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blogs.html" target="_blank">страница блогов</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blog.html" target="_blank">страница блога</a></li>
								</ul>
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ Vite::image('freshnesecom.jpg') }}">
								<img src="{{ Vite::image('freshnesecom.jpg') }}" alt="freshnesecom.jpg"/>
							</figure>
						</div>
					</article>
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_red">сайт</span>
								</div>
								<h4 class="works-slide__title"><a href="https://sila-day.ru/" target="_blank">День Силы - ежегодный технологический форум</a></h4>
								<div class="works-slide__text">Небольшой презентационный сайт</div>
								<ul class="works-slide__list">
									<li class="works-slide__item"><a class="works-slide__link" href="https://sila-day.ru/" target="_blank">Главная страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/catalog.html" target="_blank">страница каталога</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/details.html" target="_blank">страница продукта</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/order.html" target="_blank">страница заказа</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blogs.html" target="_blank">страница блогов</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blog.html" target="_blank">страница блога</a></li>
								</ul>
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ Vite::image('siladay.jpg') }}">
								<img src="{{ Vite::image('siladay.jpg') }}" alt="siladay.jpg"/>
							</figure>
						</div>
					</article>
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_red">сайт</span>
								</div>
								<h4 class="works-slide__title"><a href="https://saffian.ru/" target="_blank">Saffian - магазин обуви</a></h4>
								<div class="works-slide__text">Небольшой интернет магазин</div>
								<ul class="works-slide__list">
									<li class="works-slide__item"><a class="works-slide__link" href="https://saffian.ru/" target="_blank">Главная страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/catalog.html" target="_blank">страница каталога</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/details.html" target="_blank">страница продукта</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/order.html" target="_blank">страница заказа</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blogs.html" target="_blank">страница блогов</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blog.html" target="_blank">страница блога</a></li>
								</ul>
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ Vite::image('saffian.jpg') }}">
								<img src="{{ Vite::image('saffian.jpg') }}" alt="saffian.jpg"/>
							</figure>
						</div>
					</article>
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_red">сайт</span>
								</div>
								<h4 class="works-slide__title"><a href="https://reliefmaster.ru/" target="_blank">Relief Master - Изготовление рельефных карт по индивидуальному заказу</a></h4>
								<div class="works-slide__text">Небольшой интернет магазин</div>
								<ul class="works-slide__list">
									<li class="works-slide__item"><a class="works-slide__link" href="https://reliefmaster.ru/" target="_blank">Главная страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/catalog.html" target="_blank">страница каталога</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/details.html" target="_blank">страница продукта</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/order.html" target="_blank">страница заказа</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blogs.html" target="_blank">страница блогов</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blog.html" target="_blank">страница блога</a></li>
								</ul>
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ Vite::image('reliefmaster.jpg') }}">
								<img src="{{ Vite::image('reliefmaster.jpg') }}" alt="reliefmaster.jpg"/>
							</figure>
						</div>
					</article>
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_red">сайт</span>
								</div>
								<h4 class="works-slide__title"><a href="https://wowtickets.ru/" target="_blank">WowTickets - приобретение билетов на спектакли</a></h4>
								<div class="works-slide__text">Многостраничный сервис по продаже билетов</div>
								<ul class="works-slide__list">
									<li class="works-slide__item"><a class="works-slide__link" href="https://wowtickets.ru/" target="_blank">Главная страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/catalog.html" target="_blank">страница каталога</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/details.html" target="_blank">страница продукта</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/order.html" target="_blank">страница заказа</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blogs.html" target="_blank">страница блогов</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blog.html" target="_blank">страница блога</a></li>
								</ul>
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ Vite::image('wowticket.jpg') }}">
								<img src="{{ Vite::image('wowticket.jpg') }}" alt="wowticket.jpg"/>
							</figure>
						</div>
					</article>
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_blue">верстка</span>
								</div>
								<h4 class="works-slide__title"><a href="https://wowtickets.ru/" target="_blank">JP visualisation studio</a></h4>
								<div class="works-slide__text">Небольшой сайт студии дизайна</div>
								<ul class="works-slide__list">
									<li class="works-slide__item"><a class="works-slide__link" href="https://wowtickets.ru/" target="_blank">Главная страница</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/catalog.html" target="_blank">страница каталога</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/details.html" target="_blank">страница продукта</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/order.html" target="_blank">страница заказа</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blogs.html" target="_blank">страница блогов</a></li>
									<li class="works-slide__item"><a class="works-slide__link" href="https://galaxy4400.github.io/freshnesecom/blog.html" target="_blank">страница блога</a></li>
								</ul>
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ Vite::image('jp.jpg') }}">
								<img src="{{ Vite::image('jp.jpg') }}" alt="jp.jpg"/>
							</figure>
						</div>
					</article>
					<article class="works-slider__slide works-slide works-slide_fake">
						<h4 class="works-slide__title">Здесь могла бы быть ваша работа</h4>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="page__section request">
		<div class="request__container _container-narrow">
			<div class="request__header" data-aos="fade-down">
				<h2 class="request__title">Оставить заявку</h2>
				<p class="request__label">Заполните заявку и мы свяжемся с Вами</p>
			</div>
			<form class="request__form form form_request" action="./" method="post" data-form data-send="test" data-autocomplete-off>
				<div class="form__section">
					<div class="form__row form__row_2">
						<div class="form__column" data-aos="fade-right">
							<div class="form__row">
								<div class="form__column">
									<label class="form__label">
										<input class="form__input input" type="text" name="name" required placeholder="Имя*">
									</label>
								</div>
								<div class="form__column">
									<label class="form__label">
										<input class="form__input input" type="text" name="surname" placeholder="Фамилия">
									</label>
								</div>
								<div class="form__column">
									<label class="form__label">
										<input class="form__input input" type="text" name="secondname" placeholder="Отчество">
									</label>
								</div>
								<div class="form__column">
									<label class="form__label">
										<input class="form__input input" type="text" name="company" placeholder="Компания">
									</label>
								</div>
								<div class="form__column">
									<label class="form__label">
										<input class="form__input input" type="tel" name="phone" placeholder="+7 (495) 000-00-00" data-mask="+7 (999) 999-99-99" data-mask-placeholder="_" data-mask-between="2">
									</label>
								</div>
								<div class="form__column">
									<label class="form__label">
										<input class="form__input input" type="email" name="email" required placeholder="Email@domain.com *">
									</label>
								</div>
							</div>
						</div>
						<div class="form__column" data-aos="fade-left">
							<div class="form__row"> 
								<div class="form__column">
									<select class="form__select" name="theme" required data-choice>
										<option value="" selected disabled>Что Вас интересует? *</option>
										<option value="1">Хочу заказать вёрстку</option>
										<option value="2" data-switcher="range">Узнать стоимость работы</option>
									</select>
								</div>
								<div class="form__column" data-switch="range">
									<div data-slider="budget" data-range="1000,100000" data-start="10000" data-step="500" data-label="Бюджет" data-suffix="руб."></div>
								</div>
								<div class="form__column">
									<textarea class="form__input input" name="Message" placeholder="Комментарий..."></textarea>
								</div>
								<div class="form__column">
									<div class="form__radio-group">
										<input type="radio" name="type" value="file" data-radio data-label="Файл" checked data-switcher="file">
										<input type="radio" name="type" value="link" data-radio data-label="Ссылка" data-switcher="link">
									</div>
								</div>
								<div class="form__column" data-switch="file">
									<input type="file" name="file" data-file required>
									<!-- <p class="form__file-label">Максимальный размер 5 МБ, поддерживаемые форматы: rtf, pdf, doc, docx, ppt, pptx, xls, xlsx</p> -->
								</div>
								<div class="form__column" data-switch="link">
									<input class="form__input input" type="text" name="link" required placeholder="Ссылка на макет *">
								</div>
								<div class="form__column">
									<button class="form__btn btn btn_fw btn_gradient" type="submit">Отправить</button>
								</div>
								{{-- <div class="form__column">
									<input type="checkbox" name="Agreement" value="1" required data-check data-label="*Согласен с <a href='#'>условиями</a> использования моих персональных данных">
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection

