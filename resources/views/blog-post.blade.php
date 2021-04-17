<x-home-main>

    @section('content')

            <h1 class="mt-4">{{$post->title}}</h1>

            <p class="lead">
                
            </p>

            <hr>

            <p>Posted on {{$post->created_at}}</p>

            <hr>

            <img class="img-fluid rounded" src="{{$post->post_image}}" alt="">

            <hr>


            <p>{{$post->body}}</p>


            <hr>

            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">User1</h5>
                    Mhm
                </div>
            </div>

            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">User2</h5>
                    Yeah
                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">User3</h5>
                            Hello
                        </div>
                    </div>

                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">User4</h5>
                            Wow
                        </div>
                    </div>

                </div>
            </div>

    @endsection

</x-home-main>
