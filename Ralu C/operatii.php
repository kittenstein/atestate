
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
<h1>Operatii in tabloul unidimensional</h1><br/><br/>
<ol>
<li><b>Citirea elementelor unui tablou unidimensional</b><br/>
<br/>
 <tab>Aceasta înseamna citirea numarului n de componente intr-un ciclu <b>for</b>, de pilda. De fapt, avem de citit componenta numarului i, cu i de la 1 la n. Deci putem scrie:<br/><br/>
<si><code>
<tab>cout<<<f>"n = "</f>; cin>>n;<br/>
<tab><f>for</f>(i=1; i<=n; i++)<br/>
<tab>{<br/>
<tab><tab>cout<<<f>"x["</f> << i << <f>"]= "</f>; cin>>x[i];<br/>
<tab>}<br/>
</code>
<br/></li></si>

<li><b>Afisarea elementelor unui tablou unidimensional</b><br/>
<br/>
<code><si>
<tab><f>for</f>(i=1; i<=n; i++)<br/>
<tab><tab>cout << x[i] << <f>" "</f>;<br/>
</code>
<br/></li></si>

<li><b>Inversarea unui tablou unidimensional</b><br/>
<br/>
<tab>Va trebui sa schimbam prima componenta cu ultima, pe a doua cu penultima s.a.m.d. Pana la mijloc vom intelege n/2 indiferent daca n este par sau impar, deoarece in caz ca n este impar un element (cel din mijloc) nu va trebui interschimbat. Asadar, va trebui sa parcurgem vectorul pana la n/2 intershimband pe x[i] cu x[n+1-i].<br/><br/>
<code><si>
<tab><f>for</f>(i=1; i<=n/2; i++)<br/>
<tab>{<br/>
<tab><tab>aux = x[i];<br/>
<tab><tab>x[i] = x[n-i+1];<br/>
<tab><tab>x[n-i+1] = aux;<br/>
<tab>}<br/>
</code>
<br/></li></si>

<li><b>Ordonarea directa a unui tablou unidimensional</b><br/>
<br/>
<tab>Consideram ca avem un vector de elemente comparabile intre ele, sa ordonam crescator elementele vectorului. Metoda este urmatoarea: il punem pe cel mai mic in fata, apoi procedam la fel cu restul elementelor.<br/><tab>Aceasta metoda se implementeaza astfel: vom compara pe x[1] cu toate elementele de dupa el. Daca gasim un element x[j] care e mai mic decât x[1], atunci interschimbam pe x[1] cu x[j] .Când am ajuns la ultimul element înseamna ca pe prima pozitie va fi sigur cel mai mic element din vector (noul x[1]). In continuare, ne ocupam doar de elementele de pe pozitie mai mare decat 1 si vom parcurge vectorul pana la x[n] ca si in primul caz. Aceste traversari ale vectorului, însotite de eventualele interschimbari au loc pana la penultima pozitie, când mai are loc o singura comparare, intre x[n-1] si x[n].
<br/><br/>
<code><si>
<tab><f>for</f>(i=1; i < n; i++)<br/>
<tab><tab><f>for</f>(j=i+1; j<=n; j++)<br/>
<tab><tab><tab><f>if</f>(a[i]>a[j])<br/>
<tab><tab><tab>{<br/>
<tab><tab><tab><tab>aux = a[i];<br/>
<tab><tab><tab><tab>a[i] = a[j];<br/>
<tab><tab><tab><tab>a[j] = aux;<br/>
<tab><tab><tab>}<br/>
</code></si>
<br/></li><br/>
<center><img src="im2.png"/></center><br/>
<center><img src="sort.gif"/></center><br/><br/>






</div>

<div id="sitebar">
<img src="pic3.png"></img>
</div>
</div>

</body>
</html>