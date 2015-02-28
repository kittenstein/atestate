
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
<h1>Mod de abordare</h1> 
<br />
<b>Citirea</b> elementelor unui tablou bidimensional nu este posibila decat prin citirea fiecarui element. De aceea, mai mult decat in cazul vectorilor, operatia de citire a matricelor impune folosirea a doua secvente ciclice suprapuse. Acestea corespund indicelor liniei (<em>i</em>), respectiv coloanei (<em>j</em>).<br/><br/>
<b>Declararea</b> unei matrice cu 10 linii si 9 coloane, cu elemente de tip intreg este: <b><code><f>int</f> a[10][9];</code><br/></b><br/>
Liniile si coloanele pornesc de la <b>0</b> si se termina la <b>m-1</b>, respectiv <b>n-1</b>.<br/><br/>
<b>Matricea</b> din exemplu are liniile 0,1,2,...,9 si coloanele 0,1,2,...,8 si, de exemplu, elementul de pe linia a treia si coloana a patra se adreseaza prin a[3-1][4-1], adica a[2][3].<br/><br/>
Din acest motiv, in anumite cazuri, pentru usurinta, matricea se declara cu o linie si o coloana in plus, lasand linia 0 si coloana 0 libere, pentru a ne putea adresa elementului de pe linia a treia si coloana a patra sub forma a[3][4].<br/><br/>
De multe ori nu stim cate linii si cate coloane va trebui sa aiba tabloul. In acest caz, tabloul se declara cu un numar <b>maxim</b> de linii si un numar <b>maxim</b> de coloane, astfel incat acesta sa corespunda oricarui set de date de intrare. Evident, intr-un astfel de caz exista o risipa de <b>memorie interna</b>.<br/><br/><em>Programul de mai jos citeste si afiseaza o matrice. Initial se citesc numarul de linii si de coloane ale tabloului (m,n).<br/><br/></em>
<center><img src="cit.png"/></center>

</div>








</div>

</body>
</html>