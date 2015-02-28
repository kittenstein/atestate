
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
<h1>Stergerea unui element</h1>
<br/>
a) <b>Stergerea unui element din interiorul listei (diferit de capul listei):</b>
<blockquote><code><comm>// sterge un element din interiorul listei<br/>// primind ca parametru adresa elementului<br/>// scurtcircuitam elementul</comm><br/>elem->anterior->urmator = elem->urmator;<br/>elem->urmator->anterior = elem->anterior;<br/><comm>// si il stergem</comm><br/><func>delete</func> elem;</code></blockquote><br/><br/>
<b>b) Stergerea unui element de pe o anumita pozitie: </b><br/>
Daca elementul este primul din lista, atunci se modifica capul listei, altfel se cauta elementul si se sterge folosind functia definita anterior:<br/>
<blockquote><code><comm>// daca lista e vida nu facem nimic</comm><br/><func>if</func> (cap == NULL)<br/><tab><func>return</func>;<br/><comm>// faca este primul element, atunci<br/>// il stergem si mutam capul listei</comm><br/><func>if</func> (pozitie == 0)<br/>{<br/><tab>Element*deSters = cap;<br/><tab>cap = cap->urmator;<br/><tab>cap->anterior = NULL;<br/><tab><func>delete</func> deSters;<br/>}</code></blockquote><br/><br/>
<b>c) Stergerea dupa o valoare:</b><br/>
Se cauta elementul si se foloseste functia de stergere element:<br/>
<blockquote><code><comm>// daca lista e vida nu facem nimic</comm><br/><func>if</func> (cap == NULL)<br/><tab><func>return</func>;<br/><comm>// daca este primul element, atunci<br/>// il stergem si mutam capul<br/></comm><func>if</func> (cap->valoare == val)<br/>{<br/><tab> Element* deSters = cap;<br/><tab>cap = cap->urmator;<br/><tab>cap->anterior = NULL;<br/><tab><func>delete</func> deSters;<br/>}</code></blockquote><br/><br/>



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