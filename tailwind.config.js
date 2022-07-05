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
                "brand-grey": "#666666",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
