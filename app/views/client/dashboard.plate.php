<?php
$this->layout('templates/layout', ['title' => 'Logoipsum | Dashboard', 'description' => 'Logoipsum Dashboard']);
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

<div class="row d-flex justify-content-center align-items-center m-1">

    <h1>
        Hello, <?= $user['fn'] ?>
    </h1>

    <div class="col-4 col-md-3 g-0 p-1">
        <a href="<?= route('index') ?>" class="tile btn-logo-ipsum">
            <i class="bi bi-house-door-fill"></i>
            <span>
                Home
            </span>
        </a>
    </div>

    <div class="col-4 col-md-3 g-0 p-1">
        <a class="tile bg-colour-4">
            <i class="bi bi-person-circle"></i>
            <span>
                Profile
            </span>
        </a>
    </div>

    <div class="col-4 col-md-3 g-0 p-1">
        <a href="<?= route('client.users.index') ?>" class="tile btn-logo-ipsum">
            <i class="bi bi-people-fill"></i>
            <span>
                Users
            </span>
        </a>
    </div>

    <div class="col-4 col-md-3 g-0 p-1">
        <a class="tile bg-colour-4">
            <i class="bi bi-gear-fill"></i>
            <span>
                Settings
            </span>
        </a>
    </div>

    <div class="col-8 col-md-6 g-0 p-1">
        <a href="<?= route('client.incidentform') ?>" class="tile-wide btn-logo-ipsum">
            <i class="bi bi-flag-fill"></i>
            <span>
                Report Incident
            </span>
        </a>
    </div>

    <div class="col-8 col-md-6 g-0 p-1">
        <a class="tile-wide bg-colour-4">
            <i class="bi bi-card-checklist"></i>
            <span>
                Reported Incidents
            </span>
        </a>
    </div>

    <div class="col-4 col-md-3 g-0 p-1">
        <a class="tile bg-colour-4">
            <i class="bi bi-archive-fill"></i>
            <span>
                Files
            </span>
        </a>
    </div>

    <div class="col-4 col-md-3 g-0 p-1">
        <a class="tile bg-colour-4">
            <i class="bi bi-tools"></i>
            <span>
                Equipment
            </span>
        </a>
    </div>

</div>