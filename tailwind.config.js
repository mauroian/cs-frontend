/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './src/**/*.html',
    './*.php',
  ],
  theme: {
    screens: {
      xsm: "400px",
      sm: "480px",
      md: "920px",  /* standard would be "768px" */
      lg: "1024px",
      lg2: "1150px", /* used only for controlling when menu switches. If I want to do so, I only need to act here. Everything else will adapt automatically. This is true and tested for lg2 > lg. If I want to switch menu below lg, not sure what will happen (but I see no reason for such a case) */
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
        "cs-red-light-1": "#F7EFED",
        "cs-red-light-2": "#F2E4E1",
        "cs-red-light-3": "#E4CECA",
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
        "cs-breadcrumb": "#676767",
        "cs-bronze": "#A97142",
        "cs-bronze-dark": "#83552E",
        "cs-silver": "#C4C4C4",
        "cs-silver-light": "#FEFBF7",
        "cs-gold": "#B48900",
        "cs-gold-light": "#D3A100",
      },
      keyframes: {
        'cs-slide-in-down': {
          '0%': {visibility: 'visible', transform: 'translate3d(0, -100%, 0)'},
          '100%': {transform: 'translate3d(0, 0, 0)'},
        },
      },
      animation: {
        "cs-slide-in-down": "cs-slide-in-down 0.25s linear 1 ",
      },
      boxShadow: { /* needed as the shadow I wanted was not provided by Tailwind */
        'cs-all-around': '0 0 10px 7px rgba(0, 0, 0, 0.1)',
      }
    },
  },
  /* 'safelist' makes sure that the class is generated even if it is not found in any HTML files (in this case I need it as it is needed for Javascript) */
  safelist: [
    "ml-80",
    "md:ml-80",
    "grid-cols-1",
    "grid-cols-2"
  ],
  plugins: [require('tailwindcss-motion')],
  variants: {
    extend: {
      translate: ['group-hover', 'hover'],
      maxWidth: ['responsive', 'hover', 'group-hover', 'focus'],
    },
  },
}

