
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'プロファイルの新規作成'を埋め込む --}}
@section('title', 'Myプロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マイプロフィール</h2>
            </div>
        </div>
    </div>
@endsection