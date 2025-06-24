<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') | INFORMASI WISATA</title>
    <link rel="stylesheet" href="/bulma/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <b>INFORMASI WISATA</b>
                </a>
                
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarSIFIKOM">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarSIFIKOM" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">Beranda</a>
                    <a class="navbar-item" href="/profil">Profil</a>
                    <a class="navbar-item" href="/lokasi">Lokasi Wisata</a>
                    <a class="navbar-item" href="/destinasi">Destinasi</a>
                </div>
            </div>
        </nav>
        
        @yield('konten')
    </div>

    <script src="/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".navbar-burger").click(function(){
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");
            });
        });
    </script>
    
</body>
</html>
