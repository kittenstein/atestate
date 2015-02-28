
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
 <a href="index.php" class="fade">Definitons</a>
 <a href="DFS.php" class="fade">Depth-First Search</a>
 <a href="BFS.php" class="fade">Breadth-First Search</a>
 <a href="CB.php" class="fade">Centers and bicenters</a>
</div></blockquote>
</div>



<div id="content">
<h1>Breadth-First Search (BFS)</h1><br/>
The basic idea of breadth-first search is to fan out to as many vertices as possible before penetrating deep into a tree. This idea may be depicted as follows:<br/><br/>
<center><img src="im4.gif"/><br/><br/></center>
The order should be: a --> b --> c --> d --> e --> f --> g --> h --> i --> j --> k --> e<br/>
The above example clearly shows that breadth-first search must complete each level before proceeding to the next one.<br/><br/>
Example: Consider the graph<br/><br/>
<center><img src="im5.gif"/><br/><br/></center>
<b>Note</b> that we have marked those edges we used when going to new vertex. These edges form a spanning tree, called a BFS spanning tree.<br/><br/>
An example map of Germany with some connections between cities.<br/><br/>
<center><img src="im14.png"/></center><br/><br/>
The breadth-first tree obtained when running BFS on the given map and starting in Frankfurt.<br/><br/>
<center><img src="im15.png"/></center><br/><br/>




</div>

</div>
</div>

</body>
</html>