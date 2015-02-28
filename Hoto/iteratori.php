
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Iteratori</title>
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
<h1>Iteratori</h1><br/><br/>

Iteratorii au multe caracteristici comune cu pointerii si sunt folositi, printre altele, 
pentru a pointa la elemente ale containerilor de tip first-class. Un iterator este un 
obiect care permite programatorului sa parcurga toate elementele unei colectii, 
indiferent de implementarea acesteia. Exista iteratori STL a caror implementare este 
adaptata unor anumiti containeri. Sunt, însa, iteratori care pot opera asupra tuturor 
containerilor. De exemplu, operatorul de dereferentiere <code>*</code> se poate aplica unui iterator 
pentru a folosi elementul asupra caruia pointeaza. Operatorul <code>++</code> aplicat unui iterator 
muta pozitia iteratorului asupra urmatorului element din container.<br/><br/>
Folosim iteratorii împreuna cu secventele. Secventele pot fi organizate în 
containeri sau pot fi secvente de intrare ori iesire. Programul de mai jos 
demonstreaza citirea datelor folosind <code>istream_iterator</code> de la intrarea standard 
care poate fi privita ca o secventa de date de intrare în program. Programul 
ilustreaza, de asemenea, tiparirea datelor folosind <code>ostream_iterator</code> la iesirea 
standard care poate fi privita ca o secventa de date de iesire din program. Programul 
citeste de la tastatura doi întregi si afiseaza suma lor.<br/><br/>
<center><img src="4.png"/></center><br/><br/>

<div id="footer">
<div id="footer_holder">

<div id="footerbar_1">
HOTOBOC DANIELA --- NITU ANDRA 
</div></div></div>

</div>
</div>

</body>

</html>