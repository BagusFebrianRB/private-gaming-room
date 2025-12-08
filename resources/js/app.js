import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import AOS
import AOS from 'aos';
import 'aos/dist/aos.css';

// Initialize AOS
AOS.init({
    duration: 1000,        // Durasi animasi (ms)
    easing: 'ease-in-out', // Easing function
    once: true,            // Animasi cuma jalan sekali
    offset: 100,           // Offset dari trigger point (px)
    delay: 0,              // Delay sebelum animasi mulai
});
