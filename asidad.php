 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="indadmin.php">
      <i class="ri-home-heart-fill"></i>
      <span>Acceuil</span>
    </a>
  </li>  </br> <!-- End Dashboard Nav --> 

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="ri-user-3-fill"></i><span>Médecin</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="lmedadmin.php">
          <i class="bi bi-circle"></i><span>Liste Médecin</span>
        </a>
      </li>
      <li>
        <a href="specialiste.php">
          <i class="bi bi-circle"></i><span>Spécialité</span>
        </a>
      </li>
      <li>
        <a href="ville.php">
          <i class="bi bi-circle"></i><span>Ville</span>
        </a>
      </li>
    </ul>
  </li><br><!-- End Tables Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="ri-user-3-line"></i><span>Patient</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="lpadmin.php">
          <i class="bi bi-circle"></i><span>Liste Patient</span>
        </a>
      </li>
   
    </ul>
  </li><br><!-- End Tables Nav -->

 

  <li class="nav-item">
    <a class="nav-link collapsed" href="profiladmin.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  
  

 
  <li class="nav-item">
    <a class="nav-link collapsed" href="logout.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Se déconnecter</span>
    </a>
  </li><!-- End Login Page Nav -->
</ul>

</aside><!-- End Sidebar-->