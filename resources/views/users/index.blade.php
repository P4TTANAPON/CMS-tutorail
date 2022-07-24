@extends('layouts.app');
@section('content')
    <div class="card card-default">
        <div class="card-header">
            User
        </div>
        <div class="card-body">
            @if ($users->count()>0)
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @if (!$user->isAdmin())
                                    <td>
                                        <form class="" action="{{route('users.makeAdmin',$user->id)}}" method="post">
                                            @csrf
                                            <button type="submit" name="button" class="btn btn-primary btn-sm">Make admin</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">No User</h3>
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.delete_form').on('submit',function(){
                if(confirm("Are you want to delete data?")){
                    return true;
                }else{
                    return false;
                }
            })
        })
    </script>
@endsection


