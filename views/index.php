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
	$(window).load(function() {document.getElementById("kolor").style.display = 'inline';});
  </script>
</head>
<body>
<div id="dokument">
        <div id="naglowek">
            <br />
            <h1 id="tytul" class="naglowek">Piłka Nożna</h1>
            <br />
        </div>
		<div>
            <div id="content"> 
				<div id="kol_lewa" >
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
                    <h1 class="tytul">Wstęp</h1>
					 <div id="grafika">
					<img src="static/img/pilka.svg" alt="Piłka">
					</div>
                    <p>
                        Od 1900 r. dyscyplina olimpijska. Na całym świecie w 2009 roku w rozgrywkach udział brało 265 milionów zawodniczek i zawodników, oraz 5 milionów sędziów należących do 206 lokalnych związków zrzeszonych w FIFA. W meczach piłkarskich uczestniczą dwie rywalizujące ze sobą drużyny. Celem gry jest umieszczenie piłki w bramce przeciwnika. Zwycięża drużyna, która w regulaminowym czasie gry (dwie połowy po 45 minut każda w rozgrywkach seniorów) zdobędzie więcej bramek.
                    </p><br />
                    <p > Mecze piłkarskie odbywają się na prostokątnym, pokrytym murawą boisku. Rozmiary boiska to 45 do 90 m szerokości i długości od 90 do 120 m, lecz boisko nie może być kwadratowe. Od 14 marca 2008 roku każde nowe boisko powinno mieć 105 metrów długości i 68 metrów szerokości. Decyzję tę przyjął Komitet Wykonawczy FIFA na podstawie przepisów opracowanych przez IFAB instytucję odpowiedzialną za Przepisy Gry w Piłkę Nożną.Drużyna piłkarska składa się z 11 zawodników (aby zespół został dopuszczony do meczu musi być ich co najmniej 7) i zazwyczaj 7 rezerwowych (w finałach Mistrzostw Świata i Mistrzostw Europy – 12). Wśród graczy wyróżniamy bramkarza i graczy z pola: obrońców, pomocników i napastników. Podział graczy z pola na pozycje jest czysto umowny, w aktualnie stosowanych strategiach gry często następuje podczas meczu płynna wymiana między nimi. Bramkarz jest jedynym zawodnikiem, który może dotykać i łapać piłkę rękami w czasie gry, jednak zgodnie z Przepisami może to mieć miejsce jedynie we własnym polu karnym. W przypadku rozmyślnego zagrania piłki ręką przez bramkarza poza własnym polem karnym, jego drużyna zostaje ukarana rzutem wolnym bezpośrednim , tak samo jak w przypadku pozostałych zawodników. Bramkarzowi nie wolno zagrywać piłki ręką po podaniu jej do niego przez współpartnera z wrzutu oraz po podaniu od współpartnera nogą (a konkretnie jej częścią poniżej kolana), jednak jeśli intencją zawodnika z drużyny nie było podanie piłki do bramkarza a wynikło to z przypadku, w takiej sytuacji bramkarz może zagrywać ręką, nieważne, którą częścią ciała zagrał współpartner.</p><br />
                    <p>Typowa gra piłkarska polega na utrzymywaniu się w posiadaniu piłki tak, aby nie weszła ona w posiadanie przeciwnika, na podaniach piłki nogą lub głową (nie ręką) do partnera z zespołu, a następnie kopnięciu jej do bramki przeciwnika. Kontakt fizyczny między graczami zasadniczo jest niedozwolony. Zawodnicy, którzy nie są w posiadaniu piłki, starają się przemieszczać po boisku, próbując znaleźć się w pozycjach ułatwiających wymianę piłki pomiędzy graczami swojego zespołu, a jednocześnie utrudniających grę przeciwnikowi.</p>
                   <div id="galeria" class="center">
                          <img src="static/img/galeria1.png" width="100" height="100" alt="Piłkarki">
                          <img src="static/img/galeria2.png" width="100" height="100" alt="Wślizg">
                          <img src="static/img/galeria3.png" width="100" height="100" alt="Lewandowski">
                          <img src="static/img/galeria4.png" width="100" height="100" alt="Bramkarz">
                          <img src="static/img/galeria5.png" width="100" height="100" alt="Przewrotka">
                     </div>
                     <p>
                        Piłka nożna jest jedną z szybciej prowadzonych gier. Piłka jest poza grą po opuszczeniu przez nią całym obwodem boiska lub po przerwaniu gry gwizdkiem przez sędziego. Warto przy tym zauważyć, że inaczej niż np. w piłce ręcznej zegar nie jest zatrzymywany, a czas spotkania dalej płynie. Piłka jest wprowadzana do gry w sposób ściśle określony w Przepisach Gry, który zależy od powodu, dla którego znalazła się poza grą.						
				</p>
				
                </div>  
			</div>   
        </div>	
                <div id="footer">
                    <br />
					<div id="kolor">
						<p id="para" class="center">Zmień kolor tytułu</p>
							<button onclick="zmienkolor('blue');">Niebieski</button>
							<button onclick="zmienkolor('red');">Czerwony</button>
							<button onclick="zmienkolor('yellow');">Zółty</button>
							<button onclick="zmienkolor('green');">Zielony</button>
					</div>
							<br />
								<h1 class="copyright"> Copyright © 2016 Dariusz Grynia</h1>
							<br />
				</div>     
</div>
</body>
</html>
