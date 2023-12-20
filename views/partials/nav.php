<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">
                Home
            </a>

            <a class="navbar-item" href="/admin/articles">
                Articles
            </a>

            <a class="navbar-item" href="/admin/users">
                Users
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <?php if(auth()): ?>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <?=auth()->email?>
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="/logout">
                                Logout
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="buttons">
                        <a class="button is-primary" href="/register">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="/login">
                            Log in
                        </a>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</nav>
