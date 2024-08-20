// postcss.config.js
export default {
    plugins: {
        tailwindcss: {
            config: './tailwind.config.js',
            configFile: './tailwind.config.js',
            content: [
                './resources/**/*.blade.php',
                './resources/**/*.js',
                './resources/**/*.vue',
            ],
        },
        autoprefixer: {},
    },
};
