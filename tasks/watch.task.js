const config = require('./config');
const runSequence = require('run-sequence');
module.exports = gulp => {
    gulp.task('watch', () => {
        gulp.watch(config.glob.src, [
        'build',
      ]);
    });
}
