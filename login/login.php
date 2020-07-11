<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" @click="navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div :class="navbarNavclass" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#" @click="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" @click="connexion" href="#">Connexion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" @click="inscriptions" href="#">inscription</a>
			</li>
    </ul>
  </div>
</nav>

