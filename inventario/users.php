<?php 

    session_start();
    //verificar si esta logueado
    if(empty($_SESSION['isLogged'])){
        header('Location: index.php');
        return;
    }


    require_once 'user_process.php';
    $users = selectAll();
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
                    <h1 class="m-0">Usuarios</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">

                <?php if($_SESSION['rol'] == "SuperAdministrador"){?>
                    <a href="user_new.php" class="btn btn-primary btn-xs">Nuevo usuario</a>
                <?php } ?>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Rol</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = mysqli_fetch_array($users)){
                                    echo "<tr>
                                        <td>". $row['id'] . "</td>
                                        <td>". $row['name'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td>" . $row['rol'] . "</td>
                                        <td>";
                                        if($_SESSION['rol'] == "SuperAdministrador"){
                                            echo "<a href='user_edit.php?id=".$row['id']."' class='btn btn-info btn-xs'><i class='fas fa-edit'></i></a>
                                            <form action='user_process.php?action=delete' method='post'>
                                                <input type='hidden' value='" .$row['id'] ."' name='id'>
                                                <button type='submit' class='btn btn-danger btn-xs'><i class='fas fa-trash'></i></button>
                                            </form>";
                                        }
                                    echo "</td>
                                    </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
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