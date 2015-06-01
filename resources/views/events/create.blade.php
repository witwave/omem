<form action="{{ route('events.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="member_id" class="form-control" value="{{ $member->id }}"/>

    <div class="form-group">
        <label for="type">类型</label>
        <select class="form-control" name="type">
            @foreach(Config::get('wechat.events') as $key=>$val)
                <option value="{{ $key }}">{{ $val }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="content">内容</label>
        <textarea name="content" rows="3" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="mark">备注</label>
        <input type="text" name="mark" class="form-control" value=""/>
    </div>

</form>
