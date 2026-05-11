<?php
$this->layout('templates/layout', ['title' => 'Users', 'description' => 'Logoipsum User Create']);
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

<div class="container d-flex flex-column justify-content-center align-items-center glass py-3"
     style="max-width:1000px; min-height: 250px">
    <form action="" method="POST" class="row g-3 needs-validation w-100" id="contactForm" novalidate>
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
        <h1>
            Add User
        </h1>
        <div class="col-md-6">
            <label for="userFirstName" class="form-label">
                First Name
            </label>
            <input name="fn" type="text" class="form-control" id="userFirstName" minlength="5"
                   value="<?= ($old['fn'] ?? '') ?>" required>
            <small class="text-danger">
                <?= ($errors['fn'] ?? '') ?>
            </small>
        </div>
        <div class="col-md-6">
            <label for="userSurname" class="form-label">
                Surname
            </label>
            <input name="sn" type="text" class="form-control" id="userSurname" minlength="5"
                   value="<?= ($old['sn'] ?? '') ?>" required>
            <small class="text-danger">
                <?= ($errors['sn'] ?? '') ?>
            </small>
        </div>
        <div class="col-12">
            <label for="userEmail" class="form-label">
                Email
            </label>
            <input name="email" type="email" class="form-control" id="userEmail" minlength="5"
                   value="<?= ($old['email'] ?? '') ?>" required>
            <small class="text-danger">
                <?= ($errors['email'] ?? '') ?>
            </small>
        </div>
        <div class="col-12">
            <label for="userPassword" class="form-label">
                Password
            </label>
            <input name="password" type="password" class="form-control" id="userPassword" minlength="8" required>
            <small class="text-danger">
                <?= ($errors['password'] ?? '') ?>
            </small>
        </div>
        <div class="col-12">
            <button class="btn btn-logo-ipsum" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>