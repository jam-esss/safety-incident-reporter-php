<?php
$this->layout('templates/layout', ['title' => 'Contact', 'description' => 'Logoipsum Contact']);
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
            Contact Us
        </h1>
        <div class="col-md-6">
            <label for="fname" class="form-label">
                First name
            </label>
            <input type="text" class="form-control" id="fname" minlength="2" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-6">
            <label for="sname" class="form-label">
                Surname
            </label>
            <input type="text" class="form-control" id="sname" minlength="2" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-6">
            <label for="company" class="form-label">
                Company
            </label>
            <input type="text" class="form-control" id="company" minlength="3" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">
                Email
            </label>
            <input type="email" class="form-control" id="email" minlength="5" required>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-6">
            <label for="enquiry" class="form-label">
                Enquiry
            </label>
            <select class="form-select" id="enquiry" required>
                <option selected disabled value="">
                    Choose...
                </option>
                <option>
                    General Enquiry
                </option>
                <option>
                    Technical Issue / Bug Report
                </option>
                <option>
                    Account Access Issues
                </option>
                <option>
                    Help Using the System
                </option>
            </select>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-md-6">
            <label for="howtocontact" class="form-label">
                How would you like to be contacted?
            </label>
            <select class="form-select" id="howtocontact" required>
                <option selected disabled value="">
                    Choose...
                </option>
                <option>
                    Phone
                </option>
                <option>
                    Email
                </option>
            </select>
            <div class="invalid-feedback">
                Invalid Input.
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-logo-ipsum" type="submit">
                Submit
            </button>
        </div>
    </form>

</div>