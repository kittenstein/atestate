
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Punct in poligon</title>
</head>


<body>
<div id="container">
<div id="header">
</div>
<body>

<div id="headerimg6">
<ul id="menuu">
	<li><a href="index.php">Drepte</a></li>
	<li><a href="puncte.php">Puncte. Distante</a></li>
	<li><a href="arii.php">Arii</a></li>
	<li><a href="poligon.php">Punct in poligon</a></li></ul>
<div id="line">
</div>
</div>
<div id="content">


<h1>Punct in poligon</h1> 
<b>Punct in interiorul unui triunghi</b><br/><br/>
Se da un triunghi prin coordonatele varfurilor. Se cere sa se afiseze pentru un set de N puncte din plan daca apartin sau nu interiorului triunghiului. Pentru a rezolva aceasta problema, sa consideram triunghiul ABC si punctul P, interior acestuia.<br/><br/>
<img src="21.jpg"/><br/><br/>
Observam ca vectorii ( AB, BP ), ( BC, CP ), ( CA, AP ) vor realiza mereu acelasi tip de intoarcere (in acest caz spre stanga). De aceea, determinantii:<br/><br/>
det( ((xA,yA,1),(xB,yB,1),(xP,yP,1)) ), det( ((xB,yB,1),(xC,yC,1),(xP,yP,1)) ), det( ((xC,yC,1),(xA,yA,1),(xP,yP,1)) ) trebuie sa aiba acelasi semn. In caz contrar, P este in exteriorul triunghiului. In imaginea precedenta, se observa ca in cazul punctului P', vectorii BC, CP fac o intoarcere la dreapta, deci determinantul corespunzator nu va avea acelasi semn cu ceilalti doi.<br/><br/>
Aceasta idee poate fi generalizata pentru a fi determina daca un punct se afla in interiorul unui poligon convex in O(N). Mai exact se calculeaza det( (xi,yi,1), (xi+1, yi+1, 1) (xp,yp,1) ) pentru i luand valori de la 1 la N (cand i==N vom considera i+1=1) . Punctul P(xp,yp) se afla in interiorul poligonului daca si numai daca toti determinanti au acelasi semn. ( "+" daca parcurgem poligonul in sens direct trigonometric, "-" altfel)<br/><br/>
<b>Punct in interiorul unui poligon oarecare</b><br/><br/>
Se da un poligon oarecare cu N varfuri si un punct P prin coordonatele carteziene. Se cere sa se determine daca punctul P este in interiorul sau in exteriorul poligonului.<br/><br/>
Se va trasa o semidreapta orizontala cu originea in punctul P. Daca aceasta semidreapta intersecteaza un numar impar de muchii ale poligonului, atunci punctul se afla in interiorul acestuia. Mentionam ca trebuie avut in vedere cazul in care semidreapta trece chiar printr-un varf de poligon (capat a doua muchii). Vom considera imaginea urmatoare:<br/><br/>
<img src="22.jpg"/><br/><br/>
In cazul punctului P1, respectiv P2, semidreptele intersecteaza 3, respectiv 1 latura (numere impare) deci punctele se afla in interior. Semidreapta corespunzatoare lui P3 intersecteaza o latura si un varf de poligon. Pentru a rezolva acum aceasta problema, o solutie ar fi ca in loc sa alegem semidreapta orizontala, sa luam o semidreapta random, astfel posibilitatea ca ea sa intersecteze varfurile poligonului tinde spre 0. O alta solutie posibila - si mai usor de implementat - este sa consideram ca facand parte dintr-o latura doar punctul cu coordonata y mai mare. Se garanteaza astfel ca laturile care contin punctul de pe semidreapta vor fi numarate de numar par de ori (2 pt punctul de sus, 0 pt punctul de jos) si ca, implicit, nu vor afecta corectitudinea algoritmului.<br/><br/>
<b>Punct in poligon convex</b><br/><br/>
Enunt: Se da un poligon convex cu N laturi si apoi M interogari caracterizate prin coordonatele unui punct P, iar dumneavoastra trebuie sa determinati rapid daca punctul respectiv se afla sau nu in interiorul poligonului.<br/><br/>
Se ia un varf al poligonului, si se traseaza cele n-3 diagonale care pornesc din el. Astfel poligonul nostru se imparte in mai multe triunghiuri. Vom adauga intr-un vector aceste drepte plus cele 2 laturi care au originea in varful ales de noi si le sortam dupa panta. Cand primim un query vom cauta binar dupa panta si vom afla intre ce diagonale se incadreaza acesta si verificam daca punctul nostru se afla sau nu in triunghiul respectiv.<br/><br/>
Sa luam un exemplu:<br/><br/>
<img src="23.png"/><br/><br/>
In imaginea de mai sus punctele P1,..P6 reprezinta varfurile poligonului iar punctele P7, P8, P9 reprezinta interogarile. Cu rosu sunt trasate diagonalele care delimiteaza sectoarele, si le vom tine ca drepte, sortate dupa panta, impreuna cu dreptele suport pentru cele 2 laturi care au un capat in punctul P1. Astfel cand primim o interogare vom putea cauta binar si sa aflam in ce sector se afla acesta. Pentru punctul P8 spre exemplu ne vom da seama ca se afla in sectorul determinat de diagonalele care corespund punctelor P4 si P5. Astfel vom verifica daca punctul P8 se afla in interiorul triunghiului determinat de punctele P1, P4, P5. Vom proceda asemanator si pentru celelalte interogari cu mentiunea ca trebuie sa avem grija la cazurile in care punctul nu se afla in nici unul din sectoare (P9), insa asta se poate face usor cu o verificare inainte de a porni cautarea binara.<br/><br/>








</div>

</div>
</div>

</body>
</html>