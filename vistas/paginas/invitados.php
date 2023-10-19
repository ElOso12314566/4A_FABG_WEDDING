<?php

if (!isset($_SESSION["validarIngreso"])) {
    echo '<script>window.location = "index.php?pagina=ingreso";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script>window.location = "index.php?pagina=ingreso";</script>';
        return;
    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
//echo '<pre>'; print_r($usuarios); echo '</pre>'

?>

<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Guests
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.php?pagina=inicio">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Guests
                </li>
            </ul>
        </div>
    </div>
</section>
<div class="conatiner-fluid">
    <div class="container py-5">
        <table class="table table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>E-MAIL</th>
                    <th>DATE</th>
                    <th>TOOLS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $key => $value): ?>
                    <tr>
                        <td>
                            <?php echo $key + 1; ?>
                        </td>
                        <td>
                            <?php echo $value["nombre"]; ?>
                        </td>
                        <td>
                            <?php echo $value["email"]; ?>
                        </td>
                        <td>
                            <?php echo $value["f"]; ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <div class="px-1">
                                    <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>"
                                        class="btn btn-warning">
                                        <i class="fa-solid fa-pen-ruler"></i>
                                    </a>
                                </div>
                                <form method="post">
                                    <input type="hidden" value="<?php echo $value["id"]; ?>" name="deleteRegistro">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <?php
                                    $eliminar = new ControladorFormularios();
                                    $eliminar->ctrEliminarRegistro();
                                    ?>
                                </form>
                            </div>
                        </td>

                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>