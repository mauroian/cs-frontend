/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './*.php',
    './*.html',
        './src/**/*.php',
    './src/**/*.html',
    './components/*.php',
    './components/*.html'
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
        "2xs": "0.65rem",
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
        "cs-red-shade": "#A3050F",
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
        "cs-period1-third": "#18D2D6",
        "cs-period2-pri": "#860000",
        "cs-period2-sec": "#540000",
        "cs-period2-third": "#A60101",
        "cs-period3-pri": "#DC0000",
        "cs-period3-sec": "#8E0000",
        "cs-period3-third": "#FF3636",
        "cs-period4-pri": "#E6BC7B",
        "cs-period4-sec": "#C58825",
        "cs-period4-third": "#F6CC8B",
        "cs-period5-pri": "#00A653",
        "cs-period5-sec": "#007A3D",
        "cs-period5-third": "#17BD6A",
        "cs-period6-pri": "#75149C",
        "cs-period6-sec": "#4D0D67",
        "cs-period6-third": "#9837BF",
        "cs-period7-pri": "#000000",
        "cs-period7-sec": "#3B3838",
        "cs-period7-third": "#3B3838",
        "cs-period8-pri": "#5FAAFB",
        "cs-period8-sec": "#0677F4",
        "cs-period8-third": "#75C0FF",
        "cs-period9-pri": "#FFF944",
        "cs-period9-sec": "#B4B000",
        "cs-period9-third": "#DDD948",
        "cs-period10-pri": "#EA5F00",
        "cs-period10-sec": "#AC4600",
        "cs-period10-third": "#FF9132",
        "cs-period11-pri": "#DAA600",
        "cs-period11-sec": "#B08600",
        "cs-period11-third": "#EEBA14",
        "cs-period12-pri": "#FFFFFF",
        "cs-period12-sec": "#D9D9D9",
        "cs-period12-third": "#D9D9D9",
        "cs-breadcrumb": "#676767",
        "cs-bronze": "#A97142",
        "cs-bronze-dark": "#83552E",
        "cs-silver": "#C4C4C4",
        "cs-silver-light": "#FEFBF7",
        "cs-gold": "#B48900",
        "cs-gold-light": "#D3A100",
        "cs-mass-section1-pri": "#75149C",
        "cs-mass-section1-sec": "#45105E",
        "cs-mass-section1-pri-subsection": "",
        "cs-mass-section1-moment-text-bg": "#D4BFDC",
        "cs-mass-section1-moment-number-bg": "#D4BFDC",
        "cs-mass-section1-title-font": "#FFFFFF",
        "cs-mass-section1-moment-text-font": "#45105E",
        "cs-mass-section1-moment-number-font": "#FFFFFF",
        "cs-mass-section1-card-bg": "#ECE5EF",
        "cs-mass-section2-pri": "#069851",
        "cs-mass-section2-sec": "#00592E",
        "cs-mass-section2-pri-subsection": "",
        "cs-mass-section2-moment-text-bg": "#C6D9D0",
        "cs-mass-section2-moment-number-bg": "#40AB77",
        "cs-mass-section2-title-font": "#FFFFFF",
        "cs-mass-section2-moment-text-font": "#00592E",
        "cs-mass-section2-moment-number-font": "#FFFFFF",
        "cs-mass-section2-card-bg": "#E4EFEA",
        "cs-mass-section3-pri": "#B90000",
        "cs-mass-section3-sec": "#980000",
        "cs-mass-section3-pri-subsection": "#E09191",
        "cs-mass-section3-moment-text-bg": "#EBCDCD",
        "cs-mass-section3-moment-number-bg": "#C83E3E",
        "cs-mass-section3-title-font": "#FFFFFF",
        "cs-mass-section3-moment-text-font": "#980000",
        "cs-mass-section3-moment-number-font": "#FFFFFF",
        "cs-mass-section3-card-bg": "#F7EAE6",
        "cs-mass-section4-pri": "#FFE600",
        "cs-mass-section4-sec": "#CAB600",
        "cs-mass-section4-pri-subsection": "",
        "cs-mass-section4-moment-text-bg": "#F6F4E2",
        "cs-mass-section4-moment-number-bg": "#FFE600",
        "cs-mass-section4-title-font": "#754100",
        "cs-mass-section4-moment-text-font": "#754100",
        "cs-mass-section4-moment-number-font": "#754100",
        "cs-mass-section4-card-bg": "#F6F4E2",
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
        'cs-bible-timeline': '0 0 10px 7px rgba(0, 0, 0, 0.15)',
        'cs-bible-timeline-cards': '0 0 10px 7px rgba(0, 0, 0, 0.30)',
      }
    },
  },
  /* 'safelist' makes sure that the class is generated even if it is not found in any HTML files (in this case I need it as it is needed for Javascript) */
  safelist: [
    "ml-80",
    "md:ml-80",
    "grid-cols-1",
    "grid-cols-2",
    "bg-cs-period1-third",
    "bg-cs-period2-third",
    "bg-cs-period3-third",
    "bg-cs-period4-third",
    "bg-cs-period5-third",
    "bg-cs-period6-third",
    "bg-cs-period7-third",
    "bg-cs-period8-third",
    "bg-cs-period9-third",
    "bg-cs-period10-third",
    "bg-cs-period11-third",
    "bg-cs-period12-third",
    "shadow-cs-bible-timeline",
    "cs-mass-tooltip-chips",
    "bg-cs-mass-section1-pri",
    "border-cs-mass-section1-sec",
    "bg-cs-mass-section1-sec",
    "ring-cs-mass-section1-sec",
    "bg-cs-mass-section1-pri-subsection",
    "bg-cs-mass-section1-moment-text-bg",
    "bg-cs-mass-section1-moment-number-bg",
    "text-cs-mass-section1-title-font",
    "text-cs-mass-section1-moment-text-font",
    "text-cs-mass-section1-moment-number-font",
    "bg-cs-mass-section1-card-bg",
    "bg-cs-mass-section2-pri",
    "ring-cs-mass-section2-sec",
    "border-cs-mass-section2-sec",
    "bg-cs-mass-section2-sec",
    "bg-cs-mass-section2-pri-subsection",
    "bg-cs-mass-section2-moment-text-bg",
    "bg-cs-mass-section2-moment-number-bg",
    "text-cs-mass-section2-title-font",
    "text-cs-mass-section2-moment-text-font",
    "text-cs-mass-section2-moment-number-font",
    "bg-cs-mass-section2-card-bg",
    "bg-cs-mass-section3-pri",
    "ring-cs-mass-section3-sec",
    "border-cs-mass-section3-sec",
    "bg-cs-mass-section3-sec",
    "bg-cs-mass-section3-pri-subsection",
    "bg-cs-mass-section3-moment-text-bg",
    "bg-cs-mass-section3-moment-number-bg",
    "bg-cs-mass-section3-pri-subsection",
    "text-cs-mass-section3-title-font",
    "text-cs-mass-section3-moment-text-font",
    "text-cs-mass-section3-moment-number-font",
    "bg-cs-mass-section3-card-bg",
    "bg-cs-mass-section4-pri",
    "ring-cs-mass-section4-sec",
    "border-cs-mass-section4-sec",
    "bg-cs-mass-section4-sec",
    "bg-cs-mass-section4-pri-subsection",
    "bg-cs-mass-section4-moment-text-bg",
    "bg-cs-mass-section4-moment-number-bg",
    "bg-cs-mass-section4-pri-subsection",
    "text-cs-mass-section4-title-font",
    "text-cs-mass-section4-moment-text-font",
    "text-cs-mass-section4-moment-number-font",
    "bg-cs-mass-section4-card-bg",
    "ring",
    "ring-0",
    "ring-black",
  ],
  plugins: [require('tailwindcss-motion')],
  variants: {
    extend: {
      translate: ['group-hover', 'hover'],
      maxWidth: ['responsive', 'hover', 'group-hover', 'focus'],
    },
  },
}

