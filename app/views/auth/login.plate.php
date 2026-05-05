<?php
$this->layout('templates/layout', ['title' => 'Login', 'description' => 'Logoipsum Login']);
?>
<?php
$this->push('styles');
?>

<?php
$this->stop();
?>

<?php
$this->push('scripts');
?>
<!-- Import main.js which includes Bootstrap's JS -->
<script src="/scripts/main.js" type="module"></script>
<?php
$this->stop();
?>

<section class="d-flex justify-content-center align-items-center">
    <div class="row d-flex justify-content-center align-items-center m-1 glass p-2">
        <h2>
            Sign In
        </h2>
        <form class="needs-validation" action="" method="POST" novalidate>
            <div class="form-group">
                <label class="form-label" for="username">
                    Username / Email
                </label>
                <input class="form-control" type="text" id="username" name="username" required>
                <div class="invalid-feedback">
                    Invalid Input.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">
                    Password
                </label>
                <input class="form-control" type="password" id="password" name="password" required>
                <div class="invalid-feedback">
                    Invalid Input.
                </div>
            </div>

            <button class="btn btn-logo-ipsum my-3" type="submit">
                Login
            </button>
        </form>
    </div>
</section>