# mmppp-birthday

iCalendar


テンプレートとして使用することができます。

`index.php` は `birthday.csv` ics フォーマットを出力します。
`module.php` は `index.php` から読み込まれて使用されますが、エントリとして実行した場合、配列表現を出力します。

## ノート

- [RFC 5545](https://www.rfc-editor.org/rfc/rfc5545.html) に基づいて実装しています。
- iCalendarでの特殊文字をエスケープしていません。CSV 内容が直接書かれるので注意してください。
- iCalendar長いデータを
- CSV のエスケープ実装は考慮していません。

## ライセンス

[MIT](LICENSE)
