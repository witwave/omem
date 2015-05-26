

###Todo List

####前台
*线下活动报名
*会员申请
*用户报名的活动
*社群介绍

###后台
*活动管理（活动的编辑，活动报名名单查看）
*社群管理
*会员管理（增加事件信息，访谈，电话，邮箱，微信等)

##数据结构设计
会员
 Member(id,pid,openid,wechat,qq,avatar,name,nickname,sex,mobile,email,company_name,company_site,position,industry,born_date,born_location,live_location,sign,mark)

活动
 Meetup(id,name,cover,summary,content,end_time,pv,uv,max_count,join_count,online,price,mark)

参加人员
 joiner(meetup_id,member_id,mobile,name,meetup_name,signed,signed_time)

事件
  Event(id,member_id,type,content,mark)

页面
  Page(id,name,title,content)


##生成脚本
 php artisan make:scaffold Member --schema="id:increments,pid:integer:default(0),
 openid:string(64):default(''),
 wechat:string(120):default(''),
 qq:string(16):default(''),
 avatar:string(200):default(''),
 name:string(16),
 nickname:string('20'):default(''),
 sex:integer(1):default(3),
 email:string(100):default(''),
 company_name:string(128):default(0),
 company_site:string(128),
 position:string(100):default(''),
 industry:string(100):default(''),
 born_date:date,
 born_location:string(100):default(''),
 live_city:string(20):default(''),
 address:string(256):default(''),
 sign:string(1000):default(''),
 mark:string(500):default(''),
 deleted_at:timestamps"

 php artisan make:scaffold Page --schema="id:increments,name:string(200),title：string(200),content:text:default('')"

 php artisan make:scaffold Event --schema="id:increments,member_id:integer,type:string(100),content:string(10000),mark:string(500):default('')"











 
		$table->increments('id');
			$table->string('name',150);
			$table->string('cover',200)->nullable();
			$table->string('summary',500)->nullable();
			$table->text('content');
			$table->date('endtime');//报名结束时间
			$table->integer('pv')->default(0);
			$table->integer('uv')->default(0);
			$table->integer('join_count')->default(0);

