module.exports = {
    content: [
        "./resources/**/*.antlers.html",
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./content/**/*.md",
    ],
    theme: {
        extend: {
            colors: {
                "brand-blue": "#88b9bb",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
