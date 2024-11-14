<?php
$nome_arquivo = $_FILES['arquivo']['name'];
$caminho_temporario = $_FILES['arquivo']['tmp_name'];
$caminho_destino = 'TAURUS/' . $nome_arquivo;

if (move_uploaded_file($caminho_temporario, $caminho_destino)) {
	echo 'Arquivo movido com sucesso!';
} else {
	echo 'Erro ao mover arquivo!';
}
?>
