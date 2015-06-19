var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    minifyCss = require('gulp-minify-css'),
    iconfont = require('gulp-iconfont'),
    //lodash = require('lodash'),
    consolidate = require('gulp-consolidate'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps');
    

var fontName = 'icofont';

gulp.task('iconfont', function(){

  gulp.src(['assets/icons/*.svg'])

  .pipe(iconfont({
    fontName: fontName,
    normalize: true,
    fontHeight: 1001
  }))

  .on('codepoints', function(codepoints) {
    console.log("pants again and again");
    // gulp.src('assets/icons/template/_icon.template.scss')
    // .pipe(consolidate('lodash', {
    //   glyphs: codepoints,
    //   fontName: fontName,
    //   fontPath: '../fonts/', // set path to font (from your CSS file if relative)
    //   className: 'icon' // set class name in your CSS
    // }))
    // .pipe(rename("ahhhh.scss"))
    // .pipe(gulp.dest('/')); // set path to export your CSS
  })
  .pipe(gulp.dest('build/fonts'));
  console.log("pants is here"); // set path to export your fonts
});


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
  console.log("pants");
});




gulp.task('watch', function() {
  gulp.watch('assets/scss/*.scss', ['styles']);
  gulp.watch('assets/js/*.js', ['scripts']);
  gulp.watch('assets/icons/*.svg', ['iconfont']);
});

gulp.task('default', ['iconfont', 'scripts', 'styles', 'watch']);
