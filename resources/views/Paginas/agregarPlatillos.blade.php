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
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/formHandler.js"></script>
    <title>AgergarPlatillo</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-15 -->
        <div class="bloc bgc-white l-bloc" id="bloc-15">
            <div class="container bloc-md">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form id="form_18266" novalidate>
                                                <div class="form-group"><label>Nombre<br></label><input class="form-control" id="input_227" required /></div>
                                                <div class="form-group"><label>Descripción<br></label><textarea class="form-control" rows="4" cols="50" id="textarea_20" required></textarea></div>
                                                <div class="form-group"><label>Ingredientes<br></label></div>
                                                <div class="form-group">
                                                         @include ('templates/ingredientOption', ['ingredientes'=>$ingredientes])
                                                </div>
                                                <div class="form-group"><label>Tipo</label></div>
                                                <div class="form-group">
                                                    <select class="form-control" id="select_775">
                                                        <option value="0">Entrada</option>
                                                        <option value="1">Plato Fuerte</option>
                                                        <option value="2">Postre</option>
                                                        <option value="3">Bebida</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6"><img src="img/add_image1600.png" height="284" width="478" />
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <form id="form_26192" novalidate>
                                                        <div class="form-group"><label>Precio</label><input class="form-control " id="input_585" required /></div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-15 END -->
        <!-- bloc-16 -->
        <div class="bloc bgc-white l-bloc" id="bloc-16">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center"><a href="{{route('menu')}}" class="btn btn-wire btn-rd btn-xl wire-btn-light-salmon">Agregar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-16 END -->
    </div>
    <!-- Main container END -->
</body>

</html>
