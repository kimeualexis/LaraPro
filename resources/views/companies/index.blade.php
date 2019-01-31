@extends('layouts.app')

@section('content')
    <div class="row">
       @foreach($companies as $company)
       <div class="col-md-3">
       <div class="card">
           <div class="card-header">
               <h3 class="text-primary"><a href="/companies/{{ $company->id }}">{{  $company->name }}</a></h3>

           </div>
           <div class="card-body">
               <p>{{  $company->description }}</p>
           </div>
           <div class="card-footer">
               <ol class="list-unstyled"><li><a href="/companies/{{ $company->id }}/edit">Edit</a> </li>

                   <li><a
                       href="#"
                       onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                   >
                       Delete
                   </a>

               <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}"
                     method="POST" style="display: none;">
                   <input type="hidden" name="_method" value="delete">
                   @csrf
               </form>

                   </li>
               </ol>
           </div>
       </div>
   </div>
           @endforeach
    </div>

@endsection


