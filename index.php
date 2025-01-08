<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Identification</title>
  <link rel="stylesheet" href="index.css">
  <script defer src="index.js"></script>
</head>

<body>
  <main id="main-holder">
	<h2 id="login-header">Pour acceder aux documents, il faut s'identifier</h2>
    <h3 id="login-header"> Comme membre, EN MAJUSCULE</h3>
    
    <div id="login-error-msg-holder">
      <p id="login-error-msg">Erreur d'identification...<span id="error-msg-second-line">Nouvel essai ?</span></p>
    </div>
    
    <form id="login-form">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Prénom ou Pseudo">
      <input type="password" name="PWD" id="password-field" class="login-form-field" placeholder="Mot de passe">
      <input type="submit" value="Login" id="login-form-submit">
    </form>
  
  </main>
</body>

</html>