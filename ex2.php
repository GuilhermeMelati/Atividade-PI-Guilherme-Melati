<html>
<style>
    .-z-1 {
        z-index: -1;
    }

    .origin-0 {
        transform-origin: 0%;
    }

    input:focus~label,
    input:not(:placeholder-shown)~label,
    textarea:focus~label,
    textarea:not(:placeholder-shown)~label,
    select:focus~label,
    select:not([value='']):valid~label {
        /* @apply transform; scale-75; -translate-y-6; */
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        --tw-scale-x: 0.75;
        --tw-scale-y: 0.75;
        --tw-translate-y: -1.5rem;
    }

    input:focus~label,
    select:focus~label {
        /* @apply text-black; left-0; */
        --tw-text-opacity: 1;
        color: rgba(0, 0, 0, var(--tw-text-opacity));
        left: 0px;
    }
</style>

<?php
    $situacao = "";
    if(isset($_POST['CALC'])){
        $tempo = $_POST['tempo'];
        $velocidade = $_POST['velocidade'];
        $distancia = round($tempo / $velocidade, 2);
        $litros = round($distancia / 12, 2);
        $situacao = "<div class='bg-blue-500 text-white h-1/12 w-full mb-4 rounded-lg shadow-lg p-4 place-content-center'>
        <h1 class='text-2xl text-center'>Velocidade média = " . $velocidade . "! 🚗</h1>" .
        "<h1 class='text-2xl text-center'>Tempo gasto na viagem = " . $tempo . "! ⌚</h1>" .
        "<h1 class='text-2xl text-center'>Distância percorrida = " . $distancia . "! 📍</h1>" .
        "<h1 class='text-2xl text-center'>Quantidade de litros utilizados na viagem " . $litros . "! ⛽</h1>" .
        "</div>";
    }    
?>

<body>
    <?php
    include("./nav.php");
    ?>
    <div class="min-h-screen bg-gray-100 p-0 sm:p-12">
        <div class="mx-auto w-full px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
            <?php echo $situacao; ?>
            <h1 class="text-2xl font-bold mb-8">Exercício 2 - Calculando dados da Viagem</h1>
            <form action="#" method="post">
                <div class="relative z-0 w-full mb-5">
                    <input type="number" step="0.01" name="tempo" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                    <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Tempo Gasto da Viagem</label>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input type="number" step="0.01" name="velocidade" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                    <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Velocidade Média</label>
                </div>

                <input type="submit" name="CALC" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-gray-800 hover:bg-gray-900 hover:shadow-lg focus:outline-none" value="Calcular a Viagem" />
            </form>
        </div>
    </div>
</body>

</html>