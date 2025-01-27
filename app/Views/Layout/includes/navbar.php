<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="home">BookStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="/employee">Employees</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact Us</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <button class="btn btn-outline-light my-2 my-sm-0" type="button" onclick="window.location.href='<?= base_url('login') ?>'">Sign In</button>
      </li>
      <li class="nav-item">
        <button class="btn btn-light my-2 my-sm-0 ml-2" type="button" onclick="window.location.href='<?= base_url('signup') ?>'">Sign Up</button>
      </li>
    </ul>
  </div>
</nav>