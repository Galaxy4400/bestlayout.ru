<section class="page__section works">
	<div class="works__container _container">
		<h3 class="works__title" data-aos="fade-down">Последние работы</h3>
		<div class="works__slider works-slider" data-swiper data-aos="fade-left">
			<div class="works-slider__slides">
				@foreach ($works as $work)
					<article class="works-slider__slide works-slide">
						<div class="works-slide__body">
							<div class="works-slide__content">
								<div class="works-slide__tag">
									<span class="tag tag_{{ $work->type }}">{{ config('works.types.'.$work->type) }}</span>
								</div>
								<h4 class="works-slide__title"><a href="{{ $work->link }}" target="_blank">{{ $work->name }}</a></h4>
								<div class="works-slide__text">{{ $work->description }}</div>
								@if ($work->links)
									<ul class="works-slide__list">
										@foreach ($work->links as $link)
											<li class="works-slide__item">
												<a class="works-slide__link" href="{{ $link['link'] }}" target="_blank">{{ $link['name'] }}</a>
											</li>
										@endforeach
									</ul>
								@endif
							</div>
							<figure class="works-slide__img _ibg" data-src="{{ asset('storage/'.$work->thumbnail) }}">
								<img src="{{ asset('storage/'.$work->thumbnail) }}" alt="{{ $work->name }}"/>
							</figure>
						</div>
					</article>
				@endforeach
				{{-- <article class="works-slider__slide works-slide">
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
				</article> --}}
				<article class="works-slider__slide works-slide works-slide_fake">
					<h4 class="works-slide__title">Здесь могла бы быть Ваша работа</h4>
				</article>
			</div>
		</div>
	</div>
</section>