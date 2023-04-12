module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  plugins: [require("@tailwindcss/typography")],
  theme:{
    screens: {
        'mobile': {'max': '821px'},
         // => @media (max-width: 821px) { ... }
        'tablet': {'max': '1023px'},
        // => @media (max-width: 1023px) { ... }
        'laptop':{'max':'1280px'},
        // => @media (max-width: 1280px) { ... }

        'desktop': {'max': '1920px'},
        // => @media (max-width: 1920px) { ... }

       /*  'laptop': {'max': '1280px'},
        // => @media (max-width: 1280px) { ... } */
  
        // 'desktop': {'max': '1535px'},
        // => @media (max-width: 1535px) { ... },
       

    },
    extend:{
      fontFamily:{
        'raleway':['raleway', 'sans-serif'],
        'raleway-bold':['raleway-bold', 'sans-serif'],
        'prata':['prata']
      }
    }
  }
}
