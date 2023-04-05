<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($members as $item)
          <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['phone'] }}</td>
            <td>{{ $item['address'] }}</td>
          </tr>            
        @endforeach
        </tbody>
      </table>

      <div>
        {{ $members->links() }}
      </div>
</body>
</html>

{{-- to use paginator using bootstrap
1) in controller
 function show(){
    $data = Member::paginate(5);
    return view('memberView',['members'=>$data]);
}
2) in which page you need pagination 
  <div>
    {{ $members->links() }}
  </div>
3) go to providers>appserviceprovider
  -use Illuminate\Pagination\Paginator; include this.
  - and down make function  like:
  public function boot(): void
  {
      Paginator::useBootstrap();
  } --}}

