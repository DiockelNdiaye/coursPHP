  <!-- Sidebar -->
  <nav class="sidebar">
  <ul class="navbar-nav me-auto mb-2 mb-md-0 fs-5">
    <li class="nav-item d-flex align-items-center gap-2 text-white">
      <i class="ri-dashboard-fill"></i>
      <a class="nav-link fwbold <?php if($page === 'index') : ?> active <?php endif;?>" aria-current="page" href="">Dashboard</a>
    </li>
    <li class="nav-item d-flex align-items-center gap-2 text-white">
      <i class="ri-phone-fill fs-4"></i>
      <a class="nav-link fwbold <?php if($page === 'contact') : ?> active <?php endif; ?>" href="">Nous Contacter</a>
    </li>
    <li class="nav-item d-flex align-items-center gap-2 text-white">
      <i class="ri-user-add-fill"></i>
      <a class="nav-link fwbold <?php if($page === 'users') : ?> active <?php endif; ?>" href="">Ajouter Utilisateur</a>
    </li>
    <li class="nav-item d-flex align-items-center gap-2 text-white">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
      </svg>
      <a class="nav-link fwbold <?php if($page === 'listeUsers') : ?> active <?php endif; ?>" href="">Liste Utilisateur</a>
    </li>
    <li class="nav-item d-flex align-items-center gap-2 text-white position-absolute bottom-0 start-0">
      <i class="ri-logout-circle-r-line fs-4"></i>
      <a class="nav-link fwbold text-white" href="/formationPhp/logout.php">Déconnexion</a>
    </li>
  </ul>
</nav>
