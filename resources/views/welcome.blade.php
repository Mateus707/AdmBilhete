<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid p-0 m-0">
    <div class="row g-3">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="border border-black rounded-3 d-flex justify-content-center p-5 w-75">
                    <form action="{{ route('login') }}" method="post" class="w-100">
                        @csrf
                         <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" name="password" class="form-control" id="senha" required>
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox" class="mb-3 mt-3" >Lembre de mim rs</label>
                        <input type="submit" class="fundo w-100 btn btnCss" value="Enviar">

                    </form>
                </div>
            </div>
        <div class="col-md-6  d-flex justify-content-center align-items-center fundo">
            <img src="img/bilhete.jpg" class="img-fluid h-100 w-75" alt="" srcset="">
        </div>     
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>