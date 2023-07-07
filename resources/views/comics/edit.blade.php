@extends('comics')

@section('contents')
<h1>Inserisci Nuovo Film Comics!</h1>
<form method="POST" action="{{ route('comics.store') }}">
  @csrf

  <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input
          type="text"
          class="form-control @error('title') is-invalid @enderror"
          id="title"
          name="title"
          value="{{ old('title') }}"
      >
      <div class="invalid-feedback">
          @error('title') {{ $message }} @enderror
      </div>
  </div>

  <div class="mb-3">
    <label for="thumb" class="form-label">Immagine</label>
    <input
        type="text"
        class="form-control @error('thumb') is-invalid @enderror"
        id="thumb"
        name="thumb"
        value="{{ old('thumb') }}"
    >
    <div class="invalid-feedback">
        @error('thumb') {{ $message }} @enderror
    </div>
</div>

  <div class="mb-3">
      <label for="price" class="form-label">prezzo</label>
      <input
          type="text"
          class="form-control @error('price') is-invalid @enderror"
          id="price"
          name="price"
          value="{{ old('price') }}"
      >
      <div class="invalid-feedback">
          @error('price') {{ $message }} @enderror
      </div>
  </div>

  <div class="mb-3">
      <label for="series" class="form-label">Serie</label>
      <input
          type="text"
          class="form-control @error('series') is-invalid @enderror"
          id="series"
          name="series"
          value="{{ old('series') }}"
      >
      <div class="invalid-feedback">
          @error('series') {{ $message }} @enderror
      </div>
  </div>

  <div class="mb-3">
      <label for="sale_date" class="form-label">Data Vendita</label>
      <input
          type="date"
          class="form-control @error('sale_date') is-invalid @enderror"
          id="sale_date"
          name="sale_date"
          value="{{ old('sale_date') }}"
      >
      <div class="invalid-feedback">
          @error('sale_date') {{ $message }} @enderror
      </div>
  </div>

  <div class="mb-3">
      <label for="peso" class="form-label">Tipologia</label>
      <input
          type="text"
          class="form-control @error('type') is-invalid @enderror"
          id="type"
          name="type"
          value="{{ old('type') }}"
      >
      <div class="invalid-feedback">
          @error('type') {{ $message }} @enderror
      </div>
  </div>

  <div class="mb-3">
      <label for="descrizione" class="form-label">Descrizione</label>
      <textarea
          class="form-control @error('description') is-invalid @enderror"
          id="description"
          rows="3"
          name="description">{{ old('description') }}</textarea>
      <div class="invalid-feedback">
          @error('description') {{ $message }} @enderror
      </div>
  </div>

  <button class="btn btn-primary">Salva</button>
</form>
    
@endsection