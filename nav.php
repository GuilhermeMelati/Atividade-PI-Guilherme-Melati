<?php
echo <<< EOF
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades PI</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-gray-800">
        <nav class="flex items-center bg-gray-800 flex-col text-center sm:flex-row sm:text-left sm:justify-between py-1 px-6 shadow sm:items-baseline w-full">
            <div class="flex items-center">
                <p class="block text-2xl font-bold text-center text-white lg:text-3xl">Guilherme Melati</p>
                <img class="object-none object-center" src="../assets/melati.png" alt="Melati">
            </div>
            <div class="flex items-center object-center">
                <a href="./ex1.php" class="border-b-2 border-transparent hover:text-white text-white hover:border-white mx-1.5 sm:mx-6">Exercício 1</a>
                <a href="./ex2.php" class="border-b-2 border-transparent hover:text-white text-white hover:border-white mx-1.5 sm:mx-6">Exercício 2</a>
                <a href="./ex3.php" class="border-b-2 border-transparent hover:text-white text-white hover:border-white mx-1.5 sm:mx-6">Exercício 3</a>
                <a href="./ex4.php" class="border-b-2 border-transparent hover:text-white text-white hover:border-white mx-1.5 sm:mx-6">Exercício 4</a>
                <a href="./ex5.php" class="border-b-2 border-transparent hover:text-white text-white hover:border-white mx-1.5 sm:mx-6">Exercício 5</a>
            </div>
        </nav>
    </header>
</body>

</html>
EOF;