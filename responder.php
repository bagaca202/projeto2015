<html>

<body>
 
<?php ?>
<H1>Suas respostas: <H1> 
<?php	$Q1 = $_POST['Q1'];
	$Q2 = $_POST['Q2'];
	$Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
	
	echo "Q1 = ".$Q1."<br>";
    echo "Q2 = ".$Q2."<br>";
    echo "Q3 = ".$Q3."<br>";
    echo "Q4 = ".$Q4."<br>";
     
    $resposta1 = "d";
    $resposta2 = "a";
    $resposta3 = "c";
    $resposta4 = "b";
     
    $acertou = 0;
    $errou = 0;
     
	 
?>
 </br>
<H1>Resultado: <H1>
<?php 
    if ($Q1 == $resposta1)
        echo "Questão 1 correta<br>";
    else    
		echo "Questão 1 errada, a certa seria letra d<br>";
     
    if ($Q2 == $resposta2)
        echo "Questão 2 correta<br>";
    else   
		echo "Questão 2 errada, a certa seria letra a<br>";
     
    if ($Q3 == $resposta3)
        echo "Questão 3 correta<br>";
    else   
		echo "Questão 3 errada, a certa seria letra c<br>";
 
 if ($Q4 == $resposta4)
        echo "Questão 4 correta<br>";
    else   
		echo "Questão 4 errada, a certa seria letra b <br>";
 
?>
</body>
</html>