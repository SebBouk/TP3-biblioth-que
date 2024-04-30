<div id = "gestionAbonne">
<body>
    <h1>Bienvenue sur la page de gestion des abonnes</h1>
    <div id="newUser">
    <input type="button" value="Nouvel utilisateur" onclick="window.location='/addUser';"/>
    </div>
    <table>
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom des Abonnés</th>
                <th>Date de naissance</th>
                <th>Date d'adhesion</th>
                <th>Adresse</th>
                <th>N° de téléphone</th>
                <th>Classe socio professionnel</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($abonnes as $abonne) : ?>
            <tr>
                <td><?php echo $abonne['matricule_abonne']; ?></td>
                <td><?php echo $abonne['nom_abonne']; ?></td>
                <td><?php echo $abonne['date_naissance_abonne']; ?></td>
                <td><?php echo $abonne['date_adhesion_abonne']; ?></td>
                <td><?php echo $abonne['adresse_abonne']; ?></td>
                <td><?php echo $abonne['telephone_abonne']; ?></td>
                <td><?php echo $abonne['CSP_abonne']; ?></td>
                <td><a href="/supprimeAbo?matricule_abonne=<?= $abonne['matricule_abonne'] ?>">Supprimer</a><br><br>
                <a href="/modifyUser?matricule_abonne=<?= $abonne['matricule_abonne'] ?>">Modifier</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</div>