<form action="/admin/posts/{{ $post->id }}/edit" method="post">

@csrf
@method('PUT')

<div>
    <label for="title">Título</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}">
</div>

<div>
    <label for="subtitle">SubTítulo</label>
    <input name="subtitle" id="subtitle" value = "{{ $post->subtitle }}">
</div>

<div>
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10">{{ $post->description }}</textarea>
</div>

<div>
    <label for="date">Data</label>
    <input type="date" name="date" id="date" value = "{{ $post->date }}">
</div>

<button type="submit">Atualizar</button>

</form>

<a href="/admin/posts">Voltar</a>