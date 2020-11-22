{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- profile.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む --}}
@section('title', 'プロフィールの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィールの新規作成</h2>

                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                    <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                    </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }} ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class="col-md-10">
                            <select class="form-control" name="gender" value="{{ old('gender') }} ">
                                <option>男性</option>
                                <option>女性</option>
                                <option>教えない</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }} ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>

        </div>
      </div>
    </div>
@endsection