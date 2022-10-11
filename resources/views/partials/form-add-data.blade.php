<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-data-form">
    Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="add-data-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-titlep fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        {{-- Form  --}}
        {{--==============--}}
        <form method="POST" action="{{ url("buku/add") }}">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" name="tittle" class="form-control" id="judul" >
            </div>
            <label for="description">Deskripsi buku</label>
            <div class="form-floating">
                <textarea class="form-control" name="desc" placeholder="Deskripsi Buku" id="description" style="height: 100px"></textarea>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" >Tambahh Data</button>
            </div>
        </form>
    </div>
    </div>
</div>