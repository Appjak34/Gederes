<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=helvetica&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/blocs.min.js"></script>
    <title>Almacen</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        @include ('templates/navbar')
        <!-- bloc-12 -->
        <form>
            <table style="width:70%" align="center">
                <tr>
                    <th> Nombre </th>
                    <th> Cantidad </th>
                    <th> Agregar </th>
                <tr>
                @include ('templates/ingrediente', ['ingredientes'=>$ingredientes])
            </table>
        </form>
        <!-- bloc-12 END -->
        <!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
        <!-- ScrollToTop Button END-->
    </div>
    <!-- Main container END -->
</body>

</html>