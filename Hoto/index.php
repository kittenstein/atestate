
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Introducere</title>
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
<h1>Introducere</h1><br/><br/>
Pe lânga avantajele oferite de posilibatea de a mentine si întelege mai usor 
aplicatiile, programarea orientata pe obiecte îl ofera pe acela al reutilizarii codului. <br/><br/>
C++ standard include o biblioteca standard care cuprinde o colectie foarte 
cuprinzatoare de componente reutilizabile. Vom introduce în acest capitol Standard 
Template Library (STL) si vom prezenta cele trei componente cheie ale acestei 
biblioteci: containerii (structuri de date sub forma de template-uri), iteratorii si 
algoritmii. Deoarece STL cuprinde foarte multe clase, vom prezenta doar o parte 
dintre acestea însotite de câteva exemple. <br/><br/>
În anii ’70, componentele folosite în programe erau sub forma structurilor de 
control si a functiilor. În anii ’80, au început sa se foloseasca componente sub forma 
de clase dintr-o gama larga de biblioteci dependente de platforma. În ultima parte a 
anilor ’90, odata cu aparitia STL se introduce un nou nivel de folosire a 
componentelor prin clase independente de platforma, fiind de asteptat ca în urmatorii 
ani numarul acestor clase sa creasca exponential.<br/><br/>
Structurile de date sunt colectii de date sau containeri organizate dupa diverse 
reguli. În programarea orientata pe obiecte, structurile de date sunt obiecte care 
contin colectii de obiecte. Sa presupunem ca implementam o clasa Array care ar 
reprezenta un tablou de obiecte de tip int. Folosind template-uri, am putea extinde 
acest tip de data la <code>Array< T ></code> astfel încât sa putem implementa <code>Array< char >, 
Array< double >, Array< Employee ></code> sau, în general, tablouri de orice tip de data. 
În mod similar putem proceda pentru implementarea structurilor de date de tip stiva 
sau pentru alte tipuri de structuri de date. STL este o biblioteca de clase template 
care contine, între altele, si implementari ale structurilor de date.<br/><br/>
În C si C++ obisnuim sa accesam elementele unui tablou folosind pointeri. În 
C++ STL, accesam elementele containerilor prin obiecte iterator care arata ca 
pointerii, dar se comporta mai inteligent. Clasele iterator sunt proiectate sa poata fi 
folosite generic pentru orice container. Containerii implementeaza operatii primitive, 
iar algoritmii STL sunt implementati independent de containeri.<br/><br/>
Containerii STL sunt unul dintre cele mai bune exemple de reutilizare a codului 
si de folosire a claselor template. Implementarile structurilor de date care fac 
legaturile între obiecte prin pointeri pot conduce la probleme serioare legate de 
gestiunea dinamica a memoriei, erori care nu pot fi detectate la compilare si care 
sunt uneori foarte dificil de rezolvat. Unul dintre marile avantaje ale containerilor STL 
este ca rezolva aceste neajunsuri. <br/><br/>
STL evita folosirea mostenirii si a functiilor virtuale din considerente de 
performanta. De asemenea, STL evita folosirea operatorilor new si delete în 
favoarea alocatorilor pentru a permite o mai mare varietate de metode de control al 
alocarii si dealocarii memoriei.<br/><br/>
<h1>Containeri / Clase</h1><br/><br/>
Containerii STL sunt de trei tipuri: <em>containeri secventa, containeri asociativi si 
adaptori container.</em><br/><br/>

<b>Containerii secventa</b><br/>
<ul>
<li><code>vector</code> - fisierul header <code>< vector ></code> - implementarea unui tablou dinamic, cu 
redimensionare automata la inserarea unui nou element sau la stergerea unui 
element;</li><br/>
<li><code>list</code> - fisierul header <code>< list ></code> - lista dublu înlantuita cu inserare si stergere 
rapida;</li><br/>
<li><code>deque</code> - fisierul header <code>< deque ></code> - coada în care elementele pot fi adaugate sau 
sterse din ambele capete; difera de coada obisnuita prin faptul ca acolo 
adaugarea si stergerea elementelor se face la un singur capat.</li><br/>
</ul>

<b>Containerii asociativi</b><br/>
<ul>
<li><code>map</code> - fisierul header <code>< map ></code> - pastreaza asocieri între perechi de valori si chei, 
mapare unu-la-unu;</li><br/>
<li><code>multimap</code> - fisierul header <code>< multimap ></code> -este similar cu <code>map</code>, dar accepta duplicate, 
mapare unu-la-mai multe;</li><br/>
<li><code>set</code> - fisierul header <code>< set ></code> - cheile sunt chiar valorile pastrate;</li><br/>
<li><code>multiset</code> - fisierul header <code>< multiset ></code> - este similar cu <code>set</code>, dar accepta duplicate.</li><br/>
</ul>

<b>Adaptori container</b><br/>
<ul>
<li><code>stack</code> - fisierul header <code>< stack ></code> - – implementeaza o stiva – last-in-first-out 
(LIFO);</li><br/>
<li><code>queue</code> - fisierul header <code>< queue ></code> - implementeaza o coada – first-in-first-out 
(FIFO);</li><br/>
<li><code>priority_queue</code> - fisierul header <code>< priority_queue ></code> - fisierul header <queue> –coada în care elementul cu 
prioritatea cea mai mare este întotdeauna primul element extras.</li><br/>
</ul>


<div id="footer">
<div id="footer_holder">

<div id="footerbar_1">
HOTOBOC DANIELA --- NITU ANDRA 
</div></div></div>

</div>
</div>

</body>

</html>