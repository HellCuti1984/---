<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Студенческая газета</title>
		
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
		<link rel="shortcut icon" href="{{ URL::asset('img/newspaper.ico') }}" type="image/x-icon">
		
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
    </head>
    <body>
		
		<header>
			<div class="container">
				<div class=""></div>
				<div class="papersName">СТУДЕНЧЕСКАЯ ГАЗЕТА</div>
			</div>
		</header>
		<div class="subhead">Нижний Тагил - <?=date('d.m.y')?></div>
		<div class="content">
			@yield('content')
		</div>
		
		<footer>СГ <?=date('Y')?></footer>
	</body>
</html>
