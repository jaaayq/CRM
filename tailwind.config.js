const colors = require('@tailwindcss/ui/colors');
const { blue } = require('@tailwindcss/ui/colors');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {

        colors:{
            gray:{
              1000: '#454d55',
              1100: '#343a40',
              1200: '#C7C7C7',
              1300: '#ebebeb',
             
            },
        
      
            blue:{
              1000: '#48c4d3',
            },
        },
       
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
