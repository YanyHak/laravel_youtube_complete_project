
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
    @include('UsersPanel.Nav.Navbar')
    <h1 class="text-center mt-5 ">User Panel Of Projects Search</h1>
    <hr>
     <div class="container">
      <div class="row ">
    @if ( $earched_items)
    @foreach ( $earched_items as $project)
      <div class="col-md-3">
         <div class="card">
    <img src="/images/{{$project->thumbnail}}" class="card-img-top " alt="...">
    <div class="card-body">
       <h5 class="card-title">{{$project->title}}</h5>
                                <p class="card-text"><b>Category: {{$project->category->name}}</b></p>
                                <a href="{{$project->github_link}}" target="_blank" class="btn btn-primary">Git</a>
                                <a href="{{$project->youtube_link}}" target="_blank" class="btn btn-danger">YouTube</a>
                                
    </div>
    <div class="card-footer">
      <a href="{{route('projects.detail', $project->id)}}" class="btn btn-success">Detail</a>
    </div>
      </div>
  </div>  
    @endforeach
        
    @endif
 
  
  
</div>
        
        {{-- <div class="row justify-content-center">

            <div class="col">
                <h1 class="text-center">Skills</h1><br>
                @include('UsersPanel.Skills.show_skills_chart');
            </div>


        </div> --}}
         <div class="mt-4">
             <span>{{ $earched_items->links() }}</span>
         </div>
      </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
