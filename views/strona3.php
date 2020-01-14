<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
    <title>Piłka nożna</title>
   	<script type="text/javascript" src="static/js/jquery.js"></script>
    <meta name="description" content="Moje hobby - Piłka Nożna" />
    <meta name="keywords" content="piłka,sport,gol,bramka,hobby,przewrotka,bramkarz,piłkarz">
    <meta charset="UTF-8" />
    <meta name="author" content="Dariusz Grynia">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <link rel="Stylesheet" href="static/css/Style2.css" />
	<script src="static/js/functions.js"></script>
	<script src="static/js/jquery-1.12.4.js"></script>
	<script src="static/js/jquery-ui.js"></script>
	<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>
<body>
<div id="dokument">
        <div id="naglowek">
            <br />
            <h1 class="naglowek">Piłka Nożna</h1>
            <br />
        </div>
		<div>
			<div id="content">
				<div id="kol_lewa_animacja" >
				<div id="log">
					<h2 class="center">Logowanie</h2>
					<?php if($komunikat): ?>
						<p>
							<?php echo $komunikat; ?>
						</p>
					<?php endif ?>  
					<?php if($user===NULL): ?>
						<form id="log" method="post"  enctype="multipart/form-data">
								Login:<br />
								<input type="text" name="login" required />	<br />
								Haslo:<br />
								<input type="password" name="pass" required /><br /><br />
								<input type="submit" name="login_action" value="zaloguj">
						</form>
								
					<?php else: ?>
								<p>
									Zalogowany jako:
									<?php echo $user['login'] ?>
								</p>
								<form id="log" method="post">
								<input type="submit" name="logout_action" value="wyloguj">
								</form>
				<?php endif ?>
				</div>
					<h2 class="center">Menu</h2>
					   <nav>
						   <div id="menu">
							   <div class="menu.pod"><a href="/" class="menufont">Wstęp</a></div>
								   </div>
							   <div id="lista">     
								  <div class="menu.pod"><a href="strona2" class="menufont">Geneza</a></div> 
									 <div id="menu1">
										<div class="menu.pod"> <a href="strona2#1akapit" class="menufont2">Współczesne początki piłki nożnej</a></div> 
										<div class="menu.pod"> <a href="strona2#2akapit" class="menufont2">Dalszy rozwoj gry</a></div>
									</div>    
							   </div>
						   <div id="menu2">
								<div class="menu.pod"><a href="strona3" class="menufont">Rozgrywki Klubowe</a></div>
								<div class="menu.pod"><a href="strona4" class="menufont">Ankieta</a></div>
								<div class="menu.pod"><a href="strona5" class="menufont">Kontakt</a></div>
								<div class="menu.pod"><a href="rejestracja" class="menufont">Rejestracja</a></div>
								<div class="menu.pod"><a href="formularz_zdjecie" class="menufont">Formularz zdjęć</a></div>
								<div class="menu.pod"><a href="galeria" class="menufont">Galeria</a></div>
						   </div>
					  </nav>
				</div>
                <div id="kol_prawa">
				<h1 class="tytul">Rozgrywki klubowe</h1>
					<div id="accordion">
							<p>Ligi</p>
						<div>
							<p>Piłka nożna jako jeden z najpopularniejszych sportów posiada oczywiście bardzo bogate zaplecze klubowe. Piłkarze biorą udział w rozgrywkach w tysiacach lig o różnych poziomach w praktycznie wszystkie krajach świata.</p> <br />
							<p>Obecnie najwyzszą ligą w polskiej piłce nożnej z piłkarska Ekstraklasa. W latach 1927–1939 nosiła nazwę Liga, natomiast w latach 1948–2008 I liga. W jej ramach zmagania toczą się cyklicznie (co sezon) systemem kołowym, jako mistrzostwa kraju i przeznaczone są dla 16 najlepszych polskich klubów piłkarskich. Triumfator Ekstraklasy zostaje jednocześnie mistrzem Polski, zaś najsłabsze drużyny relegowane są do I ligi polskiej (dawnej II ligi polskiej). Pierwotnie zarządzana przez Polski Związek Piłki Nożnej (w latach 1928–2005), następnie (od 18 listopada 2005) przez Ekstraklasę S.A. Od 2002 do udziału w jej rozgrywkach zostają dopuszczone wyłącznie kluby posiadające status profesjonalny (tj. działające w formie sportowej spółki akcyjnej), które – po spełnieniu wszelkich niezbędnych kryteriów – otrzymały roczną licencję na występy na tym szczeblu.
							Mistrz Polski bierze udział w eliminacjach do Ligi Mistrzów UEFA, zaś wicemistrz oraz zdobywca III miejsca w eliminacjach Ligi Europy UEFA.</p> <br />
						</div>
							<p> Oto obceny stan tabeli polskiej ligi:</p>
						<div>
							<table class="kluby">
								<caption>Tabela Polskiej Ekstraklasy z dnia 06/11/2016</caption>
								<tr >
									<th>Pozycja.</th>
									<th>Klub</th>
									<th>Ilosc pkt</th>
									<th>Bilans bramek</th>
								</tr>
								<tr class="row1">
									<td>1</td>
									<td>Jagieliona Białystok</td>
									<td>30 pkt</td>
									<td>17</td>
								  
								</tr >
								<tr class="row2">
									  <td>2</td>
									<td>Lechia Gdańsk</td>
									<td>30pkt</td>
									<td>7</td>
								</tr>
								<tr class="row1">
									  <td>3</td>
									<td>Zagłebie Lublin</td>
									<td>24pkt</td>
									<td>8</td>
								</tr>
								<tr class="row2">
									  <td>4</td>
									<td>Nieciecza</td>
									<td>24pkt</td>
									<td>-4</td>
								</tr>
								<tr class="row1">
									 <td>5</td>
									<td>Lech Poznań</td>
									<td>22pkt</td>
									<td>4</td>
								</tr>
								<tr class="row2">
									   <td>6</td>
									<td>Pogoń Szczecin</td>
									<td>21pkt</td>
									<td>5</td>
								</tr>
							</table><br />
								<a href="http://www.gol24.pl/ekstraklasa/tabela/" class="center">Źródło</a><br/><br />
						</div><br />  
					</div>
				</div>
			</div>
		</div>
</div>
</body>
</html>
