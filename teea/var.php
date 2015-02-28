
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Variabile</title>
</head>


<body>



<div id="container">
<div id="header">
</div>
<div id="headerimg2">
<blockquote><div id="menuaffi">
 <a href="index.php" class="fade"><b>Structuri</b></a>
 <a href="papel.php" class="fade"><b>Parametri</b></a>
 <a href="var.php" class="fade"><b>Varbiabile</b></a>
</div></blockquote>
</div>



<div id="content"> 
<h1>Variabile</h1><br/><br/>
<h2>Functia main</h2>
�n C, numele de funtie main determina prima instructiune pe care o va executa programul. 
Acesta este unica diferenta dintre main si celelalte functii. Din acest motiv se poate spune ca �orice se 
poate face �n main se poate face si �n celelalte functii�. 

<h2>Variabile locale</h2>
La fel cum se declara variabilele �n cadrul functiei main, la fel se pot declara varibile �n cadrul 
celorlalte functii. Aceste variabile se numesc locale si sunt accesibile doar de functia care le-a declarat. <br/><br/>
La fel �n cadrul unei functii se pot apela si alte functii, ca si �n main, daca acestea au fost definite 
�naintea eventualului apel sau daca este prezent un prototip de functie �naintea functiei apelante si o 
definitie de functie �n cadrul programului respectiv sau �n fisierele incluse �n programului respectiv. 

<h2>Variabile globale</h2>
Variabilele globale sunt declarate �nafara oricarei functii si pot sunt vizibile (pot fi utilizate) �n 
tot programul (�n programul principal si �n subprograme) din momentul declararii lor.<br/><br/>

<center><img src="1.png"/></center><br/><br/>
N este variabila globala. Poate fi accesata �n cadrul oricarei functii.
<br/>x este variabila locala, vizibila doar �n cadrul functiei f1().<br/><br/>
Se va afisa: <br/>
4 <br/>
10 <br/>
5<br/><br/>


<center><img src="2.png"/></center><br/><br/>
Compilatorul genereaza eroare deoarece functia main �ncearca sa acceseze variabila x care este vizibila doar �n functia f1().<br/><br/>
Compilatorul genereaza eroare deoarece P este accesata �n f1() �nainte de a fi declarata. <br/><br/>


<center><img src="3.png"/></center><br/><br/>
Se afiseaza 3 <br/>
N este variabila globala. <br/>
Poate fi accesata �n cadrul oricarei functii. <br/>
x este variabila locala. <br/>
Poate fi accesata doar �n cadrul functiei f1().<br/>
p este parametru formal. <br/>
Poate fi accesat doar �n f1(). <br/><br/>

</div>
<div id="sitebar"> 
<img src="graf.png"></img>
<hr>

<hr>

</div>
</div>

</body>
</html>