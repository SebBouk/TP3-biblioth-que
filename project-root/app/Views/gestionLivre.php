<body>
    <h1>Bienvenue sur la page de gestion des livres</h1>
    <div id="newLivre">
    <input type="button" value="Nouveau Livre" onclick="window.location='/add-livre';"/>
    </div>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Theme</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livres as $livre) : ?>
                <tr>
                    <td><?php echo $livre['titre_livre']; ?></td>
                    <td><?php echo $livre['theme_livre']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>