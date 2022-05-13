<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    /*Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
     metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
     - è definita una classe ‘Movie’
     => all'interno della classe sono dichiarate delle variabili d'istanza
     => all'interno della classe è definito un costruttore
     => all'interno della classe è definito almeno un metodo
     - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà*/

    class Movie
    {
        public $nome;
        public $genere;
        public $path;
        public $protagonista;

        function __construct($_genere)
        {
            $this->genere = $_genere;
        }


        public function render()
        {
            return
                "<div class='container'>
                    <h3>Nome film:</h3>
                    <span>" . $this->nome . "</span>
                    <div class='image_path'>
                        <img src=" . $this->path . ">
                    </div>
                    <h3>Nome protagonista:</h3>
                    <span>" . $this->protagonista . "</span>
                    <h3>Genere:</h3>
                    <span>" . $this->genere . "</span>
                </div>";
        }
    }
    $halloween = new Movie('Horror');
    $halloween->nome = 'Halloween';
    $halloween->path = 'https://midnightfactory.it/wp-content/uploads/2019/11/beef9331-halloween-front.jpg';
    $halloween->protagonista = 'Michael Myers';



    $spiderman = new Movie('Fantascienza');
    $spiderman->nome = 'Spiderman';
    $spiderman->path = 'https://www.tomshw.it/images/images/2021/11/spider-man-no-way-home-198068.jpg';

    $spiderman->protagonista = 'Peter Parker';


    echo ($halloween->render() . $spiderman->render());



    ?>
</body>

</html>