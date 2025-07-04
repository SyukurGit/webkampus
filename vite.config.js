// import { defineConfig } from 'vite'
// import laravel from 'laravel-vite-plugin'
// import tailwindcss from '@tailwindcss/vite'

// export default defineConfig({
//   plugins: [
//     tailwindcss(),
//     laravel({ input: ['resources/css/app.css', 'resources/js/app.js'], refresh: true }),
//   ],
// })



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
//     server: {
//         host: '0.0.0.0',
//         hmr: {
//             host: '535b-116-206-32-210.ngrok-free.app'
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
