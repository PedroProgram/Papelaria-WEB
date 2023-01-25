<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Papelaria Humanas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/contato.css">
</head>
<body>
<div class="table-responsive">
                              <table class="table m-0 table-colored-bordered table-bordered-primary">
                                 <thead>
                                    <tr>
                                       <th> Nome Cliente</th>
                                       <th>Sexo</th>
                                       <th>CPF</th>
                                       <th>Estado</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    //editorias
                                    // desativar
                                    
                                    if (isset($_POST['buscar'])) {
   
                                        $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);

                                    $query = 'SELECT * FROM cliente WHERE status_cliente = 1 and nome LIKE "%' . $nome . '%"';
                                    $result = mysqli_query($mysqli, $query);
                                    
                                    while($row = mysqli_fetch_array($result)){                                                                      
                                    ?>
                                    <tr>
                                       <th scope="row"><?php echo $row['nome'];?></th>
                                       <td><?php echo $row['sexo'];?></td>
                                       <td><?php echo $row['cpf'];?></td>
                                       <td><?php echo $row['estado'];?></td>
                                    </tr>
                                    <?php
                                    
                                    } }?>
                                    
                                 </tbody>
        </table>
        </div>
</body>
</html>