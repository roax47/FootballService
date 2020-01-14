  function zmienkolor(nowyKolor) {
    var elem = document.getElementById("tytul");
    elem.style.color = nowyKolor;
	 
  }
window.onload = function clickCounter() {
if (localStorage.click_count) 
	{
       
    } 
	else  
	{
	 if (sessionStorage.click_count) {
        
		}
     else 
	{
		myFunction();
        
    }
        
    }
};
function myFunction() {
    if (confirm("Wez udzial w ankiecie") == true) {
		window.open("strona4.htm")
		 localStorage.click_count = 1;
    } else {
		Ankieta();
         sessionStorage.click_count = 1;
    }
	}
function Ankieta() 
{
   
	var div = document.createElement('div');
    var text = document.createTextNode('Pamietaj o ankiecie,która możesz wypelnic w dowlonych momencie w zakładce ankieta');
	 
	 div.appendChild(text);
    document.getElementById("footer").appendChild(div);
}
//////-------------------------------------GRA----------------------------///////
var click=1;
function count()
{
    var x = click++;
    document.getElementById('counting').value = x;
}

function randomFromTo(from, to)
{
    return Math.floor(Math.random() * (to - from + 1) + from);
}
function shuffle()
{
    $("img").hide();
    var images = $("#card").children();
    var shuf = $("#card div:first-child");
    var array_img = new Array();
    for (i=0; i<images.length; i++)
    {		
        array_img[i] = $("#"+shuf.attr("id")+" img").attr("src");
        shuf = shuf.next();
    }
    var shuf = $("#card div:first-child");
    for (z=0; z<images.length; z++)
    {
	randIndex = randomFromTo(0, array_img.length - 1);
        $("#"+shuf.attr("id")+" img").attr("src", array_img[randIndex]);
	array_img.splice(randIndex, 1);
        shuf = shuf.next();
    }
}

var c=0;
var t;
var timer_is_on=0;

function timedCount()
{
document.getElementById('timecount').value=c;
c=c+1;
t=setTimeout("timedCount()",1000);
}
function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=1;
  timedCount();
  }
}
function stopCount()
{
clearTimeout(t);
timer_is_on=0;
}