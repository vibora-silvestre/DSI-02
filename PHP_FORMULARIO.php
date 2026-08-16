<?php 
$nome = $_POST['nome'] ?? '';
$idade = $_POST['idade'] ?? '';
$profi = $_POST['profissao'] ?? '';
$sal = $_POST['salario'] ?? '';
$exp = $_POST['exp'] ?? '';

echo "Nome completo: ".$_POST['nome']."<br>"; 
echo "Idade: ".$_POST['idade']."<br>"; 
echo "Profissão: ".$_POST['profissao']."<br>"; 
echo "Salário: R$ ".$_POST['salario']."<br>";
echo "Experiência:" .$_POST['exp']."<br>"; 
echo "Obrigado pelo envio das suas informações, ".$_POST['nome']."!<br>
Ficamos a disposição para auxiliá-lo a melhorar a sua experiência (".$_POST['exp'].") referente a sua atual profissão: ".$_POST['profissao']."<br><Br>"; 
?> 
<a href="HTML_Formulario.html">
    <button type="button">Voltar ao Formulário</button>
</a>

