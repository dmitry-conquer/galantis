module.exports = {
  content: ["./src/scss/**/*.scss", "./src/**/*.html"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1212px",
    },
    extend: {
      fontSize: {
        sm: "0.8rem", // 12.5
        base: "1rem", // 16
        xl: "1.25rem", // 20
        "2xl": "1.563rem", // 25
        "3xl": "1.875rem", // 30
        "4xl": "2.5rem", // 40
        "5xl": "3.125rem", // 50
        "6xl": "3.438rem", // 55
        "7xl": "4.375rem", // 70
      },
      colors: {
        grayLight: "#303030",
        gray: "#191919",
        grayDark: "#141414",
      },
    },
    fontFamily: {
      contax: ["Contax", "sans-serif"],
      poppins: ["Poppins", "sans-serif"],
    },
  },
  future: {
    // hoverOnlyWhenSupported: true,
  },
};
