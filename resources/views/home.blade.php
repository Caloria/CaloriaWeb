@include('inc.header')
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Just because you’re not sick doesn’t mean you’re healthy</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5"></p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We are here for help you to choose the best food according by how much calories you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">At the present time many people don't know what foods are suitable for daily calorie needs. The daily calories needed by humans is at least 2200 for women and 2500 for man, excess calories or lack of calories in the body will lead to imbalance</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="/content">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">We Must to Know</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Healty Eating</h3>
              <p class="text-muted mb-0">Healthy eating means eating a variety of foods that give you the nutrients you need to maintain your health, feel good, and have energy. These nutrients include protein, carbohydrates, fat, water, vitamins, and minerals.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Food Categories</h3>
              <p class="text-muted mb-0">The new food guide “pyramid” is actually designed to look like a plate, with the intent that the image will be easier to relate to for most people. Like the food pyramid, the plate contains six major food groups: fruits, vegetables, protein, dairy, grains and oils.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Calories</h3>
              <p class="text-muted mb-0">A calorie is a unit of energy. In nutrition, calories refer to the energy people get from the food and drink they consume, and the energy they use in physical activity.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Healty Life</h3>
              <p class="text-muted mb-0">"Healthy living" to most people means both physical and mental health are in balance or functioning well together in a person. In many instances, physical and mental health are closely linked. Consequently, some of the tips will include suggestions for emotional and mental "healthy living."</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ url('/') }}/img/1.jpg">
              <img class="img-fluid" src="{{ url('/') }}/img/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Food
                  </div>
                  <div class="project-name">
                    Pyramid
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ url('/') }}/img/2.jpg">
              <img class="img-fluid" src="{{ url('/') }}/img/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Fruit
                  </div>
                  <div class="project-name">
                    Berry
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ url('/') }}/img/3.jpg">
              <img class="img-fluid" src="{{ url('/') }}/img/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Food
                  </div>
                  <div class="project-name">
                    Vegetables
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ url('/') }}/img/4.jpg">
              <img class="img-fluid" src="{{ url('/') }}/img/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Food
                  </div>
                  <div class="project-name">
                    Meat
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ url('/') }}/img/5.jpg">
              <img class="img-fluid" src="{{ url('/') }}/img/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Food
                  </div>
                  <div class="project-name">
                    Vegetables
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ url('/') }}/img/6.jpg">
              <img class="img-fluid" src="{{ url('/') }}/img/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Food
                  </div>
                  <div class="project-name">
                    Fruit
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
