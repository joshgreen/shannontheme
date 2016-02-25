var gulp = require('gulp'),
    postcss = require('gulp-postcss'),
    sass = require('gulp-sass'),
    autoprefixer = require('autoprefixer'),
    livereload = require('gulp-livereload'),
    cssnano = require('gulp-cssnano'),
    rename = require("gulp-rename"),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant');

var Theme = [
    'wp-content/themes/shannon/'
];

var jsSources = [
    'wp-content/themes/shannon/js/*.js'
];

var sassSources = [
    'wp-content/themes/shannon/sass/*.sass'
];

gulp.task('sass', function () {
  return gulp.src(sassSources)
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
    .pipe(cssnano())
    .pipe(rename("style.css"))
    .pipe(gulp.dest('wp-content/themes/shannon/'))
    .pipe(livereload());
});

gulp.task('images', function () {
    return gulp.src(Theme+'images/src/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [
                {removeViewBox: true},
                {cleanupIDs: true}
            ],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(Theme+'images'));
});


gulp.task('watch', function () {
  livereload.listen();
  gulp.watch(Theme+'images/src/*', ['images']);
  gulp.watch(Theme+'sass/*.sass', ['sass']);
  gulp.watch(Theme+'*.php').on('change', livereload.changed);
});

gulp.task('default', ['watch', 'images', 'sass']);