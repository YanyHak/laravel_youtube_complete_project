
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>Index</title>
</head>
<body>
    

    <h1 class="text-center mt-5 ">Create Project (Admin)</h1>
    <hr>
        <table class="table table-bordered ">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col" >Category</th>
            <th scope="col">Description</th>
            <th scope="col">Thumbnail</th>
            <th scope="col"  class="col-1">Gitub Link</th>
            <th scope="col">YouTube Link</th>
            <th scope="col">Skills</th>
            {{-- <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th> --}}
            <th scope="col" class="col-2">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project )
                <tr>

                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->category->name}}</td>
                    <td>{{$project->description}}</td>
                    <td><img class="img-fluid" style="height: 100px; width: 100px;" src="/images/{{$project->thumbnail}}" /></td>
                    <td>{{$project->github_link}}</td>
                    <td>{{$project->youtube_link}}</td>
                    <td>{{$project->skills}}</td>
                    {{-- <td>{{$project->created_at->diffForHumans()}}</td>
                    <td>{{$project->updated_at->diffForHumans()}}</td> --}}
                  
                      <td>
                             <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="View"><a style="color:white;" href="#"><i class="fa fa-table"></i></a></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><a style="color:white;" href="{{route('admin.projects.edit', $project->id)}}"><i class="fa fa-edit"></i></a></button>
                                                </li>
                                               
                                                <li class="list-inline-item">
                                                      <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash"></i></button>
                                                            {{-- <input type="submit" value="Delete" class="btn btn-danger" /> --}}
                                                        </form>
                                                    
                                                </li>
                                            </ul>
                     
                    </td>

                    


                </tr>  
            @endforeach
        </tbody>
        
      </table>

</body>
</html>
