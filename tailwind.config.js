/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors : {
            primary : {
                DEFAULT : "#292F36",
                hover : "#343E4A"
            },
            secondary : "#4D5053",
            accent:{
                DEFAULT : "#CDA274",
                secondary : "#F4F0ec",
                hover : "#B88C5D"
            }
        }
    },
    container: {
        padding: {
            DEFAULT: '15px'
        },
    },
    screens : {
        sm : "640px",
        md : "768px",
        lg : "960px",
        xl : "1200px",
    },
    fontFamily : {
        primary : "DM Serif Display",
        secondary : "Jost"
    },
    backgroundImage : {
        hero : "url(/public/images/hero/bg.jpg)",
        grid : "url(/public/images/grid.png)"
    }
  },
  plugins: [],
}

