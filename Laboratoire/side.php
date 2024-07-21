<!-- <div class="container-fluid p-0 d-flex h-100"> -->
        <div id="bdSidebar" 
             class="d-flex flex-column 
                    flex-shrink-0 
                    p-3 bg-dark
                    text-white offcanvas-md offcanvas-start w-auto" style="min-height: 610px; ">
            <a href="#" 
               class="navbar-brand">
            </a><hr>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="./accueil.php" class="page-link d-flex mx-4 mt-3 active">
                        <i class="fa-solid fa-table fa-2x"></i>
                        <p class="h4 mx-2"> Bord</p>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="./patient.php" class="page-link d-flex mx-4 my-3">
                    <i class="fa-regular fa-user fa-2x"></i>
                    <p class="h4 mx-2">Patients</p>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="./FamilleExamen.php" class=" page-link my-2 d-flex mx-4">
                        <i class="fa-solid fa-book fa-2x"></i>
                        <p class="h4 mx-2"> Famille d'examens</p>
                    </a>
                </li>
               
                <li class="nav-item my-1 mx-4">
                <a href="./Examen.php" class=" page-link my-2 d-flex ">
                        <i class="fa-solid fa-graduation-cap fa-2x"></i>
                        <p class="h4 mx-2"> Examens</p>
                    </a>
                </li>
                <li class="nav-item my-1 mx-4">
                <a href="./resultat.php" class=" page-link my-2 d-flex ">
                        <i class="fa-solid fa-newspaper fa-2x"></i>
                        <p class="h4 mx-2"> Resultats</p>
                    </a>
                </li>

                <li class="sidebar-item  nav-item mb-1 mx-4">
                    <a href="#" 
                       class="sidebar-link collapsed page-link" 
                       data-bs-toggle="collapse"
                       data-bs-target="#settings"
                       aria-expanded="false"
                       aria-controls="settings">
                        <i class="fas fa-cog pe-2 fa-2x"></i>
                        <span class="topic h4">Paramètres </span>
                    </a>
                    <ul id="settings" 
                        class="sidebar-dropdown list-unstyled collapse" 
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link page-link my-3">
                                <i class="fas fa-sign-in-alt pe-2 fa-2x"></i>
                                <span class="topic h5">Se deconnecter </span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fas fa-user-plus pe-2"></i>
                                <span class="topic">Register</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fas fa-sign-out-alt pe-2"></i>
                                <span class="topic">Log Out</span>
                            </a>
                        </li> -->
                    </ul>
                </li>
            </ul>
            <hr>
            <div class="d-flex">

                <i class="fa-solid fa-book  me-2"></i>
                <span>
                    <h6 class="mt-1 mb-0">
                          Geeks for Geeks Learning Portal
                      </h6>
                </span>
            </div>
        
        </div>
            <a href="#" class="text-dark btn w-25" 
                   data-bs-toggle="offcanvas"
                   data-bs-target="#bdSidebar">
                    <i class="fa-solid fa-bars"></i>
                </a>
        <!-- // fin side bar -->
        <!-- <div class="bg-light flex-fill">
            <div class="p-2 d-md-none d-flex text-white bg-success">
                <a href="#" class="text-white" 
                   data-bs-toggle="offcanvas"
                   data-bs-target="#bdSidebar">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <span class="ms-3">GFG Portal</span>
            </div>
            <div class="p-4">
                <nav style="--bs-breadcrumb-divider:'>';font-size:14px">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <i class="fa-solid fa-house"></i>
                        </li>
                        <li class="breadcrumb-item">Learning Content</li>
                        <li class="breadcrumb-item">Next Page</li>
                    </ol>
                </nav>

                <hr>
                <div class="row">
                    <div class="col">
                        <p>Page content goes here</p>
                    </div>
                </div>
            </div>

        </div> -->
    <!-- </div> -->
