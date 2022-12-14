/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#786047",
        bg2secondary: "#F5AC5D",
        secondary: "#000107"
      },
      animation: {
        'bounce-slow': 'bounce 1500ms linear infinite',
        opacity_anim: 'opacity 1000ms linear',
        opacity_Out: 'opacity_Out 1000ms linear',
       
      },
      keyframes: {
        'opacity': {
          '0%': { opacity:0 },
          '100%': {opacity:100}
        },
        'opacity_Out': {
          '0%': { opacity:100 },
          '100%': {opacity:0}
        },
      
      },

      backgroundImage: {
        segitiga: "url('/gambar/TemplateTI/segitiga.png')",
        frame: "url('/gambar/TemplateTI/frame.png')",
        digital_frame: "url('/gambar/TemplateTI/frame-lingkaran.png')",
      },

      
      fontFamily: {
        mono: ['Roboto Condensed', 'san-serif'],
        yellowtail: ['Yellowtail', 'cursive'],
        cairo: ['Cairo', 'sans-serif'],
      }
    }
  },
  plugins: [],
}
