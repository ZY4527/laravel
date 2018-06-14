
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="info">
                                <form action="editSave" method="post">
                                    {{csrf_field()}}
                                    <table>
                                        <tr>
                                            <th>用户id</th>
                                            <td><select name="user_id" class="text">
                                                    <option value="">请选择</option>
                                                    @foreach($users as $v)
                                                        <option value="{{$v->id}}" {{$data->user_id == $v->id ? 'selected' : ''}}>{{$v->name}}</option>
                                                    @endforeach
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <th>评论id</th>
                                            <td><input type="text" name="comment_id" value="{{$data->comment_id}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th>评论类型(电影/电视)</th>
                                            <td><input type="radio" name="comment_type" value="1" {{$data->comment_type == 1 ? 'checked':''}}>电影
                                                <input type="radio" name="comment_type" value="2" {{$data->comment_type == 2 ? 'checked':''}}>电视
                                                <input type="radio" name="comment_type" value="3" {{$data->comment_type == 3 ? 'checked':''}}>小说</td>
                                        </tr></td>
                                        </tr>
                                        <tr>
                                            <th>回应id</th>
                                            <td><input type="text" name="repay_id" value="{{$data->repay_id}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th>用户评分</th>
                                            <td><input type="text" name="score" value="{{$data->score}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th>评论内容</th>
                                            <td><input type="text" name="content" value="{{$data->content}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th><input type="hidden" name="id" value="{{$data->id}}"></th>
                                            <td>
                                                <button class="submit">提交</button>
                                                <a href="{{url('/comment/index')}}"><button type="button" class="cannel">返回</button></a>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
