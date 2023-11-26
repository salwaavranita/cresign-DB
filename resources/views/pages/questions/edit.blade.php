@extends('layouts.app')

@section('title', 'Edit Questions')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Question</h1>
                </h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Edit Question</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('questions.update', $question) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Question</label>
                                <input type="text"
                                    class="form-control @error('question')
                                is-invalid
                            @enderror"
                                    name="question" value="{{ $question->question }}">
                                @error('question')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Category Question</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="BAB_1" class="selectgroup-input"
                                        @if ($question->category == 'BAB_1') checked @endif>
                                        <span class="selectgroup-button">BAB 1</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="BAB_2" class="selectgroup-input"
                                        @if ($question->category == 'BAB_2') checked @endif>
                                        <span class="selectgroup-button">BAB 2</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="BAB_3" class="selectgroup-input"
                                        @if ($question->category == 'BAB_3') checked @endif>
                                        <span class="selectgroup-button">BAB 3</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="BAB_4" class="selectgroup-input"
                                        @if ($question->category == 'BAB_4') checked @endif>
                                        <span class="selectgroup-button">BAB 4</span>
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Option A</label>
                                <input type="text"
                                    class="form-control @error('option_a')
                                is-invalid
                            @enderror"
                                    name="option_a" value="{{ $question->option_a }}">
                                @error('option_a')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Option B</label>
                                <input type="text"
                                    class="form-control @error('option_b')
                                is-invalid
                            @enderror"
                                    name="option_b" value="{{ $question->option_b }}" >
                                @error('option_b')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Option C</label>
                                <input type="text"
                                    class="form-control @error('option_c')
                                is-invalid
                            @enderror"
                                    name="option_c"value="{{ $question->option_c }}">
                                @error('option_c')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Option D</label>
                                <input type="text"
                                    class="form-control @error('option_d')
                                is-invalid
                            @enderror"
                                    name="option_d" value="{{ $question->option_d }}">
                                @error('option_d')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Correct Answer</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="correct_answer" value="A" class="selectgroup-input"
                                        @if ($question->correct_answer == 'A') checked @endif>
                                        <span class="selectgroup-button">A</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="correct_answer" value="B" class="selectgroup-input"
                                        @if ($question->correct_answer == 'B') checked @endif>
                                        <span class="selectgroup-button">B</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="correct_answer" value="C" class="selectgroup-input"
                                        @if ($question->correct_answer == 'C') checked @endif>

                                        <span class="selectgroup-button">C</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="correct_answer" value="D" class="selectgroup-input"
                                        @if ($question->correct_answer == 'D') checked @endif>
                                        <span class="selectgroup-button">D</span>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
