<!DOCTYPE html>

   
    <body>
    <table>
  <tr>
    <th>Book</th>
    <th>Author</th>
    <th>Release Date</th>
  </tr>
  @foreach ($books as $book)
  <tr>
    <td>{{ $book->title }}</td>
    <td>{{ $book->author }}</td>
    <td>{{ $book->release_date }}</td>
  </tr>
  @endforeach
  @if (count($books) == 0)
  <tr>
    <td colspan="3">No books found</td>
  </tr>
  @endif
</table>
    </body>
</html>



