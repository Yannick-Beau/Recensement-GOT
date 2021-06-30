<?php dump($character)?>
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
                <li><a href="<?= route('main-home') ?>">Personnages</a></li>
                <li><a href="<?= route('house-list') ?>">Maisons</a></li>
            </ul>
        </nav>
        <div class="separator"></div>
    </header>
    <main>
        <div class="wrapper">
            <section class="character-page">
                <div class="col-8">
                    <h2><?= $character->first_name ?></h2>
                    <div class="bio">
                        <h3>Biographie</h3>
                        <p>
                            <?= $character->biography ?>
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="avatar" style="background: #e3e3e3;">
                        <img src="<?= url("assets/img/$character->image") ?>" alt="<?= $character->first_name ?>">
                    </div>
                    <div class="infos">
                        <h3>Maisons</h3>
                        <div class="houses">
                            <ul>
                                <li class="house-logo" style="background: #e3e3e3;">
                                    <a href="#/house/1">
                                        <img src="<?= url("assets/img/houses/$character->last_name.png") ?>" alt="<?= $character->last_name ?>">
                                    </a>
                                </li>
                                <li class="house-logo" style="background: #2b3aab;">
                                    <a href="#/house/3">
                                        <img src="./Game of Thrones_files/tully.png" alt="Tully">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="meta">
                            <li><span>Rang : </span> Noble </li>
                            <li><span>Mère : </span> Non renseigné </li>
                            <li><span>Père : </span> Non renseigné </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>

</body>

</html>
