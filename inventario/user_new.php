<?php
    session_start();
    //verificar si esta logueado
    if(empty($_SESSION['isLogged'])){
        header('Location: index.php');
        return;
    }

    //verificar si tiene permisos
    if($_SESSION['rol'] != "SuperAdministrador"){
        header('Location: dashboard.php');
        return;
    }
?>
<?php require_once 'layout/header.php' ?>

<!-- Navbar -->
<?php include_once 'layout/navbar.php' ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include_once 'layout/sidebar.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nuevo usuario</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                        <li class="breadcrumb-item active">Nuevo usuario</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="user_process.php?action=insert" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre completo</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Introduce tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electronico</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Introduce un correo valido" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Introduce tu contraseña">
                        </div>
                        <div class="form-group">
                            <label for="rol">Selecciona tipo de usuario</label>
                            <select name="rol" id="rol" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="SuperAdministrador">SuperAdministrador</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                    
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once 'layout/copyright.php'; ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php require_once 'layout/footer.php' ?>
</body>

</html>