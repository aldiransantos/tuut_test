var gulp = require('gulp');
var concat = require('gulp-concat');
var jsmin = require('gulp-jsmin');
var rename = require('gulp-rename');
var uglifycss = require('gulp-uglifycss');
var imagemin = require('gulp-imagemin');
var sass = require('gulp-sass');

gulp.task('default',['sass']);

gulp.task('watchdogs', function() {
    gulp.watch('./assets/css/style.sass', ['sass']);
})

gulp.task('sass', function () {
    return gulp.src('./assets/css/style.sass')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./'));
  });

gulp.task('js', function() {
    return gulp.src('./lib/*.js')
      .pipe(concat('all.js'))
      .pipe(gulp.dest('./dist/'));
  });

  gulp.task('minifique', function () {
    gulp.src('src/**/*.js')
        .pipe(jsmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dist'));
});

gulp.task('imagem', function () {
    gulp.src('src/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'))
});