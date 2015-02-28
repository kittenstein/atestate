
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Atetstat</title>
</head>

<body>


<div id="container">


<div id="headerimg6">

</div>




<div id="header"></div>


<div id="content"> 
<h1>Inserarea unui element</h1>
<br/><b>Inserarea</b> unui element se poate face la inceputul listei, dupa un element, sau la sfarsitul listei. <br/><br/>
<b>a) Inserare la inceput </b><br/>
Acesta este cazul cel mai simplu: trebuie doar alocat elementul, legat de primul element din lista si repozitionarea capului listei:<br>
<blockquote><code><comm>// Inserare element la inceputul unei<br/>// liste dublu inlantuite<br/></comm>
<comm>// Alocare nod si initializare valoare</comm><br/>
Element *elem = <func>new</func> Element;<br/>
elem->valoare = val;<br/>
elem->anterior = NULL;<br/>
<comm>// legare nod in lista</comm><br/>
elem->urmator = cap;<br/>
<func>if</func> (cap != NULL)<br/>
<tab>cap->anterior = elem;<br/>
<comm>// mutarea capului listei</comm><br/>
cap = elem;
</code></blockquote><br/><br/>
<b>b) Inserare la sfarsitul listei </b><br/> 
In acest caz trebuie intai parcursa lista si dupa aceea adaugat elementul si legat de restul listei. De asemenea, trebuie avut in vedere cazul in care lista este vida.<br/>

<blockquote><code><comm>// Inserare element la sfarsitul unei<br/>// liste dublu inlantuite<br/>// Alocare si initializare nod</comm><br/>
Element *elem = <func>new</func> Element;<br/>
elem->valoare = val;<br/>
elem->urmator = NULL;<br/>
elem->anterior = NULL;<br/>
<comm>// daca avem lista vida<br/></comm>
<func>if</func> (cap == NULL)<br/>
<tab><comm>// doar modificam capul listei</comm><br/>
<tab>cap = elem;<br/>
<func>else</func><br/>
{<br/><tab><comm>// parcurgem lista pana la ultimul nod</comm><br/>
<tab>Element *nod = cap;<br/> <tab><func>while</func> (nod->urmator !=NULL)<br/><tab><tab>nod = nod->urmator;<br/><comm><tab>// adaugam elementul nou in lista</comm><br/><tab>nod->urmator = elem;<br/><tab>elem->anterior = nod;<br/>}</code></blockquote><br/><br/>
<b>c) Inserare dupa un element dat </b><br/>
<blockquote><code><comm>// Alocare si initializare nod</comm><br/>
Element *elem = <func>new</func> Element;<br/>
elem->valoare = val;<br/>
elem->urmator = NULL;<br/>
elem->anterior = NULL;<br/>
<comm>// lista vida</comm><br/>
<func>if</func> (cap == NULL)<br/>
<tab>cap = elem;<br/>
<comm>// inserare la inceputul listei<br/></comm>
<func>if</func> (cap == p)<br/>
{<br/><tab>elem->urmator = cap;<br/><tab>cap->anterior = elem;<br/><tab>cap = elem;<br/>}<br/><comm>// inserare in interior</comm><br/>
elem->urmator = p->urmator;<br/>elem->anterior = p;<br/>p->urmator->anterior = elem;<br/>p->urmator = elem;</code></blockquote><br/><br/>
<center><img src="insint.png"/></center>



</div>

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