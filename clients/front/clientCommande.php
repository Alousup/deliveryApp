<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delivery - Page de connexion</title>

	<style>
		 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif
		}

		body {
			background: #ecf0f3
		}

		.wrapper {
			max-width: 350px;
			min-height: 500px;
			margin: 80px auto;
			padding: 40px 30px 30px 30px;
			background-color: #ecf0f3;
			border-radius: 15px;
			box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
		}

		.logo {
			width: 80px;
			margin: auto
		}

		.logo img {
			width: 100%;
			height: 80px;
			object-fit: cover;
			border-radius: 50%;
			box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
		}

		.wrapper .name {
			font-weight: 600;
			font-size: 1.4rem;
			letter-spacing: 1.3px;
			padding-left: 10px;
			color: #555
		}

		.wrapper .form-field input {
			width: 100%;
			display: block;
			border: none;
			outline: none;
			background: none;
			font-size: 1.2rem;
			color: #666;
			padding: 10px 15px 10px 10px
		}

		.wrapper .form-field {
			padding-left: 10px;
			margin-bottom: 20px;
			border-radius: 20px;
			box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
		}

		.wrapper .form-field .fas {
			color: #555
		}

		.wrapper .btn {
			box-shadow: none;
			width: 100%;
			height: 40px;
			background-color: #ff0000;
			color: #fff;
			border-radius: 25px;
			box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
			letter-spacing: 1.3px
		}

		.wrapper .btn:hover {
			background-color: #ff0000
		}

		.wrapper a {
			text-decoration: none;
			font-size: 0.8rem;
			color: #ff0000
		}

		.wrapper a:hover {
			color: #ff0000
		}

		@media(max-width: 380px) {
			.wrapper {
				margin: 30px 20px;
				padding: 40px 15px 15px 15px
			}
		}

        .float-container {
            padding: 20px;
        }

        .float-child {
            width: 50%;
            float: left;
            padding: 20px;
        }  
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="logo"> <img src="icon.png" alt=""> </div>
		<div class="text-center mt-4 name" style="text-align: center;"> Delivery </div>
		<form class="p-3 mt-3">
            <div class="float-container">
                <div class="float-child">
                    <h5>Origine</h5>
                    <select name="Origine" id="origine">
                        <option value="zone1">Plateau</option>
                        <option value="zone1">Medina</option>
                        <option value="zone1">Point E</option>
                        <option value="zone1">Maristes</option>
                        <option value="zone1">Colobane</option>
                        <option value="zone1">Grand Yoff</option>
                        <option value="zone1">Almadies</option>
                        <option value="zone1">Yoff</option>
                        <option value="zone1">Yarakh</option>
                        <option value="zone1">Pikine</option>
                        <option value="zone1">Guediawaye</option>
                        <option value="zone1">Thiaroye</option>
                        <option value="zone1">Camberene</option>
                        <option value="zone1">Malika</option>
                        <option value="zone1">Keur Massar</option>
                        <option value="zone1">Rufisque</option>
                        <option value="zone1">Lac Rose</option>
                        <option value="zone1">Diamniadio</option>
                        <option value="zone1">AIBD</option>
                        <option value="zone1">Sandiara</option>
                        <option value="zone1">Mbour</option>
                        <option value="zone1">Thies</option>
                        <option value="zone1">Saly</option>
                        <option value="zone1">Ndangane</option>
                        <option value="zone1">Somone</option>
                    </select>
                </div>
                <div class="float-child">
                    <h5>Destination</h5>
                    <select name="Destination" id="destination">
                        <option value="zone1">Plateau</option>
                        <option value="zone1">Medina</option>
                        <option value="zone1">Point E</option>
                        <option value="zone1">Maristes</option>
                        <option value="zone1">Colobane</option>
                        <option value="zone1">Grand Yoff</option>
                        <option value="zone1">Almadies</option>
                        <option value="zone1">Yoff</option>
                        <option value="zone1">Yarakh</option>
                        <option value="zone1">Pikine</option>
                        <option value="zone1">Guediawaye</option>
                        <option value="zone1">Thiaroye</option>
                        <option value="zone1">Camberene</option>
                        <option value="zone1">Malika</option>
                        <option value="zone1">Keur Massar</option>
                        <option value="zone1">Rufisque</option>
                        <option value="zone1">Lac Rose</option>
                        <option value="zone1">Diamniadio</option>
                        <option value="zone1">AIBD</option>
                        <option value="zone1">Sandiara</option>
                        <option value="zone1">Mbour</option>
                        <option value="zone1">Thies</option>
                        <option value="zone1">Saly</option>
                        <option value="zone1">Ndangane</option>
                        <option value="zone1">Somone</option>
                    </select>
                </div>

            </div>
			<div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span>
            </div> <button class="btn mt-3" onclick="alert('Votre demande est en cours de traitement. Le livreur vous contactera pour plus de détails.')">Connexion</button>
		</form>
        <div class="text-center fs-6"><a href="clientHome.html">Quitter</a></div>
	</div>
</body>
</html>