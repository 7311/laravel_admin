1.練習laravel的操作 Practise the operation of laravel.<br>
2.練習使用laravel-admin Practise to use laravel-admin.<br>
3.練習使用git及github<br>
2/23<br>
增加商品資料庫及後台<br>
這邊要注意的是建立順序<br>
1.建立product model<br>
  php artisan make:model Product -mr<br>
2.先建立資料表migration<br>
  php artisan make:migration create_products_table --create=products<br>
3.建立admin:controller，這邊要注意models的位置跟文件上的不一樣<br>
  php artisan admin:make ProductController --model=App\models\Product<br>
  再來是models\product是單數，單資料表為負數，所以在product內要加入protected $table='products';<br>
<br>
2/20<br>
將jetstream登入用username登入，註冊增加username<br>
jetstream 驗證是用fortify來做所以要到這邊改設定<br>
用migration增加username欄位要注意因為是unique所以原本不能有資料<br>
<br>
2/19<br>
今天想要把jetstream弄中文版，但還沒成功<br>
AI說用composer require caouecs/laravel-lang但問題一堆根本安裝不起來<br>
後來前台註冊還出現問題adress、tel欄位不能是null，所以增加了migration來修改把address跟tel改成$table->string('address')->nullable()->change();<br>
<br>
2/16<br>
安裝 jetstream，指令：<br>
composer require laravel/jetstream<br>
php artisan jetstream:install livewire<br>
npm install<br>
npm run dev<br>
php artisan migrate<br>
php artisan serve<br>
<br>
遇到問題<br>
1.因為安裝了node.js jetstream是否都要啟用node.js才能使用<br>
2.users資料庫因為address、tel不能為空值而出現錯誤<br>
<br>
2/11<br>
安裝laravel admin
修改後台選單及首頁<br>
增加後臺會員功能<>
