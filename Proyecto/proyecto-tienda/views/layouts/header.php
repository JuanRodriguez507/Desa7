<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tienda MotoSport</title>
  <link rel="stylesheet" href="<?= URL_BASE; ?>assets/css/main.css">
</head>

<body>
  <div id="container">
    <header>
      <div id="logo">
        <img src="<?= URL_BASE; ?>assets/img/moto2.jpg" alt="Logo">
        <a href="<?= URL_BASE; ?>"></a>
      </div>
    </header>

    <?php $categorias = Util::mostrarCategorias(); ?>
    <nav>
      <ul>
        <li><a href="<?= URL_BASE; ?>">Inicio</a></li>
        <?php while ($cat = $categorias->fetch_object()): ?>
          <li><a href="<?= URL_BASE; ?>Categoria/ver&id=<?= $cat->id; ?>"><?= $cat->nombre; ?></a></li>
        <?php endwhile; ?>
      </ul>
    </nav>

    <main>