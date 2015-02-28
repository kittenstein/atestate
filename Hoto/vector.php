
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Vector STL</title>
</head>


<body>
<div id="container">
<div id="header">
</div>
<div id="headerimg2">
<blockquote><div id="menuaffi">
 <a href="index.php" class="fade">Introducere</a>
 <a href="iteratori.php" class="fade">Iteratori</a>
 <a href="vector.php" class="fade">Vector STL</a>
 <a href="list.php" class="fade">List STL</a>
</div></blockquote>
</div>



<div id="content">
<h1>Containerul secventa vector</h1><br/><br/>

Un vector (tablou) este o structura de data în care datele sunt stocate într-o 
zona contigua de memorie. Aceasta organizare a datelor permite accesul direct la 
elementele vectorului prin operatorul []. Atunci când memoria obiectului de tip 
<code>vector</code> nu mai este suficienta, se aloca o zona mai mare de memorie contigua, se 
copiaza elementele originale în noua zona de memorie si se dealoca vechea zona de 
memorie.<br/><br/>

O caracteristica importanta a oricarui container este tipul de iterator pe care îl 
suporta. Acesta determina ce algoritmi pot fi aplicati containerului. Un vector 
suporta iteratorul <em>random-access</em>, adica poate fi folosit împreuna cu orice operator 
prezentat mai devreme. Toti algoritmii STL pot opera asupra unui <code>vector</code>. Iteratorii 
pentru un vector sunt implementati ca pointeri la elementele vectorului. Daca un 
algoritm are nevoie de un anumit tip de iterator pentru a functiona, atunci containerul 
asupra caruia se aplica trebuie sa poata lucra cel putin cu acel tip de iterator.<br/><br/>


Prin instructiunea <code>std::vector < int > v;</code><br/>
se declara obiectul <code>v</code> din clasa <code>vector</code> care poate pastra valori <code>int</code>. Odata cu 
instantierea acestui obiect, se creeaza un vector vid de dimensiune 0, adica numarul 
de elemente stocate în acel moment este 0, si capacitate 0, adica numarul de 
elemente fara alocare de memorie este 0. Apelurile de functii <code>v.size()</code> si 
<code>v.capacity()</code> returneaza aceste doua valori.<br/><br/>
Functia <code>push_back</code> insereaza o valoare în container. Daca se insereaza o 
valoare într-un vector plin, dimensiunea acestuia creste automat. Un nou apel al 
functiilor <code>v.size()</code> si <code>v.capacity()</code> ilustreaza aceasta modificare a dimensiunii 
si a capacitatii vectorului.<br/><br/>
Pentru afisarea continutului obiectului v în ordine, se instantiaza obiectul <code>p1</code> de 
tip <code>const_iterator</code>. Functia <code>v.begin()</code> returneaza un <code>const_iterator</code> la 
primul element din <code>v, v.end()</code> returneaza un <code>const_iterator</code> care indica pozitia 
de dupa ultimul element din <code>v</code>, iar operatia <code>p1++</code> pozitioneaza iteratorul pe urmatorul 
element din <code>v</code>. Afisarea valorii de la pozitia curenta a iteratorului se face prin 
dereferentierea acestuia: <code>*p1</code>.<br/><br/>
Afisarea valorilor în ordine inversa se face cu ajutorului obiectului <code>p2</code> de tip 
<code>reverse_iterator</code>. Functia <code>v.rbegin()</code> returneaza un iterator la punctul de start 
pentru iterarea în ordine inversa , iar <code>v.end()</code> returneaza un iterator la punctul de 
terminare a iterarii în ordine inversa.<br/><br/>
Urmatorul program prezinta functii care permit diverse manipulari ale valorilor 
unui obiect de tip <code>vector.</code><br/><br/>
<center><img src="1.png"/></center><br/><br/>

<b>Rulând acest program, obtinem urmatorul rezultat:<br/></b><br/>
Vectorul v contine: 1 2 3 4 5 6 <br/>
Primul element din v: 1<br/>
Ultimul element din v: 6<br/>
Continutul vectorului v dupa modificari: 7 22 2 10 4 5 6 <br/>
Exceptie: vector::_M_range_check<br/>
Continutul vectorului v dupa stergere: 22 2 10 4 5 6 <br/>
Dupa stergere, vectorul v este vid<br/>
Continutul vectorului v inainte de stergere: 1 2 3 4 5 6 <br/>
Dupa stergere, vectorul v este vid<br/><br/>


<div id="footer">
<div id="footer_holder">

<div id="footerbar_1">
HOTOBOC DANIELA --- NITU ANDRA 
</div></div></div>

</div>
</div>

</body>

</html>