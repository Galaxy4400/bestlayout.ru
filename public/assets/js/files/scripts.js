// Инициализация динамической адаптации
new Adapt();

// Инициализация модального окна
const modal = new Modal({animation: 'fadeIn'});

// Инициализация главного меню
const mainMenu = new Menu('main-menu');

// Инициализация меню в футере
const footerMenu = new Spoiler('footer-menu', {mediaMax: 991});

// Инициализация спойлера
const stickySpoiler = new Spoiler('sticky', {open: true});

// Инициализация блока со стиками
const sticky = new Sticky('sticky');





//===============================================================

function beforeFormSending() {
	console.log('beforeFormSending');
	return true;
}

function afterFormSending() {
	console.log('afterFormSending');
	modal.openModal('form-sended');
}