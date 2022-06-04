const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

//task
gulp.task('sass', function(done) {
    gulp.src('src/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./dist/'));
    done();
});

//watch
gulp.task('default', function() {
    gulp.watch('src/*.scss', gulp.series('sass'));
});