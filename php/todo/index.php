<?php
    session_start();
    require_once "settings/db.php";
    try {
        $conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
        $response = $conexion->query("SELECT * FROM tasks");
    } catch (\Throwable $th) {
        echo "Error de conexion. " . $th->getMessage();
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Lista de Pendientes</h1>
    </header>
    <main>
        <div class="col">
            <p class="center">
                <strong>Agregar Pendiente</strong>
            </p>
            <?php 
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
                if(isset($_SESSION['msj'])){
                    echo $_SESSION['msj'];
                    unset($_SESSION['msj']);
                }
            ?>

            <form action="insert.php" method="POST">
                <div class="group">
                    <label for="">Descripción</label>
                    <textarea name="name" id=""></textarea>
                </div>
                <div class="group">
                    <label for="">Prioridad</label>
                    <select name="priority" id="">
                        <option value="Alta">Alta</option>
                        <option value="Media">Media</option>
                        <option value="Baja">Baja</option>
                    </select>
                </div>
                <button type="submit">Guardar</button>
            </form>
        </div>
        <div class="col">
            <p class="center">
                <strong>Mis Pendientes</strong>
            </p>
            <table>
                <thead>
                    <tr>
                        <th>Pendiente</th>
                        <th>Fecha</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($row = mysqli_fetch_array($response)){
                            echo "<tr>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['date'] . "</td>
                                <td>" . $row['priority'] . "</td>
                                <td>" . $row['status'] . "</td>
                                <td>
                                    <small>
                                        <a href='update.php?id=". $row['id']. "'>Finalizar</a>
                                        <a href='delete.php?id=". $row['id'] . "'>Eliminar</a>
                                    </small>
                                </td>
                            </tr>";

                            //Php 8
                            // echo "<tr>
                            //     <td>{$row['name']}</td>
                            //     <td>{$row['date']}</td>
                            //     <td>{$row['priority']}</td>
                            //     <td>{$row['status']}</td>
                            //     <td></td>
                            // </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>