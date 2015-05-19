var gulp = require('gulp');

gulp.task('watch',function(){
	gulp.watch('public/scss/**/*.scss',['sass']);
	gulp.watch(['public/js/*.js','!public/js/all.js']);e
});

gulp.task('default',['']);