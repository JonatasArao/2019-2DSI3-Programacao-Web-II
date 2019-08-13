<meta charset="UTF-8">

<?php
if(isset($_GET['cor'])){
	$cor = $_GET['cor'];
	echo 'Cor :'.$cor;
};

?>

<style>
	.quadrado{
		width: 50vw;
		height: 50vh;
		background-color: <?php echo $cor; ?>;
	}
</style>
<div class="quadrado"></div>