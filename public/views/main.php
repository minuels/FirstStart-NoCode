<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/CSS" rel="stylesheet" href="/ventasMVC/public/css/materialize.css">
    <link type="text/CSS" rel="stylesheet" href="/ventasMVC/public/css/materialize.min.css">
	<title></title>
</head>
<body>
	<nav>
		<?php controller::rutaNavBar(); ?>
	</nav>
	<div class="row">
      <div class="col s3">
        <?php Controller::rutaSidePanel(); ?>
      </div>

      <div class="col s9">
    	<?php Controller::rutaContent(); ?>    
      </div>

    </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>