var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('scripts', function(){
  gulp.src('assets/js/*.js')
  .pipe(uglify())
  .pipe(gulp.dest('build/js'));
});

gulp.task('styles', function(){
  gulp.src('assets/scss/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass({
    errLogToConsole: true
  }))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('build/css'));
});

gulp.task('watch', function() {
  gulp.watch('assets/scss/*.scss', ['styles']);
  gulp.watch('assets/js/*.js', ['scripts']);
});

gulp.task('default', ['scripts', 'styles', 'watch']);
