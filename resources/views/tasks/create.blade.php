@extends('layouts.app')

@section('content')


<!-- ここにページ毎のコンテンツを書く -->
 <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
         <!--  <form method="POST" action="{{ route('tasks.store') }}">-->
         <!--@csrf-->
         <!--       <div class="form-group">-->
         <!--           {!! Form::label('content', 'タスク:') !!}-->
         <!--           {!! Form::text('content', null, ['class' => 'form-control']) !!}-->
         <!--       </div>-->
         <!--       <div class="form-group">-->
         <!--           {!! Form::label('status', 'ステイタス:') !!}-->
         <!--           {!! Form::text('status', null, ['class' => 'form-control']) !!}-->
         <!--       </div>-->

         <!--       {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}-->

         <!--  </form>-->
       
        </div>
    </div>
@endsection