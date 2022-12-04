/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./resources/**/*.blade.php",],
	theme: {
		extend: {
		}
	},
	variants:
	{
		textColor: ['current'],
		// accessibility: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
		// backgroundColor: ['responsive', 'hover', 'focus', 'active']
		// extend: {
		// 	a: ['active'],
		// 	underline: ['active'],
		// 	textColor: ['active'],
		// 	textDecorationColor: ['active'],
		// 	backgroundColor: ['active'],
		// }
	},
	plugins: [],
	darkMode: 'class',
}
