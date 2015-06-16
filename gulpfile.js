var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    minifyCss = require('gulp-minify-css'),
    iconfont = require('gulp-iconfont'),
    iconfontCss = require('gulp-iconfont-css'),
    rename = require('gulp-rename'),
    consolidate = require('gulp-consolidate'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('scripts', function(){
  gulp.src(['assets/js/plugins.js','assets/js/main.js'])
  .pipe(concat('app.js'))
  .pipe(uglify())
  //.pipe(rename('app.js'))
  .pipe(gulp.dest('build/js'));
});

gulp.task('styles', function(){
  gulp.src('assets/scss/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass({
    errLogToConsole: true
  }))
  .pipe(minifyCss())
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('build/css'));
});

var fontName = 'Icons';
gulp.task('iconfont', function(){

  gulp.src(['assets/icons/*.svg'])
    .pipe(iconfontCss({
      fontName: "icofont",
      //path: 'assets/scss/_icons.scss',
      targetPath: '../scss/_icons.scss',
      fontPath: '../fonts/'
    }))
    .pipe(iconfont({
      fontName: "icofont",
      normalize: true,
      fontHeight: 1001
     }))
    .pipe(gulp.dest('assets/fonts')).pipe(gulp.dest('build/fonts'));

});

gulp.task('watch', function() {
  gulp.watch('assets/scss/*.scss', ['styles']);
  gulp.watch('assets/js/*.js', ['scripts']);
  gulp.watch('assets/icons/*.svg', ['iconfont']);
});

gulp.task('default', ['scripts', 'styles', 'watch', 'iconfont']);
