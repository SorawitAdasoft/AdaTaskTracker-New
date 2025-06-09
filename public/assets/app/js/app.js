function toggleSidebar() {
    // Implement sidebar toggle logic
    console.log('Sidebar toggle clicked');
    // Example: document.querySelector('.sidebar').classList.toggle('hidden');
}

function toggleTheme() {
    // Implement theme toggle logic
    const currentTheme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    // Update the class on the html element
    document.documentElement.classList.toggle('dark');

    // Store the preference (you might want to send this to the server)
    localStorage.setItem('theme', newTheme);

    // You can also send this to the server via AJAX if needed
    // fetch('/set-theme', {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json',
    //         // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    //     },
    //     body: JSON.stringify({
    //         theme: newTheme
    //     })
    // });
}

// Check for saved theme preference
if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia(
    '(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

document.addEventListener('DOMContentLoaded', function () {
    lucide.createIcons();

    // Initialize sidebar state from localStorage
    const savedState = localStorage.getItem('sidebarOpen');
    if (savedState !== null) {
        Alpine.store('sidebarOpen', savedState === 'true');
    }

    // Watch for changes and save to localStorage
    Alpine.effect(() => {
        const isOpen = Alpine.store('sidebarOpen');
        localStorage.setItem('sidebarOpen', isOpen);
    });
});