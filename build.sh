#!/bin/bash
#mkdir ./dist/
#npx sass ./src/sass/style.scss ./dist/style.css
#cp ./src/index.html ./dist/
#cp ./src/favicons/*.* ./dist/
#cp -R ./src/images ./dist/
#cp -R ./src/fonts ./dist/
#npx esbuild ./src/js/main.js --bundle --outfile=./dist/main.js  --minify

cp ./src/index.php ./public/wp-content/themes/aaron/index.php
cp -R ./src/images ./public/wp-content/themes/aaron/
cp -R ./src/fonts ./public/wp-content/themes/aaron/
npx sass ./src/sass/style.scss ./public/wp-content/themes/aaron/style.css
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/aaron/main.js --minify