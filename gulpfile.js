var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    minifyCss = require('gulp-minify-css'),
    iconfont = require('gulp-iconfont'),
    consolidate = require('gulp-consolidate'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    fontgen = require("gulp-fontgen"),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync').create();


gulp.task('iconfont', function(){

  gulp.src(['assets/icons/*.svg'])
    .pipe(iconfont({
      fontName: 'icofont',
      normalize: true,
      fontHeight: 1001
    }))
    .on('codepoints', function(codepoints, options) {
      gulp.src('assets/icons/template/_icon.template.scss')
      .pipe(consolidate('lodash', {
          glyphs: codepoints,
          fontName: 'icofont',
          fontPath: '../fonts/',
          className: 'ico'
        }))
      .pipe(rename('_icons.scss'))
      .pipe(gulp.dest('assets/scss/'));
      //console.log(codepoints);
    })
    .pipe(gulp.dest('build/fonts/'));

});

// gulp.task('fontgen', function(){
//   gulp.src('assets/fonts/*.otf')
//     .pipe(fontgen({
//         dest: "assets/scss/"
//     }));
// });

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
  .pipe(gulp.dest('build/css'))
  .pipe(browserSync.stream());
});

gulp.task('serve', ['styles'], function() {
    browserSync.init({
        proxy: "localhost/~allycolquhoun/globetrekker"
    });
});

gulp.task('watch', function() {
  gulp.watch('assets/scss/*.scss', ['styles']);
  gulp.watch('assets/js/*.js', ['scripts']);
  gulp.watch('assets/icons/*.svg', ['iconfont']);
  gulp.watch("*.php").on('change', browserSync.reload);
});

gulp.task('default', ['iconfont', 'scripts', 'styles', 'serve', 'watch']);
