<?php
$this->layout('templates/layout', ['title' => 'Logoipsum | Incident Report', 'description' => 'Logoipsum Incident Report']);
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
    <form class="row g-3 needs-validation w-100" id="contactForm" novalidate>

        <h1>
            Report an Incident
        </h1>

        <h2>
            Your Information
        </h2>

        <div class="col-md-4">
            <label for="userFullName" class="form-label">
                Full Name
            </label>
            <input type="text" class="form-control" id="userFullName" minlength="5" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-4">
            <label for="userEmployeeNumber" class="form-label">
                Employee Number
            </label>
            <input type="text" class="form-control" id="userEmployeeNumber" minlength="5" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-4">
            <label for="userJobRole" class="form-label">
                Job Role
            </label>
            <select class="form-select" id="userJobRole" required>
                <option selected disabled value="">
                    Choose...
                </option>
                <option>
                    Labourer
                </option>
                <option>
                    Carpenter
                </option>
                <option>
                    Electrician
                </option>
                <option>
                    Plumber
                </option>
                <option>
                    Other
                </option>
            </select>
        </div>

        <h2>
            Their Information
        </h2>

        <div class="col-md-4">
            <label for="victimFullName" class="form-label">
                Full Name
            </label>
            <input type="text" class="form-control" id="victimFullName" minlength="5" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-4">
            <label for="victimEmployeeNumber" class="form-label">
                Employee Number
            </label>
            <input type="text" class="form-control" id="victimEmployeeNumber" minlength="5" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-4">
            <label for="victimJobRole" class="form-label">
                Job Role
            </label>
            <select class="form-select" id="victimJobRole" required>
                <option selected disabled value="">
                    Choose...
                </option>
                <option>
                    Labourer
                </option>
                <option>
                    Carpenter
                </option>
                <option>
                    Electrician
                </option>
                <option>
                    Plumber
                </option>
                <option>
                    Other
                </option>
            </select>
        </div>

        <h2>
            Further Information
        </h2>

        <div class="col-md-4">
            <label for="siteName" class="form-label">
                Site
            </label>
            <input type="text" class="form-control" id="siteName" minlength="5" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-4">
            <label for="time" class="form-label">
                Time
            </label>
            <input type="time" class="form-control" id="time" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-4">
            <label for="date" class="form-label">
                Date
            </label>
            <input type="date" class="form-control" id="date" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <h3>
            Severity
        </h3>

        <div class="col-4">
            <label for="severityLow" class="form-label">
                Low
            </label>
            <input name="severity" type="radio" class="form-check-input" id="severityLow" required>
        </div>

        <div class="col-4">
            <label for="severityMedium">
                Medium
            </label>
            <input name="severity" type="radio" class="form-check-input" id="severityMedium">
        </div>

        <div class="col-4">
            <label for="severityHigh">
                High
            </label>
            <input name="severity" type="radio" class="form-check-input" id="severityHigh">
        </div>

        <div class="col-md-12">
            <label for="description" class="form-label">
                Description
            </label>
            <textarea class="form-control" id="description" minlength="50" maxlength="3000" rows="3"
                      required></textarea>
        </div>

        <div class="col-12">
            <button class="btn btn-logo-ipsum" type="submit">
                Submit
            </button>
        </div>
    </form>

    <div id="successMessage" style="display: none">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2 class="my-3">
                Downloading your report now...
            </h2>
            <img class="my-3" src="/logos/logoipsum-long.png" alt="Logo Ipsum">
            <a class="btn btn-logo-ipsum" href="<?= route('client.dashboard') ?>>">
                Return To Dashboard
            </a>
        </div>
    </div>

</div>