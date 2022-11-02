<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">   
        <title>{{ config('Alagang Pilipinas') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        @stack('css')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg position-fixed" style="background-color: #FFC552  ; width:100%; z-index:10" >
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home.home') }}">Alagang Pilipinas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('vethomepage.homepage') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vetmarketplace.marketplace') }}">Marketplace</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lost and Found
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('vetlostpet.vetlostpet') }}">Lost Pets</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('vetfoundpet.foundpet') }}">Found Pets</a></li>
              </ul>
            </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('vfilemanagement.vfilemanagement') }}">File Management</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle mr-3" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="false"
                    style="background-color:#FFC552; color:black;">
                    Account
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                    <li><a class="dropdown-item" href="{{ route('profile.profile') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('home.home') }}">Logout</a></li>

                </ul>
            </div>
            </ul>
          </div>
        </div>
        </nav>
        <div class="" style="padding:80px; background-color: black; height:100vh; overflow:auto; background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/golden-retriever-dog-royalty-free-image-505534037-1565105327.jpg);"  >
            @yield('content')
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/63556e83b0d6371309cb184d/1gg2rfd2k';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </body>
</html>