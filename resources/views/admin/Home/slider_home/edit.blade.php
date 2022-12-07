<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}{{ $edit->judul }}">
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Heading</label>
    <input type="text" name="heading" class="form-control @error('heading') is-invalid @enderror" value="{{ old('heading') }}{{ $edit->heading }}">
    @error('heading')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
    value="{{ old('deskripsi') }}" id="edit" >{{ $edit->deskripsi }}
    </textarea>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<script>
    CKEDITOR.replace('edit');
</script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

