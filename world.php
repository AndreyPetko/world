<?php

// Количество итераций всегда будет равно растоянию от нашей точки,
// до самой дальней "стенки" нашей матрицы.
// То есть если матрица m*n, а координаты точки x,y, то количество итераций будет 
// равно максимум из 4 величин : растояние до левой стенки (x - 1), правой (m-x), верхней (y - 1), нижней (n - y)

if(!empty($_POST)) {
	$m = (int)$_POST['m'];
	$n = (int)$_POST['n'];

	$x = (int)$_POST['x'];
	$y = (int)$_POST['y'];

	$left = $x - 1;
	$right = $m - $x;
	$top = $y - 1;
	$bottom = $n - $y;


	$iter = max([$left, $right, $top, $bottom]);

} else {
	$iter = 'Введите данные';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="POST" action="">
			<label>Размер матрицы:</label>
			<div class="row">
				<div class="col-lg-6">
					<input type="" name="m" class="form-control" placeholder="Ширина">
				</div>
				<div class="col-lg-6">
					<input type="" name="n" class="form-control" placeholder="Высота">
				</div>
			</div>

			<label>Координаты:</label>
			<div class="row">
				<div class="col-lg-6">
					<input type="" name="x" class="form-control" placeholder="x">
				</div>
				<div class="col-lg-6">
					<input type="" name="y" class="form-control" placeholder="y">
				</div>
			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-primary">Посчитать</button>
			</div>
		</form>

		<?php echo $iter ?>
	</div>
</body>
</html>