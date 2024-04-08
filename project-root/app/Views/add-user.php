<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
</head>
<form action="add-user.php" method="POST">
 <div class="input-field">
 <label for="firstname">Votre prénom : </label>
 <input
 id="firstname"
 type="text"
 name="firstname"
 placeholder="Saisir votre prénom..."
 />
 </div>
 <div class="input-field">
 <label for="lastname">Votre nom : </label>
 <input
 id="lastname"
 type="text"
 name="lastname"
 placeholder="Saisir votre nom..."
 />
 </div>
 <div class="input-field">
 <label for="dob">Votre date de naissance : </label>
 <input
 id="dob"
 type="date"
 name="dob"
 placeholder="Saisir votre date de naissance..."
 />
 <div class="input-field">
 <label for="password">Votre mot de passe : </label>
 <input
 id="password"
 type="password"
 name="password"
 placeholder="Saisir votre mot de passe..."
 />
 </div>
 <button type="submit">Ajouter</button>
 </form>
 </html>