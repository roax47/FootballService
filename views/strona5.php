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
	<script type="text/javascript">
	
var showimg = "";
var imageopen = "";
var pair = 0;
$(document).ready(function() {
document.getElementById("gra").style.display = 'inline';
    $("img").hide();
    shuffle();
    $("#card div").click(function()
    {
        id = $(this).attr("id");
        if ($("#"+id+" img").is(":hidden"))
        {
            $("#"+id+" img").fadeIn('slow');
            if (imageopen == "")
            {
                showimg = id;
                imageopen = $("#"+id+" img").attr("src");
            }
            else
            {
                currentopened = $("#"+id+" img").attr("src");
                if (imageopen != currentopened)
                {
                    $("#"+id+" img").slideUp("slow");
                    $("#"+showimg+" img").slideUp("slow");
                    showimg = "";
                    imageopen = "";
                }
                else
                {
                    $("#"+id+" img").show();
                    $("#"+showimg+" img").show();
                    showimg = "";
                    imageopen = "";
                    pair+=1;
                }
            }
            if(pair==10)
            {
                setTimeout('finish()', 400);
            }    
        }
    });
});
function finish()
{
    var cnt1 = $("#counting").val();
    var tim=$("#timecount").val();
    alert("Gratulacje!Wygrałeś gre! Ilość ruchów : "+cnt1+"   Czas : "+tim+" sekund");
    if(confirm("Czy chcesz zagrać ponownie?"))
    {
        stopCount();
        window.location.href="strona5.htm";
    }
 
}
function ctck()
{
    var sds = document.getElementById("dum");
    if(sds == null)
    {
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
    }
    var sdss = document.getElementById("dumdiv");
    if(sdss == null)
    {
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
    }
} 
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
                    <h1 class="tytul">Kontakt</h1>
						<br /> <br /><p>W razie jakichkolwiek pytan,wyslij mail na ponizszy adres:</p>
						<a href="mailto:d.grynia1@gmail.com?subject=Pilka%20Nozna" class="mail">d.grynia1@gmail.com</a><br/><br/>
					<div id="gra">
						<h2>Gra Pamieciowa</h2>
							<div id="gra1">
										<p>Ruchy: <input type="text" id="counting" name="cnt" size="6" readonly /></p>
										<p>Czas: <input type="text" id="timecount" name="time" size="6" readonly /></p>
							</div>
							<div id="card" onclick="count();"> 
								<div id="image1" onclick="doTimer();"><img src="static/img/galeria1.png" style='display: none;width:100px; height:100px; border: none;' id="im" alt="obrazek"></div>
								<div id="image2" onclick="doTimer();"><img src="static/img/galeria2.png" style='display: none;width:100px; height:100px; border: none;' id="im1" alt="obrazek"></div>
								<div id="image3" onclick="doTimer();"><img src="static/img/galeria3.png" style='display: none;width:100px; height:100px; border: none;' id="im2" alt="obrazek"></div>
								<div id="image4" onclick="doTimer();"><img src="static/img/galeria4.png" style='display: none;width:100px; height:100px; border: none;' id="im3" alt="obrazek"></div>
								<div id="image5" onclick="doTimer();"><img src="static/img/galeria5.png" style='display: none;width:100px; height:100px; border: none; ' id="im4" alt="obrazek"></div>
								<div id="image6" onclick="doTimer();"><img src="static/img/pilka.svg" style='display: none;width:100px; height:100px; border: none; ' id="im5" alt="obrazek"></div>
								<div id="image7" onclick="doTimer();"><img src="static/img/img2.jpg" style='display: none;width:100px; height:100px; border: none; ' id="im6" alt="obrazek"></div>
								<div id="image8" onclick="doTimer();"><img src="static/img/bramka.png" style='display: none;width:100px; height:100px; border: none; ' id="im7" alt="obrazek"></div>
								<div id="image9" onclick="doTimer();"><img src="static/img/img4.jpg" style='display: none;width:100px; height:100px; border: none; ' id="im8" alt="obrazek"></div>
								<div id="image10" onclick="doTimer();"><img src="static/img/nike.png" style='display: none; width:100px; height:100px;border: none; ' id="im9" alt="obrazek"></div>
								<div id="image11" onclick="doTimer();"><img src="static/img/galeria1.png" style='display: none;width:100px; height:100px; border: none; ' id="im10" alt="obrazek"></div>
								<div id="image12" onclick="doTimer();"><img src="static/img/galeria2.png" style='display: none;width:100px; height:100px; border: none; ' id="im11" alt="obrazek"></div>
								<div id="image13" onclick="doTimer();"><img src="static/img/galeria3.png" style='display: none;width:100px; height:100px; border: none; ' id="im12" alt="obrazek"></div>
								<div id="image14" onclick="doTimer();"><img src="static/img/galeria4.png" style='display: none;width:100px; height:100px; border: none; ' id="im13" alt="obrazek"></div>
								<div id="image15" onclick="doTimer();"><img src="static/img/galeria5.png" style='display: none;width:100px; height:100px; border: none; ' id="im14" alt="obrazek"></div>
								<div id="image16" onclick="doTimer();"><img src="static/img/pilka.svg" style='display: none;width:100px; height:100px; border: none; ' id="im15" alt="obrazek"></div>
								<div id="image17" onclick="doTimer();"><img src="static/img/img2.jpg" style='display: none;width:100px; height:100px; border: none; ' id="im16" alt="obrazek"></div>
								<div id="image18" onclick="doTimer();"><img src="static/img/bramka.png" style='display: none;width:100px; height:100px; border: none; ' id="im17" alt="obrazek"></div>
								<div id="image19" onclick="doTimer();"><img src="static/img/img4.jpg" style='display: none;width:100px; height:100px; border: none; ' id="im18" alt="obrazek"></div>
								<div id="image20" onclick="doTimer();"><img src="static/img/nike.png" style='display: none;width:100px; height:100px; border: none; ' id="im19" alt="obrazek"></div>
							</div>
						<br/><br/><br/><br/>
					</div>
                </div>
				<br />
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
