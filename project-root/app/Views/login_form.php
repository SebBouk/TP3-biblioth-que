<div id="connexion">
<h1>Se connecter</h1>
<form method="POST" action="/login">
<label for="login">matricule abonné / identifiant admin</label>
<input id="login" name="login" type="text" /><br>
<label for="password">nom abonné / mot de passe admin </label>
<input id="password" name="password" type="password" /><br>
<button type="submit">Se connecter</button>
</form>
<input type="button" value="Nouvel utilisateur" onclick="window.location='/addUser';"/>
</div>