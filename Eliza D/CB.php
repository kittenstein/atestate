
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
<h1>Centers and bicenters</h1><br/>
It is convenient to start building up the tree at the middle of a tree and move outwards. This was the approach used by Arthur Cayley when he counted the number of chemical molecules by building them step by step. But what do we mean by the "middle" of a tree?<br/><br/>

There are two straight forward ways to compute centers and bicenters.<br/><br/>
<b><h2>Algorithm 1</h2></b>
<ul><li>Remove all the vertices of degree = 1, together with their incident edges.</li>
<li>Repeat the process until we obtain either a single vertex (the center) or two vertices joined by an edge (the bicenter).</li></ul><br/><br/>
A tree with a center is called a central tree, and a tree with a bicenter is called a bicentral tree. Note that every tree is either central or bicentral, but not both.<br/><br/>
For example, given a following tree.<br/><br/>
<center><img src="im6.gif"/><br/><br/>
Remove all vertices of degree 1.<br/><br/>
<img src="im7.gif"/><br/><br/>
Remove all vertices of degree 1.<br/><br/>
<img src="im8.gif"/><br/><br/>
Therefore, a tree is central with center <b>e</b>.<br/><br/></center>
Another example, given a following tree.<br/><br/>

<center><img src="im9.gif"/><br/><br/>
Remove all vertices of degree 1.<br/><br/>
<img src="im10.gif"/><br/><br/>
Remove all vertices of degree 1.<br/><br/>
<img src="im11.gif"/><br/><br/>
Therefore, a given tree is bicentral with bicenter <b>c-d</b>.<br/><br/></center>
<b><h2>Algorithm 2</h2></b>
<tab>For each vertex <b>v</b> of the degree 2 or more, count the number of vertices in each of the subtrees emanating from <b>v</b>, and let n<sub>v</sub> be the maximum of these numbers. If the tree has n vertices it can be shown that either there is just one vertex v for which n<sub>v</sub> = 1/2(n-1) (the centroid or centroid tree) or there are two adjacent vertices v and w for which n<sub>v</sub> = n<sub>w</sub> = 1/2n (the bicentroid or bicentroid tree). It is easy to see that every tree is either centroidal or bicentroidal, but not both.<br/><br/>
<b>Note</b> that we can think of the centroid or bicentroid as the <b>'center of gravity'</b> of the tree.<br/><br/>

For example, given a following tree.<br/><br/>
<center><img src="im12.gif"/></center><br/><br/>
Since <b>n<sub>c</sub> = 4, n<sub>e</sub> = 4, n<sub>f</sub> = 5 and n<sub>g</sub> = 6</b>. Therefore, we have a bicentroidal tree with bicentroid <b>c-e</b>.<br/><br/>

Another example, given a following tree.<br/><br/>
<center><img src="im13.gif"/></center><br/><br/>
Since <b>n<sub>b</sub> = 6, n<sub>c</sub> = 5, n<sub>d</sub> = 3 and n<sub>f</sub> = 5</b>. Therefore,  we have a centroidal tree with centroid <b>d</b>.<br/><br/>




</div>

</div>
</div>

</body>
</html>