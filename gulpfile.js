
var gulp = require('gulp'),
		sass = require('gulp-sass'),
		concat = require('gulp-concat'),
		jshint = require('gulp-jshint'),
		autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps');

// here we define the list of things to happen when we run gulp styles
gulp.task('styles', function() {
  return gulp.src(['wp-content/themes/_jax/sass/**/*.scss'], { base: 'wp-content/themes/_jax/sass/'})
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(sourcemaps.write('../maps'))
    .pipe(gulp.dest('wp-content/themes/_jax/'));
});

gulp.task('jshint', function() {
  return gulp.src('wp-content/themes/_jax/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('watch', function(){
	gulp.watch('wp-content/themes/_jax/sass/**/*.scss', ['styles']);
	gulp.watch('wp-content/themes/_jax/js/*.js', ['jshint']);
});

gulp.task('default', ['styles', 'jshint', 'watch']);
