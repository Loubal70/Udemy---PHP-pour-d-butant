<?php require_once('partials/_header.php'); ?>

<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Login</span>

            <form action="" autocomplete="off">
                <div class="input-field">
                    <input type="text" placeholder="Renseigner votre email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" placeholder="Renseigner votre mot de passe" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div class="input-field button">
                    <input type="button" value="Connexion">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">
                    Pas encore inscrit ?
                    <a href="#" class="text signup-link">Inscription</a>
                </span>
            </div>
        </div>

        <!-- Formulaire d'inscription -->

        <div class="form signup">
            <span class="title">Inscription</span>

            <form action="" autocomplete="off">
                <div class="input-field">
                    <input type="text" placeholder="Quel est votre prénom ?" required>
                    <i class="uil uil-user icon"></i>
                </div>
                <div class="input-field">
                    <input type="email" placeholder="Renseigner votre email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" placeholder="Renseigner votre mot de passe" required>
                    <i class="uil uil-lock icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" placeholder="Renseigner votre mot de passe" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div class="input-field button">
                    <input type="button" value="Connexion">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">
                    <a href="#" class="text login-link">J'ai déjà un compte</a>
                </span>
            </div>
        </div>
    </div>
</div>

<?php require_once('partials/_footer.php'); ?>