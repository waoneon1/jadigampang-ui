const colors = require("tailwindcss/colors");
const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: "#0A68EB",
        primaryFocus: "#7FB4FF",
        secondary1: "#0D3D89",
        secondary2: "#FF4E66",
        tertiary: "#FF5A34",
        info: "#A0C3FF",
        success: "#76CA66",
        warning: "#FBC756",
        error: "#BA0000",
        alert: "#EB5757",
        gray90: "#262626",
        gray70: "#787878",
        gray60: "#999999",
        gray50: "#B3B3B3",
        gray30: "#D9D9D9",
        gray20: "#F5F5F5",
        gray10: "#F9F9F9",
        jgblue: "#8BABDE"
      },
      typography: {
        'DEFAULT': {
          css: {
            color: '#15313A',
            fontSize: '0.875rem',
            maxWidth: '1024px'
          },
        },
      },
      fontSize: { // 28
        '2.5xl': ['1.75rem', {
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '700',
        }],
        '3.5xl': ['2rem', { // 32
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '700',
        }],
      },
      width: {
        'thumb': '100px',
        'chat': '367px'
      },
      height: {
        'thumb': '100px'
      },
      margin: {
        // 'overlay': '15px'
      }
    },
    boxShadow: {
      sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
      DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
      md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
      lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
      xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
      '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
     '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
      inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
      none: 'none',
      contact: '0 3px 6px 0 rgba(0,0,0,0.16)',
      table: '2px 5px 6px 0 rgba(35,132,221,0.16)',
      btn: '0 2px 5px 0 rgba(207,218,226)',
      thin: '0px 7px 28px -7px rgba(75, 121, 183, 0.1)',
      jgmain: '0px 0px 12px rgba(1, 38, 97, 0.12)',
      jgseller: '0px 4px 13px rgba(1, 38, 97, 0.07)'
    },
    fontFamily: {
      primary: ['Open Sans', 'sans-serif'],
    },
  },
  variants: {
    extend: {},
  },
  corePlugins: {
    outline: false,
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/line-clamp'),
    plugin(function ({ addComponents, theme }) {
      addComponents({
        '.btn': {
          padding: '10px 20px', 
          borderRadius: '6px', 
          textAlign: 'center',
          fontSize: '14px',
          display: 'flex',
          position: 'relative',
          alignItems: 'center',
          lineHeight: '18px',
          justifyContent: 'center'
        },
        '.btn-sm': {
          padding: '5px 10px', 
          borderRadius: '6px',
          textAlign: 'center',
          fontSize: '12px',
          display: 'flex',
          position: 'relative',
          alignItems: 'center',
          lineHeight: '16px',
          justifyContent: 'center'
        },
        '.btn-primary': {
          backgroundColor: '#0A68EB',
          color: '#fff',
          borderWidth: '1px',
          borderColor: '#0A68EB',
          '&:hover': {
            backgroundColor: '#0156CB'
          },
          '&:focus': {
            backgroundColor: '#7FB4FF',
            borderWidth: '1px',
            borderColor: '#5797F0'
          }
        },
        '.btn-secondary': {
          backgroundColor: '#E0EBFA',
          color: '#0A68EB',
          borderWidth: '1px',
          borderColor: '#E0EBFA',
          '&:hover': {
            color: '#0156CB'
          },
          '&:focus': {
            color: '#0A68EB',
            borderWidth: '1px',
            borderColor: '#0A68EB'
          }
        },
        '.btn-inverted1': {
          backgroundColor: '#fff',
          color: '#0A68EB',
          borderWidth: '1px',
          borderColor: '#fff',
        },
        '.btn-inverted2': {
          backgroundColor: '#0A68EB',
          color: '#fff',
          borderWidth: '1px',
          borderColor: '#fff'
        },
        '.btn-disable': {
          backgroundColor: '#D9D9D9',
          color: '#999999',
        }
      })
    })
  ],
}