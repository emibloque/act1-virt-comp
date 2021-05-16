<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">

  <title>Actividad 1</title>
  <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />

  <style>
    html {
      font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
        "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
        "Noto Color Emoji";
    }

    .gradient {
      background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
    }

    a,
    .gradient2 {
      background-color: #f39f86;
      background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
    }
  </style>
</head>

<body class="gradient leading-relaxed tracking-wide flex flex-col">
  <div class="mx-auto h-screen text-center px-3 py-10 lg:px-0">
    <h1 class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight">
      ¡Hola desde <code><?php echo gethostname(); ?></code>!
    </h1>
    <p class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8">
      Actividad 1 de Virtualización y computación en la nube.
    </p>

    <a href="participantes.php" class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg">
      Ver participantes
    </a>

  </div>
</body>

</html>
