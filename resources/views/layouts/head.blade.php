<head>
	<title>Заказать верстку сайтов — BestLayout</title>
	<meta name="description" content="Предоставляю услугу по верстке сайтов: адаптивность, кросбраузерность, чистый код по методологии БЭМ, pixel-perfect...">
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:locale" content="ru_RU">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Заказать верстку сайтов — BestLayout">
	<meta property="og:description" content="Предоставляю услугу по верстке сайтов: адаптивность, кросбраузерность, чистый код по методологии БЭМ, pixel-perfect...">
	<meta property="og:url" content="https://bestlayout.ru/">
	<meta property="og:site_name" content="BestLayout">
	<meta property="og:image" content="{{ Vite::image('og_img.jpg') }}">
	<meta property="og:image:width" content="1920">
	<meta property="og:image:height" content="1080">
	<meta property="og:image:type" content="image/jpeg">
	
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

	@vite(['resources/scss/style.scss', 'resources/js/app.js'])

	<script>
		const LOCALIZATION = 'Russian';
	</script>
</head>