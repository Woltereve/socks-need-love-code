<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= escape($page_title ?? 'Administration'); ?> - Monkey Chess</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header>
        <p>
            <strong>Monkey Chess Admin</strong>
        </p>

        <nav aria-label="Navigation administration">
            <ul>
                <li><a href="/admin">Accueil admin</a></li>
                <li><a href="/admin/book">Livres</a></li>
                <li><a href="/admin/operator">Opérateurs</a></li>
                <li><a href="/">Voir le site</a></li>
                <li><a href="/logout">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?= $content; ?>
    </main>

    <footer>
        <p>Administration Monkey Chess</p>
    </footer>
</body>
</html>