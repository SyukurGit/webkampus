


import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        
    ],
});



// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//     ],
//     // --- BLOK INI WAJIB ADA UNTUK NGROK ---
//     server: {
//         host: '0.0.0.0',
//         hmr: {
//             host: '43ae-103-187.ngrok-free.app' // <<< GANTI DENGAN URL NGROK ANDA
//         }
//     }
// });




























// import { defineConfig } from 'vite'
// import laravel from 'laravel-vite-plugin'
// import tailwindcss from '@tailwindcss/vite'

// export default defineConfig({
//   server: {
//     host: '0.0.0.0', // biar bisa diakses dari IP manapun
//     port: 5173,      // default Vite port
//     hmr: {
//       host: '192.168.154.223', // IP lokal kamu
//     },
//   },
//   plugins: [
//     tailwindcss(),
//     laravel({
//       input: ['resources/css/app.css', 'resources/js/app.js'],
//       refresh: true,
//     }),
//   ],
// })
