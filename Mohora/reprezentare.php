
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Reprezentarea grafurilor</title>
</head>


<body>
<div id="headerimg6">
<center><ul id="menuu">
	<li><a href="index.php">Graf neorientat</a></li>
	<li><a href="reprezentare.php">Reprezentarea grafurilor</a></li>
	<li><a href="parcurgeri.php">Parcurgerea grafurilor</a></li></ul></center>
</div>

<div id="container">
<div id="header">

</div>


<div id="content">
<h1>Matricea de adiacenta</h1><br/><br/>
<b>Matricea de adiacenta</b> este o matrice patratica de ordin |V| cu elementele definite astfel:<br/>
a<sub>i,j</sub> =<ul><li>1, daca (i,j) exista in M</li><li>0, daca (i,j) nu exista in M</li</ul><br/><br/>
<center><img src="im6.png"/></center><br/>
Matricea de adiacenta asociata grafului este:<br/><br/>
<center>
<table>
<tr><td>a<sub>1,1</sub></td><td>a<sub>1,2</sub></td><td>a<sub>1,3</sub></td><td>a<sub>1,4</sub></td></tr>
<tr><td>a<sub>2,1</sub></td><td>a<sub>2,2</sub></td><td>a<sub>2,3</sub></td><td>a<sub>2,4</sub></td></tr>
<tr><td>a<sub>3,1</sub></td><td>a<sub>3,2</sub></td><td>a<sub>3,3</sub></td><td>a<sub>3,4</sub></td></tr>
<tr><td>a<sub>4,1</sub></td><td>a<sub>4,2</sub></td><td>a<sub>4,3</sub></td><td>a<sub>4,4</sub></td></tr>
</table>
<pad>=
<table>
<tr><td>0</td><td>0</td><td>1</td><td>1</td></tr>
<tr><td>0</td><td>0</td><td>1</td><td>1</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>0</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>0</td></tr>
</table>
</center></pad>

<h1>Liste de adiacenta</h1><br/><br/>

Reprezentarea grafului G prin <b>liste de adiacenta</b> consta in:<br/>
<ul><li>precizarea <b>numarului de varfuri, n</b></li>
<li>pentru fiecare varf i se precizeaza <b>lista L<sub>i</sub> a vecinilor sai</b>, adica lista nodurilor adiacente cu nodul i.</li></ul>
<br/>
<center><img src="im6.png"/></center><br/><br/>
Reprezentarea prin liste de adiacenta presupune precizarea numarului de varfuri n, n=4 si precizarea listei vecinilor lui i pentru i=1..n. Astfel:<br/>
<br/>
<center>
<table border=1px>
<tr><b><td>Varful i</td><td>Lista vecinilor lui i</td></b></tr>
<tr><td><b>1</b></td><td>3,4</td></tr>
<tr><td><b>2</b></td><td>3,4</td></tr>
<tr><td><b>3</b></td><td>1,2</td></tr>
<tr><td><b>4</b></td><td>1,2</td></tr>
</table>
</center>



</div>


</div>

</body>
</html>