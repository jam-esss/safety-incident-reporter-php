<?php
$this->layout('templates/layout', ['title' => 'Logoipsum | Login', 'description' => 'Logoipsum Login']);
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

<?php
$this->stop();
?>

<div class="row d-flex justify-content-center align-items-center m-1 glass p-2">
    <h2>
        Sign In
    </h2>
    <form class="needs-validation" action="" method="POST" novalidate>
        <div class="col-12">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
            <label class="form-label" for="userEmail">
                Email
            </label>
            <input class="form-control" type="text" id="userEmail" name="email" value="<?= ($old['email'] ?? '') ?>" minlength="5" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
            <small class="text-danger">
                <?= ($errors ?? '') ?>
            </small>
        </div>

        <div class="col-12">
            <label class="form-label" for="password">
                Password
            </label>
            <input class="form-control" type="password" id="password" name="password" minlength="8" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <button class="btn btn-logo-ipsum my-3" type="submit">
            Login
        </button>
    </form>
</div>