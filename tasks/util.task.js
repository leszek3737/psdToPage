const $ = require('gulp-load-plugins')();
const config = require('./config');
module.exports = gulp => {
    gulp.task('clean', ['cleanWp'], () => {
        return gulp
            .src(config.path.dist + '*', {
                read: false
            })
            .pipe($.clean());
    });
    gulp.task('cleanWp', () => {
        return gulp
            .src(config.path.wp + '*', {
                read: false,
            })
            .pipe($.clean({
                force: true
            }));
    });

};
