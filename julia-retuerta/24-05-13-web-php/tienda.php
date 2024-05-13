<?php
$pagina = "TIENDA";
include "php/header.php";
if (isset($_GET["cat"])){
    $categoria = $_GET["cat"];
} else{
    $categoria = "Todos los productos";
}

?>

<!--CUERPO TIENDA-->
<h1>TIENDA - Categoría: <?php echo $categoria; ?></h1>
<section class="productos">
    <h2 class="productos__titulo">MUJER</h2>
    <div class="productos__bloque">
        <!--PRODUCTO 1-->
        <div class="productos__card">
            <a href="./producto.php"><img src="./images/mujer1.jpeg" alt=""></a>
            <div class="productos__detalle">
                <h3 class="productos__nombre">Pantalón fluido con lino</h3>
                <p class="productos__precio">19,99 €</p>
                <a class="productos__btn" href="./producto.php">
                    Comprar
                </a>
            </div>
        </div>

        <!--PRODUCTO 2-->
        <div class="productos__card">
            <a href="./producto.php"><img src="./images/mujer2.jpeg" alt=""></a>
            <div class="productos__detalle">
                <h3 class="productos__nombre">Pantalón calados tipo crochet</h3>
                <p class="productos__precio">25,99 €</p>
                <a class="productos__btn" href="./producto.php">
                    Comprar
                </a>
            </div>
        </div>

        <!--PRODUCTO 3-->
        <div class="productos__card">
            <a href="./producto.php"><img src="./images/mujer3.jpeg" alt=""></a>
            <div class="productos__detalle">
                <h3 class="productos__nombre">Pantalón rústico con lino</h3>
                <p class="productos__precio">25,99 €</p>
                <a class="productos__btn" href="./producto.php">
                    Comprar
                </a>
            </div>
        </div>

        <!--PRODUCTO 4-->
        <div class="productos__card">
            <a href="./producto.php"><img src="./images/mujer4.jpeg" alt=""></a>
            <div class="productos__detalle">
                <h3 class="productos__nombre">Jeans rectos costuras marcadas
</h3>
                <p class="productos__precio">35,99 €</p>
                <a class="productos__btn" href="./producto.php">
                    Comprar
                </a>
            </div>
        </div>

    </div>
</section>
<?php
include "php/footer.php";
?>