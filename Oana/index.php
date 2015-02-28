
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
 <a href="index.php" class="fade"><b>Matrice</b></a>
 <a href="citire.php" class="fade"><b>Citire/ Afisare</b></a>
 <a href="matpat.php" class="fade"><b>Mat. patratica</b></a>
 <a href="operatii.php" class="fade"><b>Operatii</b></a>
 <a href="aplicatii.php" class="fade"><b>Aplicatii</b></a>
</div></blockquote>
</div>



<div id="content"> 
<h1>Descriere generala</h1> 
<br />
<b>Tablou bidimensional</b> = succesiune de locatii de memorie recunoscute prin acelasi identificator si prin pozitia fiecareia in cadrul sirului.<br/><br/>
<b>Pozitia</b> = indecsi (numere pozitive) care reprezinta cele doua dimensiuni (linie si coloana)<br/><br/>
<b>Tabloul bidimensional</b> are un numar bine determinat de elemente si se identifica printr-un singur nume.<br/><br/>
<b>Valorile</b> atribuite elementelor tabloului trebuie sa fie de acelasi <b>tip</b>.<br/><br/>
<b>Tablourile bidimensionale</b> se numesc <b>MATRICE</b><br/><br/><br/>
<h1>Sintaxa</h1><br />
Sintaxa de declarare a unei matrice este: <b> <tip> nume[m][n]</b>, unde:<br/>
<ul>
<li><b><em>tip</b></em> = tipul de date folosit; poate fi unul din tipurile de baza (int, float, char, etc.) sau un tip definit de utilizator ("typedef", etc.)</li>
<li><b><em>nume</b></em> = numele prin care va fi referita matricea</li>
<li><b><em>m</b></em> = numarul de linii din matrice</li>
<li><b><em>n</b></em> = numarul de coloane din matrice</li>
</ul><br/>
Exemple de declaratii:<br/><br/>
<b><code><c>// matrice de intregi cu 10 linii si 10 coloane</c><br/>
<f>int</f> vanzari[10][10];<br/>
<c>// vector de valori reale</c><br/>
<f>float</f> temperatura[3][15];<br/></code><br/></b>

Memorarea matricelor se face, ca si in cazul vectorilor, intr-un spatiu continuu de memorie. Numele matricei este un pointer catre adresa primului element. Elementele matricei sunt stocatein memorie linie dupa linie.<br/><br/>
<center><img src="mat.png"/></center><br/><br/>
</div>








</div>

</body>
</html>