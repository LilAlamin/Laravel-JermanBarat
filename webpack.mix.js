const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.js(__dirname + '/resources/js/app.js', __dirname + '/public/js')
    .sass(__dirname + '/resources/css/app.scss', __dirname + '/public/css')
    .webpackConfig({
        plugins: [
            new BrowserSyncPlugin({
                proxy: 'http://localhost:8000',
                files: [
                    'app/**/*.php',
                    'resources/views/**/*.php',
                    'public/js/**/*.js',
                    'public/css/**/*.css'
                ],
                port: 8000,
                browser: 'firefox',
                open: true,
                reloadDelay: 0

            })
        ]
    });
