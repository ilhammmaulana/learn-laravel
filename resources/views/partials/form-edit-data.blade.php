<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-data-form-{{ $i }}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="edit-data-form-{{ $i }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-titlep fs-5" id="exampleModalLabel">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        {{-- Form  --}}
        {{--==============--}}
        <form method="POST" action="{{ url('buku/edit') }}">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" name="tittle" class="form-control" id="judul" value="{{ $book->tittle }}" >
            </div>
            <label for="description">Deskripsi buku</label>
            <div class="form-floating">
                <textarea class="form-control" name="desc" id="description" style="height: 100px">{{ $book->desc }}</textarea>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" >Edit</button>
            </div>
            <input type="hidden" name="id" value="{{ $book->id }}">
        </form>
    </div>
    </div>
</div>