<?php
/**
 * @var \App\Classes\User $users
 */
?>
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
    <a class="btn btn-logo-ipsum my-2" href="<?= route('client.users.create') ?>">
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
            <?php foreach ($users as $user): ?>
            <tr class="text-center">
                <td>
                    <?= $user['id'] ?>
                </td>
                <td>
                    <?= $user['fn'] ?>
                </td>
                <td>
                    <?= $user['sn'] ?>
                </td>
                <td>
                    <a class="logo-ipsum-link" href="mailto:<?= $user['email'] ?>">
                        <?= $user['email'] ?>
                    </a>
                </td>
                <td>
                    <?= $user['created_at'] ?>
                </td>
                <td>
                    <form method="POST" action="<?= route('client.users.delete', ['id' => $user['id']]) ?>">
                        <button class="btn btn-logo-ipsum" type="submit">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>