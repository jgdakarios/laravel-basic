@csrf
<div class="form-group">
    <label for="title">Nombre del proyecto</label>
    <input 
        id="title" 
        type="text" 
        name="title" 
        class="form-control border-0 bg-light shadow-sm" 
        value="{{ old('title', $project->title) }}">
</div>

<div class="form-group">
    <label for="url">URL del proyecto</label>
    <input 
        id="url" 
        type="text" 
        name="url" 
        class="form-control border-0 bg-light shadow-sm" 
        value="{{ old('url', $project->url) }}">
</div>

<div class="form-group">
    <label for="description">Descripcion del proyecto</label>
    <textarea 
        id="description" 
        type="text" 
        name="description" 
        class="form-control border-0 bg-light shadow-sm" 
        value="{{ old('description', $project->description) }}">
    </textarea>
</div>

<button class="btn btn-primary btn-lg btn-block"> {{ $btnText }}</button>

<a class="btn btn-link btn-block" href="{{ route('projects.index') }}" >
    Cancelar
</a>