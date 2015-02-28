
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Backtracking</title>
</head>


<body>
<div id="container">
<div id="header">
<div id="container">


<div id="headerimg6">
<ul id="menuu">
	<li><a href="index.php">Backtracking</a></li>
	<li><a href="regine.php">Reginele</a></li>
	<li><a href="recursiv.php">Recursiv</a></li>
	<li><a href="iterativ.php">Iterativ</a></li></ul>
</div></div>
</div>




<div id="content">
<h1>Prezentarea Tehnicii Backtracking</h1><br/><br/>
Aceasta tehnica poate fi utilizata pentru rezolvarea problemelor de cautare. Cautarea
efectuata este exhaustiva, putând fi folosita pentru generarea tuturor solutiilor posibile.<br/><br/>
Se foloseste în rezolvarea problemelor care îndeplinesc simultan urmatoarele conditii:<br/>
<ul><li>Solutia lor poate fi pusa sub forma unui vector V = x1x2x3 ……. xn, cu
x1 &#8712 A1 …. Xn &#8712 An</li>
<li>Multimile A1, A2, … An sunt multimi finite, iar elementele lor se afla într-o
ordine bine stabilita</li>
<li>Nu se dispune de o metoda de rezolvare mai rapida</li></ul>
La întâlnirea unei astfel de probleme suntem tentati sa generam toate elementele
produsului cartezian A1 × A2 × …... × An. Aceasta nu este totusi o rezolvare foarte
rezonabila. Timpul de executie este atât de mare, încât poate fi considerat infinit.<br/><br/>
Daca de exemplu dorim sa generam toate permutarile unei multimi, generând
produsul cartezian, am putea obtine 1,1,1,….1, pentru ca apoi sa constatam ca nu am
obtinut o permutare (cifrele nu sunt distincte), desi chiar de la a 2-a cifra se poate observa
ca cifrele nu sunt distincte.<br/><br/>
Tehnica Backtracking are la baza un principiu extrem de simplu: se construieste
solutia pas cu pas. Daca se constata ca pentru o anumita valoare nu se poate ajunge la
solutie, se renunta la acea valoare si se reia cautarea din punctul unde am ramas.<br/><br/>
<h1>Prezentarea Algoritmului</h1><br/><br/>
Pentru usurarea întelegerii metodei vom prezenta o rutina unica, aplicabila oricarei
probleme, rutina care utilizeaza notiunea de stiva.<br/><br/>
<ul><li>se alege primul element x1, ce apartine lui A1;</li><br/>
<li>presupunând generate elementele x1…xk, vom avea 2 posibilitati:<br/><br/>
<ul><li>nu s-a gasit un astfel de element, caz în care se reia cautarea, considerând
generate elementele x1 … xk-1, iar aceasta se reia de la urmatorul element Ak,
ramas netestat.</li><br/>
<li>a fost gasit, caz în care se testeaza daca acesta îndeplineste anumite conditii
(raspunsul poate fi verificat de o functie Validare care returneaza true sau
false).</li><br/>
<li>daca le îndeplineste, se testeaza daca s-a ajuns la solutie (se utilizeaza
functia Solutie, care returneaza true daca s-a ajuns la solutie)<br/><br/>
<ul><li>daca s-a ajuns la solutie, se tipareste si se continua algoritmul
pentru gasirea unei alte solutii, considerându-se generate x1…xk, iar
elementul xk+1 se cauta printre elementele multimii Ak+1 ramase
netestate</li><br/>
<li>daca nu s-a ajuns la solutie se reia algoritmul considerându-se
generate elementele x1, … xk, xk+1</li></ul></li><br/>
<li>daca nu le îndeplineste se reia algoritmul considerând generate x1…xk, iar
elementul xk+1 se cauta printre elementele multimii Ak+1 ramase netestate;</li></ul></li></ul><br/>
<h1>Exemple</h1><br/><br/>
<center><b>Rezolvarea unui joc Sudoku prin metoda Backtracking</b><br/><br/><img src="1.gif"/></center><br/><br/>
<b>Solutiile generate de un algoritm backtracking pentru permutarea elementelor de la 1 la 3 ar fi:</b><br/><br/>
{1}<br/><br/>
{1, 1}<br/><br/>
{1, 1, 1}<br/><br/>
{1, 1, 2}<br/><br/>
{1, 1, 3}<br/><br/>
{1, 2}<br/><br/>
{1, 2, 1}<br/><br/>
{1, 2, 2}<br/><br/>
{1, 2, 3}<br/><br/>
{1, 3, 1}<br/><br/>
{1, 3, 2}<br/><br/>
...<br/><br/>

<div id="footer">
<div id="footer_holder">

<div id="footerbar_1">
METODA BACKTRACKING - PAVEL ROBERTA
</div>


</div></div>
</div>


</div>


</body>

</html>