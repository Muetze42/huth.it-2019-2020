const gulp              = require('gulp');
const sass              = require('gulp-sass');
const postcss           = require('gulp-postcss');
const flexbugsfixes     = require('postcss-flexbugs-fixes');
const autoprefixer      = require('autoprefixer');
const MinifyCSS         = require('gulp-clean-css');
const jsminify          = require('gulp-terser');
const include           = require('gulp-include');
const { watch }         = require('gulp');
const { series }        = require('gulp');

const processors = [
    flexbugsfixes,
    autoprefixer({
        browsers: ['last 2 versions','> 0.1%']
    })
];

const paths = {
    styles: {
        src: 'assets/scss/src/*.scss',
        dest: 'http/src/css/'
    },
    scripts: {
        src: 'assets/js/*.js',
        dest: 'http/src/js/'
    }
};

function BuildCSS() {
    return gulp.src(paths.styles.src)
        .pipe(sass())
        .pipe(postcss(processors))
        .pipe(MinifyCSS())
        .pipe(gulp.dest(paths.styles.dest));
}
function BuildJS() {
    return gulp.src(paths.scripts.src)
        .pipe(include())
        .pipe(jsminify())
        .pipe(gulp.dest(paths.scripts.dest));
}
function DevCSS() {
    return gulp.src(paths.styles.src)
        .pipe(sass())
        .pipe(postcss(processors))
        .pipe(gulp.dest(paths.styles.dest));
}
function DevJS() {
    return gulp.src(paths.scripts.src)
        .pipe(include())
        .pipe(gulp.dest(paths.scripts.dest));
}

exports.build           = series(BuildCSS,BuildJS);
exports.dev             = series(DevCSS,DevJS);

exports.Watch = function() {
    watch(paths.styles.src, DevCSS);
    watch(paths.scripts.src, DevJS);
};