var gulp = require('gulp'),
	coffee = require('gulp-coffeeify'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename');

/*
|--------------------------------------------------------------------------
| Main Task
|--------------------------------------------------------------------------
| Includes all tasks.
*/

// var sDest = 'resources/assets/stylus';
var cDest = 'resources/assets/coffee';

gulp.task('default', ['coffee'], function(){
	// gulp.watch(sDest + '/**/*', ['stylus']);
	gulp.watch(cDest + '/**/*', ['coffee']);
});

function showError(e) {
	console.log(e.toString());

	this.emit('end');
}

/*
|--------------------------------------------------------------------------
| Stylus Task
|--------------------------------------------------------------------------
*/

gulp.task('coffee', function(){
	gulp.src('resources/assets/coffee/index.coffee')
		.pipe(coffee())
		.on('error', showError)
		// .pipe(uglify())
		.pipe(rename('script.js'))
		.pipe(gulp.dest('public/js'))
});