<table border>
    <thead>
        <tr>
            <th>Título</th>
            <th>Subtítulo</th>
            <th>Data</th>
            <th>Ver</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                
                <td>{{ $post->title }}</td>
                <td>{{ $post->subtitle }}</td>
                <td>{{ date('d/m/Y', strtotime($post->date)) }}</td>
                <td><a href="/blog/{{ $post->id }}">Ver</a></td>
                
            </tr>
        @endforeach
    </tbody>
</table>
