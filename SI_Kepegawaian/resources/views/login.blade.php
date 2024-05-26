<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/StyleKhususLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>  
      <main>
      <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <form action="{{ route('postLogin') }}" method="post">
                        {{ csrf_field() }}
                        <h3 class="mb-5">Masuk</h3>
    
                        <div data-mdb-input-init class="form-outline mb-4">
                        <input type="string" id="typeEmailX-2" class="form-control form-control-lg" placeholder="ID Anggota" name="idAnggota"/>
                        </div>
    
                        <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" name="password"/>
                        </div>
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Masuk</button>
                    </form>


                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
          
        </div>
      </main>

    <footer>
        <p>Apotek Maggha Mulia &#169; 2024, Sistem Informasi Kepegawaian</p>
    </footer>
    
</body>
</html>