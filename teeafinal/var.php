
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
În C, numele de funtie main determina prima instructiune pe care o va executa programul. 
Acesta este unica diferenta dintre main si celelalte functii. Din acest motiv se poate spune ca “orice se 
poate face în main se poate face si în celelalte functii”. 

<h2>Variabile locale</h2>
La fel cum se declara variabilele în cadrul functiei main, la fel se pot declara varibile în cadrul 
celorlalte functii. Aceste variabile se numesc locale si sunt accesibile doar de functia care le-a declarat. <br/><br/>
La fel în cadrul unei functii se pot apela si alte functii, ca si în main, daca acestea au fost definite 
înaintea eventualului apel sau daca este prezent un prototip de functie înaintea functiei apelante si o 
definitie de functie în cadrul programului respectiv sau în fisierele incluse în programului respectiv. 

<h2>Variabile globale</h2>
Variabilele globale sunt declarate înafara oricarei functii si pot sunt vizibile (pot fi utilizate) în 
tot programul (în programul principal si în subprograme) din momentul declararii lor.<br/><br/>

<center><img src="1.png"/></center><br/><br/>
N este variabila globala. Poate fi accesata în cadrul oricarei functii.
<br/>x este variabila locala, vizibila doar în cadrul functiei f1().<br/><br/>
Se va afisa: <br/>
4 <br/>
10 <br/>
5<br/><br/>


<center><img src="2.png"/></center><br/><br/>
Compilatorul genereaza eroare deoarece functia main încearca sa acceseze variabila x care este vizibila doar în functia f1().<br/><br/>
Compilatorul genereaza eroare deoarece P este accesata în f1() înainte de a fi declarata. <br/><br/>


<center><img src="3.png"/></center><br/><br/>
Se afiseaza 3 <br/>
N este variabila globala. <br/>
Poate fi accesata în cadrul oricarei functii. <br/>
x este variabila locala. <br/>
Poate fi accesata doar în cadrul functiei f1().<br/>
p este parametru formal. <br/>
Poate fi accesat doar în f1(). <br/><br/>

</div>
<div id="sitebar"> 
<img src="graf.png"></img>
<hr>

<hr>

</div>
</div>

</body>
</html>