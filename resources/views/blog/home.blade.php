@extends('layouts.layout')

@section('title', 'HOMEPAGE')

@section('heading')
    <a class="btn btn-info" href="/blog/create">Tambah Artikel</a>
@endsection

@section('body')

	  @foreach ($post as $row)

        <a href="/blog/{{$row->id}}"><h2>{{ $row->judul }}</h2></a>
        {{ $row->isi }}
		  	<br/><br/>
		    <form action="/blog/{{ $row->id }}" method="post">
		    		<input class="btn btn-danger" type="submit" name="delete" value="Hapus">
		    		{{ csrf_field() }}
		      	<input type="hidden" name="_method" value="DELETE">
				  	</br>
		    </form>

		  	<hr>
    @endforeach

@endsection
