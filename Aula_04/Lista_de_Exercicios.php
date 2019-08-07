<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12 l6">
                <h1 class="center-align">Exercício 1</h1>
                <?php
                echo '<table class="striped z-depth-5">
                        <thead>
                            <tr>
                                <th>Cód.</th>
                                <th>Nome</th>
                                <th>Valor</th>
                            </tr>
                        </thead>

                        <tbody>';
                
                for($i = 1; $i <= 10; $i++){
                    echo '<tr>
                            <td>'.$i.'</td>
                            <td></td>
                            <td></td>
                        </tr>';
                }
                echo '</tbody>
                </table>';
            ?>
            </div>

            <div class="col s12 l6">
                <h1 class="center-align">Exercício 2</h1>
                <?php
                echo '<table class="striped z-depth-5">
                        <thead>
                            <tr>
                                <th>Cód.</th>
                                <th>Nome</th>
                                <th>Valor</th>
                            </tr>
                        </thead>

                        <tbody>';
                
                for($i = 1; $i <= 10; $i++){
                    if($i % 2 == 0){
                        echo '<tr class="yellow accent-2">';
                    }
                    else{
                        echo '<tr>';
                    }
                    echo '<td>'.$i.'</td>
                        <td></td>
                        <td></td>
                    </tr>';
                    }
                    echo '</tbody>
                    </table>';
            ?>
            </div>
        </div>

        <div class="row">
            <div class="col s12 l6">
                <h1 class="center-align">Exercício 3</h1>
                <?php
                echo '<table class="striped z-depth-5">
                        <thead>
                            <tr>
                                <th>Cód.</th>
                                <th>Nome</th>
                                <th>Valor</th>
                            </tr>
                        </thead>

                        <tbody>';
                
                for($i = 1; $i <= 10; $i++){
                    if($i % 2 == 0){
                        echo '<tr class="yellow accent-2">';
                    }
                    else{
                        echo '<tr>';
                    }
                    if($i % 5 == 0){
                        echo '<tr class="cyan darken-1">';
                    }
                    echo '<td>'.$i.'</td>
                        <td></td>
                        <td></td>
                    </tr>';
                    }
                    echo '</tbody>
                    </table>';
            ?>
            </div>

            <div class="col s12 l6">
                <h1 class="center-align">Exercício 4</h1>
                <?php
                    $tabela[0] = array(
                        'Cod' => '<th>Cód.</th>',
                        'Nome' => '<th>Nome</th>',
                        'Valor' => '<th>Valor</th>'
                        );
                    for($i = 1; $i <= 10; $i++){
                        $tabela[$i] = array(
                            'Cod' => '<td>'.$i.'</td>',
                            'Nome' => '<td></td>',
                            'Valor' => '<td></td>'
                            );
                        }
                    
                        echo '<table class="striped z-depth-5">
                        <thead>
                            <tr>
                            '.$tabela[0]['Cod'].'
                            '.$tabela[0]['Nome'].'
                            '.$tabela[0]['Valor'].'
                            </tr>
                        </thead>

                        <tbody>';

                        for($i = 1; $i <= 10; $i++){
                            if($i % 2 == 0){
                                echo '<tr class="red darken-4">';
                            }
                            else{
                                echo '<tr>';
                            }
                            echo $tabela[$i]['Cod'].
                            $tabela[$i]['Nome'].
                            $tabela[$i]['Valor'].'
                            </tr>';
                            }
                        echo '</tbody>
                        </table>';
                ?>
            </div>
        </div>
    </div>

</body>

</html>