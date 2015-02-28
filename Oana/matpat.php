
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
<h1>Matricea patratica</h1> 
<br />
Se citeste un tablou cu n linii si n coloane, numere itnregi. Un astfel de tablou, in care nuamrul liniilor este egal cu cel al coloanelor, poarta denumirea de <b>matrice patratica</b><br/><br/>
O matrice patratica are doua diagonale: <b>principala</b> si <b>secundara</b><br/><br/>
Pentru orice tablou patratic A, numim <b>diagonala principala</b> elementele aflate pe "linia" care uneste <b>A[1][1]</b> cu <b>A[n][n]</b>.<br/><br/>
Pentru orice tablou patratic A, numim <b>diagonala secundara</b> elementele aflate pe "linia" care uneste <b>A[1][n]</b> cu <b>A[n][1]</b>.<br/><br/>
<b>In figura de mai jos este reprezentat un tablou cu patru linii si patru coloane. In fiecare dintre casute este de precizat indicele de linie si de coloana pentru fiecare element.</b><br/><br/>
<b>Observatie!</b> Se poate memora matricea incepand cu valoarea 1 pentru indicii de linie si de coloana. (Elementul A32 este elementul de pe linia 3, coloana 2).<br/><br/>
Elementele <b>diagonalei principale</b> = <em>rosu</em><br/>
Elementele <b>diagonalei secundare</b> = <em>albastru</em><br/><br/>
<center><img src="tabel.png"/></center></br></br>
<ol>
<li>Elementele <b>diagonalei principale</b> sunt de forma <b>A[i][i]</b><br/></li>
<li>Elementele <b>diagonalei secundare</b> sunt de forma <b>A[i][n-i+1]</b><br/></li>
<li>Zona de deasupra <b>diagonalei principale</b> este caracterizata de relatia <b>i < j</b><br/></li>
<li>Zona de deasupra <b>diagonalei principale</b> este caracterizata de relatia <b>i > j</b><br/><br/></li>
</ol>
<h1>Matricea simetrica</h1><br/>
In practica apar cazuri in care matricele au anumite caracteristici care permit o stocare mai eficienta decat cea standard. Un astfel de exemplu este reprezentat de <b>matricea simetrica</b>.<br/><br/>
<b><em>Matricele simetrice</b></em> sunt matrice patratice in care corespondentele de sub si de peste diagonala principala sunt egale (<b>M[i][j] = M[j][i]</b>, oricare ar fi i si j)).<br/><br/>
<b><center><table>
<tr><td>1</td><td>2</td><td>3</td><td>4</td></tr>
<tr><td>2</td><td>5</td><td>6</td><td>7</td></tr>
<tr><td>3</td><td>4</td><td>8</td><td>9</td></tr>
<tr><td>7</td><td>8</td><td>9</td><td>10</td></tr>
</table></center><br/><br/>

</div>








</div>

</body>
</html>