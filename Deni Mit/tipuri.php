
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
<h1>Graf partial</h1> 
<br/>
Fie graful G=(X,U). Un <b>graf partial</b> al lui G este un graf G1=(X,V) cu V&#8838U. Altfel spus, un graf partial G1 al lui G, este chiar G, sau se obtine din G pastrand toate varfurile si suprimand niste arce.<br/>
Se considera graful G de mai jos in care X={1,2,3,4,5,6} si U={(2,1),(1,3),(3,2),(4,3),(3,5),(6,4),(5,6)}.<br/>
Construim <b>graful partial</b> G1=(X,V), unde X={1,2,3,4,5,6} si V={(2,1),(3,2),(4,3),(6,4),(5,6)}, adica din graful G au fost eliminate arcele (1,3) si (3,5).<br/><br/>
<center><img src="im2.png"/></center>
<center><img src="im3.png"/></center><br/><br/>

<h1>Subgraf</h1> 
<br/>
Fie graful G=(X,U). Un <b>subgraf</b> al lui G este un graf G1=(Y,V) cu Y&#8834X, iar V va contine toate arcele din U care au ambele extremitati in Y. Altfel spus, un subgraf al unui graf se obtine eliminand niste noduri si toate muchiile incidente acestor noduri.<br/>
Se considera graful G de mai jos in care X={1,2,3,4,5,6} si U={(2,1),(1,3),(3,2),(4,3),(3,5),(6,4),(5,6)}.<br/>
Construim <b>subgraful</b> G2=(Y,V), unde Y={3,4,5,6} si V={(4,3),(3,5),(6,4),(5,6)}, adica din graful G au fost eliminate nodurile 1 si 2 si arcele incidente acestora.<br/><br/>
<center><img src="im2.png"/></center>
<center><img src="im4.png"/></center><br/><br/>

<h1>Multigraf</h1> 
<br/>
Un <b>multigraf</b> este un graf G=(X,U) care permite muchii multiple (nu unice). Altfel spus, un multigraf se obtine multiplicand anumite muchii ale grafului.<br/>
Se considera graful G de mai jos in care X={1,2,3,4,5} si U={(1,5),(1,2),(1,4),(1,3),(2,5),(2,3),(2,4),(3,3),(3,4),(4,5),(5,3)}.<br/>
Construim <b>multigraful</b> G3=(Y,V), unde X={1,2,3,4,5} si U={(1,5),(1,2),(1,4),(1,3),(2,5),(2,3),(2,4),(3,3),(3,4),(4,5),(5,3),(5,3)}, adica din graful G a fost multiplicata muchia (5,3).<br/><br/>
<center><img src="im1.png"/></center>
<center><img src="im5.png"/></center><br/><br/>







</div>
</div>

</body>
</html>