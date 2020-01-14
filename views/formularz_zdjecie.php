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
                    <h1 class="tytul">Dodaj zdjecie</h1><br />
						<form method="post" enctype="multipart/form-data">
							<p>
							Autor:<input type="text" name="author" value="<?php echo $user['login'] ?>" required /><br /><br />
							Tytuł:<input type="text" name="title" required /><br /><br />
							Znak wodny:<input type="text" name="watermark" required /><br /><br/>
							<input type="file" name="photo" required /><br /><br />
							<?php if($user!==NULL): ?>
								Publiczne:<br />
								<input type="radio" name="is_public" value="<?= 1 ?>"  checked="checked" required />Tak<br />
								<input type="radio" name="is_public" value="<?= 0 ?>"  required />Nie<br />
								<input type="hidden" name="user_id" value="<?php echo $user['_id'] ?>"  />
							<?php endif ?>
							<input type="submit" name="action" value="Wyślij">
							</p>
						</form>
                      <h2>Dostępne zdjęcia</h2>
						<table>
							<tr>
							<form method="post">
							<?php if ($photos): ?>
								<?php $k=0;foreach ($photos as $zdjecie): ?>
									<?php $k++; if($k%5===0 && $k===1) echo "<tr>";if((($zdjecie['is_public'])||($zdjecie['user_id']==$user['_id']))): ?>
											<th>
											<label>
												<div><?=$zdjecie['title'] ?></div>
												<a href="<?= './images/WATERMARK' . $zdjecie['name'] ?> ?>"><img src="<?= './images/MINI' . $zdjecie['name'] ?>" alt="z_dedykacja_dla_walidatora"></a>
												<div><?=$zdjecie['author'] ?></div>
													<?php if($user!=NULL): ?>
													<div>
														<?php if($zdjecie['user_id']==$user['_id']): ?>
															Publiczne:<br />
															<input type="radio" name="is_public[<?= $zdjecie['_id'] ?>]" value="<?= 1 ?>" <?php if($zdjecie['is_public']): ?> checked="checked"	<?php endif ?>
															required />Tak<br />									
															<input type="radio" name="is_public[<?= $zdjecie['_id'] ?>]" value="<?= 0 ?>" <?php if(!($zdjecie['is_public'])): ?> checked="checked" <?php endif ?>
															required />Nie<br />
															<input type="hidden" name="check_id[]" value="<?= $zdjecie['_id'] ?>"  />
														<?php else: ?>
														Funkcja niedostępna
														<?php endif ?>
													</div>
													<?php endif ?>
												<div>
													Wyślij do galerii:
													<input type="checkbox" name="check[]" value="<?= $zdjecie['_id'] ?>" <?php if(isset($myGallery[(string)$zdjecie['_id']])): ?> checked="checked" <?php endif ?>><br/>
												</div>
											  </label>
											</th>
										<?php if($k%5===0){ echo "</tr>";}?>
									<?php endif ?>	
								<?php endforeach ?>
							<?php endif ?>
						</table>
							<input type="submit" name="add_action" value="Zapisz">
							<input type="submit" name="usun_action" value="Usuń wszystko">
						</form>									
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
