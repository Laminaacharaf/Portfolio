<?php include 'header.php'; ?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Mes Projets</h2>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    
    <!-- Projet 1 -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="assets/images/projet1.jpg" class="card-img-top" alt="Projet 1">
        <div class="card-body">
          <h5 class="card-title">Portfolio Personnel</h5>
          <p class="card-text">Un site web responsive pour présenter mon CV, mes compétences et mes projets GitHub.</p>
          <span class="badge bg-primary">HTML</span>
          <span class="badge bg-warning text-dark">CSS</span>
          <span class="badge bg-info text-dark">Bootstrap</span>
        </div>
        <div class="card-footer text-center">
          <a href="https://github.com/tonprofil/portfolio" class="btn btn-outline-dark btn-sm" target="_blank">GitHub</a>
          <a href="https://tonsiteportfolio.com" class="btn btn-outline-success btn-sm" target="_blank">Voir en ligne</a>
        </div>
      </div>
    </div>

    <!-- Projet 2 -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="assets/images/projet2.jpg" class="card-img-top" alt="Projet 2">
        <div class="card-body">
          <h5 class="card-title">Blog PHP</h5>
          <p class="card-text">Un blog dynamique codé en PHP avec formulaire de commentaire et gestion d’articles.</p>
          <span class="badge bg-primary">PHP</span>
          <span class="badge bg-secondary">MySQL</span>
          <span class="badge bg-warning text-dark">Bootstrap</span>
        </div>
        <div class="card-footer text-center">
          <a href="https://github.com/tonprofil/blog-php" class="btn btn-outline-dark btn-sm" target="_blank">GitHub</a>
          <a href="https://tonblogphp.com" class="btn btn-outline-success btn-sm" target="_blank">Voir en ligne</a>
        </div>
      </div>
    </div>

    <!-- Ajoute autant de projets que tu veux ci-dessous -->

  </div>
</div>

<?php include 'footer.php'; ?>
