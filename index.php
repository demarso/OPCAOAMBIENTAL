<meta http-equiv="refresh" content="0;url=https://www.opcaoambiental.com.br/site">
<!--
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>OPCÃO AMBIENTAL</title>		
		<link rel="stylesheet" type="text/css" href="style.css" />
		
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
		<script type='text/javascript' src='javascripts/jquery.tipsy.js'></script>
		<script type='text/javascript'>
		
		
		
		
		$(function() {
			$('#tipsy').tipsy({fade: true, gravity: 's'});
		});
		</script>
		

		
		<[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]
		
	</head>
	<body>
		<div class="wrapper">
			<img class="logo" src="images/logo.png" width="300" />
			<div class="hr"></div>
			<h1>Desculpe, estamos passando por uma manutenção.</h1>
			<h2>Logo estaremos de volta.</h2>
						
						
						
			<script>
				start_date = new Date("May 5, 2022 07:00:00");
				end_date = new Date("May 30, 2022 18:00:00");
				var start = start_date.getTime();
				var end = end_date.getTime();
				
				
				
				window.setInterval(function(){
						var now = +new Date;
						restante= end - start;
						porcentagem =  ( now - start ) / ( end - start ) * 100; //73%
						if (porcentagem > 100) {
							porcentagem = "100";
						}
						
						if (porcentagem == 100 ) {
							location.reload(); 
						}
						
						
						document.getElementById('tipsy').setAttribute('title',Math.round(porcentagem) + "% Completo.");
						porcentagem = porcentagem + "%";
						
						document.getElementById("progress-bar").style.width=porcentagem;
						

						
						}, 100);
					</script>
			<section class="progress">
				<div class="progress-bar-container" id="tipsy" title="99% Completo"> <!-- Edit this title for the tooltip pop up 
					<article id="progress-bar" class="progress-bar"   ></article> <!-- Edit the width percentage value to indicate progress 

				</div>
				
			</section>



		</div>
	</body>
</html> -->