
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Notiuni generale</title>
</head>


<body>
<div id="headerimg6">
<center><ul id="menuu">
	<li><a href="index.php">Graf neorientat</a></li>
	<li><a href="reprezentare.php">Reprezentarea grafurilor</a></li>
	<li><a href="parcurgeri.php">Parcurgerea grafurilor</a></li></ul></center>
</div>

<div id="container">
<div id="header">

</div>


<div id="content">
<h1>Notiuni generale</h1><br/><br/>
<b>Definitie.</b> Se numeste <b>graf neorientat</b> o pereche ordonata de multimi notata G=(V,M) unde:<br/>
<tab>* V este o multime finita si nevida ale carei elemente se numesc noduri sau varfuri<br/>
<tab>* M este o multime de perechi neordonate de elemente distincte din V ale carei elemente se numesc muchii<br/><br/>
<b>Exemplu</b> de graf neorientat:<br/><br/>
<tab>G=(V,M), unde:<br/>
<tab><tab>V={1,2,3,4}<br/>
<tab><tab>M={(1,2),(2,3),(1,4)}<br/><br/>
<em>Demonstratie:</em><br/>
G este graf neorientat deoarece respecta definitia prezentata mai sus, adica:<br/>
<ul><li>V este finita si nevida</li><li>M este o multime de perechi neordonate de elemente din V</li></ul><br/>
<b>Observatie!</b> Intr-un graf neorientat muchia (x,y) este aceeasi cu muchia (y,x).<br/>
<h1>Notiuni frecvente</h1><br/><br/>
In teoria grafurilor neorientate se intalnesc frecvent notiunile:<br/>
<ul><li><b>extremitatile unei muchii</b> = fiind data muchia (x,y) se numesc extremitati ale sale <b>nodurile</b> x si y</li>
<li><b>varfuri adiacente</b> = daca intr-un graf exista muchia (x,y) se spune despre <b>nodurile</b> x si y ca sunt <b>adiacente</b></li>
<li><b>incidenta</b> = daca m1 si m2 sunt doua muchii ale aceluiasi graf, se numesc <b>incidente</b> daca <b>au o extremitate comuna</b></li></ul>
<tab><tab><b>Exemplu:</b><tab>m1=(x,y) si m2=(y,z) sunt incidente<br/><br/>
<b>Exemplu</b> de graf neorientat reprezentat textual:<br/>
G=(V,M) unde:<br/>
<tab>V={1,2,3,4}<br/>
<tab>M={(1,2),(2,3),(1,4)}<br/><br/>
<b>Exemplu</b> de graf neorientat reprezentat grafic (este graful de la exemplul anterior):<br/><br/>
<center><img src="im11.png"/></center><br/>
<h1>Graf partial</h1><br/><br/>
<b>Definitie.</b> Fie G=(V,M) un graf neorientat. Se numeste <b>graf partial</b> al grafului G graful neorientat G1=(V,M<sub>1</sub>) unde M<sub>1</sub>&#8838M. <br/>
<em>Concluzie:</em> Un graf partial al unui graf neorientat G=(V,M) are aceeasi multime de varfuri ca si G, iar multimea muchiilor este o submultime a lui M sau chiar M.<br/>
<b>Exemplu:</b><br/>Fie graful neorientat G=(V,M), unde V=(1,2,3,4} si M={(1,2),(1,4),(2,3)}.<br/>Un graf partial al grafului G este graful neorientat G1=(V,M<sub>1</sub>) unde V={1,2,3,4) si M<sub>1</sub>={(1,2),(1,4)} (s-a eliminat muchia (2,3))<br/><br/>
<center><img src="im22.png"/><tab><img src="im3.png"/></center><br/>

<h1>Subgraf</h1><br/><br/>
<b>Definitie.</b> Fie G=(V,M) un graf neorientat. Se numeste <b>subgraf</b> al grafului G graful neorientat G1=(V<sub>1</sub>,M<sub>1</sub>) unde V<sub>1</sub>&#8838V, iar M<sub>1</sub> contine toate muchiile din M care au extremitatile in V<sub>1</sub>. <br/>
<em>Concluzie:</em>Fie G=(V,M) un graf neorientat. Un subgraf al grafului G se obtine stergand anumite varfuri si odata cu acestea si muchiile care le admit ca extremitate.<br/>
<b>Exemplu:</b><br/>Fie graful neorientat G=(V,M), unde V=(1,2,3,4} si M={(1,2),(1,4),(2,3)}.<br/>Un subgraf al grafului G este graful neorientat G1=(V<sub>1</sub>,M<sub>1</sub>) unde V<sub>1</sub>={1,2,3) si M<sub>1</sub>={(1,2),(2,3)} (s-au eliminat nodul 4 si muchia (1,4))<br/><br/>
<center><img src="im2.png"/><tab><img src="im4.png"/></center><br/>

<h1>Gradul unui varf</h1><br/<br/>
<b>Definitie.</b> Fie G=(V,M) un graf neorientat si x un nod al sau. Se numeste <b>grad al nodului x</b> numarul muchiilor incidente cu x, notat <b>d(x)</b>.<br/
<b>Exemplu:</b> Fie graful neorientat G=(V,M), unde V={1,2,3,4} si M={(1,2),(2,3),(1,4),(1,3)}<br/><br/>
<center><img src="im5.png"/></center><br/>
Gradul nodului 1 este d(1) si d(1)=3 (in graf sunt trei muchii incidente cu 1).<br/>
Gradul nodului 2 este d(2) si d(2)=2 (in graf sunt doua muchii incidente cu 2).<br/>
Gradul nodului 3 este d(3) si d(3)=2 (in graf sunt doua muchii incidente cu 3).<br/>
Gradul nodului 4 este d(4) si d(4)=1 (in graf este o singura muchie incidenta cu 4).<br/><br/>
<em>Observatii.</em><br/>
<ol><li>Daca <b>gradul unui varf</b> este <b>0</b> varful respectiv se numeste <b>varf izolat</b>.</li>
<li>Daca <b>gradul unui varf</b> este <b>1</b> varful respectiv se numeste <b>varf terminal</b>.</li></ol>
<b>Teorema</b><br/>
<tab>In graful neorientat G=(V,M) cu m muchii se verifica egalitatea: &#8721 d(i) = 2m.<br/><br/>
<em>Demonstratie.</em> Muchia (x,y) contribuie cu o unitate la gradul lui x si cu o unitate la gradul lui y, deci cu doua unitati la suma din enunt. Cum in total sunt m muchii => suma gradelor = 2m.<br/><br/>
<b>Corolar.</b> In orice graf neorientat G=(V,M) exista un numar par de varfuri de grad impar.









</div>


</div>

</body>
</html>