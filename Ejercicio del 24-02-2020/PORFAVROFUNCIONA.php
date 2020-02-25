<!DOCTYPE html>
<html>
<head>
	<title>ANYOOOOO</title>
</head>
	<h1> R E S U L T A D O S </h1>
	<?php
	if ($_POST['cali']>=70) {
		echo $_POST['Matricula']; echo " Acredita la materia con un promedio de: "; echo $_POST['cali'];
	}else{echo "Matricula";
        echo $_POST['Matricula']; echo " Repetira la materia con un promedio de: "; echo $_POST['cali'];
    }
    echo"<br>";
    echo"<br>";
    if ($_POST['cali2']>=70) {
		echo $_POST['Matricula2']; echo " Acredita la materia con un promedio de: "; echo $_POST['cali2'];
	}else{echo "Matricula";
        echo $_POST['Matricula2']; echo " Repetira la materia con un promedio de: "; echo $_POST['cali2']; 
    }
    echo"<br>";
    echo"<br>";
    if ($_POST['cali3']>=70) {
		echo $_POST['Matricula3']; echo " Acredita la materia con un promedio de: "; echo $_POST['cali3'];
	}else{echo "Matricula";
        echo $_POST['Matricula3']; echo " Repetira la materia con un promedio de: "; echo $_POST['cali3']; 
    }
    echo"<br>";
    echo"<br>";
    if ($_POST['cali4']>=70) {
		echo $_POST['Matricula4']; echo " Acredita la materia con un promedio de: "; echo $_POST['cali4'];
	}else{echo "Matricula";
        echo $_POST['Matricula4']; echo " Repetira la materia con un promedio de: "; echo $_POST['cali4']; 
    }
    echo"<br>";
    echo"<br>";
    if ($_POST['cali5']>=70) {
		echo $_POST['Matricula5']; echo " Acredita la materia con un promedio de: "; echo $_POST['cali5'];
	}else{echo "Matricula";
        echo $_POST['Matricula5']; echo " Repetira la materia con un promedio de: "; echo $_POST['cali5']; 
    }
    ?>
</html>

