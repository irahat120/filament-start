<main>

    <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="mb-5">
                <h2 class="mb-4" style="line-height:1.5">{{$articles->title}}</h2>
                <span>{{\Carbon\Carbon::parse($articles->created_at)->format('d M, Y')}} <span class="mx-2">/</span> </span>
                <p class="list-inline-item">Category : 
                    <a href="#!" class="ml-1">{{$categori->name}}</a>
                </p>
                <p class="list-inline-item">Author : 
                    <a href="#!" class="ml-1">{{$articles->author}}</a>
                </p>
                <p class="list-inline-item">Tags : @foreach ($articles->tags as $tag)
                    <a href="#!" class="ml-1">{!!$tag.','!!}</a>
                    
                @endforeach
                </p>
                
              </div>
              <div class="mb-5 text-center">
                <div class="post-slider rounded overflow-hidden">
                  <img loading="lazy" decoding="async" src=" {{asset($articles->image) }}" alt="Post Thumbnail">
                  {{-- <img loading="lazy" decoding="async" src="../{{$articles->image }}" alt="Post Thumbnail"> --}}
                  
                </div>
              </div>
              <div class="content">
                {!!$articles->content!!}
                
              </div>
            </div>
          </div>
        </div>
      </div>
</main>
