<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdn.tailwindcss.com"></script>

<script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                // เพิ่ม custom colors หรือ configuration ตรงนี้
            }
        }
    }
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();
    });
</script>
