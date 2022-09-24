<body id="body-pd">
    <div class="l-navbar bg-slate-800" id="nav-bar">
        <nav class="nav">
            <div class=""> <a href="#" class="nav_logo"> <img align="center" class="w-7 mb-0 mx-0" src="../images/BAUST.png"><div class="text-white font-bold">BAUST</div> </a>
                <div class="nav_list">
                    <a href="/register/home" class="nav_link" title="Home"> <i class='bx bx-grid-alt nav_icon text-white'></i> <span class="nav_name text-white">Home</span> </a>
                    <a href="/register/addemployees" class="nav_link" title="Add Employee"><i class='bx bx-user-plus nav_icon text-white'></i> <span class="nav_name text-white">Add New Employee</span> </a>
                    <a href="/register/profile" class="nav_link" title="Profile"> <i class='bx bx-user nav_icon text-white'></i> <span class="nav_name text-white">Profile</span> </a>
                    <a href="/register/view-students-info" class="nav_link" title="View Student Info"> <i class='bx bx-message-square-detail nav_icon text-white text-white'></i> <span class="nav_name text-white">Students</span> </a>
                    <a href="/register/search" class="nav_link" title="Search"> <i class='bx bx-search nav_icon text-white'></i> <span class="nav_name text-white">Search</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon text-white'></i> <span class="nav_name text-white">Files</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon text-white'></i> <span class="nav_name text-white">Stats</span> </a>
                </div>
            </div>
            <form action="{{ url('/logout') }}" method="post">
                @csrf
                <button type="submit" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name text-white">SignOut</span> </button>
            </form>
        </nav>
    </div>
    <!--Container Main start-->