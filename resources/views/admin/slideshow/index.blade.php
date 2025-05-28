@extends("admin.layouts.admin")
@section("content")
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Slideshow</h1>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Text</th>
                <th>Link</th>
                <th>Action</th>
            </tr>

            @foreach($slideshows as $slideshow)
            <tr>
                <th>{{($slideshows->currentPage()-1) * $slideshows->count()}}</th>
                <th> <img src="#"></th>
                <th>{{$slideshow['title']}}</th>
                <th>{{$slideshow['subtitle']}}</th>
                <th>{{$slideshow['text']}}</th>
                <th>{{$slideshow['link']}}</th>
                <th></th>

            </tr>
            @endforeach
        </table>
        <div class="d-flex">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="{{$slideshows->previousPageUrl()}}">Previous</a>
                </li>

                @for($i=0; $i<=$slideshows->lastPage(); $i++)
                    @if($slideshows->currentPage()==$i)
                    <li class="page-item">
                        <a class="page-link" href="{{$slideshows->url($i)}}">{{$i}}</a>
                    </li>
                    @else
                    @endfor
                    <li class="page-item">
                        <a class="page-link" href="{{$slideshows->nextPageUrl()}}">Next</a>
                    </li>
            </ul>
        </div>

    </div>
</main>

@endsection