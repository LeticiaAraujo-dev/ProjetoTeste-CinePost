<?php 
    switch(@$_REQUEST["acao"]){

            case "postagem":
                $user = $_POST["user"];
                $cont = $_POST["conteudo"];
                $data = $_POST["data_post"];

                $sql = "INSERT INTO comentarios (user, conteudo, data_post) 
                        VALUES ('{$user}', 
                                '{$cont}', 
                                '{$data}')"; 
            
                $res = $conn->query($sql);
                
                if($res==true){
                    print"<script> alert('Post feito com successo'); </script>";
                    print"<script> location.href='?page=lista' </script>";
                }else{
                    print"<script> alert('FALHA'); </script>";
                    print"<script> location.href='?page=lista' </script>";
                }

            break;
            
            case "editar":
                $user = $_POST["user"];
                $cont = $_POST["conteudo"];
                $data = $_POST["data_post"];

                $sql = "UPDATE comentarios SET
                            user='{$user}',
                            conteudo='{$cont}',
                            data_post='{$data}'
                        WHERE
                            id=".$_REQUEST["id"]; 
            
                $res = $conn->query($sql);
                
                if($res==true){
                    print"<script> alert('User editado com succeso'); </script>";
                    print"<script> location.href='?page=lista' </script>";
                }else{
                    print"<script> alert('FALHA'); </script>";
                    print"<script> location.href='?page=lista' </script>";
                }

            break;

            case "excluir":

                $sql = "DELETE FROM comentarios WHERE id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res==true){
                    print"<script> alert('Post excluido com succeso'); </script>";
                    print"<script> location.href='?page=list-user' </script>";
                }else{
                    print"<script> alert('FALHA'); </script>";
                    print"<script> location.href='?page=list-user' </script>";
                }
            break;

    }