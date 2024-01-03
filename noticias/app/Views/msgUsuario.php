<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Usuario</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css') ?>">  
    <link rel="stylesheet" href="<?=base_url('bootstrap/style/style.css') ?>">  

</head>
<body>
    <div class="container">
        <div class="alert alert-info">
            <?php echo $message ?>
            <p class="mt-3"><?php echo anchor(base_url('usuarios'), 'Página de Usuários') ?></p>
        </div>
    </div>
  <!-- Java Script do Bootstrap -->
  <script src="<?=base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>   
</body>
</html>