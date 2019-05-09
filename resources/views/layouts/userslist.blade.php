<!--Users list-->
<div id="reviews-table-container" class="table-responsive table-sm container-fluid text-center">
    @if ($users->count() < 1)
        <p>Nope</p>
    @else
        <table id="users-table" class="table table-dark table-hover table-bordered">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <a href="">
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    </a>
                @endforeach
            </tbody>
        </table>
        <div id="paginator-container" class="container-fluid col-sm-mt-3">
            {{ $users->links() }}
        </div>
    @endif
</div>
