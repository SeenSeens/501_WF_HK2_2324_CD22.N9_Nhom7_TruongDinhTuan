import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                /*'resources/backend/assets/js/bootstrap.bundle.min.js',
                'resources/backend/assets/js/pace.min.js',
                'resources/backend/assets/plugins/simplebar/js/simplebar.min.js',
                'resources/backend/assets/plugins/metismenu/js/metisMenu.min.js',
                'resources/backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js',
                'resources/backend/assets/plugins/chartjs/js/Chart.min.js',
                'resources/backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js',
                'resources/backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js',
                'resources/backend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js',
                'resources/backend/assets/plugins/sparkline-charts/jquery.sparkline.min.js',
                'resources/backend/assets/plugins/jquery-knob/excanvas.js',
                'resources/backend/assets/plugins/jquery-knob/jquery.knob.js',
                'resources/backend/assets/js/index.js',
                'resources/backend/assets/js/app.js',*/
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
    build: {
        chunkSizeWarningLimit: 5000, // Adjust the value based on your needs
    },
});
