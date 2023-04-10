# MMPPP Birthday

記念日の iCalendar を PHP スクリプトを通して配信するテンプレート


テンプレートとして使用することができます。

`index.php` は `birthday.csv` のデータから iCalendar フォーマットを出力します。
`module.php` は `index.php` からインクルードされて使用されますが、エントリープログラムとして実行した場合、CSV データの PHP 配列表現を出力します（デバッグ用途）。

## ノート

[RFC 5545](https://www.rfc-editor.org/rfc/rfc5545.html) に基づいて実装しています。
ただし、以下のような実装上の省力化が行われています。

- iCalendar での特殊文字をエスケープしていません。CSV の内容が直接出力されるので注意してください。
- RFC 5545 で規定されている、1 行あたりを 75 オクテットに収めるための改行処理を実装していません。CSV に長い人名データなどを入力する場合はご注意ください。
- CSV の読み取りにおいて、カンマと改行 (CRLF) 以外の特殊文字は考慮されていません。また、特殊文字のエスケープ方法を実装していないので、カンマと改行をデータとしては使用できません。

## ライセンス

[MIT](LICENSE)
