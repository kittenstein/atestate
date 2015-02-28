<!DOCTYPE HTML>
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
<h1>Definitions</h1> <br/>
In <b>mathematics</b>, and more specifically in <b>graph theory</b>, a <b>tree</b> is an <b>undirected graph</b> in which any two <b>vertices</b> are connected by <em>exactly one</em> <b>simple path</b>. In other words, any connected graph without simple cycles is a tree. A <b>forest</b> is a disjoint union of trees.<br/><br/>

A <b>tree</b> is an undirected simple graph G that satisfies any of the following equivalent conditions:<br/>
<ul><li>G is <b>connected</b> and has no <b>cycles</b>.</li><br/>
<li>G has no cycles, and a simple cycle is formed if any edge is added to G.</li><br/>
<li>G is connected, but is not connected if any single <b>edge</b> is removed from G.</li><br/>
<li>G is connected and the 3-vertex <b>complete graph</b> &#922<sub>3</sub> is not a minor of G.</li><br/>
<li>Any two vertices in G can be connected by a unique <b>simple path</b>.</li></ul><br/>

If G has finitely many vertices, say n of them, then the above statements are also equivalent to any of the following conditions:<br/>
<ul><li>G is connected and has n - 1 edges.</li><br/>
<li>G has no simple cycles and has n - 1 edges.</li></br/></ul><br/>

<center><img src="im1.png"/></center><br/><br/>
<b>The example tree</b> shown before has 6 vertices and 6 - 1 = 5 edges. The unique simple path connecting the vertices 2 and 6 is 2-4-5-6.<br/><br/>

A <b>leaf</b> is a vertex of degree 1. An <b>internal vertex</b> is a vertex of degree at least 2.<br/><br/>
An <b>irreducible</b> (or series-reduced) tree is a tree in which there is no vertex of degree 2.<br/><br/>
A <b>forest</b> is an undirected graph, all of whose connected components are trees; in other words, the graph consists of a disjoint union of trees. Equivalently, a forest is an undirected cycle-free graph. As special cases, an empty graph, a single tree, and the discrete graph on a set of vertices (that is, the graph with these vertices that has no edges), all are examples of forests.<br/><br/>
The term <b>hedge</b> sometimes refers to an ordered sequence of trees.<br/><br/>
A <b>polytree</b> (also known as <b>oriented tree</b> or <b>singly connected network</b>) is a <b>directed acyclic graph (DAG)</b> whose underlying undirected graph is a tree. In other words, if we replace its arcs with edges, we obtain an undirected graph that is both connected and acyclic.<br/><br/>
A <b>directed tree</b> is a directed graph which would be a tree if the directions on the edges were ignored. Some authors restrict the phrase to the case where the edges are all directed towards a particular vertex, or all directed away from a particular vertex<br/><br/>
<h1>Facts</h1>
<ul>
<li>Every tree is a <b>bipartite graph</b> and a <b>median graph</b>. Every tree with only countably many vertices is a <b>planar graph</b>.</li>
<li>Every connected graph G admits a <b>spanning tree</b>, which is a tree that contains every vertex of G and whose edges are edges of G.</li>
<li>Every connected graph with only countably many vertices admits a normal spanning tree.</li>
<li>There exist connected graphs with uncountably many vertices which do not admit a normal spanning tree.</li>
<li>Every finite tree with n vertices, with n > 1, has at least two terminal vertices (leaves). This minimal number of terminal vertices is characteristic of path graphs; the maximal number, n - 1, is attained by <b>star graphs</b>.</li>
<li>For any three vertices in a tree, the three paths between them have exactly one vertex in common.</li></ul>
<br/><br/>







</div>

</div>
</div>

</body>
</html>