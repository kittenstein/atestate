
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>List STL</title>
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
<h1>Containerul secventa list</h1><br/><br/>

Lista înlantuita este o structura de data în care elementele sunt organizate sub 
forma unei colectii liniare de obiecte numite noduri care sunt interconectate prin 
legaturi de tip pointer. O lista înlantuita este accesata printr-un pointer la primul nod 
al listei. Nodurile urmatoare sunt accesate prin legatura pe care fiecare nod o are 
catre nodul urmator din lista. Prin conventie, ultimul nod al listei înlantuite nu are un 
element urmator, iar pointerul sau de legatura are valoarea <code>NULL</code>. Într-o lista dublu 
înlantuita, fiecare nod are câte doua legaturi, una catre elementul urmator si alta 
catre elementul precedent. <br/><br/>
Containerul secventa list este o implementare a listei dublu înlantuite. Acest 
container suporta, astfel, iteratori bidirectionali care permit parcurgerea sa în ambele 
sensuri. Orice algoritm care are nevoie de iteratori de tip input, output, forward sau 
bidirectional pot opera asupra unei liste.<br/><br/>
Pe lânga functiile membre specifice tuturor containerilor si cele ale containerilor 
secventa, clasa list dispune si de urmatoarele opt functii membre: <code>splice, 
push_front, pop_front, remove, unique, merge, reverse si sort.</code>
Programul de mai jos prezinta câteva dintre functionalitatile clasei <code>list</code>. Pentru 
a folosi aceasta clasa, programul trebuie sa includa fisierul header <code>< list ></code>.<br/><br/>
<center>
<img src="2.png"/><br/><img src="3.png"/><br/><br/></center>

<b>Rulând acest program, obtinem urmatorul rezultat:</b><br/><br/>
lista values contine: 2 1 4 3<br/>
dupa sort lista values contine: 1 2 3 4 <br/>
dupa insert lista otherValues contine: 2 4 6 8 <br/>
dupa splice lista values contine: 1 2 3 4 2 4 6 8 <br/>
dupa sort lista values contine: 1 2 2 3 4 4 6 8 <br/>
lista otherValues contine: 2 4 6 8 <br/>
dupa merge:<br/>
 lista values contine: 1 2 2 2 3 4 4 4 6 6 8 8 <br/>
 lista otherValues contine: Lista este goala<br/>
dupa pop_front si pop_back lista values contine: 2 2 2 3 4 4 4 <br/>
6 6 8 <br/>
dupa unique, lista values contine: 2 3 4 6 8 <br/>
dupa swap:<br/>
 lista values contine: Lista este goala<br/>
 lista otherValues contine: 2 3 4 6 8 2 3 4 6 8 <br/>
dupa assign lista otherValues contine: 2 3 4 6 8<br/>
dupa merge lista values contine: 2 2 3 3 4 4 6 6 8 8 <br/>
dupa remove lista values contine: 2 2 3 3 6 6 8 8<br/><br/>


<div id="footer">
<div id="footer_holder">

<div id="footerbar_1">
HOTOBOC DANIELA --- NITU ANDRA 
</div></div></div>

</div>
</div>

</body>

</html>