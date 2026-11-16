<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($page['titre']) ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1><?= htmlspecialchars($page['titre']) ?></h1>
        <p class="slogan"><?= htmlspecialchars($page['slogan']) ?></p>
        <p><?= htmlspecialchars($page['contenu']) ?></p>

        <div class="infos">
            <p><strong>Quand :</strong> <?= htmlspecialchars($page['horaires']) ?></p>
            <p><strong>Où :</strong> <?= htmlspecialchars($page['lieu']) ?></p>
        </div>
    </main>
    <footer>Page créée par <?= htmlspecialchars($page['auteur']) ?></footer>
</body>
</html>
