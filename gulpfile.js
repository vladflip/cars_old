var gulp = require('gulp'),
	coffee = require('gulp-coffeeify'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename');

gulp.task('coffee', function(){
	gulp.src('resources/assets/coffee/index.coffee')
		.pipe(coffee())
		.pipe(uglify())
		.pipe(rename('script.js'))
		.pipe(gulp.dest('public/js'))
});