<?php

require __DIR__ . '/Models/genere.php';
class Movie
{
    public $title;
    public $link;
    public $discount = 0;
    public $genere;
    public $description;

    public function __construct(string $title,  string $link, array $genere, string $description)
    {
        $this->title = $title;
        $this->link = $link;
        $this->genere = $genere;
        $this->description = $description;
    }

    public function setDiscount($age)
    {
        if ($age > 10) {
            $this->discount = 0;
        } else if ($age < 10) {
            $this->discount = 50 . '%';
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}


$generes = [
    new genere("Action"),
    new genere("Horror")
];

$spiderman = new Movie("The Amazing Spiderman The Power Of Electro", "www.TheAmazingSpidermanThePowerOfElectro.com", $generes, ' Spider-Man combatte contro Rhino e il potente Electro mentre cerca di mantenere la promessa di non coinvolgere l\'amica Gwen nella sua vita pericolosa.');
$spiderman->setDiscount(9);
$discountspiderman = $spiderman->getDiscount();


$matrix = new Movie("Matrix",  "www.matrix.com", $generes, 'Matrix (The Matrix) è un film di fantascienza del 1999 in stile cyberpunk scritto e diretto dai fratelli Andy e Larry Wachowski.');
$matrix->setDiscount(70);
$discountmatrix = $matrix->getDiscount();

// var_dump($discountspiderman);

// var_dump($discountmatrix);

// var_dump($spiderman->title);
// var_dump($matrix->title);

// var_dump($spiderman->genere);



?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>


    <title>Document</title>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
    <link rel='stylesheet' href=''>
    <style>
        .row {
            justify-content: space-between;
        }
    </style>
</head>

<body>


    <header id="site_header"></header>
    <!-- /#site_header -->
    <main id="site_main">
        <div class="container">
            <h1 class="text-center">CINEMA MOVIE</h1>
            <div class="row ">
                <div class="col-5">
                    <h3> <?= $spiderman->title ?> </h3>
                    <div class="info-film">
                        <div class="site d-flex">
                            <h4>WEB SITE:</h4>
                            <span class="ps-3">
                                <?= $spiderman->link ?>
                            </span>

                        </div>
                        <div class="discount d-flex">
                            <h3> DISCOUNT:</h3>
                            <span class="ps-3"> <?= $spiderman->discount ?></span>
                        </div>
                    </div>
                    <div class="description">
                        <h3>DESCRIPTION:</h3>
                        <p> <?= $spiderman->description ?></p>
                    </div>
                </div>
                <div class="col-5">
                    <h3> <?= $matrix->title ?> </h3>
                    <div class="info-film">
                        <div class="site d-flex">
                            <h4>WEB SITE:</h4>
                            <span class="ps-3">
                                <?= $matrix->link ?>
                            </span>

                        </div>
                        <div class="discount d-flex">
                            <h3> DISCOUNT:</h3>
                            <span class="ps-3"> <?= $matrix->discount ?></span>
                        </div>
                    </div>
                    <div class="description">
                        <h3>DESCRIPTION:</h3>
                        <p> <?= $matrix->description ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /#site_main -->
    <footer id="site_footer"></footer>
    <!-- /#site_footer -->


    <script src='https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js'></script>
    <script src=''></script>
</body>

</html>