<x-layout>                       
   
    

   
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                  
                        {{-- <img src="..." class="img-thumbnail" alt="..."> --}}
                            
                    <h1 class="display-4">Benvenuti nel mio sito-portfolio!</h1>
                    <p class="lead">Sono un full-stack developer specializzato in Laravel e Bootstrap 5.3.</p>
                </div>
            </div>
        </div>
    </section>

    


    <div class="container">
        <div class="row">
            {{-- @foreach ($posts as $post) --}}
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{-- {{$post->title}} --}}
                    </div>
                    <div class="card-body">
                        <p></p>
                        {{-- <a href="{{route('posts.show', $post->slug)}}" class="btn btn-primary">Leggi di più</a> --}}
                        <a href="" class="btn btn-primary">Leggi di più</a>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>


            
</x-layout>