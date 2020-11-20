<? require_once './includes/helper.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Formulare</title>
</head>
<body>

<section class="left">
    <? include_once './includes/add_person.php'; ?>
</section>

<section class="right">
    <? include_once './includes/print_persons.php'; ?>
</section>

</body>
</html>