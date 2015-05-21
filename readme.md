## scaffold 的使用
php artisan make:scaffold Tweet --schema="title:string(50):default('Tweet #1'), body:text"

php artisan make:scaffold Topic --schema="title:string(100):default(''), body:text,cover:string(100):default(''),uid:integer:default(0),pv:integer:default(0),uv:integer,user_count:integer:default(0),deleted_at:timestamps"

##evnet 的使用
生成自定义的event
php artisan make:event MyEvent

生成自定义的handler
php artisan handler:event MyEventHandler --event=MyEvent

然后在EventServiceProvider里面添加，可以添加多个，演示就只注册一个了

`protected $listen = [
        'App\Events\MyEvent' => [
            'App\Handlers\Events\MyEventHandler',
        ],
    ];`

 调用
 `Event::fire(App\Events\MyEvent($param))`

 ## Console的使用

 --使用php artisan make:console Test
 --在app\Console\Kernel中添加App\Console\Commands\Test
 



