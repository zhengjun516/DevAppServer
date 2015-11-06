@extends('app')

@section('content')
    <h1>撰写新文章</h1>
    {!! Form::open(['url'=>'article/store']) !!}
    <div class="form-group">
     {!!Form::label('title','标题：')!!}
     {!!Form::text('title',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
     {!!Form::label('content','正文：')!!}
     {!!Form::textarea('content',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
       {!!Form::label('content','发布日期')!!}
       {!!Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
         {!!Form::label('tag_list','选择标签')!!}
         {!!Form::select('tag_list[]',$tags,null,['class'=>'form-control js-example-basic-multiple','multiple'=>'multiple'])!!}
    </div>
    
     
    
    <div class="form-group">
     {!!Form::submit('发表文章',['class'=>'btn btn-success form-control'])!!}
    </div>
    
    {!! Form::close() !!}
    @if($errors->any())        
       <ul class="alert alert-danger">            
         @foreach($errors->all() as $error)                
           <li>{{$error}}</li>            
         @endforeach        
       </ul>
    @endif
    
    
<script type="text/javascript">
        $(function() {
            $(".js-example-basic-multiple").select2({
                placeholder: "添加标签"
            });
        });
</script>
@endsection

