# Librarians

## チーム概要
[Librarians/Code/team_overview.md](./team_overview.md)

## Project管理
[Librarians/Project](https://github.com/charlie24403/Librarians/projects/2)
### Task管理ルール
#### Column説明
- Main Task
    - すべてのタスクの親となるタスク
- Sub task
    - メインタスクを細分化したタスク
- Fix task
    - 開発を進めていくうえで発生した修正
- In progress
    - 現在進行中のタスク
- Check
    - タスクが完了し確認待ちのタスク
- Done
    - 確認が終わり完了したタスク
#### task記述形式
```
[<タスクの種類>] <メインタスク>/<サブタスク>
・<詳細>
```
#### Taskを行うの流れ
- オーナー
```
・着手するメインタスクを"In Progress"に移動
↓ すべてのサブタスクが完了
・メインタスクを"Check"に移動
↓ 先生確認
・メインタスクを"Done"に移動
```
- メンバ
```
・"Sub task"内にサブタスクの作成（メインタスクを細分化）
↓
・着手するサブタスクを"In progress"に移動
↓ 完了
・サブタスクを"Check"に移動
↓ 全体で確認
・サブタスクを"Done"に移動
```

## リポジトリ構成
```
└─Librarians
    └─Documents
        ├─00_プロジェクト管理
        ├─10_要件定義
        │  ├─12_ユースケース図
        │  └─13_ユースケース記述
        ├─20_外部設計
        │  ├─21_画面推移図
        │  └─22_画面レイアウト設計
        ├─30_内部設計
        ├─40_テスト
        └─Overview
            └─図書管理システム_テンプレート
                ├─サンプルスクリプト
                └─成果物テンプレート
```
