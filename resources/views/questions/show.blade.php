@extends('template')

@section('content')
    <div class="container">
        
        <h1> {{ $question->title }} </h1>
        <p class="lead"> {{ $question->description }} </p>
        <p>
            Submitted By: {{ $question->user->name }}, {{ $question->created_at->diffForHumans() }}
        </p>


        <hr>
        {{-- Display all the questions related to this question --}}

        @if($question->answers->count())
            @foreach($question->answers as $answer  )
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p> {{ $answer->content }} </p>
                        <h6>
                            Answered By {{ $answer->user->name }}, {{ $answer->created_at->diffForHumans() }}
                        </h6>
                    </div>               
                </div>
            @endforeach

        @else
            <p>
                There are no questions submitted to this question yet. Please consider submitting one!
            </p>    
        @endif



        
        <hr>
        {{-- Display the form, to submit the new answer --}}

        <form action="{{ route('answers.store') }}" method="post">
            {{csrf_field()}}
            <h4>Submit Your Own Answers:</h4>
            <textarea class="form-control" name="content" rows="4"></textarea>
            <input type="hidden" value={{ $question->id }} name="question_id" />
            <button class="btn btn-primary">Submit Answer</button>        
        </form>


    </div>
@endsection