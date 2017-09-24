#问题反馈框架#
搜集用户反馈带API


#使用方法#
```php
$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/createTable',function () use($app){
    if(!Schema::hasTable('Problem')){
        Schema::create('Problem', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('content');
            $table->string('IP');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }
});

$app->post('/api/problem', 'ProblemController@ProblemCommit');
```

