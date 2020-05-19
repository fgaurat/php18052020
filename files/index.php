<?php include('index.inc.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
    <?php include('bootstrap.inc.php')?>
</head>
<body>
    <div class="container">

        <h1>Files</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($files as $f):?>
                    <tr>
                        <td>
                            <?= $f ?>
                        </td>
                        <td>
                            <a class="btn btn-primary"  href="<?= $_SERVER['PHP_SELF']?>?file=<?=$f?>">show</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
          
        <?php if(isset($file_content) && !empty($file_content)): ?>
            <h1>File Content</h1>

            <table class="table">

                <thead>
                    <tr>
                        <?php foreach(explode(',',$header) as $h): ?>
                            <th><?=$h?></th>
                        <?php endforeach;?>
                    </tr>
                </thead>
                <tbody>

                </tbody>

            </table>


        <?php endif;?>
                
    </div>
</body>
</html>