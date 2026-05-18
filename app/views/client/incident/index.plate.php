<?php
/**
 * @var \App\Classes\Incident $incidents
 */
?>
<?php
$this->layout('templates/layout', ['title' => 'Logoipsum | Incident Dashboard', 'description' => 'Logoipsum Incident Report Dashboard']);
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
    <h1>
        Incidents
    </h1>
    <a class="btn btn-logo-ipsum my-2" href="<?= route('client.incident.create') ?>">
        Add New
    </a>
    <div class="table-responsive w-100">
        <table class="table table-striped-columns">
            <thead>
            <tr class="text-center">
                <th>
                    ID
                </th>
                <th>
                    Reported By
                </th>
                <th>
                    Site
                </th>
                <th>
                    Description
                </th>
                <th>
                    Severity
                </th>
                <th>
                    Logged At
                </th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($incidents as $incident): ?>
                <tr class="text-center">
                    <td>
                        <?= $incident['id'] ?>
                    </td>
                    <td>
                        <?= $incident['reporter']['fn'] ?>
                        <?= $incident['reporter']['sn'] ?>
                    </td>
                    <td>
                        <?= $incident['site'] ?>
                    </td>
                    <td>
                        <?= $incident['description'] ?>
                    </td>
                    <td class="bg-<?= $incident['severity'] === 'high' ? 'danger' : ($incident['severity'] === 'medium' ? 'warning' : 'success') ?>">
                        <?= ucwords($incident['severity']) ?>
                    </td>
                    <td>
                        <?= $incident['logged_at'] ?>
                    </td>
                    <td>
                        <a class=" btn btn-logo-ipsum m-1
                    "
                           href="<?= route('client.incident.edit', ['id' => $incident['id']]) ?>">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form class="m-1" method="POST"
                              action="<?= route('client.incident.delete', ['id' => $incident['id']]) ?>">
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