
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
<h1>Parcurgerea si afisarea listei</h1>
<br/>
Lista este parcursa pornind de la pointerul spre primul element si avansand folosind 
pointerii din structura pana la sfarsitul listei (pointer NULL).<br/>
<blockquote><code><comm>// Parcurgere si afisare lista dubla<br/>// cat timp mai avem elemente<br/>// in lista<br/></comm><func>while</func> (cap != NULL)<br/>{<br/><comm><tab>// afiseaza elementul curent</comm><br/><tab>cout << cap->valoare << endl;<br/><comm><tab>// avanseaza la elementul urmator</comm><br/><tab>cap = cap->urmator;<br/>}</code></blockquote><br/><br/>
Pentru <b>parcurgerea inversa</b> a listei se va porni cu un pointer catre ultimul element al listei, iar avansarea se va face folosind secventa <em>cap = cap->anterior;</em> .<br/><br/><br/>
<center><img src="http://infoscience.3x.ro/c++/Liste_duble_files/image001.gif"/></center><br/><br/>


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