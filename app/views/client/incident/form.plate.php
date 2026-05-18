<?php
$this->layout('templates/layout', ['title' => 'Logoipsum | Incident Report', 'description' => 'Logoipsum Incident Report']);
$isEdit = isset($incident);
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
     style="max-width:800px; min-height: 250px">
    <h1>
        <?= $isEdit ? 'Edit Incident' : 'Report an Incident' ?>
    </h1>
    <?php
    $loggedAt = $incident['logged_at'] ?? null;

    $dateValue = $loggedAt
        ? date('Y-m-d', strtotime($loggedAt))
        : '';

    $timeValue = $loggedAt
        ? date('H:i', strtotime($loggedAt))
        : '';
    ?>

    <form method="POST" class="row g-3 needs-validation w-100" id="contactForm" novalidate>
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

        <div class="col-md-4">
            <label for="siteName" class="form-label">
                Site Name
            </label>
            <input name="site" type="text" class="form-control" id="siteName" minlength="5" value="<?= $old['site'] ?? $incident['site'] ?? '' ?>" required>
            <small class="text-danger">
                <?= ($errors['site'] ?? '') ?>
            </small>
        </div>

        <div class="col-md-4">
            <label for="siteTime" class="form-label">
                Time
            </label>
            <input name="time" type="time" class="form-control" id="siteTime" value="<?= $old['time'] ?? $timeValue ?>" required>
            <small class="text-danger">
                <?= ($errors['time'] ?? '') ?>
            </small>
        </div>

        <div class="col-md-4">
            <label for="siteDate" class="form-label">
                Date
            </label>
            <input name="date" type="date" class="form-control" id="siteDate" value="<?= $old['date'] ?? $dateValue ?>" required>
            <small class="text-danger">
                <?= ($errors['date'] ?? '') ?>
            </small>
        </div>

        <div class="col-12">
            <label class="form-label d-block">
                Severity
            </label>
            <?php
            $severity = $old['severity'] ?? $incident['severity'] ?? '';
            ?>

            <div class="row">
                <div class="col-4">
                    <div class="form-check">
                        <input name="severity" type="radio" class="form-check-input" id="severityLow"
                               value="low" <?= $severity === 'low' ? 'checked' : '' ?>
                               required>
                        <label for="severityLow" class="form-check-label">
                            Low
                        </label>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-check">
                        <input name="severity" type="radio" class="form-check-input" id="severityMedium"
                               value="medium" <?= $severity === 'medium' ? 'checked' : '' ?>
                               required>
                        <label for="severityMedium" class="form-check-label">
                            Medium
                        </label>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-check">
                        <input name="severity" type="radio" class="form-check-input" id="severityHigh"
                               value="high" <?= $severity === 'high' ? 'checked' : '' ?>
                               required>
                        <label for="severityHigh" class="form-check-label">
                            High
                        </label>
                    </div>
                </div>
                <small class="text-danger">
                    <?= ($errors['severity'] ?? '') ?>
                </small>
            </div>
        </div>

        <div class="col-md-12">
            <label for="incidentDescription" class="form-label">
                Description
            </label>
            <textarea name="description" class="form-control" id="incidentDescription" minlength="50" maxlength="3000"
                      rows="3" required><?= $old['description'] ?? $incident['description'] ?? '' ?></textarea>
            <small class="text-danger">
                <?= ($errors['description'] ?? '') ?>
            </small>
        </div>

        <div class="col-12">
            <button class="btn btn-logo-ipsum" type="submit">
                <?= $isEdit ? 'Update Incident' : 'Submit' ?>
            </button>
        </div>

    </form>
</div>