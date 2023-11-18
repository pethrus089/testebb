<?php
include 'conexao.php';
global $conn;

$consulta = "SELECT contaluz, perLuz , perLucro FROM gastos";
$resultado = $conn->query($consulta);

if ($resultado) {
    $gastos = $resultado->fetch_assoc();
}
?>
<style>
    section {
        background: white;
        border-radius: 15px;
        padding: 15px;
        width: 380px;
        margin: 100px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.313);
        text-align: center;
        display: grid;
    }
</style>
<section>
    <div><label for="numero">Última conta de luz: <input type="number" id="valorLuz"
                placeholder="<?php echo $gastos['contaluz'] ?>"></label> <button>Salvar</button></div>
    <div><label for="numero">Percentual cobrado luz: <input type="number" id="perLuz"
                placeholder="<?php echo $gastos['perLuz'] . '%' ?>"></label> <button>Salvar</button></div>
    <div><label for="numero">Percentual Lucro: <input type="number" id="perLucro"
                placeholder="<?php echo $gastos['perLucro'] . '%' ?>"></label> <button>Salvar</button></div>
    <!-- <div><label for="numero">Altura tatoo em cm:  <input type="number"></label> </div>
    <div><label for="numero">Largura tatoo em cm:  <input type="number"></label> </div> -->
    <button id="calcular" onclick="calcularGastosFixos()" > Calcular</button>
</section>