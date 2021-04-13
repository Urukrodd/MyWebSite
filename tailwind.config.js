module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        height: {
          'line': '400px'
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
