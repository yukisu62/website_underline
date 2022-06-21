const gulp = require('gulp');
const sass = require('gulp-dart-sass');
const sassGlob = require('gulp-sass-glob-use-forward');

gulp.task('sass', function(done){
    // stream
    gulp.src('./sass/**/*.scss') //タスクで処理するソースの指定
    .pipe(sass()) //処理させるモジュールを指定
    .pipe(sassGlob())
    .pipe(gulp.dest('./css/')); //保存先を指定

    console.log('sass compile');
    done();
});

gulp.task("watch", function() {
     gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});


//defaultタスクは、タスク名を指定しなかったときに実行されるタスクです。
gulp.task('default', gulp.task('sass'));
