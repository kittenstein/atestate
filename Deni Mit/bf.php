
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
 <a href="index.php" class="fade"><b>Notiuni generale</b></a>
 <a href="tipuri.php" class="fade"><b>Tipuri de graf</b></a>
 <a href="reprezentare.php" class="fade"><b>Reprezentare</b></a>
 <a href="bf.php" class="fade"><b>Parcurgere bf</b></a>
 <a href="df.php" class="fade"><b>Parcurgere df</b></a>
</div></blockquote>
</div>



<div id="content"> 
<h1>Parcurgerea in latime</h1><br/><br/>
<b>Algoritm</b><br/>
<code><ol>
<li><f>pentru</f> i=1,n, <f>executa</f> VIZ[i]=0;<br/><c>// initial toate varfurile sunt nevizitate</c></li>
<li>C[1]=x; VIZ[x]=1;<br/><c>// punem in coada nodul x si il vizitam</c></li>
<li>p=1; u=1;<br/><c>// in <b>p</b> memoram indicele primului element, iar in <b>u</b> indicele ultimului element din coada</c></li>
<li><f>cat timp</f> p<=u <f>executa</f><br/><c>// cat timp coada e nevida</c></li>
<li><tab>v=C[p]; p=p+1;<br/><c><tab>// scoatem din coada nodul curent <b>v</b></c></li>
<li><tab><f>pentru</f> toti vecinii <b>i</b> ai lui <b>v</b> nevizitati inca <f>executa</f></li>
<li><tab>u=u+1; C[u]=i;<br/><c><tab>// adaugam nodul i la coada</c></li>
<li><tab>VIZ[i]=i;<br/><c><tab>// vizitam nodul i</c></li>
</ol></code><br/><br/>
<center><img src="bf.gif"/></center>







</div>
</div>

</body>
</html>