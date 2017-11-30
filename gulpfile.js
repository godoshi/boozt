const gulp = require('gulp');
const browserify = require('browserify');
const babelify = require('babelify');
const vueify = require('vueify');
const source = require('vinyl-source-stream');
const concat = require('gulp-concat');
const del = require('del');
const runSequence = require('run-sequence');

const paths = {
  tmp: './tmp',
  js: './resources/scripts/**/*.js',
  components: './resources/components/**/*.vue',
};

gulp.task('vueify', () => {
  return browserify('./resources/scripts/main.js')
    .transform(babelify.configure({
      presets: ["es2015"]
    }))
    .transform(vueify)
    .bundle()
    .pipe(source('vueify.js'))
    .pipe(gulp.dest(paths.tmp));
});

gulp.task('concatCss', () => {
  return gulp.src([
    './node_modules/bootstrap/dist/css/bootstrap.min.css',
  ])
  .pipe(concat('app.css'))
  .pipe(gulp.dest('./public/css/'));
});

gulp.task('concatScripts', () => {
  return gulp.src([
      `${paths.tmp}/vueify.js`,
    ])
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./public/js'));
});

gulp.task('watch', () => {
  return gulp.watch([ paths.js, paths.components ], [ 'vueify', 'concatScripts' ]);
});

gulp.task('default', () => {
  return runSequence('vueify', 'concatScripts', 'concatCss');
});