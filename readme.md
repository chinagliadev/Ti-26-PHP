# Aula 02 - Conexão PHP e foreach

Este código faz uma conexão com um banco de dados MySQL usando PDO e lista todos os registros da tabela tb_usuario em uma tabela HTML. A conexão é feita usando: 
$dsn = 'mysql:dbname=db_cadastro;host=127.0.0.1'; 
$usuario = 'root'; 
$senha = ''; 
$conexaoBanco = new PDO($dsn, $usuario, $senha); 
onde o DSN define o banco e o host, as variáveis $usuario e $senha armazenam as credenciais do MySQL e o new PDO cria a conexão. Após a conexão, o foreach percorre cada registro retornado: 
<?php foreach($resultadoConsulta as $linha){ ?> 
<tr> 
<th scope="row"><?= $linha['id']?></th> 
<td><?= $linha['nome']?></td> 
<td><?= $linha['telefone']?></td> 
<td><?= $linha['usuario']?></td> 
</tr> 
<?php } ?> 
O foreach permite acessar cada linha de resultado, e $linha['campo'] retorna o valor de cada coluna.
