const mix = require("laravel-mix");

require("mix-tailwindcss");

mix.postCss("./src/css/front.css", "./dist/css/front.css").tailwind("./tailwind.config.js");
