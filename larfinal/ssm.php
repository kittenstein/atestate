
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Subsecventa de suma maxima</title>
</head>

<body>


<div id="container">


<div id="headerimg6">
<ul id="menuu">
	<li><a href="index.php">Introducere</a></li>
	<li>
		<a href="lee.php">Algoritmul lui Lee</a>

		<a href="ssm.php">SSM</a>

		<a href="rucsac.php">Problema Rucsacului</a>
	</li></ul>
</div>




<div id="header"></div>



<div id="content"> 
<h1>Enunt</h1> 

<blockquote style="font-family:Georgia; font-size:18px;">Se da un sir de <var>N</var> numere întregi <var>(a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub>)</var>. Sa se determine o subsecventa <var>(a<sub>i</sub>, a<sub>i+1</sub>, ..., a<sub>j</sub>)</var> care sa aiba suma maxima.</blockquote>
<h2 style="font-size:14px;">Exemplu:</h2>
Pentru secventa de numere <var>(-1, 2, 3, -4, -2, 2, 1, -3, -2, -3, -4, 9, -2, 1, 7, 8, -19, -7, 2, 4, 3)</var>, o subsecventa de suma maxima este <var>(9, -2, 1, 7, 8)</var>.
<br/><br/>

<h1>Rezolvare</h1><br/>
<p>Prima rezolvare care ne vine în minte are complexitatea <var>O(N<sup>3</sup>)</var> si consta în determinarea sumei fiecarei subsecvente posibile si retinerea maximului acestor sume. Este evident ca anumite sume partiale sunt calculate de mai multe ori.</p>
<p>Putem reduce complexitatea la <var>O(N<sup>2</sup>)</var> tinând cont de faptul ca suma subsecventei <var>a[j..i]</var> este egala cu suma subsecventei <var>a[j..i-1]</var>, la care se aduna <var>a[i]</var>. Pastram într-un sir <var>sum[i]</var> suma elementelor din subsecventa <var>a[1..i]</var>. Pentru a determina suma elementelor din subsecventa <var>a[j..i]</var> facem diferenta: <var>sum[i] - sum[j-1]</var>.</p>
<p>Ideea poate fi rafinata calculând pentru fiecare indice <var>i</var> numarul <var>best[i]</var>, reprezentând subsecventa de suma maxima cu capatul drept în <var>i</var>. Este usor de observat ca <var>best[i] = max(sum[i] - sum[j-1])</var>, unde <var>j</var> ia valori de la <var>1</var> la <var>i</var>. Relatia anterioara se mai poate scrie: <var>best[i] = sum[i] - min(sum[j-1])</var>. Obtinem astfel un algoritm liniar care ne determina subsecventa de suma maxima ceruta.</p></br>

<img src="best2.jpg"/><br/><br/>

O ultima idee, daca se garanteaza ca exista cel putin un numar pozitiv, ar fi sa partitionam sirul în subsecvente încât fiecare sa aiba ambele capete cât mai mici posibile si suma elementelor subsecventei sa fie negativa.<br/><br/>

<img src="best3.jpg"/>

<div id="footer">
ATESTAT INFORMATICA 2014 - SIMIONESCU LARISA
</div>

</div>
<div id="sitebar"> 

<img class ="half" src="short.png"><br>
<img class ="half2" src="side.png">
<div id="position">
<font size="3"><p>Site-uri ajutatoare:</p></font>
<font size="2.5"><a class="sideh" href="http://www.lbi.ro/~oana/10%20E%20info/programare%20dinamica.pdf" target="_blank">www.lbi.ro</a><br/>
<font size="2.5"><a class="sideh" href="http://bigfoot.cs.upt.ro/~marius/curs/pc2/old/curs11.pdf" target="_blank">www.cs.upt.ro</a><br/>
<font size="2.5"><a class="sideh" href="http://www.infoarena.ro/pd" target="_blank">www.infoarena.ro</a><br/>
<font size="2.5"><a class="sideh" href="http://www.hackpedia.info/viewtopic.php?t=11322" target="_blank">ww.hackpedia.info</a><br/>
<font size="2.5"><a class="sideh" href="http://algostruct.netne.net/?page=dinamica&left=l_tehnicix" target="_blank">algostruct.netne.net</a><br/>
<b><font size="2.5"><a class="sideh" href="http://campion.edu.ro/arhiva/index.php?page=keyword&action=view&id=12" target="_blank">Arhiva de probleme</a><br/></b></div>
</div>


</div></div>

</body>
</html>