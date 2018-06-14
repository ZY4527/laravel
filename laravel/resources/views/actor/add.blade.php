@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">actor添加</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="info">
                            <form action="addSave" method="post">
                                {{csrf_field()}}
                                <table>
                                    <tr>
                                        <th>演员名称：</th>
                                        <td><input type="text" name="actor_name" class="text"></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td><button type="submit" class="submit">添加</button>
                                            <a href="{{url('/actor/index')}}">
                                                <button type="button" class="cannel">返回</button></a></td>
                                    </tr>
                                </table>

                                <p></p>
                                <p></p>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
