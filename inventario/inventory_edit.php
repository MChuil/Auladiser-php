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

    require_once 'inventory_process.php';
    $id = $_GET['id'];
    $product = selectById($id);
    $product = mysqli_fetch_array($product);
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
                    <h1 class="m-0">Editar producto</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                        <li class="breadcrumb-item active">Editar producto</li>
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
                <form action="inventory_process.php?action=update" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="code">Código</label>
                            <input type="text" class="form-control" name="code" id="code" placeholder="Introduce el código" value="<?= $product['code'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="description">descripción</label>
                            <input type="text" class="form-control" name="description" id="description" value="<?= $product['description'] ?>" placeholder="Introduce la descripcion del producto" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">Existenmcia</label>
                            <input type="number" class="form-control" name="stock" id="stock" value="<?= $product['stock'] ?>" placeholder="Introduce la existencai" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" name="price" id="price" value="<?= $product['price'] ?>" placeholder="Introduce el precio" required>
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