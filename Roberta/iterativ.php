
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Backtracking iterativ</title>
</head>


<body>
<div id="container">
<div id="header">
<div id="container">


<div id="headerimg6">
<ul id="menuu">
	<li><a href="index.php">Backtracking</a></li>
	<li><a href="regine.php">Reginele</a></li>
	<li><a href="recursiv.php">Recursiv</a></li>
	<li><a href="iterativ.php">Iterativ</a></li></ul>
</div></div>
</div>




<div id="content">
<h1>Backtracking Iterativ</h1><br/>

<code><b>#include "stdio.h"<br/>
#include "conio.h"<br/>
#include "math.h"<br/><br/>

int ataca(int linie, int memorie[])<br/>
//aceasta functie testeaza daca regina de pe linie este atacata de<br/>
reginele pozitionate anterior. Este de fapt functia de Validare<br/>
{<br/><br/>
<tab>int i;<br/>
<tab>//luam pe rând toate damele pozitionate anterior<br/>
<tab>for(i=0;i < linie;i++)<br/>
<tab>//verificam daca cele 2 dame sunt pe aceeasi coloana sau pe diagonala<br/>
<tab><tab>if((memorie[linie]==memorie[i]) ||(abs(memorie[i]-memorie[linie])==linie-i))<br/>
<tab><tab>// se ataca, deci nu sunt corect pozitionate.<br/>
<tab><tab><tab>return 1;<br/>
<tab>return 0; //daca am ajuns aici, înseamna ca nu se ataca<br/><br/>
}<br/><br/><br/>

//caile de afisare sunt infinite void afiseaza(int dim,int memorie[])<br/>
{<br/><br/>
<tab>int l,c;<br/>
<tab>for(l=0;l<=dim;l++)<br/>
<tab><tab>printf("_");<br/>
<tab>for(l=0;l < dim;l++)<br/>
<tab>{<br/><br/>
<tab><tab>printf("\n|");<br/>
<tab><tab>for(c=0;c < dim;c++)<br/>
<tab><tab>if(memorie[l]==c)<br/>
<tab><tab><tab>printf("%c",6);<br/>
<tab><tab>else<br/>
<tab><tab><tab>if((l+c)&1)<br/>
<tab><tab><tab><tab>printf(" ");<br/>
<tab><tab><tab>else<br/>
<tab><tab><tab><tab>printf("%c",219);<br/>
<tab><printf("|");<br/><br/>
<tab>}<br/><br/>
<tab>printf("\n");<br/>
<tab>for(l=0;l<=dim;l++)<br/>
<tab><tab>printf("-");<br/>
<tab>printf("\n");<br/>
<tab>printf("o tasta, va rog!\n");<br/>
<tab>getch();<br/><br/>
}<br/><br/>

void main()<br/>
{<br/><br/>
<tab>int n,memorie[100],nivel;<br/>
<tab>printf("dimensiunea tablei de joc=");<br/>
<tab>scanf("%d",&n);<br/>
<tab>nivel=0;<br/>
<tab>//datorita C-ului primul nivel are numarul zero<br/>
<tab>//punem prima dama sa se încalzeasca pe marginea tablei<br/>
<tab>memorie[nivel]=-1;<br/>
<tab>//cât timp nu încercam sa pozitionam dama de linia -1<br/>
<tab>while(nivel>=0)<br/>
<tab>{<br/><br/>
<tab><tab>if(nivel==n) //avem o solutie<br/>
<tab><tab>{<br/><br/>
<tab><tab><tab>afiseaza(nivel,memorie);<br/>
<tab><tab><tab>//ne întoarcem la ultima linie<br/>
<tab><tab><tab>nivel--;<br/><br/>
<tab><tab>}<br/><br/>
<tab><tab>//încercam urmatoarea pozitie de pe linia curenta<br/>
<tab><tab>memorie[nivel]++;<br/>
<tab><tab>// daca dama a epuizat coloanele<br/>
<tab><tab>if(memorie[nivel]==n)<br/>
<tab><tab><tab>//revenim la linia anterioara<br/>
<tab><tab><tab>nivel--;<br/>
<tab><tab>else // altfel<br/>
<tab><tab><tab>//daca este o pozitie valida<br/>
<tab><tab><tab>if(!ataca(nivel,memorie))<br/>
<tab><tab><tab><tab>memorie[++nivel]=-1;<br/>
<tab><tab><tab><tab>//trecem la urmatorul nivel si scoatem înca o dama la încalzire<br/><br/>
<tab>}<br/><br/>
}<br/></code></b><br/><br/>
<center><img src="11.gif"/></center><br/><br/>




<div id="footer">
<div id="footer_holder">

<div id="footerbar_1">
METODA BACKTRACKING - PAVEL ROBERTA
</div>


</div></div>
</div>


</div>


</body>

</html>