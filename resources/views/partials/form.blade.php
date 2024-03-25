<section class="page__section request">
	<div class="request__container _container-narrow">
		<div class="request__header" data-aos="fade-down">
			<h2 class="request__title">Оставить заявку</h2>
			<p class="request__label">Заполните заявку с интересующим Вас вопросом</p>
		</div>
		<form 
			class="request__form form form_request" 
			action="{{ route('request_form_process') }}" 
			method="post"
			data-form
			data-send="ajax"
			data-autocomplete-off
			enctype="multipart/form-data"
			data-before="beforeFormSending"
			data-after="afterFormSending"
		>
			@csrf
			<div class="form__section">
				<div class="form__row form__row_2">
					<div class="form__column" data-aos="fade-right">
						<div class="form__row">
							<div class="form__column">
								<label class="form__label">
									<input class="form__input input" type="text" name="name" required placeholder="Ваше имя *">
								</label>
							</div>
							<div class="form__column">
								<label class="form__label">
									<input class="form__input input" type="text" name="surname" placeholder="Ваша фамилия">
								</label>
							</div>
							<div class="form__column">
								<label class="form__label">
									<input class="form__input input" type="text" name="secondname" placeholder="Ваше отчество">
								</label>
							</div>
							<div class="form__column">
								<label class="form__label">
									<input class="form__input input" type="text" name="company" placeholder="Ваша компания">
								</label>
							</div>
							<div class="form__column">
								<label class="form__label">
									<input class="form__input input" type="tel" name="phone" placeholder="+7 (495) 000-00-00" data-mask="+7 (999) 999-99-99" data-mask-placeholder="_" data-mask-between="2">
								</label>
							</div>
							<div class="form__column">
								<label class="form__label">
									<input class="form__input input" type="email" name="email" required placeholder="email@domain.com *">
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
								<div data-slider="budget" data-range="1000,100000" data-start="10000" data-step="500" data-label="На какой бюджет Вы расчитываете" data-suffix="руб."></div>
							</div>
							<div class="form__column">
								<textarea class="form__input input" name="message" placeholder="Комментарий..."></textarea>
							</div>
							<div class="form__column">
								<div class="form__radio-group">
									<input type="radio" name="type" value="file" data-radio data-label="Файл" checked data-switcher="file">
									<input type="radio" name="type" value="link" data-radio data-label="Ссылка" data-switcher="link">
								</div>
							</div>
							<div class="form__column" data-switch="file">
								<input type="file" name="file" data-file data-min="1">
								<!-- <p class="form__file-label">Максимальный размер 5 МБ, поддерживаемые форматы: rtf, pdf, doc, docx, ppt, pptx, xls, xlsx</p> -->
							</div>
							<div class="form__column" data-switch="link">
								<input class="form__input input" type="text" name="link" required placeholder="Ссылка на макет *">
							</div>
							<div class="form__column">
								<button class="form__btn btn btn_fw btn_gradient" type="submit">Отправить</button>
							</div>
							<div class="form__column">
								<input type="checkbox" name="Agreement" value="1" required data-check data-label="* Согласен с <a href='#'>условиями</a> использования моих персональных данных">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>