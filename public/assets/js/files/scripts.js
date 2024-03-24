// Инициализация динамической адаптации
new Adapt();

// Инициализация модального окна
const modal = new Modal({animation: 'fadeIn'});

// Инициализация главного меню
const mainMenu = new Menu('main-menu');

// Инициализация меню в футере
const footerMenu = new Spoiler('footer-menu', {mediaMax: 991});



const stickySpoiler = new Spoiler('sticky', {open: true});


const sticky = new Sticky('sticky');