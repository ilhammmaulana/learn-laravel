{{-- {{ dd($book_list) }} --}}
		@extends('layouts/main')

		@section('container')
		<div class="container mt-5	">
			<div class="row">
				<div class="col-md-2">
					@include('partials/form-add-data')
				</div>
				<div class="col-md-10">
				<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Desc</th>
    </tr>
	{{-- <?php dd($book_list) ?> --}}
	<?php 
	$i = 0
	?>
	@foreach($book_list as $book)
	<?php $i++ ?>
	  <tr>
		<td scope="col">{{ $i }}</td>
		<td scope="col">{{ $book->tittle }}</td>
		<td scope="col">{{ $book->desc }}</td>
		<td scope="col">
			<!-- Button trigger modal -->
				@include('partials/form-edit-data')
		</td>
		<td scope="col">
				@include('partials/form-delete-data')
		</td>


	  </tr>
	@endforeach
  </thead>
  <tbody>
    
  </tbody>
</table>
				</div>				
			</div>
		</div>
		@endsection
