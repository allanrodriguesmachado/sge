import './bootstrap';
import { initFlowbite } from 'flowbite';

document.addEventListener('DOMContentLoaded', () => {
    initFlowbite();

    const themeToggleBtn = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');

    if (!themeToggleBtn || !darkIcon || !lightIcon) {
        return;
    }

    const syncThemeIcons = () => {
        const isDark = document.documentElement.classList.contains('dark');
        darkIcon.classList.toggle('hidden', isDark);
        lightIcon.classList.toggle('hidden', !isDark);
    };

    syncThemeIcons();

    themeToggleBtn.addEventListener('click', () => {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
        syncThemeIcons();
    });
});
