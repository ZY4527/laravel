@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="search">
                                <form action="" method="post">
                                    <table>
                                        <tr>
                                            <td>
                                                名字
                                            </td>
                                            <td>
                                                <input type="text" name="name" value="" class="text short">
                                            </td>
                                            <td>
                                                <input type="hidden" name="page" value="1">
                                                <button class="button">查找</button>
                                            </td>
                                            <td>
                                                <a href="add"><button class="button" type="button">添加</button></a>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>

                            <div class="list">
                                <table border="1">
                                    <tr>
                                        <th>id</th>
                                        <th>地区名称</th>
                                        <th>添加时间</th>
                                        <th>修改时间</th>
                                        <th>操作</th>
                                    </tr>

                                    @foreach($model as $v)
                                        <tr>
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->area_name}}</td>
                                            <td>{{$v->created_at}}</td>
                                            <td>{{$v->updated_at}}</td>
                                            <td>
                                                <a href="delete?id=<?php echo $v->id?>"><button type="button" class="button">删除</button></a>
                                                <a href="edit?id=<?php echo $v->id?>"><button type="button" class="button">修改</button></a>
                                            </td>
                                        </tr>

                                    @endforeach
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
