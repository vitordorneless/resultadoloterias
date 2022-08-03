<?php

function __autoload($file) {
    if (file_exists('admin/model/' . $file . '.php'))
        require_once 'admin/model/' . $file . '.php';
    else
        exit("arquivo " . $file . " no ecziste");
}

$dadosmegasena = new Megasena(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$dadoslotofacil = new Lotofacil(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$dadosquina = new Quina(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$dadoslotomania = new Lotomania(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$dadostimemania = new Timemania(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$dadosduplasena = new Duplasena(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$dadosfederal = new Federal(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$dadosdiadesorte = new Diadesorte(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

$megasena = $dadosmegasena->Dados();
$lotofacil = $dadoslotofacil->Dados();
$quina = $dadosquina->Dados();
$lotomania = $dadoslotomania->Dados();
$timemania = $dadostimemania->Dados();
$duplasena = $dadosduplasena->Dados();
$federal = $dadosfederal->Dados();
$diadesorte = $dadosdiadesorte->Dados();

$datasorteiomega = new DateTime($megasena['dia_sorteio']);
$datasorteiolotofacil = new DateTime($lotofacil['dia_sorteio']);
$datasorteioquina = new DateTime($quina['dia_sorteio']);
$datasorteiolotomania = new DateTime($lotomania['dia_sorteio']);
$datasorteiotimemania = new DateTime($timemania['dia_sorteio']);
$datasorteioduplasena = new DateTime($duplasena['dia_sorteio']);
$datasorteiofederal = new DateTime($federal['dia_sorteio']);
$datasorteiodiadesorte = new DateTime($diadesorte['dia_sorteio']);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Lotérica Mel">        
        <title>Resultado Loterias</title>
        <script src="js/jquery-3.5.1.slim.min.js"></script>        
        <script src="js/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>        
        <script type="text/javascript">
        function TimeRefresh(t){
            setTimeout("location.reload(true);",t);
        }
        </script>
        <link href="js/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <link href="css/carousel.css" rel="stylesheet">
    </head>
    <body onload="Javascript:TimeRefresh(100000000);">
        <main role="main">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="15000">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Mega Sena</h1>
                                <p>Concurso: <?= $megasena['concurso'] ?></p>
                                <p>Data do sorteio: <?= $datasorteiomega->format('d/m/Y') ?></p>
                                <table class="table table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col"><?= $megasena['dezena01'] ?></th>
                                            <th scope="col"><?= $megasena['dezena02'] ?></th>
                                            <th scope="col"><?= $megasena['dezena03'] ?></th>
                                            <th scope="col"><?= $megasena['dezena04'] ?></th>
                                            <th scope="col"><?= $megasena['dezena05'] ?></th>
                                            <th scope="col"><?= $megasena['dezena06'] ?></th>
                                        </tr>
                                    </thead>
                                </table>
                                <p>Próximo Concurso: <?= $megasena['proximo_concurso'] ?></p>
                                <p>Acumulado: <?= number_format($megasena['acumulado'], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Lotofácil</h1>
                                <p>Concurso: <?= $lotofacil['concurso'] ?></p>
                                <p>Data do sorteio: <?= $datasorteiolotofacil->format('d/m/Y') ?></p>
                                <table class="table table-dark table-hover table-bordered">
                                    <tbody>
                                        <tr class="text-center">
                                            <td scope="col"><?= $lotofacil['dezena01'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena02'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena03'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena04'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena05'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="col"><?= $lotofacil['dezena06'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena07'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena08'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena09'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena10'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="col"><?= $lotofacil['dezena11'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena12'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena13'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena14'] ?></td>
                                            <td scope="col"><?= $lotofacil['dezena15'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Próximo Concurso: <?= $lotofacil['proximo_concurso'] ?></p>
                                <p>Acumulado: <?= number_format($lotofacil['acumulado'], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Quina</h1>
                                <p>Concurso: <?= $quina['concurso'] ?></p>
                                <p>Data do sorteio: <?= $datasorteioquina->format('d/m/Y') ?></p>
                                <table class="table table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col"><?= $quina['dezena01'] ?></th>
                                            <th scope="col"><?= $quina['dezena02'] ?></th>
                                            <th scope="col"><?= $quina['dezena03'] ?></th>
                                            <th scope="col"><?= $quina['dezena04'] ?></th>
                                            <th scope="col"><?= $quina['dezena05'] ?></th>
                                        </tr>
                                    </thead>
                                </table>
                                <p>Próximo Concurso: <?= $quina['proximo_concurso'] ?></p>
                                <p>Acumulado: <?= number_format($quina['acumulado'], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Lotomania</h1>
                                <p>Concurso: <?= $lotomania['concurso'] ?></p>
                                <p>Data do sorteio: <?= $datasorteiolotomania->format('d/m/Y') ?></p>
                                <table class="table table-dark table-hover table-bordered">
                                    <tbody>
                                        <tr class="text-center">
                                            <td scope="col"><?= $lotomania['dezena01'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena02'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena03'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena04'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena05'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="col"><?= $lotomania['dezena06'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena07'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena08'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena09'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena10'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="col"><?= $lotomania['dezena11'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena12'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena13'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena14'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena15'] ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="col"><?= $lotomania['dezena16'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena17'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena18'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena19'] ?></td>
                                            <td scope="col"><?= $lotomania['dezena20'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Próximo Concurso: <?= $lotomania['proximo_concurso'] ?></p>
                                <p>Acumulado: <?= number_format($lotomania['acumulado'], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Timemania</h1>
                                <p>Concurso: <?= $timemania['concurso'] ?></p>
                                <p>Data do sorteio: <?= $datasorteiotimemania->format('d/m/Y') ?></p>
                                <table class="table table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col"><?= $timemania['dezena01'] ?></th>
                                            <th scope="col"><?= $timemania['dezena02'] ?></th>
                                            <th scope="col"><?= $timemania['dezena03'] ?></th>
                                            <th scope="col"><?= $timemania['dezena04'] ?></th>
                                            <th scope="col"><?= $timemania['dezena05'] ?></th>
                                            <th scope="col"><?= $timemania['dezena06'] ?></th>
                                            <th scope="col"><?= $timemania['dezena07'] ?></th>
                                        </tr>
                                    </thead>
                                </table>
                                <p>Próximo Concurso: <?= $timemania['proximo_concurso'] ?></p>
                                <p>Acumulado: <?= number_format($timemania['acumulado'], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Dupla Sena</h1>
                                <p>Concurso: <?= $duplasena['concurso'] ?></p>
                                <p>Data do sorteio: <?= $datasorteioduplasena->format('d/m/Y') ?></p>
                                <table class="table table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col" colspan="6">1º Sorteio</th>
                                        </tr>
                                        <tr class="text-center">
                                            <th scope="col"><?= $duplasena['dezena01'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena02'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena03'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena04'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena05'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena06'] ?></th>
                                        </tr>
                                    </thead>
                                </table>
                                <table class="table table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col" colspan="6">2º Sorteio</th>
                                        </tr>
                                        <tr class="text-center">
                                            <th scope="col"><?= $duplasena['dezena07'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena08'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena09'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena10'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena11'] ?></th>
                                            <th scope="col"><?= $duplasena['dezena12'] ?></th>
                                        </tr>
                                    </thead>
                                </table>
                                <p>Próximo Concurso: <?= $duplasena['proximo_concurso'] ?></p>
                                <p>Acumulado: <?= number_format($duplasena['acumulado'], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Loteria Federal</h1>
                                <p>Concurso: <?= $federal['concurso'] ?></p>
                                <p>Data do sorteio: <?= $datasorteiofederal->format('d/m/Y') ?></p>
                                <table class="table table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Destino</th>
                                            <th scope="col">Bilhete</th>
                                            <th scope="col">Valor do Prêmio (R$)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>1º</td>
                                            <td><?= $federal['dezena01'] ?></td>
                                            <td><?= number_format($federal['premio01'], 2, ",", ".") ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>2º</td>
                                            <td><?= $federal['dezena02'] ?></td>
                                            <td><?= number_format($federal['premio02'], 2, ",", ".") ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>3º</td>
                                            <td><?= $federal['dezena03'] ?></td>
                                            <td><?= number_format($federal['premio03'], 2, ",", ".") ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>4º</td>
                                            <td><?= $federal['dezena04'] ?></td>
                                            <td><?= number_format($federal['premio04'], 2, ",", ".") ?></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>5º</td>
                                            <td><?= $federal['dezena05'] ?></td>
                                            <td><?= number_format($federal['premio05'], 2, ",", ".") ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Dia de Sorte</h1>
                                <p>Concurso: <?= $diadesorte['concurso'] ?></p>
                                <p>Data do sorteio: <?= $datasorteiodiadesorte->format('d/m/Y') ?></p>
                                <table class="table table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col"><?= $diadesorte['dezena01'] ?></th>
                                            <th scope="col"><?= $diadesorte['dezena02'] ?></th>
                                            <th scope="col"><?= $diadesorte['dezena03'] ?></th>
                                            <th scope="col"><?= $diadesorte['dezena04'] ?></th>
                                            <th scope="col"><?= $diadesorte['dezena05'] ?></th>
                                            <th scope="col"><?= $diadesorte['dezena06'] ?></th>
                                            <th scope="col"><?= $diadesorte['dezena07'] ?></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td colspan="7">Mês da Sorte: <?= $diadesorte['mes'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Próximo Concurso: <?= $diadesorte['proximo_concurso'] ?></p>
                                <p>Acumulado: <?= number_format($diadesorte['acumulado'], 2, ",", ".") ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h3>Acumulados</h3>
                                <table class="table table-sm table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col"><small>Jogo</small></th>
                                            <th scope="col"><small>R$</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><small>MEGA-SENA</small></td>
                                            <td><small><?= number_format($megasena['acumulado'], 2, ",", ".") ?></small></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><small>LOTOFÁCIL</small></td>
                                            <td><small><?= number_format($lotofacil['acumulado'], 2, ",", ".") ?></small></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><small>QUINA</small></td>
                                            <td><small><?= number_format($quina['acumulado'], 2, ",", ".") ?></small></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><small>LOTOMANIA</small></td>
                                            <td><small><?= number_format($lotomania['acumulado'], 2, ",", ".") ?></small></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><small>TIMEMANIA</small></td>
                                            <td><small><?= number_format($timemania['acumulado'], 2, ",", ".") ?></small></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><small>DUPLA-SENA</small></td>
                                            <td><small><?= number_format($duplasena['acumulado'], 2, ",", ".") ?></small></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><small>LOTERIA FEDERAL</small></td>
                                            <td><small><?= number_format($federal['acumulado'], 2, ",", ".") ?></small></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><small>LOTOGOL</small></td>
                                            <td><small>SUSPENSO</small></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td><small>DIA DE SORTE</small></td>
                                            <td><small><?= number_format($diadesorte['acumulado'], 2, ",", ".") ?></small></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h3>Planeja seu Futuro!!</h3>
                                <h4>Lotofácil da Independência</h4>
                                <table class="table table-sm table-dark table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">+ Números</th>
                                            <th scope="col">+ Jogos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>100 jogos<br><strong>16</strong> números<br>Para apenas 9 pessoas<br>R$ 600,00</td>
                                            <td><strong>450</strong> jogos<br>15 números<br>Para apenas 8 pessoas<br>R$ 200,00</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="2">Para reservar <strong>deixe seu nome e telefone</strong> com um de nossos caixas!!</td>
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </main>        
    </body>
</html>
