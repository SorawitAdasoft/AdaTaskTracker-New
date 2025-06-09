<header
    class="h-16 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 flex items-center px-4 sticky top-0 z-30">
    <button onclick="toggleSidebar()"
        class="mr-4 md:hidden text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
        aria-label="Toggle sidebar">
        <i data-lucide="menu" width="24" height="24"></i>
    </button>

    <div class="text-primary-600 dark:text-primary-400 font-bold text-xl font-heading">
        Ada Information Management (AIM)
    </div>

    <div class="flex-1"></div>

    <div class="flex items-center ml-4 space-x-4">
        <button class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
            aria-label="Notifications">
            <i data-lucide="bell" width="20" height="20"></i>
        </button>

        <button class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
            onclick="toggleTheme()" aria-label="Switch to {{ $theme === 'light' ? 'dark' : 'light' }} mode">
            @if ($theme === 'light')
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M12 2v2"></path>
                    <path d="M12 20v2"></path>
                    <path d="m4.93 4.93 1.41 1.41"></path>
                    <path d="m17.66 17.66 1.41 1.41"></path>
                    <path d="M2 12h2"></path>
                    <path d="M20 12h2"></path>
                    <path d="m6.34 17.66-1.41 1.41"></path>
                    <path d="m19.07 4.93-1.41 1.41"></path>
                </svg>
            @endif
        </button>

        <div class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
            <i data-lucide="user" width="16" height="16" class="text-gray-500 dark:text-gray-400"></i>
        </div>
    </div>
</header>
