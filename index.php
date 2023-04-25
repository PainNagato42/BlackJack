<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Black-Jack</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="table"></div>
            <div class="flex">
                <p class="money">5000</p>
            </div>

            <div class="center bank">
                <div>
                    <p id="sommeBank" class="somme-card"></p>
                </div>
                <div id="contain-card-bank" class="contain-card flex">
                </div>
            </div>
            <div id="miseOk" class="none">
                <p></p>
            </div>
            <div id="miseOkSplit" class="none">
                <p></p>
            </div>
            <div id="player" class="center flex">
                <div>
                    <div>
                        <p id="sommePlayer" class="somme-card"></p>
                    </div>
                    <div id="contain-card-player" class="contain-card flex"></div>
                </div>
                <div>
                    <div>
                        <p id="sommePlayerSplit" class="somme-card"></p>
                    </div>
                    <div id="contain-card-split" class="contain-card flex"></div>
                </div>

            </div>
            <div class="container contain-choix width_100">
                <div id="mises" class="contain-btn flex">
                    <div id="mise" class="btn width_10">50</div>
                    <div id="mise" class="btn width_10">100</div>
                    <div id="mise" class="btn width_10">500</div>
                    <div id="mise" class="btn width_10">1000</div>
                </div>
                <div id="actions" class="contain-btn flex none">
                    <div class="btn action width_10">Tirer</div>
                    <div class="btn action width_10">Refuser</div>
                    <div class="btn action width_10">Doubler</div>
                    <div class="btn action width_10 none">Séparer</div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="script.js" defer></script>

</html>