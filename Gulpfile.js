const 
  gulp     = require('gulp'),
  sass     = require('gulp-sass'),
  concat   = require('gulp-concat'),
  minify   = require('gulp-clean-css'),
  csscomb  = require('gulp-csscomb'),
  prefix   = require('gulp-autoprefixer'),
  nobline  = require('gulp-remove-empty-lines'),
  stripC   = require('gulp-strip-css-comments');
// HELPMATE BUILD
gulp.task('build-dist', function(){
  return gulp.src('./src/helpmate.scss')
  .pipe(sass())
  .pipe(stripC())
  .pipe(prefix('last 2 versions'))
  .pipe(nobline())
  .pipe(csscomb())
  // normal css
  .pipe(concat('helpmate.css'))
  .pipe(gulp.dest('./dist'))
  // minified
  .pipe(minify())
  .pipe(concat('helpmate.min.css'))
  .pipe(gulp.dest('./dist'))
});
// ALL WATCHINGS
gulp.task('watch-src', function() {
  gulp.watch('./src/**/*.scss', gulp.series('build-dist'));
});
// DEFAULT TASK
gulp.task('default', gulp.series('build-dist', 'watch-src'));