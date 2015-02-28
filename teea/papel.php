
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Parametri si tipuri de apel</title>
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
<h1>Parametri</h1>
<h2>Parametri formali si parametri actuali </h2>
<b>Parametri formali</b> apar în antetul subprogramului si sunt utilizati de subprogram pentru 
descrierea abstracta a unui proces de calcul . <br/><br/>
<b>Parametri actuali</b> apar în instructiunea de apelare a uni subprogram si sunt folositi la executia 
unui proces de calcul pentru valori concrete. <br/><br/>
Parametrii formali nu sunt variabile. O variabila este caracterizata de nume, tip, si adresa. 
Legarea unui parametru formal la o <b>adresa</b> se realizeaza în timpul executiei instructiunii de apelare a 
subprogramului. <br/><br/>

<h1>apel</h1>
<h2>Apel prin valoare si apel prin referinta</h2>
Exista doua tipuri de apel al subprogramelor: <br/><br/>
<u><b>A. Apel prin valoare</b> </u>- se transmite o copie a parametrului actual. <br/><br/>
Valorile transmise la apelul unui subprogram sunt memorate în stiva. Datorita faptului ca, dupa 
terminarea executiei unui subprogram, stiva este eliberata, în cazul apelului prin valoare parametrul 
actual <b>nu se modifica (se opereaza asupra unei copii a parametrului efectiv).</b><br/><br/>
<b>Transmiterea prin valoare</b> este utilizata atunci când dorim ca subprogramul sa lucreze cu 
acea valoare, dar, în prelucrare, nu ne intereseaza ca parametrul actual (din blocul 
apelant) sa retina valoarea modificata în subprogram. <br/><br/>
 În toate apelurile din exemplul precedent, transmiterea parametrilor se realizeaza 
prin valoare.<br/><br/>

<u><b>B. Apel prin referinta</b> </u>- se transmite adresa parametrului actual.<br/><br/>
În cazul apelului prin referinta, subprogramul, cunoscând adresa parametrului actual, 
<b>actioneaza direct asupra locatiei de memorie</b> indicata de aceasta, <b>modificând</b> valoarea parametrului 
actual. <br/><br/>
În C, implicit apelul este prin valoare. Pentru a specifica un apel prin referinta, în lista 
parametrilor formali, numele parametrului formal va trebui precedat de cuvântul simbolul <b>&</b>. <br/><br/>

<b>Transmiterea prin referinta</b> este utilizata atunci când dorim ca la revenirea din 
subprogram variabila transmisa sa retina valoarea stabilita în timpul executiei 
programului. <br/><br/>
 În acest caz, parametrii actuali trebuie sa fie referinte la variabile. La transmitere, 
subprogramul retine în stiva adresa variabilei. <br/><br/>
 La compilare, orice referinta la o variabila este tradusa în subprogram ca adresare 
indirecta. Acesta este motivul pentru care în subprogram putem adresa variabila normal 
(nu indirect), cu toate ca, pentru o variabila transmisa, se retine adresa ei.<br/><br/>

<table>
<tr><td>void schimba_valoare (int x, int y) <br/>
{ <br/>
<tab>int z=x; <br/>
<tab>x = y; <br/>
<tab>y = z; <br/>
} </td><td>APEL PRIN VALOARE</td></tr>
<tr><td>void schimba_referinta (int &a, int &b) <br/>
{ <br/>
<tab>int aux=a; <br/>
<tab>a=b; <br/>
<tab>b=aux; <br/>
}</td><td>APEL PRIN REFERINTA</td></tr>
<tr><td>void main () <br/>
{ <br/>
<tab>int M=1, N=5; <br/>
<tab>schimba_valoare(M,N); <br/>
<tab>cout << "M=" << M << " " << "N="<< N << endl; <br/>
<tab>schimba_referinta(M,N); <br/>
<tab>cout << "M="<< M << " " << "N=" << N << endl; <br/>
} </td><td>Se va afisa: <br/><br/><br/>
M=1 N=5 <br/><br/>
 
M=5 N=1 <br/></td></tr></table><br/><br/>

<center><img src="5.png"/></center><br/><br/>



</div>
<div id="sitebar"> 
<img src="graf.png"></img>
<hr>

<hr>

</div>
</div>

</body>
</html>