<?php
    if (!empty($_GET['id']))
    {
        //print_r($_POST['idcodigo']);
        //print_r('<br>');
        //print_r($_POST['descricaoli']);
        //print_r('<br>');
        //print_r($_POST['categoriali']);
        //print_r('<br>');
        //print_r($_POST['datapesquisali']);
        //print_r('<br>');
        //print_r($_POST['precocustoli']);
        //print_r('<br>');
        //print_r($_POST['fornli']);
        //print_r('<br>');
        //print_r($_POST['observacoesli']);
        //print_r('<br>');
        //print_r($_POST['linkli']);  

        include_once('config.php');

        $id = $_GET['id'];
        
        $sqlSelect = "SELECT *FROM links WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {   
            while($user_data = mysqli_fetch_assoc($result)) 
            {
                $descricaoli = $user_data['descricaoli'];
                $categoriali = $user_data['categoriali'];
                $datapesquisali = $user_data['datapesquisali'];
                $precocustoli = $user_data['precocustoli'];
                $fornli = $user_data['fornli'];
                $observacoesli = $user_data['observacoesli'];
                $linkli = $user_data['linkli'];  
            }
            print_r($descricaoli);
        }

        else{
        
            header('Location: catalogo.php');
        }
        
        

        //$resultli = mysqli_query($conexao, "INSERT INTO links(descricaoli,categoriali,datapesquisali,precocustoli,fornli,observacoesli,linkli) VALUES('$descricaoli','$categoriali','$datapesquisali','$precocustoli','$fornli','$observacoesli','$linkli')");       
    }  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre seu link</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: poppins, sans-serif;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(226,226,244,1) 0%, rgba(111,230,255,1) 100%, rgba(0,212,255,1) 100%);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px;
            color: black;
        }
        legend{
            border: 1px;
            padding: 10px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            color: #000;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #update{
            background-color: #000;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
            background-color: #48D1CC;
        }

        #limpar{
            background-color: #000;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-top: 15px;
        }
        #limpar:hover{
            background-color: #E82F2F;
        }

        .btn3{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 92%;
        }
        
        
    </style>
</head>
<body>

    <div>
     <a href="catalogo.php" style="text-decoration: none;">
         <button class="btn3" style="background-color:#000; color:#fff; width:5%; border:none; padding:20px; font-size:15px; cursor:pointer; border-radius:10px;">Voltar</button>
     </a>
    </div>

    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Link</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="descricaoli" id="descricaoli" class="inputUser" value="<?php echo $descricaoli ?>" required>
                    <label for="descricaoli" class="labelInput">Descricao</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="categoriali" id="categoriali" class="inputUser" value="<?php echo $categoriali ?>" required>
                    <label for="categoriali" class="labelInput">Categoria</label>
                </div>
                <br><br>
                <label for="datapesquisali"><b>Data da pesquisa:</b></label>
                <input type="date" name="datapesquisali" id="datapesquisali" value="<?php echo $datapesquisali ?>"required>
                <br><br><br>
                <div class="inputBox">
                    <input type="number" name="precocustoli" id="precocustoli" class="inputUser" value="<?php echo $precocustoli ?>" required>
                    <label for="precocustoli" class="labelInput">Preço de custo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fornli" id="fornli" class="inputUser" value="<?php echo $fornli ?>" required>
                    <label for="fornli" class="labelInput">Fornecedor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="observacoesli" id="observacoesli" class="inputUser" value="<?php echo $observacoesli ?>" required>
                    <label for="observacoesli" class="labelInput">Observações</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="linkli" id="linkli" class="inputUser" value="<?php echo $linkli ?>"required>
                    <label for="linkli" class="labelInput">Link</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
                <input type="reset" name="limpar" id="limpar">
            </fieldset>
        </form>
    </div>
</body>
</html>