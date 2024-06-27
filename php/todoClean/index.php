<?php
    require_once 'process.php';
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

            <form action="process.php?action=insert" method="POST">
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
                    <form action="process.php?action=search" method="post">
                        <tr>
                            <td></td>
                            <td>
                                <input type="date" name="date">
                            </td>
                            <td>
                                <select name="priority" id="">
                                    <option value="">Seleccionar</option>
                                    <option value="Alta">Alta</option>
                                    <option value="Media">Media</option>
                                    <option value="Baja">Baja</option>
                                </select>
                            </td>
                            <td>
                                <select name="status" id="">
                                    <option value="">Seleccionar</option>
                                    <option value="Pendiente">Pendiente</option>
                                    <option value="Finalizado">Finalizado</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit">Buscar</button>
                            </td>
                        </tr>
                    </form>
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
                        $response = $_SESSION['data'];
                        foreach ($response as $row) {
                            echo "<tr>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['date'] . "</td>
                                <td>" . $row['priority'] . "</td>
                                <td>" . $row['status'] . "</td>
                                <td>
                                    <small>
                                        <a href='process.php?action=update&id=". $row['id']. "'>Finalizar</a>
                                        <a href='process.php?action=delete&id=". $row['id'] . "'>Eliminar</a>
                                    </small>
                                </td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>