<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo-small.png" alt="logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">

			<div class="row">
				<div class="col-sm-9">

					<h1>Votre "bon plan" à partager !</h1>
					<h3><?= $message_connection ?></h3>

					<hr>

					<?php
					if (!empty($errors)) {
					?>
					<div class="alert alert-danger">
						<ul>
						<?php
						foreach($errors as $error) {
							echo '<li>'.$error.'</li>';
						}
						?>
						</ul>
					</div>
					<?php
					}
					if (!empty($result)) {
						echo $result;
					} else {
					?>
					<div class="row">
					<h4>J'ai un bon plan : </h4>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" value="restaurant"> Restaurant
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2" value="bar"> Bar
					</label>
					<label class="checkbox-inline">
					 <input type="checkbox" id="inlineCheckbox3" value="club"> Clubbing
					</label>
					</div>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="culturel"> Culturel
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="shopping"> Shopping
					</label>
					</div>
					<label class="checkbox-inline">
					 <input type="checkbox" id="inlineCheckbox3" value="hebergement"> Hébergement
					</label>
					</div>
					<label class="checkbox-inline">
					 <input type="checkbox" id="inlineCheckbox3" value="loisirs"> Loisirs
					</label>
					</div>

					<div class="row">
					<h4>Un bon plan à faire : </h4>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" value="couple"> En couple
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2" value="famille"> En famille
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="solo"> En solo
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="amis"> Entre amis
					</label>
					</div>




					<form action="send.php" method="POST" enctype="multipart/form-data">
					    <fieldset <?= $disabled ?>>
						<div class="form-group">
							<label for="author">Nom du bon plan</label>
							<input type="text" class="form-control" name="author" id="author" placeholder="Nom du bon plan...">
						</div>
						<div class="form-group">
							<label for="title">Adresse du bon plan</label>
							<input type="text" class="form-control" name="title" id="title" placeholder="Adresse du bon plan...">

						</div>


					<!-- 	<div class="form-group">
						<label for="title">Les ingrédients de votre recette</label>
						<input type="text" class="form-control" name="ingredients" id="ingredients" placeholder="Ingrédients de votre recette" value="<?= $ingredients ?>">
						</div> -->


						<div class="form-group" style="display:inline-block;text-align:center;">
							<label for="ville">Ville</label>
							<textarea name="ville" id="ville" class="form-control" rows="1" placeholder="Ville"></textarea>
						</div>
						<div class="form-group" style="display:inline-block;text-align:center;">
							<label for="pays">Pays</label>
							<textarea name="pays" id="pays" class="form-control" rows="1" placeholder="Pays"></textarea>
						</div>
						<div class="form-group" >
							<label for="description">Votre bon plan en quelques mots... </label>
							<textarea name="description" id="description" class="form-control" rows="10" placeholder="Votre bon plan en quelques mots..."></textarea>
						</div>


                     <div class="form-group">
				   <label for="ingredients">Partager aussi vos photos !</label>
                    <input type="file" name="image">

					<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
					</div>


					<button type="submit" class="btn btn-default">Envoyer</button>
					</fieldset>
					</form>

					<?php } ?>

			</div>
		</div>
			<footer>
            <p>Travel & Share <?= date('Y') ?> <sup>&copy;</sup></p>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>
</body>
</html>
