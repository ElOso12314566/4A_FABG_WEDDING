<section class="breadcumd__banner">
    <div class="container">
        <br>
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Login
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
                    Login
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">
    <h3>Inicia sesión</h3>
        <div class="form-group">
            <label for="email">Email :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Ingresa tu email" id="email" name="ingresoEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Ingresa tu contraseña" id="pwd"
                    name="ingresoPassword">
            </div>
        </div>
        <br>
        <?php
        $ingreso = new ControladorFormularios();
        $ingreso->ctrIngreso();
        ?>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
<br>
</div>