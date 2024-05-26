<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <header id="first">
        <nav>
          <ul>
            <li>
              <a href="/home">Home</a>
            </li>
            <li> 
              <a href="/about">About</a>
            </li>
            <li>
              <a href="/contact">Contact</a>
            </li>
            <li>
              <a href="/register">Register</a>
            </li>
          </ul>
        </nav>
      </header>
  
      <main>
        <div id="Content">
          @yield('content')
          
        </div>
      </main>

    <footer>
        <p>Apotek Maggha Mulia &#169; 2024, Sistem Informasi Kepegawaian</p>
    </footer>
    
</body>
<script>
    document.addEventListener('scroll', () =>{
        const header = document.querySelector('header');

        if (window.scrollY > 0){
            header.classList.add('scrolled');
        }
        else{
            header.classList.remove('scrolled');
        }
    })
</script>
</html>