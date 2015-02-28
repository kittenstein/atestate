
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Atetstat</title>
</head>


<body>



<div id="container">
<div id="header">
</div>
<div id="headerimg2">
<blockquote><div id="menuaffi">
 <a href="index.php" class="fade"><b>Notiuni generale</b></a>
 <a href="tipuri.php" class="fade"><b>Tipuri de graf</b></a>
 <a href="reprezentare.php" class="fade"><b>Reprezentare</b></a>
 <a href="bf.php" class="fade"><b>Parcurgere bf</b></a>
 <a href="df.php" class="fade"><b>Parcurgere df</b></a>
</div></blockquote>
</div>



<div id="content"> 
<h1>Adiacenta. Incidenta. Grad.</h1> 
<br/>
Numim <b>graf orientat</b>, o pereche ordonata de multimi G=(X,U), unde:
<ul><li>X este o multime finita si nevida numita multimea nodurilor (varfurilor);</li>
<li>U este o multime formata din <b>perechi ordonate</b> de elemente ale lui X, numita multimea arcelor.</li>
</ul><br/>
<center><img src="im1.png"/></center><br/><br/>
In graful G=(X,U) de mai sus:<br/>
<ul><li>X={1,2,3,4,5}</li><li>U={(5,3),(5,3),(1,2),(1,3),(1,4),(1,5),(2,3),(2,4),(2,5),(3,4),(4,5),(3,3)}</li><br/>
<li>Nodul 4 este <b>succesor</b> (<u>Daca (x,y) este un arc, atunci y este succesorul lui x</u>) al nodului 2</li><br/>
<li>Nodul 2 este <b>predecesor</b> (<u>Daca (x,y) este un arc, atunci x este predecesor al lui y</u>) este predecesorul al nodului 4</li><br/>
<li>Nodurile 2 si 4 sunt <b>adiacente</b> (<u>Daca (x,y) este un arc, atunci x si y se numesc adiacente</u>)</li><br/>
<li>Arcul (2,4) si nodul 2 se numesc <b>incidente</b> (<u>Daca (x,y) este un arc, atunci x sau y si (x,y) sunt incidente</u>)</li><br/>
<li>(3,3) este o <b>bucla</b> (<u>Un arc de forma(x,x) se numeste bucla</u>)</li><br/>
<li>Exista doua arce (5,3), deci G este <b>2-graf</b> (<u>Se numeste <b>p-graf</b> un graf orientat in care numarul arcelor identice este mai mic sau egal decat p</u>)</li><br/>
<li><b>d<sup>+</sup>(2)</b> = 3 (<b>Gradul exterior</b> al unui varf x = numarul arcelor care ies din nodul x)</li><br/>
<li><b>d<sup>-</sup>(2)</b> = 1 (<b>Gradul interior</b> al unui varf x = numarul arcelor care intra in nodul x)</li></ul><br/>











</div>
</div>

</body>
</html>