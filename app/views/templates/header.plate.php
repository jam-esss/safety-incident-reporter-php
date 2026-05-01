<nav class="navbar navbar-expand-md bg-colour-3 fixed-top">
    <div class="container-fluid">

        <a class="navbar-brand" href="<?= route('index') ?>">
            <img src="/logos/logoipsum-long.png" alt="Logo Ipsum">
        </a>

        <button class="navbar-toggler p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end bg-colour-3" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header">
                <a href="<?= route('index') ?>" class="offcanvas-title" id="offcanvasNavbarLabel">
                    <img src="/logos/logoipsum-icon.png" alt="Logo Ipsum">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>

            <div class="offcanvas-body align-content-center">
                <ul class="navbar-nav justify-content-end text-center flex-grow-1 pe-3">

                    <li class="nav-item p-3">
                        <a class="nav-link fs-5" aria-current="page" href="<?= route('index') ?>">
                            <i class="bi bi-house"></i>
                            Home
                        </a>
                    </li>

                    <li class="nav-item p-3">
                        <a class="nav-link fs-5" href="<?= route('client.dashboard') ?>">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item p-3">
                        <a class="nav-link fs-5" href="<?= route('client.contact') ?>">
                            <i class="bi bi-chat-dots"></i>
                            Contact
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>