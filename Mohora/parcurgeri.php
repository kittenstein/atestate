
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Parcurgeri</title>
</head>


<body>
<div id="headerimg6">
<center><ul id="menuu">
	<li><a href="index.php">Graf neorientat</a></li>
	<li><a href="reprezentare.php">Reprezentarea grafurilor</a></li>
	<li><a href="parcurgeri.php">Parcurgerea grafurilor</a></li></ul></center>
</div> 

<div id="container">
<div id="header">

</div>


<div id="content">
<h1>Parcurgerea in latime (BF)</h1><br/><br/>
<center><img src="bf.png"/></center><br/><br/>
<code><si>
<c>#include< iostream ></c><br/>
<f>using namespace</f> std;<br/>
<f>int</f> a[20][20],coada[20],viz[20];<br/>
<f>int</f> i,n,el,j,p,u,pl,m,x,y;<br/>
<f>int</f> main()<br/>
{<br/>
<tab>cout<<<f>"n = "</f>; cin>>n;<br/>
<tab>cout<<<f>"m = "</f>; cin>>m;<br/>
<tab><f>for</f>(i=1; i<=m; i++)<br/>
<tab>{</br>
<tab><tab>cout<<<f>"x,y = "</f>; cin>>x>>y;<br/>
<tab><tab>a[x][y] = a[y][x] = 1;<br/>
<tab>}<br/>
<tab><f>for</f>(i=1; i<=n; i++)<br/>
<tab><tab>viz[i] = 0;<br/>
<tab>cout<<<f>"dati nodul de plecare :"</f>; cin>>pl;<br/>
<tab>viz[pl] = 1;<br/>
<tab>coada[1] = pl;<br/>
<tab>p=1; u=1;<br/>
<tab><f>while</f>(p<=u)<br/>
<tab>{<br/>
<tab><tab>el = coada[p];<br/>
<tab><tab><f>for</f>(j=1; j<=n; j++)<br/>
<tab><tab><f>if</f>((a[el][j]==1) && (viz[j]==0))<br/>
<tab><tab>{<br/>
<tab><tab><tab>u++; coada[u]=j; viz[j]=1;<br/>
<tab><tab>}<br/>
<tab><tab>p++;<br/>
<tab>}<br/>
<tab><f>for</f>(i=1; i<=u; i++)<br/>
<tab><tab>cout<<coada[i]<<<f>" "</f>;<br/>
<tab><f>return</f> 0;<br/>
}<br/></si><br/<br/></code>




<h1>Parcurgerea in adancime (DF)</h1><br/><br/>
<center><img src="df.png"/></center><br/><br/>
<code><si>
<c>#include< iostream ></c><br/>
<f>using namespace</f> std;<br/>
<f>int</f> a[20][20];<br/>
<f>int</f> viz[20];<br/>
<f>int</f> i,n,j,pl,m,x,y;<br/>
<f>void</f> parc_adancime(<f>int</f> pl)<br/>
{<br/>
    <tab><f>int</f> j;<br/>
    <tab>cout<<pl<<<f>" "</f>;<br/>
    <tab>viz[pl]=1;<br/>
    <tab><f>for</f>(j=1; j<=n; j++)<br/>
    <tab><f>if</f>((a[pl][j]==1) && (viz[j]==0))<br/>
       <tab><tab> parc_adancime(j);<br/>
}<br/>
<f>int</f> main()<br/>
{<br/>
    <tab>cout<<<f>"n, m = "</f>; cin>>n>>m;<br/>
    <tab><f>for</f>(i=1; i<=m; i++)<br/>
   <tab> {<br/>
        <tab><tab>cout<<<f>"x, y = "</f>; cin>>x>>y;<br/>
        <tab><tab>a[x][y]=1; a[y][x]=1;<br/>
   <tab> }<br/>
   <tab><f>for</f>(i=1; i<=n; i++)<br/>
       <tab><tab> viz[i]=0;<br/>
   <tab> cout<<<f>"dati nodul de plecare :"</f>; cin>>pl;<br/>
    <tab>parc_adancime(pl);<br/>
    <tab><f>return</f> 0;<br/>
}<br/>
</code></si><br/><br/>

<h1>Comparatie intre DF si BF</h1><br/><br/>
<center><img src="bfdf.png"/></center><br/><br/>







</div>


</div>

</body>
</html>