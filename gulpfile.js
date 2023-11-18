const { src, dest, watch, parallel } = require("gulp");

//Funcion SASS, PLUMBER
const sass = require("gulp-sass")(require('sass'));
const plumber = require('gulp-plumber');

function css(done) {
    src('src/scss/**/*.scss')
        .pipe(plumber())
        .pipe(sass())
        .pipe(dest('build/css'))
    done();
}

function appJS(done) {
    src('src/js/**/*.js')
        .pipe(dest('build/js'))

    done();
}

function dev(done) {
    watch('src/scss/**/*.scss', css)
    watch('src/js/**/*.js', appJS)

    done();
}

exports.css = css;
exports.appJS = appJS;
exports.dev = parallel(appJS, dev);