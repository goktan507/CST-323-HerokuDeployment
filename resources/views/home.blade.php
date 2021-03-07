<x-home-main>




@section('content')


        <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
        </h1>

    @foreach($posts as $post)
        <div class="card mb-4">
            <img class="card-img-top" src="{{$post->post_image}}" alt="{{$post->post_image}}">
            <div class="card-body">
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text">{{$post->body}}</p>
                <a href="{{route('post', $post)}}" class="btn btn-primary">Read More &rarr;</a>

            </div>
            <div class="card-footer text-muted">

                Posted on {{$post->created_at->diffForHumans()}}-->

                Posted on {{$post->created_at}}

                <a href="#">Start Bootstrap</a>
            </div>
        </div>
    @endforeach

    @endsection

</x-home-main>
