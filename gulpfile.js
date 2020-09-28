const gulp = require("gulp");
const sass = require("gulp-sass");  //Sassコンパイル
const plumber = require("gulp-plumber");    //エラー時の強制終了を防止
const cleanCss = require("gulp-clean-css");
const notify = require("gulp-notify");  //エラー発生時にデスクトップに通知する
const sassGlob = require("gulp-sass-glob"); //パーシャルファイルを一括読み込み
const browserSync = require("browser-sync"); //ブラウザ反映
const postcss = require("gulp-postcss"); //autoprefixerとセット
const autoprefixer = require("autoprefixer");   //ベンダープレフィックス付与
const sourcemaps = require("gulp-sourcemaps"); //ソースマップを作成


const webpackStream = require("webpack-stream");
const webpack = require("webpack");

const webpackConfig = require("./webpack.config");

gulp.task("default", function() {
    return webpackStream(webpackConfig, webpack)
    .pipe(gulp.dest("dist"));
});

gulp.task("sass", function() {
    return (
        gulp.src("./src/sass/main.scss")
        .pipe(sassGlob())
        .pipe(sourcemaps.init())
        .pipe(plumber({ 
            errorHandler: notify.onError("Error: <%= error.message %>")
        }))
        .pipe(sass({
            outputStyle: "expanded"
        }))
        .pipe(postcss([ autoprefixer({
            cascade: false
        }
        )]))
        .pipe(cleanCss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest("dist/css/"))
    );
});


gulp.task("watch", function(done) {
    gulp.watch("./src/sass/**/*.scss", gulp.task("sass"));
});

gulp.task("default", gulp.series(gulp.parallel("watch")));