
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Arii</title>
</head>


<body>
<div id="container">
<div id="header">
</div>
<body>

<div id="headerimg6">
<ul id="menuu">
	<li><a href="index.php">Drepte</a></li>
	<li><a href="puncte.php">Puncte. Distante</a></li>
	<li><a href="arii.php">Arii</a></li>
	<li><a href="poligon.php">Punct in poligon</a></li></ul>
<div id="line">
</div>
</div>
<div id="content">


<h1>Arii</h1> 
<b>Aria unui triunghi</b><br/><br/>
<ol><li>Daca triunghiul este dat prin lungimile laturilor: a, b, c, atunci pentru calculul ariei se foloseste formula lui Heron:<br/><br/>
<img src="15.png"/><br/><br/></li>
<li>Daca triunghiul este dat prin coordonatele v�rfurilor sale A(xA,yA), B(xB,yB), C(xC,yC), atunci:<br/><br/>
<img src="16.png"/><br/><br/>adica,<br/><br/>
<img src="17.png"/><br/></li></ol><br/>
<b>Aria unui poligon convex</b><br/><br/>
Pentru calculul ariei unui poligon convex A1A2�An, Ai(xi,yi),  , se realizeaza o partitie a suprafetei poligonale �n triunghiuri, de exemplu:<br/><br/>
<img src="18.png"/><br/><br/>
<b>Aria unui poligon oarecare</b><br/><br/>
Pentru a calcula aria unui poligon oarecare A1A2A3..An, vom considera un punct P arbitrar ales �n plan. Vom "�mparti" poligonul �n triunghiuri de forma PAiAi+1 (consideram ca A1=An+1) si vom calcula "aria cu semn" Ti a fiecarui triunghi (�n formula ariei nu vom folosi functia de valoare absoluta). Distingem �n acest moment doua cazuri:<br/><br/>
<ol><li>Poligonul are v�rfurile orientate trigonometric. Pentru fiecare latura "spre dreapta", aria Ti corespunzatoare va fi negativa, iar pentru fiecare latura "spre st�nga", aria Ti corespunzatoare va fi pozitiva.</li>
<li>Poligonul are v�rfurile orientate antitrigonometric. Pentru fiecare latura "spre dreapta", aria Ti corespunzatoare va fi pozitiva, iar pentru fiecare latura "spre st�nga", aria Ti corespunzatoare va fi negativa.</li></ol><br/><br/>
�n ambele cazuri, efectu�nd suma algebrica a ariilor Ti vom obtine aria poligonului (deoarece ariile negative vor "anula" zonele corespunzatoare ariilor pozitive care se afla �n afara poligonului).<br/><br/>
<img src="19.jpg"/><br/><br/>
Formula finala devine:<br/><br/>
<img src="20.gif"/><br/><br/>
Aceasta formula reprezinta "aria cu semn" a poligonului (o arie pozitiva indica parcurgerea v�rfurilor �n ordine trigonometrica, iar o arie negativa, parcurgerea in ordine antitrigonometrica).<br/><br/>





</div>

</div>
</div>

</body>
</html>