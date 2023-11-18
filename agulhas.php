<?php
include 'conexao.php';

global $conn;
$consulta = "select nome, preco, link from buscarpreco where nome like '%AGULHA%' ";
$resultado = $conn->query($consulta);

if ($resultado) {
    $agulhas = $resultado->fetch_all(MYSQLI_ASSOC);


    foreach ($agulhas as $usuario) {
        ?>
        <section>
            
            <div id="foto">
            <img src="<?php echo $usuario['link'] ?>" alt="zccxc " id="imagem">
            </div>
            <div id="msg"><?php echo $usuario['nome'] ?></div>
            <div id="msg"><?php echo $usuario['preco'] ?></div>
            <button id="<?php echo $usuario['nome'] ?>" class="<?php echo $usuario['preco'] ?>" onclick="handleClick(this)" >ADD</button>
        </section>

        <style>
            section {
                background: white;
                border-radius: 15px;
                padding: 10px;
                width: 180px;
                height: 180px;
                margin: 20px;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.313);
                text-align: center;
            }

            img {
                width: 100px;
                height: 100px;
            }
        </style>





        <?php
    }
} else {
    echo "Erro na consulta: " . $conn->error;
}
?>