@extends('layouts.master')

@section('content')


<div class='jumbotron col-12 wh mx-auto mt-3 text-center' >
<h1 >
    {{ $bodybuilder->name }}</h1>
</div>

<div class='row'>

<div class='jumbotron col-6 wh mx-auto mt-1 ' >
 
    <h3> Subscriptions </h3>
    <hr>
    <ul>
    
    @foreach($subscriptions->reverse() as $subscription)
          <li>
            {{ $subscription->created_at->format('d M Y') }} 

            {{  date('d M Y') > $subscription->created_at? 'da': 'ne'  }} 
            </li>        
       
    @endforeach

    </ul>
    


</div>

    @if( 1 )

    <div class=' col-5  mx-auto mt-1 text-center'>

        <form class='wh jumbotron' action="/bodybuilder/{{ $bodybuilder->id }}" method="POST" >
            @csrf
            @method('PATCH')
    
             Refresh subscription  <input type="submit" value="+" class='dg btn'>
   
        </form>

        <div class="wh jumbotron">
        da
        </div>
    </div>

    @endif

</div>

@endsection