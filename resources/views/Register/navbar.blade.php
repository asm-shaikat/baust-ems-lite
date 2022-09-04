<body id="body-pd">
    
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BAUST</span> </a>
                <div class="nav_list">
                    <a href="/register/addemployees" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Add New Employee</span> </a>
                    <a href="/register/profile" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>
                </div>
            </div>
            <form action="{{ url('/logout') }}" method="post">
                @csrf
                <button type="submit" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </button>
            </form>
        </nav>
    </div>
    <!--Container Main start-->