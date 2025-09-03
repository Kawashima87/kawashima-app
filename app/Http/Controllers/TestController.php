<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller

# TODO: 実装予定や追加タスク。
# ToDo: インデックス要確認！
# TODOS: 〇〇関数を作る
# FIXME: 要修正
# CHANGED: 修正した箇所
# WARNING: 将来的に問題が発生する可能性がある
# XXX: 危険なコードや動作が不安定な箇所
# BUG: バグの記録や問題の概要。
# BUGS:バグの記録や問題の概要。
# bug: バグの記録や問題の概要。
# NOTE: 注意点や補足情報。
# HACK: 一時的な実装や望ましくない解決策。
# OPTIMIZE:あまりきれいではないが、現時点では動いているリファクタリング必要コードに使用。
# REVIEW:見直しを促す注釈
# DEPRECATED:非推奨の理由や推奨される代替案

/* 
(sample)
[Add   ][実績反映]  : 生活費の現金を積立から捻出した分を反映。後日補填予定。

[Task管理] : タスク追加・編集・削除などの基本機能
[Tag管理] : タグの追加・削除・紐付けなど
[検索/フィルタ] : タイトル・タグでの検索や並び替え
[完了/優先度] : 完了ボタン、優先度付け、表示順制御
[ユーザー認証] : ログイン/ログアウト、ユーザー関連処理

[UI/レイアウト] : 画面レイアウトやコンポーネント整理
[レイヤー]  :
[モーダル] : 編集モーダルや確認ダイアログ
[スタイル] : CSS、デザイン調整

[DB/マイグレ] : テーブル設計、カラム追加・変更
[バリデーション] : 入力チェックやエラーメッセージ追加
[リファクタ] : コード整理、保守性向上
[テスト] : テストコード追加・修正

[Seed/Data]  : 初期データ投入やサンプル更新
[Doc] : READMEやコメント整理
[Config] : 環境設定や依存パッケージ調整

[Fix] #修正
[Add] #新規（ファイル / コード・機能）追加
[Update] #機能修正（バグではない）
[Remove] #削除（ファイル / コード）
*/

# TODO:実装予定
{
    public function test()
    {
        $users = User::all();
        return view('test',compact('users'));
    }
}
