<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="mx-auto mt-2 col-md-auto bg-light">
                <h2>Hello, form!</h2>
                <form action="devolver.php" method="post" enctype="multipart/form-data">
                    <!-- nombre -->
                    <div class="form-group ">
                        <label for="inputname">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="inputname">
                    </div>
                    <!-- email -->
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail4">
                    </div>
                    <!-- telef -->
                    <div class="form-group">
                        <label for="inputtel">Telefono</label>
                        <input type="number" class="form-control" name="telefono" id="inputtel">
                    </div>
                    <!-- estado civil -->
                    <div class="mt-2 form-group">
                        <label for="inlineFormCustomSelect">Estado Civil</label>
                        <select class="form-control" id="inlineFormCustomSelect" name="estado_civil">
                            <option selected>Elije</option>
                            <option value="solero">soltero</option>
                            <option value="casado">casado</option>
                            <option value="otro">otro</option>
                        </select>
                    </div>
                    <!-- tiene hijos? -->
                    <div class="form-group">
                        tiene hijos?
                        <div class="ml-4 form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="1" name="hijos">
                            <label class="form-check-label" for="inlineRadio1">si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="0" name="hijos">
                            <label class="form-check-label" for="inlineRadio2">no</label>
                        </div>
                    </div>
                    <!-- intereses -->
                    <div class="form-group">
                        <label for="intereses" class=" control-label">Intereses</label>

                        <div class="pl-3">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="intereses[]" name="intereses[]" value="Libros"> Libros
                            </label>

                            <label class="checkbox-inline">
                                <input type="checkbox" id="intereses[]" name="intereses[]" value="Musica"> Musica
                            </label>

                            <label class="checkbox-inline">
                                <input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes"> Deportes
                            </label>

                            <label class="checkbox-inline">
                                <input type="checkbox" id="intereses[]" name="intereses[]" value="Otros"> Otros
                            </label>
                        </div>
                    </div>
                    <!-- archivo -->
                    <div class=" form-group custom-file">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="archivo[]" multiple="">
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Guardar</button>
                    <button class="btn btn-primary mt-3"><a href="index.php" class="text-white">Regresar</a></button>
                    <!-- <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar</a> -->
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>