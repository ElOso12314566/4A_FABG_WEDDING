<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Register
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
                    Register
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
    <h3>Registrate</h3>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Nombre" id="name" name="registerName">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Ingresa tu email" id="email" name="registerEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Ingresa tu Contraseña" id="pwd"
                    name="registerPassword">
            </div>
        </div>
        <br>
        <?php /*
   $registro = new ControladorFormularios();
   $registro -> crtRegistro(); 
   */
        $registro = ControladorFormularios::crtRegistro();
        if ($registro == "ok") {
            echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.gref);
                }
                </script>';

            echo '<div class="alert-success"> El usuario ha sido registrado correctamente</div>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>

</div>