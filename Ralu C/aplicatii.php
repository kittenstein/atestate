
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
 <a href="index.php" class="fade">Vectori</a>
 <a href="operatii.php" class="fade">Operatii</a>
 <a href="aplicatii.php" class="fade">Aplicatii</a>
</div></blockquote>
</div>



<div id="content">
<h1>Aplicatii cu tablouri unidimensionale</h1> <br/><br/>
<ol>
<li><b>Interclasarea a doi vectori</b><br/><br/>
<tab>Fie a un vector cu n elemente si b un vector cu m elemente, ordonati crescator. Sa se construiasca 
un al treilea vector, c, care sa contina atât elementele vectorului a, cât si elementele vectorului b, în 
ordine crescatoare. <br/><br/>
<tab><b>Exemplu:</b> daca vectorul a are elementele (2,4) iar b are elementele (1,3,5,6,8) se va obtine vectorul 
c cu elementele (1,2,3,4,5,6,8). <br/><br/>
<tab>O metoda eficienta de rezolvare a acestei probleme este urmatoarea: parcurgem simultan cei doi 
vectori, comparând la fiecare pas elementul curent din a cu elementul curent din b. Cel mai mic 
dintre ele va fi copiat în vectorul c si vom avansa în vectorul din care am copiat si în vectorul c. Când 
am ajuns la capatul unui vector, copiem în c elementele ramase în celalalt vector. <br/><br/>
<tab>Algoritmul de interclasare este urmatorul:<br/><br/>
<img src="im3.png"/></li><br/>
<li><b>Cautarea binara</b><br/><br/>
<tab>Se considera un vector cu n componente întregi (n=100) si o valoare întreaga x. Sa se verifice daca 
x apare sau nu în vector.<br/><br/>
<tab>Aceasta problema poate fi rezolvata prin parcurgerea succesiva a tuturor elementelor din vector si 
verificarea egalitatii. Aceasta metoda se numeste cautare secventiala, si este ineficienta pentru un 
numar mai mare de elemente, având un timp prea mare de executie. <br/><br/>
<tab>În cazul în care elementele vectorului sunt sortate (crescator sau descrescator) poate fi aplicat un 
algoritm mult mai eficient, numit algoritmul cautarii binare. În aceasta situatie, 
comparam valoarea x cu elementul din mijlocul vectorului si avem urmatoarele posibilitati: <br/><br/>
<tab><tab>- x este egal cu elementul din mijloc, deci am terminat cautarea <br/><br/>
<tab><tab>- x este mai mic decât elementul din mijloc, deci vom continua cautarea în prima jumatate a 
vectorului, unde se afla elementele mai mici decât elementul din mijloc <br/><br/>
<tab><tab>- x este mai mare decât elementul din mijloc, deci vom continua cautarea în a doua jumatate a vectorului, unde se afla toate elementele mai mari decât cel din mijloc.<br/><br/>
<img src="im4.png"/></li><br/>

<li><b>Verificarea unei proprietati</b><br/><br/>
În multe probleme trebuie sa determinam:<br/><br/>
<tab>- toate elementele care verifica o proprietate<br/><br/>
<tab>- primul element care verifica proprietatea <br/><br/>
<tab>- ultimul element care verifica proprietatea <br/><br/>
<ul>

<li><u>Se considera un vector cu n elemente numere naturale (n=100). Sa se verifice daca toate 
elementele vectorului sunt numere pare.<br/><br/> </u>
Vom folosi o variabila întreaga, numita <b>ok</b>, care va avea valoarea 1 daca toate elementele 
vectorului sunt numere pare si 0 în caz contrar. Presupunem initial ca toate elementele 
vectorului sunt numere pare (ok=1); parcurgem vectorul si daca gasim un element impar, 
vom atribui variabilei ok valoarea 0. În acel moment se iese din structura repetitiva <b>for</b>.<br/><br/>
<img src="im5.png"/></li><br/><br/>

<li><u>Se considera un vector cu n elemente numere naturale (n=100). Sa se verifice daca exista în vector 
un numar negativ. <br/><br/> </u>
Vom folosi o variabila întreaga numita <b>gasit</b>, careia îi vom atribui valoarea initiala 0 (adica 
presupunem ca toate elementele sunt pozitive). Parcurgem vectorul si daca gasim un element negativ, 
vom atribui variabilei gasit valoarea 1. În acel moment se iese din structura repetitiva <b>for</b>.<br/><br/>
<img src="im6.png"/></li><br/><br/>

<li><u>Se considera un vector cu n elemente numere naturale (n=100). Sa se afiseze ultimul numar par din 
vector. <br/><br/> </u>
Vom folosi o variabila întreaga numita <b>gasit</b>, careia îi vom atribui valoarea initiala 0 (adica 
presupunem ca toate elementele sunt pozitive). Parcurgem vectorul a de la ultimul element, cu 
indicele n, pâna la primul element, cu indicele 1, si daca gasim un element par, vom atribui variabilei 
gasit valoarea 1. În acel moment se iese din structura repetitiva <b>for</b>. <br/><br/>
<img src="im7.png"/></li><br/><br/>


</div>

<div id="sitebar">
<img src="pic3.png"></img>
</div>
</div>

</body>
</html>