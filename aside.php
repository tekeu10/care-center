 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="accueilmed.php">
      <i class="ri-home-heart-fill"></i>
      <span>Acceuil</span>
    </a>
  </li>  </br> <!-- End Dashboard Nav --> 
  

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="ri-health-book-fill"></i><span>Mes Rendez-Vous</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-data.php">
          <i class="bi bi-circle"></i><span>Rendez-vous pris</span>
        </a>
      </li>
      <li>
        <a href="rdvtab.php">
          <i class="bi bi-circle"></i><span>En attente</span>
        </a>
      </li>
    </ul>
  </li><br><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="tables-general.php">
      <i class="ri-calendar-check-fill"></i>
      <span>Agenda</span>
    </a>
  </li><br><!-- End Login Page Nav -->
  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="contM.php">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Page Nav -->
  

 
  <li class="nav-item">
    <a class="nav-link collapsed" href="logout.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Se déconnecter</span>
    </a>
  </li><!-- End Login Page Nav -->
</ul>

</aside><!-- End Sidebar-->