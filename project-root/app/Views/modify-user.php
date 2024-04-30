<div id="container">
    <h1>Modification Utilisateur</h1>
    <?php foreach ($abonnes as $abonne) : ?>
        <form action="/modifyUser" method="POST">
        <div class="input-field">
                <label for="matricule_abonne">Votre Matricule : </label>
                <input id="matricule_abonne" type="text" name="matricule_abonne" value="<?php echo htmlspecialchars($abonne['matricule_abonne']); ?>" />
            </div>
            <div class="input-field">
                <label for="nom_abonne">Votre nom : </label>
                <input id="nom_abonne" type="text" name="nom_abonne" value="<?php echo htmlspecialchars($abonne['nom_abonne']); ?>" />
            </div>
            <div class="input-field">
                <label for="date_naissance_abonne">Votre date de naissance : </label>
                <input id="date_naissance_abonne" type="date" name="date_naissance_abonne" value="<?php echo htmlspecialchars($abonne['date_naissance_abonne']); ?>" placeholder="Saisir votre date de naissance..." />
            </div>
            <div class="input-field">
                <label for="date_adhesion_abonne">Votre date d'adhésion : </label>
                <input id="date_adhesion_abonne" type="date" name="date_adhesion_abonne" value="<?php echo htmlspecialchars($abonne['date_adhesion_abonne']); ?>" placeholder="Saisir votre date d'adhesion ..." />
            </div>
            <div class="input-field">
                <label for="adresse_abonne">Votre adresse : </label>
                <input id="adresse_abonne" type="varchar" name="adresse_abonne" value="<?php echo htmlspecialchars($abonne['adresse_abonne']); ?>" placeholder="Saisir votre adresse ..." />
            </div>
            <div class="input-field">
                <label for="telephone_abonne">Votre numéro de téléphone : </label>
                <input id="telephone_abonne" type="char" name="telephone_abonne" value="<?php echo htmlspecialchars($abonne['telephone_abonne']); ?>" placeholder="Saisir votre numéro ..." />
            </div>
            <div class="input-field">
                <label for="CSP_abonne">Votre numéro CSP abonne : </label>
                <input id="CSP_abonne" type="varchar" name="CSP_abonne" value="<?php echo htmlspecialchars($abonne['CSP_abonne']); ?>" placeholder="Saisir votre CSP ..." />
            </div>
            <button type="submit">Ajouter</button>
        </form>
    <?php endforeach; ?>
</div>