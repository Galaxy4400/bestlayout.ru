class Sticky {
	constructor(selector) {
		this.elements = {};
		this.elements.container = document.querySelector(`[data-sticky-container="${selector}"]`);
		this.elements.items = document.querySelectorAll(`[data-sticky-item="${selector}"]`);

		this.init();
	}

	init() {
		window.addEventListener('scroll', () => this.scroll());
		document.addEventListener('DOMContentLoaded', () => this.scroll());
	}

	scroll() {
		this.defineContainerParams();
		this.defineItemsParams();
		this.defineWindowParams();

		this.processItems();
	}

	defineWindowParams() {
		this.elements.window = {};
		this.elements.window.top = window.pageYOffset;
		this.elements.window.bottom = window.pageYOffset + document.documentElement.clientHeight;
	}

	defineContainerParams() {
		const containerParams = this.elements.container.getBoundingClientRect();

		this.elements.container.top = containerParams.top;
		this.elements.container.bottom = containerParams.bottom;
	}

	defineItemsParams() {
		this.elements.items.forEach(item => {
			const itemParams = item.getBoundingClientRect();

			item.top = itemParams.top;
			item.bottom = itemParams.bottom;
		});
	}

	processItems() {
		this.elements.items.forEach(item => this.setItemProperty(item));
	}

	setItemProperty(item) {
		const isIn = (this.elements.container.top < 0) && (this.elements.container.bottom - document.documentElement.clientHeight > 0);
		const isOut = this.elements.container.bottom - document.documentElement.clientHeight < 0;

		if (isOut) {
			item.classList.remove('_sticky-in');
			item.classList.add('_sticky-out');
			return;
		}

		if (isIn) {
			item.classList.add('_sticky-in');
			item.classList.remove('_sticky-out');
			return;
		}

		item.classList.remove('_sticky-in');
		item.classList.remove('_sticky-out');
	}
}