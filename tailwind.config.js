/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './src/**/*.html',
    './*.php',
  ],
  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1536px",
    },
    extend: {
      fontFamily: {
        sans: ["Poppins", "sans-serif"], // Default sans-serif font
        serif: ['"EB Garamond"', "serif"], // Default serif font
        mono: ["Courier New", "monospace"], // Custom monospace font
      },
      fontSize: {
        "badge": "0.6rem",
        "xs": "0.75rem",
        "sm": "0.875rem",
        "base": "1rem",
        "lg": "1.125rem",
        "xl": "1.25rem",
        "2xl": "1.5rem",
        "3xl": "1.875rem",
        "4xl": "2.25rem",
        "5xl": "3rem",
        "6xl": "4rem",
        "7xl": "5rem",
        "8xl": "6rem",
        "9xl": "7rem",
      },
      colors: {
        "cs-red-dark": "#570208",
        "cs-red-main": "#86171E",
        "cs-red-medium": "#BF0511",
        "cs-red-bright": "#FA4238",
        "cs-red-main-transp": "#F2E4E1",
        "cs-blue-main": "#113F59",
        "cs-blue-light": "#125A83",
        "cs-blue-main-transp": "#D8DEDB",
        "cs-grey": "#3F403F",
        "cs-paper": "#FEFBF7",
        "cs-paper-shade": "#FBF5EB",
        "cs-paper-dark": "#F5EDE0",
        "cs-period1-pri": "#00BABE",
        "cs-period1-sec": "#009194",
        "cs-period2-pri": "#860000",
        "cs-period2-sec": "#540000",
        "cs-period3-pri": "#DC0000",
        "cs-period3-sec": "#8E0000",
        "cs-period4-pri": "#E6BC7B",
        "cs-period4-sec": "#C58825",
        "cs-period5-pri": "#00A653",
        "cs-period5-sec": "#007A3D",
        "cs-period6-pri": "#75149C",
        "cs-period6-sec": "#4D0D67",
        "cs-period7-pri": "#000000",
        "cs-period7-sec": "#3B3838",
        "cs-period8-pri": "#5FAAFB",
        "cs-period8-sec": "#0677F4",
        "cs-period9-pri": "#FFF944",
        "cs-period9-sec": "#B4B000",
        "cs-period10-pri": "#EA5F00",
        "cs-period10-sec": "#AC4600",
        "cs-period11-pri": "#DAA600",
        "cs-period11-sec": "#B08600",
        "cs-period12-pri": "#FFFFFF",
        "cs-period12-sec": "#D9D9D9",
      },
    },
  },
  plugins: [],
  variants: {
    extend: {
      translate: ['group-hover', 'hover'],
      maxWidth: ['responsive', 'hover', 'group-hover', 'focus'],
    },
  },
}

