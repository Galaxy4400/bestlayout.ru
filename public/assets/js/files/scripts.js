// Инициализация динамической адаптации
new Adapt();

// Инициализация модального окна
const modal = new Modal({animation: 'fadeIn'});

// Инициализация главного меню
// const mainMenu = new Menu('main-menu');

// Инициализация меню в футере
// const footerMenu = new Spoiler('footer-menu', {mediaMax: 991});

// Инициализация спойлера
const stickySpoiler = new Spoiler('sticky', {open: true});

// Инициализация блока со стиками
const sticky = new Sticky('sticky');





//===============================================================

function beforeFormSending(form) {
	form.classList.add('_loading');
	form.querySelectorAll('.form__validate-error').forEach(error => { error.innerHTML = "" });
	return true;
}

function afterFormSending(form, response) {
	if (response.success) {
		modal.openModal('form-sended');
		form.reset();
	} else {
		for (const fieldName in response.errors) {
			let field = form.querySelector(`[name=${fieldName}]`);
			field.closest('.form__column').querySelector('.form__validate-error').innerHTML = response.errors[fieldName].toString();
		}
	}
	form.classList.remove('_loading');
}