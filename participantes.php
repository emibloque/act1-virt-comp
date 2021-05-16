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

    .browser-mockup {
      border-top: 2em solid rgba(230, 230, 230, 0.7);
      position: relative;
    }

    .browser-mockup:before {
      display: block;
      position: absolute;
      content: "";
      top: -1.25em;
      left: 1em;
      width: 0.5em;
      height: 0.5em;
      border-radius: 50%;
      background-color: #f44;
      box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
    }

    .browser-mockup>* {
      display: block;
    }
  </style>
</head>

<body class="gradient leading-relaxed tracking-wide flex flex-col">
  <div class="mx-auto h-screen text-center px-3 py-10 lg:px-0">
    <h1 class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight mb-4">
      Participantes
    </h1>


    <div class="flex items-center w-full mx-auto content-end">
      <div class="browser-mockup flex flex-1 m-6 md:px-0 md:m-12 bg-white w-1/2 rounded shadow-xl">
        <ul class="px-10 py-4">
          <li>Oliva Gálvez García</li>
          <li>Luis Manuel Carreira San José</li>
          <li>Luis Emilio Velasco Sánchez</li>
        </ul>
      </div>
    </div>

    <a href="index.php" class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg">
      Volver
    </a>

  </div>
</body>

</html>
