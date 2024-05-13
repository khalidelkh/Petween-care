/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./**/*.js"],
  theme: {
    extend: {
      colors: {
        tertialy: "#fff",
        darkgray: "#999",
        "pet-primary": "#f99d0b",
        seashell: "#faf6f1",
        secondary: "#385170",
        gray: {
          100: "#7f7f80",
          200: "#787878",
          300: "#222",
          400: "#050c15",
        },
        linen: "#ece7e2",
        darkslategray: {
          100: "#203752",
          200: "rgba(56, 81, 112, 0.61)",
        },
        // whitesmoke: "#f4f5f7",
        whitesmoke: {
          100: "#f4f5f7",
          200: "#f1f3f5",
        },
        black: "#000",
        orange: "#f99f10",
      },
      spacing: {},
      fontFamily: {
        "dm-sans": "'DM Sans'",
        ubuntu: "Ubuntu",
        lato: "Lato",
        "myriad-pro": "'Myriad Pro'",
        quicksand: "Quicksand",
      },
      borderRadius: {
        "81xl": "100px",
        xl: "20px",
        "3xs": "10px",
      },
    },
    fontSize: {
      base: "16px",
      xl: "20px",
      mini: "15px",
      "3xl": "22px",
      sm: "14px",
      "7xl": "26px",
      "31xl": "50px",
      "41xl": "60px",
      lg: "18px",
      "2xl-5": "21.5px",
      "53xl-1": "72.1px",
      "base-2": "16.2px",
      "5xl": "24px",
      xs: "12px",
      "11xl": "30px",
      "2xl": "21px",
      "16xl-2": "35.2px",
      inherit: "inherit",
    },
  },
  corePlugins: {
    preflight: false,
  },
};
