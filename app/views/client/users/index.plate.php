<?php
$this->layout('templates/layout', ['title' => 'Users', 'description' => 'Logoipsum Users']);
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

<div class="container d-flex flex-column justify-content-center align-items-center glass py-3"
     style="max-width:1000px; min-height: 250px">
    <h1>
        Users
    </h1>
    <a class="btn btn-logo-ipsum my-2" href="#">
        Add New
    </a>
    <div class="table-responsive w-100">
        <table class="table table-striped-columns">
            <thead>
            <tr class="text-center">
                <th>
                    User ID
                </th>
                <th>
                    First Name
                </th>
                <th>
                    Surname
                </th>
                <th>
                    Email
                </th>
                <th>
                    Created At
                </th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td>
                    1
                </td>
                <td>
                    James
                </td>
                <td>
                    PG
                </td>
                <td>
                    <a class="logo-ipsum-link" href="mailto:jpg@example.com">
                        jpg@example.com
                    </a>
                </td>
                <td>
                    01/01/2004
                </td>
                <td>
                    <a class="btn btn-logo-ipsum" href="#">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>