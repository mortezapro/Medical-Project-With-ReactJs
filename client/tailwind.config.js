/** @type {import('tailwindcss').Config} */
module.exports = {
	darkMode: "class",
	content: ["./src/**/*.{js,jsx,ts,tsx}"],
	theme: {
		extend: {
			colors: {
				primary: "var(--primary)",
				secondary: "var(--secondary)",
				"dark-primary": "var(--dark-primary)",
				"dark-secondary": "var(--dark-secondary)",
			},
		},
	},
	plugins: [],
};
