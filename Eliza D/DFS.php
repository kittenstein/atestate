
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
<h1>Depth-First Search (DFS)</h1><br/>
The basic idea of depth-first search is to penetrate as deeply as possible into a tree before fanning out to other vertices. This idea may be depicted as follows:<br/><br/>
<center><img src="im1.gif"/><br/><br/></center>
The order should be: a --> b --> d --> i --> j --> k --> e --> c --> f --> i --> g  --> h<br/><br/>
Another example, the expression a + {(b-c) × d} - polish notation - can be represented by following tree:<br/><br/>
<center><img src="im2.gif"/><br/><br/></center>
Example: Consider the graph<br/><br/>
<center><img src="im3.gif"/><br/><br/></center>
<b>Note</b> that we have marked those edges we used when going to new vertex. These edges form a spanning tree, called a DFS spanning tree.<br/><br/>




</div>

</div>
</div>

</body>
</html>