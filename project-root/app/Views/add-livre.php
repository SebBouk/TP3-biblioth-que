<div id="addLivre">
    <h1>Nouvel Livre</h1>
    <form action="add-livre.php" method="POST">
        <div class="input-field">
            <label for="titre">Titre : </label>
            <input id="titre" type="text" name="titre" placeholder="Saisir le titre du livre..." />
        </div>
        <div class="input-field">
            <label for="theme">Theme : </label>
            <input id="theme" type="text" name="theme" placeholder="Saisir le theme du livre..." />
        </div>
            <button type="submit">Ajouter</button>
    </form>
</div>