
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Caloria</title>
    <link rel="stylesheet" href="/css/bootstrapContent.css">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="{{url('js/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="{{'/'}}">Caloria</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{'/'}}">Home</a>
          </li>
        </ul>
      </div>
    </nav>

    @include('inc.form')
    <br>
    <section id="contact" class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">What are you waiting for!</h2>
            <hr class="my-4">
            <p class="mb-5">“If you have health, you probably will be happy, and if you have health and happiness, you have the wealth you need, even if it is not all you want.” – Elbert Hubbard</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>Caloria 2018</p>
          </div>
          <br>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="/">&copy; theme StartBootstrap</a>
            </p>
          </div>
        </div>
      </div>
    </section>
</html>
