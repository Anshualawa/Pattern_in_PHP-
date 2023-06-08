<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ----------- BootStrap ------------- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>PHP</title>

</head>

<body>
    <div class="container">
        <h3>Patter</h3> where <b> N =5 </b>
        <div class="row">
            <div class="border p-5 col-3">
                <?PHP
                $n = 5;
                for ($i = 0; $i < $n + 1; $i++) {
                    echo str_repeat(' *', $i) . '<br>';
                } ?>
            </div>
            <div class="border p-5 col-3">
                <?PHP for ($i = $n; $i > 0; $i--) {
                    echo str_repeat(' *', $i) . '<br>';
                } ?>
            </div>
            <div class="border p-5 col-3">
                <?PHP for ($i = 0; $i < $n + 1; $i++) {
                    echo str_repeat('&nbsp&nbsp ', $n - $i) . str_repeat('* ', $i) . '<br>';
                } ?>
            </div>
            <div class="border p-5 col-3">
                <?PHP for ($i = 0; $i < $n + 1; $i++) {
                    echo str_repeat('&nbsp&nbsp ', $i) . str_repeat(' * ', $n - $i) . '<br>';
                } ?>
            </div>
            <div class="border p-5 col-3">
                <?PHP for ($i = 0; $i < $n; $i++) {
                    echo str_repeat(' * ', $n) . '<br>';
                } ?>
            </div>
            <div class="border p-5 col-3">
                <?PHP for ($i = 0; $i < $n + 1; $i++) {
                    echo str_repeat('&nbsp ', $n - $i) . str_repeat('&nbsp * ', $i) . '<br>';
                } ?>
            </div>
            <div class="border p-5 col-3">
                <?PHP for ($i = 0; $i < $n + 1; $i++) {
                    echo str_repeat('&nbsp ', $i) . str_repeat(' * &nbsp', $n - $i) . '<br>';
                } ?>
            </div>

        </div>
    </div>
</body>

</html>