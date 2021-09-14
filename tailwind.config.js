module.exports = {
    purge: {
        enable: true,
        content: [
            './resources/views/*.blade.php',
            './resources/views/**/*.blade.php',
            './resources/**/*.blade.php',
            './resources/**/*.js',
            './resources/js/**/*.js',
            './resources/js/*.js',
            './resources/**/*.vue',
            './resources/js/**/*.vue',
            './resources/js/*.vue'
        ]
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                'mtw-primary': '#005a80',
                'mtw-secondary': '#BDD251',
                'mtw-red': '#C65757',
                'mtw-stoneblue': '#005D72',
                'mtw-skyblue': '#80E8FF',
                'mtw-lightblue': '#C5E6F4',
                'mtw-darkgrey': '#575758',
                'mtw-lightgrey': '#E5E5E5',
                'mtw-text': '#394955',
            },
            fontFamily: {
                'basic': ['Inter'],
                // 'title': ['Oswald']
                'title': ['Inter']
            },
        },
    },
    variants: {
        extend: {
            display: ['group-hover'],
        },
    },
    plugins: [],
}
