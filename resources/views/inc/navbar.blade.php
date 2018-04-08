<nav class="navbar navbar-inverse">
    <div class="container">
    	 <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{config('app.name', 'Laravel FS')}}
            </a>
        </div>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="nav navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/posts">Blog</a>
          </li>
        </ul>
      </div>
  </div>
</nav>