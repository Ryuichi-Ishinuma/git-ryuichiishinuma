module.exports = {
    entry: "./src/js/main.js",

    // ファイルの出力設定
    output: {
        // 出力ファイルのディレクトリ名
        path: `${__dirname}/dist`,
        // 出力ファイル名
        filename: "bundle.js"
    },
    // モード値をproductionに設定すると最適化された(圧縮した)状態で、
    // developmentに設定するとソースマップ有効でJSファイルが出力される
    mode: "development",

    // ローカル開発用環境を立ち上げる
    // 実行時にブラウザが自動的にlocalhostを開く
    devServer: {
        contentBase: "dist",
        open: true
    }
};