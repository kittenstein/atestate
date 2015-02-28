
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
 <title>Problema reginelor</title>
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
<h1>Problema Reginelor</h1><br/><br/>
O sa exemplificam tehnica cautarii cu reveniri cu ajutorul unei probleme clasice:
cum putem amplasa N regine pe o tabla de sah cu dimensiuni N x N astfel încât acestea sa
nu se atace doua câte doua.<br/><br/>
Este evident ca nu putem amplasa decât o singura regina pe linie sau pe coloana si
în final fiecare linie va avea amplasata câte o regina. De aceea vom încerca amplasarea
linie cu linie, începând cu prima linie. Atunci când încercam sa amplasam o regina pe o
linie începem cu prima coloana si continuam cu urmatoarele, pâna când gasim o pozitie
valida. În momentul în care nu mai gasim nici o pozitie valida pe o linie vom reveni la linia
anterioara, unde vom cauta urmatoarea pozitie. Sa rezolvam, de exemplu, problema pentru
N = 4.<br/><br/>

Începem cu prima linie si prima coloana:<br/><br/>
<center><img src="2.png"/></center><br/><br/>

Pe cea de-a doua linie nu putem amplasa nici o dama pâna pe cea de-a treia coloana:<br/><br/>
<center><img src="3.png"/></center><br/><br/>

Pe linia a treia nu putem amplasa nici o dama, de aceea vom reveni la linia anterioara
pentru urmatoarea optiune:<br/><br/>
<center><img src="4.png"/></center><br/><br/>

Pe linia a treia prima optiune valida este pe coloana a doua:<br/><br/>
<center><img src="5.png"/></center><br/><br/>

Dar acum nu mai avem nici o optiune valida pentru linia a patra. Revenim la linia a treia.
Dar nici aici nu mai avem nici o optiune valida. De aceea trebuie sa revenim la linia a doua.
Este evident ca aici nu mai avem ce face asa ca se revine pâna la linia I:<br/><br/>
<center><img src="6.png"/></center><br/><br/>

Acum putem trece la linia a II-a:<br/><br/>
<center><img src="7.png"/></center><br/><br/>

Pe linia a treia putem amplasa o regina chiar pe prima coloana:<br/><br/>
<center><img src="8.png"/></center><br/><br/>

În final, pe ultima linie avem urmatoarea optiune valida:<br/><br/>
<center><img src="9.png"/></center><br/><br/>

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