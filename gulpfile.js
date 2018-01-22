var gulp = require('gulp');
var less = require('gulp-less'); 
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
 var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
 



gulp.task('watch', function() {
	 browserSync.init({
    files: ['./**/*.php'],
    proxy: 'http://localhost/mani/',
  });
  gulp.watch('./less/**/*.less', ['compile-less']);
});

gulp.task('default', ['compile-less', 'watch']);


/* Task to compile less */
gulp.task('compile-less', function() {  
  return gulp.src('./less/**/*.less')
    .pipe(less())
    .pipe(gulp.dest('.'))
     .pipe(browserSync.stream());
}); 
