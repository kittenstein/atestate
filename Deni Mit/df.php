
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
<h1>Parcurgerea in adancime</h1><br/><br/>
<b>Algoritm</b><br/>
<code><ol>
<li><f>pentru</f> i=1,n, <f>executa</f> VIZ[i]=0;<br/><c>// initial toate varfurile sunt nevizitate</c></li>
<li>ST[1]=x; VIZ[x]=1; <f>scrie</f> x<br/><c>// punem in stiva nodul x, il vizitam si il tiparim</c></li>
<li>k=1;<br/><c>// k memoreaza indicele elementului din varful stivei</c></li>
<li><f>cat timp</f> k>0 <f>executa</f><br/><c>// cat timp stiva e nevida</c></li>
<li><tab>v=ST[k];<br/><c><tab>// nodul <b>v</b> va fi nodul din varful stivei</c></li>
<li><tab>cauta primul succesor nevizitat al lui <b>v</b><br/><c><tab>// fie acesta <b>y</b></c></li>
<li><tab><f>daca</f> nu exista <f>atunci</f> k=k-1;<br/><f><tab>altfel scrie</f> y; VIZ[y]=1;<br/><c><tab>// il tiparim, il vizitam</c><br/><tab>k=k+1; ST[k]=y;<br/><c><tab>// il punem in stiva</c></li>
</ol></code><br/><br/>
<center><img src="df.gif"/></center><br/><br/>
<b>Observatie!</b> Pentru a nu declara o stiva, o putem folosi pe cea interna prin recursivitate.<br/><br/>







</div>
</div>

</body>
</html>