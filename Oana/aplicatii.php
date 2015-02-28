
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
<h1>Aplicatii pe matrice</h1> 
<br />
<ol>
<li><b>Suma elementelor care apartin unui interval [x,y]</b><br/>
<ul><li>Se parcurge matricea si daca elementul este >= x si <= y se actualizeaza suma</li></ul><br/><br/>
<center><img src="i4.png"/></center></li></br>

<li><b>Produsul elementelor de pe diagonala principala</b><br/>
<ul><li>Se initializeaza produsul cu valoarea <b>1</b> pentru a se putea inmulti cu alte valori ulterior. (Valoarea unei variabile declarate global este 0)</li><li>Se parcurge numai diagonala principala matricei patratice, cu elemente de tipul <b>A[i][i]</b> printr-un singur for, complexitatea fiind liniara = O(n).</li></ul><br/><br/>
<center><img src="i5.png"/></center><br/>
<b>Observatie!</b> Pentru diagonala secundara se aplica acelasi algoritm, folosind <b>A[i][n-i+1]</b>.</li><br/>

<li><b>Suma elementelor de sub diagonala secundara</b><br/>
<ul><li>Pentru linia i, elementele de sub diagonala secundara sunt de forma: A[i][n-i+2] -> A[i][n]</li></ul><br/><br/>
<center><img src="i6.png"/></center></li></br>
</ol>


</div>








</div>

</body>
</html>