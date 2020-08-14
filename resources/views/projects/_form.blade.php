@csrf
<label>
    Nombre del proyecto <br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br>
<label>
    URL del proyecto <br>
    <input type="text" name="url" value="{{ old('title', $project->url) }}">
</label>
<br>
<label>
    Descripcion del proyecto <br>
    <textarea type="text" name="description">{{ old('title', $project->description) }}</textarea>
</label>
<br>
<button> {{ $btnText }}</button>