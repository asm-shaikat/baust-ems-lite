<div class="l-navbar flex" id="nav-bar">
<div class="flex flex-col w-64 h-screen py-8 bg-dark border-r dark:bg-gray-900 dark:border-gray-700">
    <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white"><img class="h-10 mb-4 mx-auto" src="/images/InstituteLogoColorFull.png" alt="BAUST_Logo"></h2>
    <div class="flex flex-col items-center mt-6 -mx-2">
        <img class="object-cover w-24 h-24 mx-2 rounded-full" src="/images/profile-avatar.jpg" alt="avatar">
        <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">{{ $data1[0]->name }}</h4>
        <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400 hover:underline">{{ $data1[0]->email }}</p>
    </div>
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="/student/show-profile">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Profile</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="/student/show-result">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Result</span>
            </a>

            <form action="{{ url('/logout') }}" method="post">
                @csrf
                <button type="submit" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"> 
                <svg class="w-5 h-5 text-red-500"  fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                </svg>
                <span class="mx-4 font-medium">SignOut</span> 
                </button>
                
            </form>
        </nav>
    </div>
</div>