<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <h1 class="text-center my-5" >Todos as postagens</h1>
<?php

    $sql = "SELECT * FROM comentarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        while ($row = $res->fetch_object()){

            print "<div class='container px-4 px-lg-5'>";
                print "<div class='row gx-4 gx-lg-5 justify-content-center'>";
                    print "<div class='col-md-10 col-lg-8 col-xl-7'>";
                        print"<div class='post-preview'>";
                            print"<a href='post.html'>";
                                print"<h3 class='post-subtitle'>".$row->conteudo."</h3>";
                                print"</a>";
                            print"<p class='post-meta'> Postado por ".$row->user." em  ".$row->data_post."</p>";

                            print "
                    
                            <button 
                            onclick=\"location.href='?page=editar&id=".$row->id."';\" 
                            class='btn btn-success my-4 text-center'>Editar</button>
        
                            <button 
                            onclick=\"if(confirm('Tem certeza que deseja EXCLUIR?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" 
                            class='btn btn-danger'>Excluir</button>
        
                            ";
                        print"</div>";



                        print"<hr class='my-4' />";
                    print"</div>";
                print"</div>";
            print"</div>";
        }
    }else{
        print "<p class='alert alert-danger'> Não encontrou resultados!!! </p>";
    }

?>
        <!-- Footer-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>