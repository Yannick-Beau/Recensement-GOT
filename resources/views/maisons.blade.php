<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
    <title>Game of Thrones</title>
</head>

<body>
    <header>
        <h1>Game of Thrones</h1>
        <nav>
            <ul>
                <li><a href="<?= route( 'main-home' ) ?>">Personnages</a></li>
                <li><a href="<?= route( 'house-list' ) ?>">Maisons</a></li>
            </ul>
        </nav>
        <div class="separator"></div>
    </header>
    <main>
        <div class="wrapper">
            <ul class="houses-list">

            <?php foreach( $houses as $house ) : ?>
                <li class="house-logo" style="background: #<?= $house->colour ?>;">
                    <a href="<?= route( 'house-house', [ 'id' => $house->id ] ) ?>">
                        <img src="<?= url("assets/img/houses/$house->name.png") ?>" alt="Stark">
                    </a>
                </li>
            <?php endforeach; ?>

            </ul>
        </div>
    </main>

</body>

</html>
