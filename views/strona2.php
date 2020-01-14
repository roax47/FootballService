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
								<input type="password" name="password" required /><br /><br />
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
				
                    <h1 class="tytul">Geneza</h1>
						<p>
							Początków tej dyscypliny, jak i innych odmian futbolu, można doszukiwać w popularnych w różnych cywilizacjach grach z piłką. Na Wyspach Brytyjskich zwyczaj ten jest nieznanego pochodzenia. Mógł dotrzeć z Celtami, Rzymianami, Duńczykami, czy Normanami. Można prześledzić niesłabnącą popularność futbolu ludowego od najstarszej znanej notatki sporządzonej między 1174 a 1183 r. Pochodzenie angielskiej nazwy sportu – ‘football’ – również nie jest wyjaśnione. Do dziś tradycyjny futbol ludowy przetrwał w niektórych miejscowościach Zjednoczonego Królestwa, jak np. Royal Shrovetide Football.
							Określenie „soccer”, wbrew powszechnemu mniemaniu nie jest słowem rdzennie amerykańskim, a wywodzi się z brytyjskiego angielskiego i jest slangowym skrótem pełnej nazwy piłki nożnej: „association football”. Jest ono używane w licznych krajach angielskojęzycznych, gdzie dominuje inny rodzaj futbolu, np. futbol amerykański, czy futbol australijski.
						</p><br/>
						<a href="#1akapit"></a>
							<h6 id="1akapit">Współczesne początki piłki nożnej</h6><br />
                    
						<p> 
							W XIX wieku Wielka Brytania była centrum rewolucji przemysłowej, co doprowadziło do znaczących zmian cywilizacyjnych. Granie w piłkę przenoszono z miast na podmiejskie łąki, doprowadzono do spisania pierwszych reguł. Prym wiodły szkoły publiczne, które uznały, że gry ruchowe mogą pozytywnie wpłynąć na rozwój i dyscyplinę młodzieży. Powstanie kolei sprawiło, że szkoły mogły dużo łatwiej rywalizować ze sobą. Problemem był jednak brak wspólnych zasad gry. Reguły – zazwyczaj nieliczne – ustalano tuż przed meczem. Najstarsze znane zasady gry spisano w 1845 r. w Rugby School w środkowej Anglii.
							Kluczowe dla rozwoju piłki nożnej okazały się reguły spisane w Cambridge w 1848 r. i w Sheffield w 1857 r. Od tego momentu można mówić o stopniowym oddzielaniu się piłki nożnej od rugby. Wówczas narastał też konflikt między zwolennikami i przeciwnikami grania ręką.
							Reguły Cambridge spisano po spotkaniu 12 klubów. Wyróżniały się tym, że ograniczały możliwość trzymania piłki w ręku i faworyzowały jej kopanie. Reguły Cambridge nie zostały szeroko przyjęte w Anglii, ale stały się podstawą dla pierwszych zasad The Football Association w 1863 r.
							Północnoangielski Sheffield Football Club założony w 1857 r. spisał w tym samym roku własne reguły, które miały znacząco wpłynąć na rozwój gry. W tym robotniczym regionie szkoły miały mniejszy wpływ na grę. Innowacje wprowadzone w Sheffield odcisnęły w ciągu kolejnych dwudziestu lat znaczące piętno na południowoangielskiej odmianie FA. Zasady wyróżniały się brakiem przepisu spalonego.
							We wczesnych latach 60. XIX wieku dążenie do ujednolicenia reguł było na tyle duże, że 26 października 1863 r. udało się powołać 11 londyńskim klubom The Football Association – pierwszą organizację zarządzającą rozgrywkami piłkarskimi. Konflikt dotyczący szarżowania i gry rękoma doprowadził do powołania w 1871 r. the Rugby Football Union[8]. Drogi rugby i piłki nożnej się rozeszły.
						</p><br />
						<a href="#2akapit"></a>
						<h6 id="2akapit">Dalszy rozwój gry</h6><br/>
                    
						<p>
							Pierwotna piłka nożna przypominała bardziej rugby. Identyczna zasada spalonego uniemożliwiała grę do przodu, stąd pod bramkę rywala przemieszczano się albo dryblując, albo za pomocą młyna. Na taktykę znacząco wpłynęli Szkoci, rozwijając grę podaniami.
							Liczne zmiany w przepisach również wpływały na grę. Wycofanie zagrania mark doprowadziło do rozwoju gry głową. W ciągu kolejnego dziesięciolecia FA zaadoptowała liczne zasady z Sheffield, jak rzut wolny, rzut rożny, rzut z autu, czy poprzeczkę. Ostatecznie oba związki połączyły się w 1877 r.
							Kolejne zmiany dotyczyły rzutu karnego, sędziów, bramkarza, pola karnego (wprowadzonego w 1902 r.), kartek (od 1970 r.), czy przeprowadzania zmian (dopuszczonych po raz pierwszy w 1958 r.). Przeprowadzano także modyfikacje wcześniejszych przepisów oraz dwukrotnie (w 1938 i 1997 r.) nastąpiło uwspółcześnienie tekstu zasad. Do zarządzania regułami gry powołano w 1886 r. Międzynarodową Radę Piłkarską (IFAB – International Football Association Board).
							Anglicy przebywający za granicami swojego kraju sprowokowali jej rozprzestrzenianie się na całym świecie. Dzięki łatwym podstawowym zasadom piłka nożna w krótkim czasie była znana na wszystkich kontynentach. Duże znaczenie dla rozwoju dyscypliny miało powołanie Międzynarodowej Federacji Piłki Nożnej (FIFA) w Paryżu w 1904 r., która od 1913 r. należy do IFAB, a od 1930 r. organizuje Mistrzostwa Świata.
						</p><br/>
						<p>Więcej na:</p><a href="http://www.pomorski-zpn.pl/storage/app/uploads/public/561/82a/6c3/56182a6c3b6f0408751190.pdf" class="center">Link</a>
						
                </div>  
            </div>
        </div>	
                <div id="footer">
                    <br />
                     <h1 class="copyright">Copyright © 2016 Dariusz Grynia</h1>
                    <br />
				</div>
    </div>
</body>
</html>
