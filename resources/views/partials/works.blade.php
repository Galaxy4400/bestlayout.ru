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
								<p class="works-slide__text">{{ $work->description }}</p>
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
				<article class="works-slider__slide works-slide works-slide_fake">
					<h4 class="works-slide__title">Здесь могла бы быть Ваша работа</h4>
				</article>
			</div>
		</div>
	</div>
</section>