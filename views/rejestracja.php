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
                    <h1 class="tytul">Rejestracja</h1><br />
						<?php if($user===NULL): ?>
							<form method="post" id="log" enctype="multipart/form-data">
								<p>Login:<br/><input type="text" name="new_login" required /><br /> <br/>
								Hasło:<br /><input type="password" name="new_pass" required /> <br /><br />
								Powtórz hasło:<br /><input type="password" name="verify_pass" required /><br /><br />
								Adres email:<br /><input type="text" name="new_email" required /><br /><br /></p>
								<input type="submit" name="new_user_action" value="Wyślij">
							</form>
						<?php else: ?>	
										<p>
											Zalogowany jako:
											<?php echo $user['login'] ?>
										</p>
										<form id="log" method="post">
											<input type="submit" name="logout_action" value="Wyloguj">
										</form>
						<?php endif ?>
                      
                </div>
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
