<div class="navbar bg-cyan-500 -mt-16 -ml-24 w-auto">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl text-white" href="{{ url('/recruiter/home') }}">Profile</a>
    </div>
    <div class="flex-none gap-2">
        <div class="form-control bg-slate-100">
            <input type="text" placeholder="Search" class="input input-bordered bg-slate-100" />
        </div>
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full ">
                    <img src="https://placeimg.com/80/80/people" />
                </div>
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-cyan-500 rounded-box w-52">
                <li>
                    <a class="justify-between text-white" href="{{ url('/recruiter/home') }}">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a class="text-white" href="/recruiter/add-student">Add Student</a></li>
                <li><a class="text-white" href="/recruiter/update-Students-info" >Update Students Info</a></li>
                <form action="{{ url('/logout') }}" method="post">
                    @csrf
                    <button type="submit"><li><a class="text-white">Logout</a></li></button>
                </form>
            </ul>
        </div>
    </div>
</div>