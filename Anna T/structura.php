
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
<h1>Structura unei liste dublu inlantuita</h1>
<b>Structura</b> este asemanatoare cu cea de la listele simplu inlantuite. Pentru simplitate, fara a restrange insa generalitatea, vom considera ca informatiile memorate in nodurile listei sunt numere intregi. Declaratia structurii care reprezinta un nod dintr-o lista dublu inlantuita cu informatii intregi va fi:<br/><br/>
<blockquote><code><comm>// Structura unui element<br/>// dintr-o lista dublu inlantuita<br/><br/></comm>
<func>struct</func> Element<br/>{<br/><tab><comm>// datele efective memorate</comm><br/><tab><func>int</func> valoare;<br/><tab><comm>// legatura catre nodul urmator</comm><br/><tab>Element* urmator, * anterior;<br/>};</code></blockquote><br/><br/>
In cazul in care elemenul este ultimul din lista, pointerul <b>urmator</b> va avea valoarea NULL. Pentru primul element, pointerul <b>anterior</b> va avea valoarea NULL.



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