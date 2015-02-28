
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Liste dublu inlantuite</title>
</head>

<body>


<div id="container">


<div id="headerimg6">

</div>




<div id="header"></div>


<div id="content"> 
<h1>Prezentare generala</h1>
<b>Lista</b> este o structura de date abstracta construita dintr-o succesiune de elemente. Fiecare element din lista are un succesor (cu exceptia ultimului element al listei) si un predecesor (cu exceptia primului element al listei).<br>
Cel mai simplu mod (dar nu intotdeauna si cel mai eficient) este de a memora elementele listei intr-un <b>vector</b>. Succesiunea elementelor este in acest caz implicita, fiind reprezentata de ordinea indicilor vectorilor. <br>
In cazul in care structura de date este dinamica, suportand frecvent operatii de inserare, respectiv stergere a unor elemente din structura, aceasta implementare a listelor nu este eficienta. O alta implementare posibila, eficienta pentru structuri de date liniare dinamice, sunt <b>listele inlantuite</b>. In functie de numarul de legaturi existente intre elementele consecutive ale listei, acestea pot fi <b>simplu</b> sau <b>dublu</b> inlantuite. 
<h1>Definitie</h1> 
O <b>lista dublu inlantuita</b> este o structura de date constituita dintr-o succesiune de elemente denumite noduri. Fiecare nod din lista contine trei parti: <br>
<ol><li>o parte de informatie ()in care sunt memorate informatiile corespunzatoare nodului, specifice problemei)</li>
<li>legatura la stanga (in care este memorata adresa elementului precedent din lista)</li>
<li>legatura la dreapte (in care este memorata adresa elementului urmator din lista)</li></ol>
<center><img src="l2.png"></img></center>
<br> Spre deosebire de listele liniare simplu inlantuite, parcurgerea acestora devine mai usoara, caci permit trecerea dintr-un element atat catre cel precedent, cat si catre urmatorul. 

<br /><br /></div>

<div id="sitebar"> 
<style>
ul
{
list-style-type:none;
margin:10px;
padding:0;
}
a:link,a:visited
{
display:block;
font-weight:bold;
color:#FFFFFF;
background-color:#311e37;
width:155px;
text-align:center;
border-bottom: 1px solid #e7d0d1;
  padding:5px;
  margin:20px 2px 7px 1px;
border-top : 9px solid #e7d0d1;
border-radius: 20px 20px 0px 0px
text-decoration:none;
text-transform:uppercase;
}
a:hover,a:active
{
background-color:#b17654;
}
</style>
</head>

<body>
<ul>
<li><a href="index.php">Descriere</a></li>
<li><a href="structura.php">Structura</a></li>
<li><a href="parcurgere.php">Parcurgere</a></li>
<li><a href="inserare.php">Inserare</a></li>
<li><a href="stergere.php">Stergere</a></li>
</ul>
</body>

</div>



</div></div>

</body>
</html>