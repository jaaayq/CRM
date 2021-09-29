const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        

        colors: {
            gray:{
              1000: '#454D55',
            }
        },

        fontFamily: {
            PT: ['PT Sans Narrow'],
            sans: ['Nunito'],
            RO: ['Inter']
        
    },
},
        
    


     

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
