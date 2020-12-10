# Laravel 8 簡化 Eloquent 模型狀態的轉換

引入 asantibanez 的 laravel-eloquent-state-machines 套件來擴增簡化 Eloquent 模型狀態的轉換，每個類別都允許您註冊驗證、掛勾以及允許的轉換和狀態，從而使每個狀態機類別當在從一個狀態轉換到下一個狀態時成為唯一的真正來源。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/sales-orders/new` 來進行銷售訂單新增。

----

## 畫面截圖
![](https://i.imgur.com/yVzLIFs.png)
> 每個新增的銷售訂單初始狀態是待處理

![](https://i.imgur.com/2mz1hui.png)
> 處理的人配合實際狀況變更訂單的狀態
