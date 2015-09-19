var gulp = require('gulp');
var connect = require('gulp-connect');
var less = require('gulp-less');
var clean = require('gulp-clean');
var gulpsync = require('gulp-sync')(gulp);

gulp.task('serve', ['build'], function () {
    connect.server({root: './dist', port: 4000});
    gulp.watch('./src/**/*', ['build']);
});

gulp.task('build', gulpsync.sync(['clean','copy', 'less']));

gulp.task('clean', function () {
    return gulp.src('./dist/**/*', {read: false})
        .pipe(clean({force: true}))
        .pipe(gulp.dest('dist'));
});

gulp.task('less', function () {
    gulp.src('./src/less/*.less')
        .pipe(less({}))
        .pipe(gulp.dest('./dist/css'));
});

gulp.task('copy', function () {
    //ignore less folder...?
    gulp.src('./src/**/*')
        .pipe(gulp.dest('./dist'));
});