
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h2> Ask Question</h2>
                  <div class="ml-auto">
                  <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to All Questions</a>
                  </div>
                </div>
              </div>

                <div class="card-body">
                <form action="{{ route('questions.store') }}" method="POST">
                  <div class="form-group">
                    <label for="question-title">Question Title</label>
                    <input type="text" name="tilte" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">
                    @if ($errors->has('title'))
                      <div class="invalid-feedback">
                      <strong>{{ $errors->first('title')}}</strong>
                      </div>

                    @endif
                  </div>

                  <div class="form-group">
                    <label for="question-body">Explaine you question</label>
                    <textarea name="body" id="question-body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="10"></textarea>
                    @if ($errors->has('body'))
                      <div class="invalid-feedback">
                      <strong>{{ $errors->first('body')}}</strong>
                      </div>

                    @endif
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-lg">Submit Question</button>
                  </div>
                
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
