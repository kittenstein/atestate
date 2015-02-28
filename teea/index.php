
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Subprograme C++</title>
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
<h1>Subprograme C++</h1><br/><br/>
<h2>Introducere</h2>
<b>Subprogramele</b> sunt parti ale unui program, identificabile prin nume, care se pot activa la 
cerere prin intermediul acestor nume. <br/><br/>
Prezenta subprogramelor implica functionarea în strânsa legatura a doua notiuni: <b>definitia</b> unui 
subprogram si <b>apelul</b> unui subprogram. <br/><br/>
<b>Definitia unui subprogram</b> reprezinta de fapt descrierea unui proces de calcul cu ajutorul 
variabilelor virtuale (parametri formali) iar <b>apelul</b> unui subprogram nu este altceva decât executia 
procesului de calcul pentru cazuri concrete (cu ajutorul parametrilor reali, (efectivi, actuali) ). <br/><br/>
<h2>Structura unui subprogram</h2>
Un subprogram (functie) are o <b>definitie</b> si atâtea <b>apeluri</b> câte sunt necesare. <br/><br/>
<b>Forma generala:</b><br/><br/>
<code>tip_returnat nume_functie (lista parametrilor formali) <br/>
 { <br/>
 <tab>instructiune; // corpul functiei <br/>
} <br/></code><br/>

<table>
<tr><td><b>tip_returnat</b></td>
<td>Reprezinta tipul rezultatului calculat si returnat de functie si poate fi: 
int, char, char*, long, float, void, etc. 
În cazul în care tipul rezultatului este <b>diferit de void</b>, corpul functiei 
trebuie sa contina cel putin o instructiune <b>return</b>. Înstructiunea return 
va specifica valoarea calculata si returnata de functie care trebuie sa fie 
de acelasi tip ca si <b>tip_returnat</b>. </td></tr>
<tr><td><b>nume_functie</b></td>
<td>Reprezinta numele dat functiei de catre cel ce o defineste, pentru a o 
putea apela. </td></tr>
<tr><td><b>lista_parametrilor_formali</b></td>
<td>Reprezinta o lista de declaratii de variabile separate prin virgula. 
Aceasta lista poate sa fie si vida.</td></tr>
<tr><td><b>instructiune</b></td>
<td>Este o instructiune vida sau o instructiune simpla sau o instructiune 
compusa. </td></tr></table><br/><br/>

<h2>Apelul unei functii</h2>
<code>nume_functie (lista parametrilor efectivi); </code><br/><br/>
parametru efectiv = parametru actual = parametru real = parametru de apel <br/><br/>
<b>lista parametrilor efectivi</b> = fie vida, fie o expresie sau mai multe despartite prin virgula <br/><br/>

 <b>O functie care returneaza o valoare</b> poate fi apelata fie printr-o instructiune de apel simpla 
(cazul functiilor care nu returneaza valori) si în plus poate fi apelata ca operand al unei expresii. În 
cazul în care functia se apelaza print-o instructiune de apel simpla, rezultatul functiei se pierde. Când 
functia se apeleaza ca operand, valoarea returnata va fi utilizata în expresie. <br/><br/>
La apelul unei functii, valorile parametrilor efectivi se atribuie parametrilor formali 
corespunzatori. În cazul în care unul din tipul unui paramatru efectiv difera de tipul parametrului 
formal corespunzator, parametrul efectiv va fi convertit spre parametru formal (daca este posibil, altfel 
compilatorul genereaza eroare). <br/><br/>

<b>În momentul în care se întâlneste un apel de functie</b>, controlul executiei programul este 
transferat primei instructiuni din functie, urmând a se executa secvential instructiunile functiei. <br/><br/>

<b>Revenirea</b> dintr-o functie se face în unul din urmatoarele cazuri: 
- dupa executia ultimei instructiuni din corpul functiei 
- la întâlnirea unei instructiuni <b>return </b><br/><br/>



<b>Instructiunea return</b> are formatele: <br/>
<tab><b>- return ; <br/>
<tab>- return expresie ; </b><br/><br/><br/>

<center><img src="4.png"/></center><br/><br/>

</div>
<div id="sitebar"> 
<img src="graf.png"></img>
<hr>

<hr>

</div>
</div>

</body>
</html>