<?php
include('conexao.php');

$select_tabela_usuario = "SELECT * FROM `cadastro`;";
$resultado = mysqli_query($conn, $select_tabela_usuario);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
</head>
<body>
    
    <div>
        <table id="tbl_usuarios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($dado = $resultado->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $dado['id_cadastro']; ?></td>   
                        <td><?php echo $dado['nome_cadastro']; ?></td>
                        <td><?php echo $dado['email_cadastro']; ?></td>    
                        <td><?php echo $dado['idade_cadastro']; ?></td>
                    </tr>
                <?php }  ?>
             </tbody>
        </table>
    </div>

</body>
</html>

<script>
    $(document).ready(function() {
        $('#tbl_usuarios').DataTable();
    } );
</script>