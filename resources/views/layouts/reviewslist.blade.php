<!--Reviews List-->
<div id="reviews-table-container" class="table-responsive table-sm container-fluid text-center">
    @if ($reviews->total() == 0)
        <p>Nope</p>
    @else 
        <table id="reviews-table" class="table table-dark table-hover table-bordered">
            <thead>
                <th scope="col" style="width:10%">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Game</th>
                <th scope="col">Votes</th>
                <th scope="col">User</th>
                <th scope="col">Language</th>
                <th scope="col">Date</th>
                <th scope="col">View</th>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <a href="">
                        <tr>
                            
                            <td class="align-middle"><img class="img-fluid" src="{{ asset($review->image) }}" alt="review-image"></td>
                            <td class="align-middle">{{Str::limit($review->title,'60')}}</td>
                            <td class="align-middle">{{Str::limit($review->game_title,'20')}}</td>
                            <td class="align-middle">{{$review->votes}}</td>
                            <td class="align-middle">{{$review->user->name}}</td>
                            <td class="align-middle">{{$review->language}}</td>
                            <td class="align-middle">{{$review->created_at}}</td>
                            <td class="align-middle"><a href='{{route('home')}}' class="btn btn-warning fa fa-eye"></a></td>
                        </tr>
                    </a>
                @endforeach
            </tbody>
        </table>
        <div id="paginator-container" class="container-fluid col-sm-mt-3">
            {{ $reviews->links() }}
        </div>
    @endif
</div>
