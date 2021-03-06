@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">电视剧表</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="info">
                                <form action="editSave" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <table>
                                        <tr>
                                            <th>电视剧名称</th>
                                            <td><input type="text" name="tv_name" value="{{$list->tv_name}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th>图片地址</th>
                                            <td><input type="file" name="img_url"  value="{{$list->img_url}}"></td>
                                        </tr>
                                        <tr>
                                            <th>下载地址</th>
                                            <td><input type="text" name="download_url" value="{{$list->download_url}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th>用户评分</th>
                                            <td><input type="text" name="score" value="{{$list->score}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th>语言</th>
                                            <td><input type="text" name="lanaguage_type" value="{{$list->lanaguage_type}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th>地区</th>
                                            <td>
                                                <select name="area_id" class="text">
                                                    <option value="">请选择</option>
                                                    @foreach( $area as $v)
                                                        <option value="{{$v->id}}" {{$list->area_id == $v->id ? 'selected':""}}>{{$v->area_name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>类型</th>
                                            <td>
                                                <select name="type_id" class="text">
                                                    <option value="">请选择</option>
                                                    @foreach( $type as $v)
                                                        <option value="{{$v->id}}" {{$list->type_id == $v->id ? 'selected':""}}>{{$v->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>年代</th>
                                            <td>
                                                <select name="year_id" class="text">
                                                    <option value="">请选择</option>
                                                    @foreach( $home as $v)
                                                        <option value="{{$v->id}}" {{$list->year_id == $v->id ? 'selected':""}}>{{$v->years}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>导演</th>
                                            <td>
                                                <select name="director_id" class="text">
                                                    <option value="">请选择</option>
                                                    @foreach( $director as $v)
                                                        <option value="{{$v->id}}" {{$list->director_id == $v->id ? 'selected':""}}>{{$v->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>演员</th>
                                            <td>
                                                <select name="actor_id" class="text">
                                                    <option value="">请选择</option>
                                                    @foreach( $actor as $v)
                                                        <option value="{{$v->id}}" {{$list->actor_id == $v->id ? 'selected':""}}>{{$v->actor_name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>电视剧简介</th>
                                            <td><input type="text" name="desc" value="{{$list->desc}}" class="text"></td>
                                        </tr>
                                        <tr>
                                            <th><input type="hidden" name="id" value="{{$list->id}}"></th>
                                            <td>
                                                <button class="submit">提交</button>
                                                <a href="{{url('/tv/index')}}"><button type="button" class="cannel">返回</button></a>
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
