<?PHP

function trangle($n)
{
    for ($i = 0; $i < $n + 1; $i++) {
        echo str_repeat(' *', $i).'<br>';
    }
}


function leftTrangle($n)
{
    for ($i = $n; $i > 0; $i--) {
        echo str_repeat(' *', $i) . '<br>';
    }
}


function rightUpTrangle($n)
{
    for ($i = 0; $i < $n + 1; $i++) {
        echo str_repeat('&nbsp&nbsp ', $n - $i) . str_repeat('* ', $i) . '<br>';
    }
}





function rightDowTrangle($n)
{
    for ($i = 0; $i < $n + 1; $i++) {
        echo str_repeat('&nbsp&nbsp ', $i) . str_repeat(' * ', $n - $i) . '<br>';
    }
}





function Squar($n)
{
    for ($i = 0; $i < $n; $i++) {
        echo str_repeat(' * ', $n) . '<br>';
    }
}





function Trangle01($n)
{
    for ($i = 0; $i < $n + 1; $i++) {
        echo str_repeat('&nbsp ', $n - $i) . str_repeat('&nbsp * ', $i) . '<br>';
    }
}




function Trangle02($n)
{
    for ($i = 0; $i < $n + 1; $i++) {
        echo str_repeat('&nbsp ', $i) . str_repeat(' * &nbsp', $n - $i) . '<br>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ----------- BootStrap ------------- -->
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>
    <title>PHP</title>

</head>

<body>
    <div class="container">
        <h3>Patter</h3> where <b> N =5 </b>
        <div class="row">
            <div class="border col-3">
                <?PHP echo Squar(5) ?>
            </div>
            <div class="border col-3">
                <?PHP echo leftTrangle(5) ?>
            </div>
            <div class="border col-3">
                <?PHP echo rightUpTrangle(5) ?>
            </div>
            <div class="border col-3">
                <?PHP echo rightDowTrangle(5) ?>
            </div>
            <div class="border col-3">
                <?PHP echo trangle(5); ?>
            </div>
            <div class="border col-3">
                <?PHP echo Trangle01(5) ?>
            </div>
            <div class="border col-3">
                <?PHP echo Trangle02(5) ?>
            </div>

        </div>
    </div>
</body>

</html>