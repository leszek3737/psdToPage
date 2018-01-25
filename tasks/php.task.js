const $ = require('gulp-load-plugins')();
const config = require('./config');
module.exports = gulp => {
    gulp.task('inject-assets', () => {
        return gulp.src(config.glob.php)
            .pipe($.htmlReplace({
                "css": "css/app.css",
                "jsLib": "js/assets.min.js",
                "js": "js/app.js"
            }))
            .pipe(gulp.dest(config.path.dist));
    });
    gulp.task('inject-assets:prod', () => {
        return gulp.src(config.glob.php)
            .pipe($.htmlReplace({
                "css": "css/app.min.css",
                "jsLib": "js/assets.min.js",
                "js": "js/app.min.js"
            }))
            .pipe($.stripComments())
            .pipe(gulp.dest(config.path.dist));
    });
    gulp.task(
        'php', [
      'inject-assets',
    ]
    );
    gulp.task(
        'php:prod', [
      'javascript:prod',
      'style:prod',
      'inject-assets:prod',
    ]
    );
};
