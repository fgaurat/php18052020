<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <?php include('bootstrap.inc.php') ?>
</head>

<body>
    <div class="container">
        <h1>Index</h1>
        <h2>Form 1</h2>
        <form action="calc.php" method="post">
            <input type="hidden" name="the_form" value="form1">
            <div class="form-group">
                <label for="number_a">a</label>
                <input type="number" class="form-control" id="number_a" name="number_a" aria-describedby="helpNumberA">
                <small id="helpNumberA" class="form-text text-muted">Number A</small>
            </div>
            <div class="form-group">
                <label for="operator">Operator</label>
                <select class="form-control" id="operator" name="operator">
                    <option selected disabled>Sélectionnez un opérateur</option>
                    <option value="add">+</option>
                    <option value="mult">*</option>
                    <option value="div">/</option>
                    <option value="sub">-</option>
                </select>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator_check" id="operatorAdd" value="add">
                <label class="form-check-label" for="operatorAdd"> + </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator_check" id="operatorMult" value="mult">
                <label class="form-check-label" for="operatorMult"> * </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator_check" id="operatorDiv" value="div">
                <label class="form-check-label" for="operatorDiv"> / </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator_check" id="operatorSub" value="dub">
                <label class="form-check-label" for="operatorSub"> - </label>
            </div>

            <div class="form-group">
                <label for="number_b">b</label>
                <input type="number" class="form-control" id="number_b" name="number_b" aria-describedby="helpNumberB">
                <small id="helpNumberB" class="form-text text-muted">Number B</small>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block">Calc</button>
        </form>
        <br>
        <hr>
        <br>
        <h2>Form 2</h2>
        <form action="calc.php" method="post">
            <input type="hidden" name="the_form" value="form2">
            <div class="form-group">
                <label for="number_list">Number list</label>
                <input type="text" class="form-control" id="number_list" name="number_list" aria-describedby="helpNumberList">
                <small id="helpNumberList" class="form-text text-muted">Number list</small>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block">Calc all</button>
        </form>
    </div>
</body>

</html>