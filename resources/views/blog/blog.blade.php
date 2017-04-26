@extends('layouts.layout')

@section('title', 'BLOG')

@section('heading')
    <a class="btn btn-info" href="/blog"><span class="glyphicon glyphicon-arrow-left"></span></a> &nbsp; LARAVEL BLOG
@endsection

@section('body')
    @foreach ($post as $row)
        <h2>{{ $row->judul }}</h2>
        {{ $row->isi }}
  	@endforeach

  	<br/><br/>
    <a class="btn btn-success" href="/blog/{{ $row->id }}/update">Ubah</a>
    <a class="btn btn-danger" href="/blog/{{ $row->id }}/delete">Hapus</a>
    <br/>
@endsection
