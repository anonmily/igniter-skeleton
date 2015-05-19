var gulp = require('gulp');

gulp.task('foo',function(){
	gul.src(['public_dev/js/*.js'])
		.pipe(concat('all.js'))
		.pipe()
});
gulp.task('bar',function(){
	console.log('bar');
});

gulp.task('watch',function(){
	gulp.watch('public/scss/**/*.scss',['sass']);
	gulp.watch(['public/js/*.js','!public/js/all.js']);e
});

gulp.task('default',['foo','bar']);