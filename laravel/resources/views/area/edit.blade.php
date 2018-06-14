
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
                                        <input type="hidden" name="id" value="{{$data->id}}">
                                        <tr>
                                            <th>地区名称：</th>
                                            <td><input type="text" name="area_name" value="{{$data->area_name}}"></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td><button class="submit" type="submit">修改</button>
                                                <a href="/area/index"><button type="button" class="cannel">返回</button></a>
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
