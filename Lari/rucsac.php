
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Atetstat</title>
</head>

<body>


<div id="container">


<div id="headerimg6">
<ul id="menuu">
	<li><a href="index.php">Introducere</a></li>
	<li>
		<a href="http://">Probleme clasice</a>
		<ul>
			<li><a href="lee.php">Algoritmul lui Lee</a></li>
			<li><a href="ssm.php">Subsecventa de suma maxima</a></li>
			<li><a href="rucsac.php">Problema dinamica a rucsacului</a></li>
		</ul>
	</li>
	</ul>
</div>




<div id="header"></div>



<div id="content"> 
<h1>Prezentare</h1>
Se da o multime formata din N obiecte, fiecare fiind caracterizat de o greutate si un profit. Sa se gaseasca o submultime de obiecte astfel incat suma profiturilor lor sa fie maxima, iar suma greutatilor lor sa nu depaseasca o valoare G.
<br/>
Altfel spus:<br/><br/>
Maximizati<img src="kn1.png" style="position:absolute; margin-top:-15px; margin-left:8px;"/>
<tab><tab>astfel incat</tab></tab><img src="kn2.png" style="position:absolute; margin-top:-18px; margin-left:10px"/>

<br/><br/><br/> Complexitate : <img src="http://upload.wikimedia.org/math/4/a/c/4ac5cc39b948b125cb213ebb2ecec418.png"/>
<br/><br/> Spatiu : <tab>&nbsp<img src="http://upload.wikimedia.org/math/4/a/c/4ac5cc39b948b125cb213ebb2ecec418.png"/></tab>
<br/>
<h1>Algoritm</h1>
<br/>
<img src="http://upload.wikimedia.org/math/c/b/a/cba5389c96e82ea7b3f6e6933afb92f0.png"/><br>
<img src="http://upload.wikimedia.org/math/5/c/2/5c279d36c84bb28e88de6bae7b62fa27.png"/><br/><br/>
Solutia se gaseste in : <img src="http://upload.wikimedia.org/math/4/c/9/4c984e5e6b255700ce8397efb693daee.png"/><br/>
<ul>
	<li>// Input:</li>
	<li>// Valori (stocate in tabloul v)</li>
	<li>// Greutati (stocate in tabloul w)</li>
	<li>// Capacitatea rucsacului (W)</li>
</ul>
<ol>
	<li><b>for</b> j = 0, W <b>executa</b></li>
	<li><tab>m[0, j] = 0</tab></li>
	<li><b>for</b> i =1, n <b>executa</b></li>
		<li><tab><b>for</b> j =0, W <b>executa</b></tab></li>
			<li><tab><tab><b>daca</b> w[i] <= j <b>atunci</b></tab></tab></li>
				<li><tab><tab><tab>m[i, j]=max(m[i-1, j], m[i-1, j-w[i]] + v[i])</tab></tab></tab></li>
			<li><tab><tab><b>atfel</b></tab></tab></li>
				<li><tab><tab><tab>m[i, j] := m[i-1, j]</tab></tab></tab></li>
</ol><br/><br/>
<tab><tab><tab><tab><tab><img src="rucsac.png"/><br/></tab></tab></tab></tab></tab><br/>
<p><tab>Este necesar sa facem urmatoarea observatie: pentru o anumita linie din dinamica, recurenta nu se foloseste decat de linia precedenta, deci retinerea intregului tablou este inutila. In schimb, vom retine doar ultimele doua linii din matrice, reducand memoria la <var>O(N)</var>. De asemenea putem sa retinem tot timpul o singura linie, daca parcurgem linia în sensul invers al greutatilor, cum puteti observa in aceasta solutie.</tab></p><br/>
<img src="optim.png"/>

</div>

<div id="sitebar"> 
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<img class ="half" src="short.png" style="position: absolute; top: 390px; left: 245px;">
<img class ="half2" src="side.png" style="position: absolute; top: 220px; left: -30px;">
<font size="3"><p>Site-uri ajutatoare:</p></font>
<font size="2.5"><a class="sideh" href="http://www.lbi.ro/~oana/10%20E%20info/programare%20dinamica.pdf" target="_blank">www.lbi.ro</a><br/>
<font size="2.5"><a class="sideh" href="http://bigfoot.cs.upt.ro/~marius/curs/pc2/old/curs11.pdf" target="_blank">www.cs.upt.ro</a><br/>
<font size="2.5"><a class="sideh" href="http://www.infoarena.ro/pd" target="_blank">www.infoarena.ro</a><br/>
<font size="2.5"><a class="sideh" href="http://www.hackpedia.info/viewtopic.php?t=11322" target="_blank">ww.hackpedia.info</a><br/>
<font size="2.5"><a class="sideh" href="http://algostruct.netne.net/?page=dinamica&left=l_tehnicix" target="_blank">algostruct.netne.net</a><br/>
<b><font size="2.5"><a class="sideh" href="http://campion.edu.ro/arhiva/index.php?page=keyword&action=view&id=12" target="_blank">Arhiva de probleme</a><br/></b>
</div>



</div></div>

</body>
</html>