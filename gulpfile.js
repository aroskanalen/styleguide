var gulp = require('gulp');

// Plugins.
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

var sassPath = './scss/**/*.scss';

/**
 * Process SCSS using libsass
 */
gulp.task('sass', function () {
  gulp.src(sassPath)
    .pipe(sass({
      outputStyle: 'nested',
      includePaths: [
        'scss/assets/compass-mixins/lib'
      ]
    }).on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

/**
 * Watch files for changes and run tasks.
 */
gulp.task('watch', function() {
  gulp.watch(sassPath, ['sass']);
});

// Tasks to compile sass.
gulp.task('default', ['watch']);
