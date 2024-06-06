<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Calorias</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Calculadora de Calorias</h1>
    </header>
    <main>
        <section>
            <div class="card">
                <div class="card-header">Completa el formulario</div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet hic sed quibusdam officia. Quod laboriosam, impedit voluptas doloribus dignissimos omnis culpa, facere odit architecto iste voluptatem, doloremque blanditiis quia eum.</p>
                    <form action="process.php" method="post">
                        <div>
                            <label for="sex">Sexo</label>
                            <select name="sex">
                                <option value="">Seleccionar</option>
                                <option value="f">Femenino</option>
                                <option value="m">Masculino</option>
                            </select>
                        </div>
                        <div>
                            <label for="weight">Tu peso en kilogramos</label>
                            <input type="number" name="weight">
                        </div>
                        <div>
                            <label for="height">Tu altura en centimetros</label>
                            <input type="number" name="height">
                        </div>
                        <div>
                            <label for="age">Tu edad</label>
                            <input type="number" name="age">
                        </div>
                        <div>
                            <label for="activity">Tu nivel de actividad</label>
                            <select name="activity" id="">
                                <option value="">Seleccionar</option>
                                <option value="sedentario">Sedentario (poco o ningún ejercicio)</option>
                                <option value="ligero">Ejercicio ligero (ejercicio ligero o deportes 1-3 días a la semana)</option>
                                <option value="moderado">Ejercicio moderado (ejercicio moderado o deportes 3-5 días a la semana)</option>
                                <option value="intenso">Ejercicio intenso (ejercicio intenso o deportes 6-7 días a la semana)</option>
                                <option value="muyintenso">Ejercicio muy intenso (ejercicio muy intenso y trabajo físico diario, deportistas de élite, etc.)</option>
                            </select>
                        </div>
                        <button type="submit">Calcular</button>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="card">
                <div class="card-header">Resultados</div>
                <div class="card-body">
                    <?php if(isset($_SESSION['calories'])){?>
                        <p>Tus calorias calculadas para mantener peso son:</p>
                        <h1><?php echo $_SESSION['calories'] ?></h1>
                        <p><strong>Metabolismo basal:</strong></p>
                        <h3><?php echo $_SESSION['tmb'] ?></h3>
                        <a href="process.php?action=reset" class="btnReset">Reiniciar</a>
                    <?php }else if(isset($_SESSION['error'])){ ?>
                        <h1 class="error"><?php echo $_SESSION['error'] ?></h1>
                    <?php }else{ ?>
                        <h1 class="text-center">No hay resultados</h1>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>