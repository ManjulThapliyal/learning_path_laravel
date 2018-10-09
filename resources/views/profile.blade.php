@extends('template')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Profile </h1>
        <p>
            See What {{ $user->name }} has been up to on LaravelAnswers
        </p>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h3>Questions</h3>
                @foreach ($user->questions as $question)
                    <div class="card">
                        <div class="card-body">
                            <h4>{{ $question->title }}</h4>
                            <p>
                                {{ $question->description }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('questions.show',$question->id) }}" class="btn btn-link">View Question</a>
                        </div>
                    </div>
                    <br>    
                @endforeach
            </div>

            <div class="col-md-6">
                <h3>Answers</h3>

                @foreach ($user->answers as $answer )
                    <div class="card">
                        <p class="card-body" > 
                            {{ $answer->content }}
                        </p>
                    
                    </div>
                @endforeach







            </div>


        </div>

    </div>

@endsection