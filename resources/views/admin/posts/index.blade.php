<a href="/admin/posts/create">Criar Post</a>

<hr>
<table border>
    <thead>
        <tr>
            <th>Título</th>
            <th>Subtítulo</th>
            <th>Data</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->subtitle }}</td>
                <td>{{ date('d/m/Y', strtotime($post->date)) }}</td>
                <td><a href="/admin/posts/{{ $post->id }}/edit">Editar</a></td>
                <td>
                    <form action="/admin/posts/{{ $post->id }}/delete" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
