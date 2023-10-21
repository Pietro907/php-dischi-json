<?php

/*

Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.

Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).

Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato.

 */


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

</head>


<body>

    <div id="app">

        <div class="container my-5">
            <div class="row d-flex flex-wrap">

                <div v-for="(task, index) in todos" class="col-4">

                <!-- Card contenenti task singole del todos -->
                    <div class="card border-0 d-flex align-items-center my-5">
                        <img class="poster" :src="task.poster" alt="" data-bs-toggle="modal" :data-bs-target="task.d">
                        <h6>{{task.title}}</h6>
                        <p>{{task.author}}</p>
                        <h6>{{task.year}}</h6>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" :id="task.dd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog m_auto">
                            <div class="modal-content width">
                        
                                <div class="modal-body">
                                    <img class="poster" :src="task.poster" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h6>{{task.title}}</h6>
                                    <p>{{task.author}}</p>
                                    <h6>{{task.year}}</h6>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./main.js"></script>
</body>

</html>