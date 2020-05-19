<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php print_r($_SERVER['HTTP_REFERER'])?>
        <?php print_r($_GET)?>
    </pre>
    <h2>Link</h2>
    <?php if(isset($_POST['the_name']) && !empty($_POST['the_name'])): ?>
        Hello <?= $_POST['the_name'] ?>
        
    <?php endif ?>
</body>

</html>