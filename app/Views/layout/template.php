<!Doctype html>
<html>
    <head>
        <title>Fotbal wooo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <?= $this->include("layout/assets");?> 
    </head>

    <body>
        <div class="page_wrapper">
        <?php /*
            $ionAuth = new \IonAuth\Libraries\IonAuth();
            $isLoggedIn = $ionAuth->loggedIn();
            $currentUser = $isLoggedIn ? $ionAuth->user()->row() : null;*/
        ?>
        <?php /* if ($isLoggedIn): ?>
            <div class="text-end text-muted p-2 small">
                Logged in as: <?= $currentUser->username ?>
            </div>
        <?php else: ?>
            <div class="text-end text-muted p-2 small">
                Logged out
            </div>
        <?php endif; */?>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container-fluid">
               
                <a class="navbar-brand" href="<?= base_url() ?>">Fotbal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <?php foreach($navbar as $nav) : ?>
                            <?php if($nav->isAdmin == 0): ?> 
                                <li class="nav-item"><a class="nav-link" href="<?= $nav->link ?>"><?= $nav->name?></a></li>
                                <?php else: ?>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Login
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end p-4" style="width: 300px;">
                                        <form method="post" action="<? base_url('login')?>" class="d-inline">
                                            <div class="mb-3">
                                                <label for="loginAdmin" class="form-label">Admin</label>
                                                <input type="text" class="form-control" name = "admin" id="admin" placeholder="admin">
                                            </div>
                                            <div class="mb-3">
                                                <label for="loginPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                        </form>
                                    </div>
                                </li>
                                <?php endif; ?>
                        <?php endforeach; ?>

                       
                    </ul>
                </div>
            </div>
        </nav>


        

        
    </body>
</html>