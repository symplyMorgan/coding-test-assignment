@extends('layouts.app')

@section('styles')
     <style>
          button[type="submit"] {
               background-color: rgb(255 45 32 / 1);
               border-radius: 0.35rem;
               padding: 0.5rem 0.75rem;
               font-weight: 600;
               color: white;
               transition: background-color 50ms ease-in-out;
          }

          button[type="submit"]:hover {
               background-color: rgb(197 26 15 / 1);
          }
     </style>
@endsection

@section('content')
          <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
               <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <div class="flex justify-center">
                         <x-application-logo />
                    </div>

                    <div class="mt-16 text-center">
                         <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">@lang('Verify your email address')</h2>
                         <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ad cupiditate <br />magni vel eligendi dignissimos atque quisquam eius nemo. Cum ipsum error laborum assumenda. <br />At ullam fuga aperiam repellendus temporibus.
                         </p>
                         <form action="{{ route('verification.send') }}" method="POST" class="mt-4">
                              <button type="submit">Resend verification link</button>
                         </form>
                    </div>
               </div>
          </div>
@endsection