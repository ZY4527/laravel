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
                                    <table>
                                        <tr>
                                            <th>id</th>
                                            <th>电视剧名</th>
                                            <th>图片地址</th>
                                            <th>下载地址</th>
                                            <th>用户评分</th>
                                            <th>语言</th>
                                            <th>地区</th>
                                            <th>类型</th>
                                            <th>年代</th>
                                            <th>导演</th>
                                            <th>演员</th>
                                            <th>电视剧简介</th>
                                            <th>添加时间</th>
                                            <th>修改时间</th>
                                            <th>操作</th>
                                        </tr>
                                        @foreach( $list as $v)
                                            <tr>
                                                <td>{{$v->id}}</td>
                                                <td>{{$v->tv_name}}</td>
                                                <td><img src="{{$v->img_url}}" width="50px"></td>
                                                <td>{{$v->download_url}}</td>
                                                <td>{{$v->score}}</td>
                                                <td>{{$v->lanaguage_type}}</td>
                                                <td>{{$v->Area['area_name']}}</td>
                                                <td>{{$v->Type['name']}}</td>
                                                <td>{{$v->Year['years']}}</td>
                                                <td>{{$v->Director['name']}}</td>
                                                <td>{{$v->Actor['actor_name']}}</td>
                                                <td>{{$v->desc}}</td>
                                                <td>{{$v->created_at}}</td>
                                                <td>{{$v->updated_at}}</td>
                                                <td><a href="delete?id={{$v->id}}"><button type="button" class="button">删除</button></a>
                                                    <a href="edit?id={{$v->id}}"><button type="button" class="button">修改</button></a>
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
