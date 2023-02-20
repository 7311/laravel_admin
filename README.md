1.練習laravel的操作 Practise the operation of laravel.<br>
2.練習使用laravel-admin Practise to use laravel-admin.<br>
3.練習使用git及github<br>
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
2/19<br>
今天想要把jetstream弄中文版，但還沒成功<br>
AI說用composer require caouecs/laravel-lang但問題一堆根本安裝不起來<br>
後來前台註冊還出現問題adress、tel欄位不能是null，所以增加了migration來修改把address跟tel改成$table->string('address')->nullable()->change();<>
