
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
<h1>Descriere generala</h1> 
<b>Programarea dinamica</b> este o metoda de elaborare a algoritmilor, care se aplica de regula problemelor în care se cere determinarea unui optim referitor la un anumit criteriu (cel mai lung subsir, cea mai mare suma, cel mai scurt drum etc). Termenul a fost introdus în 1940 de catre matematicianul american Richard Bellman. O problema ar putea fi rezolvata prin programare dinamica daca poate fi descompusa în subprobleme asemanatoare de dimensiuni mai mici si solutia optima a problemei depinde de solutiile optime ale subproblemelor sale.
Acest lucru nu garanteaza ca programarea dinamica e solutia, caci sunt situatii în care se poate aplica cu succes metoda Greedy sau Divide et Impera. Daca însa subproblemele nu sunt independente, ci se suprapun (Overlapping subproblems), un algoritm Divide et Impera ar duce la un timp mare de executie, pe motiv ca o aceeasi subproblema este rezolvata de mai multe ori.

<br /><br />

<h1>Diferente intre Divide et Impera <br>si Programarea dinamica</h1>
Programarea dinamica este adesea corelata cu tehnica divizarii (Divide et Impera) deoarece se bazeaza pe impartirea problemei initiale in subprobleme. Exista insa diferente semnificative intre cele doua abordari. 
<ul><li><b>Divide et Impera</b>: subproblemele in care se divide problema initiala sunt independente, astfel ca solutia unei subprobleme nu poate fi utilizata in construirea solutiei unei alte probleme.</li>
<li><b>Programarea dinamica</b>: subproblemele sunt dependente (se suprapun), astfel ca solutia unei subprobleme se utilizeaza in construirea solutiilor altor subprobleme (din acest motiv este important ca solutia fiecarei subprobleme rezolvate sa fie stocata pentru a putea fi reutilizata ulterior.)</ul>
<br /><br />

<h1>Etape principale<br>in aplicarea programarii dinamice</h1>
<ul><li><b>1. Se amalizeaza structura solutiei.</b> Se stabileste modul in care solutia problemei depinde de solutiile subproblemelor. Aceasta etapa se refera de fapt la verificarea proprietatii de substanta optima si la identificarea problemei generice (forma generala a problemei initiale si a fiecarei subprobleme.)</li>
<li><b>2. Identificarea relatiei de recurenta.</b> Aceasta exprima legatura dintre solutia problemei si solutiile subproblemelor. De regula, in relatia de recurenta intervine valoarea criteriului optim.</li>
<li><b>3. Dezvoltarea relatiei de recurenta.</b> Relatia este dezvoltata in maniera ascendenta astfel incat sa se construiasca tabelul cu valorile asociate subproblemelor.</li>
<li><b>4. Construirea propriu-zisa a solutiei.</b> Aceasta se bazeaza pe informatiile determinate in etapa anterioara.</li>
</ul>

<br /><br /><br />
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