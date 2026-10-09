// /** @type {import('tailwindcss').Config} */
// export default {
//   darkMode: "class",
//   content: ["./*.php", "./src/**/*.{html,js}"],
//   theme: {
//     extend: {},
//   },
//   theme: {
//     extend: {
//       colors: {
//         "sidebar-nav-active": "#e5e7eb",
//         "sidebar-nav-foreground": "#111827",
//         "sidebar-nav-hover": "#f3f4f6",
//         "sidebar-nav-focus": "#f3f4f6",
//         "scrollbar-track": "#e5e7eb",
//         "scrollbar-thumb": "#9ca3af",
//       },
//     },
//   },
//   plugins: ["@tailwindcss/forms"],
// };

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "class",

  content: [
    "./**/*.php",
    "./src/**/*.{html,js}",
    "./node_modules/preline/dist/*.js",
  ],

  theme: {
    extend: {
      colors: {
        "sidebar-nav-active": "#e5e7eb",
        "sidebar-nav-foreground": "#111827",
        "sidebar-nav-hover": "#f3f4f6",
        "sidebar-nav-focus": "#f3f4f6",
        "scrollbar-track": "#e5e7eb",
        "scrollbar-thumb": "#9ca3af",
      },
    },
  },

  plugins: [require("@tailwindcss/forms")],
};
