<?php
	$nomes = array["ana","julia","gabi","felipe","fernanda","rodolfo"];
//exibir apenas valores especificos da array, começando sempre na posição 0
	echo($nomes[1],$nomes[2]);
//é possivel acessar os valores da array usando laços de repeticao
	for ($i=0;$i<5;i++){
    	echo $nomes[$i],"<br />";
}
//é possivel construir estruturas dentro das arrays
$arraynotas = array{
	"aluno1"=array{
		"nome"=>Julia,
		"nota"=>10
	}
};
echo $arraynotas["aluno1"]["nome"]["nota"];
?>

