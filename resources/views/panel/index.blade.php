@extends('layouts.panel.master')
 
@section('title', 'داشبورد')
 
{{-- head modules --}}
@prepend('endOfhead')
    
@endprepend

@section('content')
    <main class="is-rtl">
            <header class="py-10 mb-4 bg-gradient-primary-to-secondary">
                <div class="container-xl px-4">
                    <div class="text-center">
                        <h1 class="text-white">به داشبورد مدیریتی خوش آمدید</h1>
                        <a href="{{ route('login') }}">login</a>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
         
            
        </main>

       
        
@endsection

{{-- body modules --}}
@prepend('endOfbody')
    
@endprepend