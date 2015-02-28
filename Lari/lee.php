
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

<em>Algoritmul lui Lee</em> presupune doi pasi importanti:<br/><br/>
1. Primul si poate cel mai important pas este folosirea unei <b>cozi</b>, sub forma unui vector de structuri (de preferabil), care va mentine toti pasii pe care o sa-i facem de acum în colo. În aceasta coada se pun, pentru fiecare pas, locurile care s-au marcat la punctul anterior.<br/>
2. Se marcheaza cu numere consecutive toate locurile posibile prin care putem trece, parcurgând în ordine elementele cozii, pâna când nu mai putem marca, sau am ajuns la final.

<br /><br />
<br/>
<h1>Introducere</h1>

În continuare vom prezenta <em>algoritmul lui Lee</em>, pentru cei care nu stiu este parcurgerea în latime. Acest algoritm este de fapt o particularizare a algoritmului mentionat mai sus, si anume parcurgerii în latime. Este eficient, având o complexitate de <b>O(M*N)</b>, si frecvent utilizat. Acesta determina drumul minim de iesire dintr-un labirint, sau în probleme asemanatoare.<br /><br />
<br/>

<h1>Algoritm C++/ PSEUDOCOD</h1><br/><br/>

<center><img src="Animated_BFS.gif"/></center>
<br/><br/><h2>Pseudocod</h2><br/>
<ol>
	<li><b>procedura</b> Lee(M,i,j)</li>
		<li><tab>creeaza o coada Q</tab></li>
		<li><tab>creeaza o matrice de aparitii V</tab></li>
		<li><tab>selecteaza aparitia coordonatelor (i,j)</tab></li>
		<li><tab>adauga (i,j) in coada</tab></li>
		<li><tab><b>cat timp</b> Q nu este goala <b>executa</b></tab></li>
			<li><tab><tab>t = primul element din spatele cozii</tab></tab></li>
			<li><tab><tab><b>daca</b> t este ceea ce cautam <b>atunci</b> returneaza t</tab></tab></li>
			<li><tab><tab><b>pentru toate</b> elementele adiacente <b>executa</b></tab></tab></li>
				<li><tab><tab><tab>u = elementul adiacent lui (i,j)</tab></tab></tab></li>
				<li><tab><tab><tab><b>daca</b> u nu este selectat in V <b>atunci</b></tab></tab></tab></li>
					<li><tab><tab><tab><tab>adauga u in Q</tab></tab></tab></tab></li>
					<li><tab><tab><tab><tab>selecteaza u in V</tab></tab></tab></tab></li>
		<li><tab><b>sfarsit cat timp</b></tab>
	<li><b>returneaza 0</b></li>
</ol>

<br/><br/><h2>C++</h2><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<img class="half" src="Lee.png"/ style="position:absolute; margin-left:-40px; margin-top:-520px">

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