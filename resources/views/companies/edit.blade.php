@extends('layouts.app')

@section('content')
       <br>

            <div class="col-md-6">

                <form method="post" action="{{ route('companies.update', [$company->id]) }}">
                    @csrf
                    <input type="hidden" name="_method" value="put" >

                    <div class="form-group">
                        <label for="company-name">Name<span class="required">*</span> </label>
                        <input placeholder="Enter Name" id="company-name" required
                               name="name" spellcheck="false" class="form-control" value="{{ $company->name }}" />
                    </div>

                    <div class="form-group">
                        <label for="company-content">Description<span class="required">*</span> </label>
                        <textarea placeholder="Enter Description" id="company-desc" rows="5" spellcheck="false" required
                                  name="description" spellcheck="false" class="form-control">{{ $company->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
@endsection

