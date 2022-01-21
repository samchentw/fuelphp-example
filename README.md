# fuelphp 練習用專案


# 開發環境
1.安裝XAMP或獨立安裝mysql、apache  
2.安裝composer [安裝網址](https://getcomposer.org/doc/00-intro.md)  
3.安裝及建立fuelphp專案, cmd下執行以下指令：
```sh
composer create-project fuel/fuel
```

# 啟動專案
## 1.以XAMPP為例：
編輯：C:\xampp\apache\conf\httpd.conf
找到Listen 80，在底下加入新port號，如下：
```
Listen 80
Listen 81
```
然後在最下方，加入81 port的設定如下：

```
<VirtualHost *:81>

    ServerName localhost:81

    ServerAdmin webmaster@localhost
    DocumentRoot [fuelphp專案下的public路徑]

    <Directory [fuelphp專案路徑]>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order Deny,Allow
        Allow from all
        Require all granted
    </Directory>

</VirtualHost>
```

## 2.clone下此專案後需先執行以下指令
```
composer install
```

## 3.在mysql中建立fuel_dev資料庫
cmd執行以下指令：
```
php oil refine migrate
```

## 在瀏器中輸入網址(如果看到畫面代表成功！)
http://127.0.0.1:81  => 預設路由  
http://127.0.0.1:81/example  => 個人開發測試
 

# 資料夾架構
controller位置： fuel/app/classes/controller/  
model位置： fuel/app/classes/model/  
presenter位置： fuel/app/classes/presenter/  
開發db設定位置： fuel/app/config/development/db.php  
route設定位置： fuel/app/config/routes.php  
View位置： fuel/app/views/  

# 常用Migrate指令
```sh
# 執行指令
php oil refine migrate
# 新增指令
$ php oil refine migrate:up
# rollback指令
$ php oil refine migrate:down
```
# sql範例
 fuel/app/classes/model/post.php檔有讀值範例及新增範例  

# 參考文件：  
[MVC說明](https://fuelphp.com/docs/general/mvc.html)  
[migrations](https://fuelphp.com/docs/general/migrations.html)  
[routing](https://fuelphp.com/docs/general/routing.html)  
[controllers](http://wxb.github.io/fuelPHP.zh-CN/general/controllers/base.html)  
[第三方文件完整說明](http://tw.gitbook.net/fuelphp/fuelphp_quick_guide.html)  
[Database Query](https://fuelphp.com/docs/classes/database/usage.html#query-results)  