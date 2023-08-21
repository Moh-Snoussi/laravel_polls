@extends('base', ['title' => 'Laravel'])

@section('title', 'Laravel')

@section('content')
    <h2>Questions</h2>

    @foreach ($questions as $question)
        <div class="question">
            <h3>{{ $question->question_text }}</h3>

            @foreach($question->choices as $choice)
                <div class="choice">
                    <label for="choice_{{ $choice->id }}">
                        {{ $choice->choice_text }}
                    </label>
                    <input type="radio"
                           name="choice"
                           value="{{ $choice->id }}"
                           id="choice_{{ $choice->id }}">
                </div>
            @endforeach
        </div>
    @endforeach
@stop
