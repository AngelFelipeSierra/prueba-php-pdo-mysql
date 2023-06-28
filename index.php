<!DOCTYPE html>
    
    <?php 
    /* ini_set("display_errors", 1);

    ini_set("display_startup_errors", 1);

    error_reporting(E_ALL); */
        require_once 'app.php';
        include_once __DIR__.'Templates/header.php';
    ?>
    <main> 

    <section>
        <h1 >Registro de Paises</h1>
        <form id="frmDataCountry">
            Nombre del Pais
            <input type="text" name="nombrePais">
            <input type="submit" value="Enviar">
        </form>
        <pre></pre>  
    </section>

    <?php 
        include_once __DIR__.'/view/Country/selectcountry.php';
    ?>

    </main>

    <?php 
    include_once __DIR__.'Templates/footer.php';
    ?>


