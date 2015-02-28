
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Backtracking recursiv</title>
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
<h1>Backtracking Recursiv</h1><br/>

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

void dame(int dim,int linie, int memorie[])<br/>
// aici este functia care face efectiv backtracking-ul (suntem la<br/>
// linia(nivelul) linie.<br/>
// dim ne spune cât de mare-i tabla<br/>
// memorie tine minte damele deja pozitionate. Ea este stiva<br/>
{<br/><br/>
<tab>if(linie==dim)// daca am terminat<br/>
<tab><tab>afiseaza(dim,memorie);//afisam<br/>
<tab>else //altfel avem de lucru<br/>
<tab><tab>for(memorie[linie]=0;memorie[linie] < dim;memorie[linie]++)<br/>
<tab><tab>//încercam toate coloanele de la stânga la dreapta<br/>
<tab><tab><tab>if(!ataca(linie,memorie))<br/>
<tab><tab><tab>//daca e o pozitie valida trecem la nivelul urmator<br/>
<tab><tab><tab><tab>dame(dim,linie+1,memorie);<br/>
<tab><tab><tab>//când ne întoarcem din apelul recursiv înseamna ca am revenit<br/>
<tab><tab>// la acest nivel si încercam urmatoarea coloana<br/><br/>
}<br/><br/>
void main()<br/>
{<br/><br/>
<tab>int n,memorie[100];<br/>
<tab>printf("dimensiunea tablei de joc=");<br/>
<tab>scanf("%d",&n);<br/>
<tab>dame(n,0,memorie);// prima linie are numarul zero<br/><br/>
}<br/></code></b><br/><br/>
<center><img src="10.gif"/></center><br/><br/>




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