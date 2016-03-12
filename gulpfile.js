var gulp = require('gulp'),
    minifycss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    notify = require('gulp-notify'),
    filter = require('gulp-filter'),
    order = require('gulp-order'),
    concat = require('gulp-concat'),
    watch = require('gulp-watch');

// JS Concat
gulp.task('js', function() {

	var jsFiles = ['app/js/*'];

	gulp.src(jsFiles)
		.pipe(filter('*.js'))
    .pipe(order([
      'jquery.min.js',
      'wow.min.js',
			'*',
      'script.js'
		]))
		.pipe(concat('main.js'))
		.pipe(uglify())
		.pipe(gulp.dest('dist/js'))
    .pipe(notify({ message: 'JS task complete' }));
});

// CSS Concat
gulp.task('css', function() {

	var cssFiles = ['app/css/*'];

	gulp.src(cssFiles)
		.pipe(filter('*.css'))
    .pipe(order([
			'normalize.css',
			'*',
      'style.css'
		]))
		.pipe(concat('main.css'))
		.pipe(minifycss())
		.pipe(gulp.dest('dist/css'))
    .pipe(notify({ message: 'CSS task complete' }));
});

// Watch
gulp.task('watch', function() {

  // Watch .css files
  gulp.watch('app/css/*', ['css']);

  // Watch .js files
  gulp.watch('app/js/*', ['js']);

});

// Default task
gulp.task('default', function() {
    gulp.start('css', 'js', 'watch');
});
