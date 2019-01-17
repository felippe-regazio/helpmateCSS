var 
  gulp = require('gulp'),
  sass = require('gulp-sass'),
  concat = require('gulp-concat'),
  minifyCSS = require('gulp-clean-css'),
  prefix = require('gulp-autoprefixer');

// SCSS

gulp.task('scss', function(){
    return gulp.src('webroot/scss/**/*.scss')
    .pipe(sass())
    .pipe(prefix('last 2 versions'))
    // .pipe(minifyCSS())
    .pipe(concat('main.min.css'))
    .pipe(gulp.dest('./webroot/dist'))
});

// WATCH

gulp.task('watch', function() {
  gulp.watch('webroot/scss/**/*.scss', function() {
      gulp.run('scss');
  });
});

//

gulp.task('default', ['scss','watch']);