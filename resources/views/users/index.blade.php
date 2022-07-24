@extends('layouts.app');
@section('content')
    <div class="card card-default">
        <div class="card-header">
            User
        </div>
        <div class="card-body">
            
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


