<table width="600" border="1">
	<tr>
		<td>Title</td>
		<td>Description</td>
	</tr>
	@foreach($books as $book)
		<tr>
			<td>{{ $book->title }}</td>
			<td>{{ $book->description }}</td>
		</tr>
	@endforeach
</table>
{!! $books->render() !!}

{!! $books->appends(['sort' => 'votes'])->render() !!}

{!! $books->fragment('foo')->render() !!}
{{ $books->count() }}
{{ $books->currentPage() }}

{{ $books->total() }}