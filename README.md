# 確認テスト③
## 環境構築　

**Dockerビルド**
1. 'git clone <git clone git@github.com:coachtech-material/laravel-docker-template.git>
2. DockerDesktopアプリを立ち上げる
3. 'docker-compose up -d --build'
　MacのM1・M2チップのPCの場合、no matching manifest for linux/arm64/v8 in the manifest list entriesのメッセージが表示されビルドができないことがあります。 エラーが発生する場合は、docker-compose.ymlファイルの「mysql」内に「platform」の項目を追加で記載してください  
mysql:  
    platform: linux/x86_64(この文追加)  
    image: mysql:8.0.26  
    environment:

**Laravel環境構築**
1. 'docker-compose exec php bash'
2. 'composer install'
3. 「.env.example」ファイルを コピーして「.env」を作成し、DBの設定を変更

  DB_CONNECTION=mysql  
  DB_HOST=mysql  
  DB_PORT=3306  
  DB_DATABASE=laravel_db  
  DB_USERNAME=laravel_user  
  DB_PASSWORD=laravel_pass

4.アプリケーションキーの作成  
php artisan key:generate

5.マイグレーションの実行  
php artisan migrate

6.シーディングの実行  
php artisan db:seed

## 使用技術（実行環境）  
・PHP8.3.0  
・Laravel8.83.27  
・MySQL8.0.26

## ER図  
![ER図](.images/ER_zu.png)
## URL  
・開発環境：http://localhost/  
・phpMyAdmin:：http://localhost:8080/
