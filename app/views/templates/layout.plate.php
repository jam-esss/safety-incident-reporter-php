<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->e($title) ?>
    </title>
    <meta name="description" content="<?= $this->e($description) ?>">
    <link rel="icon" href="/logos/logoipsum-icon.png">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Include Stylesheet -->
    <link rel="stylesheet" href="/stylesheets/stylesheet.css">
    <?= $this->section('styles') ?>
</head>
<body>
<?= $this->fetch('templates/header') ?>
<section class="d-flex justify-content-center align-items-center <?= $bgImage ?? '' ?>">
    <?= $this->section('content') ?>
</section>
<?= $this->section('templates/footer') ?>
<!-- Import main.js which includes Bootstrap's JS -->
<script src="/scripts/main.js" type="module"></script>
<?= $this->section('scripts') ?>
</body>
</html>