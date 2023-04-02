# MMPPP Birthday

お誕生日データ CSV から PHP を通して iCalendar を配信するスクリプト


テンプレートとして使用することができます。

`index.php` は `birthday.csv` のデータから iCalendar フォーマットを出力します。
`module.php` は `index.php` から読み込まれて使用されますが、エントリープログラムとして実行した場合、CSV データの PHP 配列表現を出力します。

## ノート

- [RFC 5545](https://www.rfc-editor.org/rfc/rfc5545.html) に基づいて実装しています。
- iCalendar での特殊文字をエスケープしていません。CSV 内容が直接出力されるので注意してください。
- RFC 5545 で規定されている 1 行あたりを 75 オクテットに収めるための改行処理を実装していません。長い人名データなどを使用する場合は、ご注意ください。
- CSV の特殊文字は考慮していません（データに使用できません）。

## ライセンス

[MIT](LICENSE)
