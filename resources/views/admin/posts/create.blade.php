<form action="/admin/posts/create" method="post">

@csrf

<div>
    <label for="title">Título</label>
    <input type="text" name="title" id="title">
</div>

<div>
    <label for="subtitle">SubTítulo</label>
    <input name="subtitle" id="subtitle"></input>
</div>

<div>
    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
</div>

<div>
    <label for="date">Data</label>
    <input type="date" name="date" id="date">
</div>

<button type="submit">Salvar</button>

</form>