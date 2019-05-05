@extends('layouts.master')

@section('content')





<div class='row'>

<div class='col-8 wh jumbotron'>

            <h3> Present users </h3>

            <hr>

            <div class="row">

            @foreach($bodybuilders as $bodybuilder)
            
            <div class='col-5 col-sm-4'>
            <a href="/bodybuilder/{{$bodybuilder->id}}">
            
                <div class='card dg m-1'>
           
                    <div class='card-body'>
                    
                    <h5 class='card-title'>
                         {{ $bodybuilder->name }}                    
                    </h5>

                    <small> {{$bodybuilder->nickname}} </small>

                    </div>

                </div>
                
                </a>
            
            </div>
        @endforeach
    </div>

{{ $bodybuilders->links() }}

</div>



<div class='col-4'>
    <div class='wh jumbotron'>
    <h3> Expired subscriptions </h3>
    <hr>
      
        <ul>

        <li>
        </li>

        </ul>

    </div>
</div>

</div>

@endsection