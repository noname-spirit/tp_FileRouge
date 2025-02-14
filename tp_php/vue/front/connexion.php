<main class="container">
    
    <div class="d-flex justify-content-between  align-items-baseline ">
    <h1>Accès au Cook&Share</h1>
    <a href="<?php echo URL ?>?page=inscription"  >inscrivez vous</a>

    </div>

    <form method="POST">
        <div class="mb-3">
            <label for="email">votre email</label>
            <input type="email" class="form-control" id="email" placeholder="votre email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password">votre password</label>
            <input type="password" class="form-control" id="password" placeholder="votre password" name="password" required>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-outline-info" value="connexion">
        </div>
    </form>
    <?php foreach ($erreurs as $erreur) : ?>
        <div class="alert bg-warning"><?php echo $erreur ?></div>
    <?php endforeach ?> 
</main>