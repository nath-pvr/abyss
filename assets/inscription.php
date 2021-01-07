<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"/>
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/inscription.css">
    
</head>

<body>
	<div class="main-w3layouts wrapper vh-100">
    <img src="../assets/img/inscription.png" alt="img" class="abyss">
		<h3>Inscription</h3>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="username" placeholder="Nom d'utilisateur" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Mot de passe" required="">
					<input class="text w3lpass" type="password" name="confirmPassword" placeholder="Confirmation du mot de passe" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Se souvenir de moi</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="S'inscrire">
				</form>
				<p>Vous avez déjà un compte ? <a href="#">Connectez-vous !</a></p>
			</div>
		</div>
	</div>
    
</body>
</html>


