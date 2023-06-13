<div class="d-inline-flex justify-content-center">
    <a href="{{ route('barang.edit', ['barang' => $barang->id]) }}"
        class="btn btn-outline-light btn-sm me-2 mx-2"><i class="bi-pencil-square"></i> Edit</a>
    <div>
        <form
            action="{{ route('barang.destroy', ['barang' => $barang->id]) }}"
            method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm me-2 mx-2"><i class="bi-trash"></i> Delete</button>
        </form>
    </div>
</div>
