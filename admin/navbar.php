 <ul class="navbar-nav  sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admindashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Future-Force<span class="text-danger">.</span></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admindashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Students
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Batch</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="colacolor py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Batch Operations:</h6>
                        <a class="collapse-item text-white" href="createbatch.php">Create Batch</a>
                        <a class="collapse-item text-white" href="addstudent.php">Add Student to a Batch</a>
                        <a class="collapse-item text-white  text-white" href="managebatch.php">Manage Batch</a>
                        <a class="collapse-item text-white  text-white" href="deletebatch.php">Delete Batch</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fas fa-user"></i>
                    <span>Students</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="colacolor py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Student Operations:</h6>
                        <a class="collapse-item text-white" href="addstudent1.php">Add Student</a>
                         <a class="collapse-item text-white" href="view-job-application.php">Student Applications</span></a>
                       
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Companies
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Jobs</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="colacolor py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Job Operations</h6>
                        <a class="collapse-item text-white" href="viewjobs.php">View Jobs</a>
                        <a class="collapse-item text-white" href="managejobs.php">Manage Jobs</a>
                        
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsecompanies" aria-expanded="true"
                    aria-controls="collapsecompanies">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Companies</span>
                </a>
                <div id="collapsecompanies" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="colacolor py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Companies Operations</h6>
                        <a class="collapse-item text-white" href="viewcompanies.php">View Companies</a>
                        <a class="collapse-item text-white" href="managecom.php">Manage Companies</a>
                        
                </div>
            </li>
            <!-- Nav Item - Charts -->
           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>