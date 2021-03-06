@include("layouts._head")
  <body>

    @include("layouts.headerNavigation")

    <!-- Page Header -->
      <header class="masthead" style="background-image: url('{{ asset('img/home-bg-v2.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>LaravelBlog</h1>
              <hr class="hr">
              <span class="subheading">Цікавий блог про цікаве</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield("content")

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-12 mx-auto">
            <ul class="socialIcons">
              <li class="facebook">
                <a href="#">
                  <i class="fa fa-fw fa-facebook"></i>Facebook
                </a>
              </li> 
              <li class="twitter">
                <a href="#">
                  <i class="fa fa-fw fa-twitter"></i>Twitter
                </a>
              </li> 
              <li class="instagram">
                <a href="#">
                  <i class="fa fa-fw fa-instagram"></i>Instagram
                </a>
              </li> 
              <li class="pinterest">
                <a href="#">
                  <i class="fa fa-fw fa-pinterest-p"></i>Pinterest
                </a>
              </li> 
              <li class="vk">
                <a href="#">
                  <i class="fa fa-fw fa-vk"></i>VKontakte
                </a>
              </li> 
              <li class="tumblr">
                <a href="#">
                  <i class="fa fa-fw fa-tumblr"></i>Tumblr
                </a>
              </li> 
               <li class="linkedin">
                <a href="#">
                  <i class="fa fa-fw fa-linkedin"></i>Linkedid
                </a>
              </li> 
              <li class="google-plus">
                <a href="#">
                  <i class="fa fa-fw fa-google-plus"></i>Google+
                </a>
              </li> 
              <li class="yahoo">
                <a href="#">
                  <i class="fa fa-fw fa-yahoo"></i>Yahoo
                </a>
              </li>  
              <li class="skype">
                <a href="#">
                  <i class="fa fa-fw fa-skype"></i>Skype
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>
      @include("layouts._js")
  </body>

</html> 