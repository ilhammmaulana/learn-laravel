{{-- {{ dd($book_list) }} --}}
		@extends('layouts/main')

		@section('container')
		{{-- {{ bilangHello('Ilham') }} --}}
		<div class="container mt-5	">
			<ul>
				@error('tittle') 
				 <p class="text-danger">Maaf anda harus mengisi <b>judul</b> minimal 10 karakter atau lebih</p>
				@enderror

				@error('desc') 
				 <p class="text-danger">Maaf anda harus mengisi <b>deskripsi</b> minimal 25 karakter atau lebih</p>
				@enderror
{{-- 				@foreach($errors->all() as $msgError)
				<li>{{ $msgError }}</li>
				@endforeach --}}
			</ul>
			<div class="row justify-content-around">
				<div class="col-md-2">
					@include('partials/form-add-data')
				</div>
				<div class="col-md-10">
					<table class="table" width="800px">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Judul Buku</th>
							<th scope="col">Deskripsi Buku</th>
							<th scope="col" colspan="2"></th>

						</tr>
					<?php $i = 0?>
					@foreach($book_list as $book)
					<?php $i++ ?>
					  <tr>
						<td scope="col" >{{ $i }}</td>
						<td scope="col">{{ $book->tittle }}</td>
						<td scope="col" style="white-space: pre-wrap ;" width="70%" >{{ $book->desc }}</td>
						<td scope="col" >
							<!-- Button trigger modal -->
								@include('partials/form-edit-data')
						</td>
						<td scope="col">
								@include('partials/form-delete-data')
						</td>


					  </tr>
					@endforeach
					</table>
				</div>				
			</div>
		</div>
		@endsection
