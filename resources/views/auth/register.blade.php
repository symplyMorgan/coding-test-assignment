@extends('layouts.app')

@section('styles')
     <style>
          label {
               font-weight: 500;
               margin-bottom: 0.25rem;
          }

          input {
               max-width: 100%;
               width: 100%;
               padding: 0.5rem;
               border-radius: 0.35rem;
          }

          input:focus {
               outline: none;
          }

          .mb-3 {
               margin-bottom: 0.75rem;
          }

          .text-danger {
               color: rgb(249 61 50 / 1);
          }

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

          @media (prefers-color-scheme: dark) {
               input {
                    background-color: rgb(28 37 56 / 1);
                    color: #FFFFFF;
               }
          }
     </style>
@endsection

@section('content')
          <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
               <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <div class="flex justify-center">
                         <x-application-logo />
                    </div>

                    <div class="mt-16">
                         <form action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
                              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                                   <div class="mb-3">
                                        <label for="first-name" class="text-gray-300 dark:text-gray-400">First name</label>
                                        <input type="text" id="first-name" name="first_name" value="{{ old('first_name') }}" maxlength="255" />
                                        <x-error :messages="$errors->get('first_name')" />
                                   </div>

                                   <div class="mb-3">
                                        <label for="last-name" class="text-gray-300 dark:text-gray-400">Last name</label>
                                        <input type="text" id="last-name" name="last_name" value="{{ old('last_name') }}" maxlength="255" />
                                        <x-error :messages="$errors->get('last_name')" />
                                   </div>
                              </div>
                              
                              <div class="mb-3">
                                   <label for="email-address" class="text-gray-300 dark:text-gray-400">Email address</label>
                                   <input type="email" id="email-address" name="email" value="{{ old('email') }}" maxlength="255" />
                                   <x-error :messages="$errors->get('email')" />
                              </div>

                              <div class="mb-3">
                                   <label for="password" class="text-gray-300 dark:text-gray-400">Password</label>
                                   <input type="password" id="password" name="password" minlength="5" />
                                   <x-error :messages="$errors->get('password')" />
                              </div>

                              <div class="mb-3">
                                   <label for="password-confirmation" class="text-gray-300 dark:text-gray-400">Re-type Password</label>
                                   <input type="password" id="password-confirmation" name="password_confirmation" minlength="5" />
                              </div>

                              <div class="mb-3">
                                   <label for="avatar" class="text-gray-300 dark:text-gray-400">Profile picture</label>
                                   <input type="file" id="avatar" name="avatar" accept="image/png,image,jpg" />
                                   <span class="text-sm text-gray-300 dark:text-gray-400">(max. 2MB)</span>
                                   <x-error :messages="$errors->get('avatar')" />
                              </div>

                              <button type="submit" class="">Create Account</button>
                         </form>
                    </div>
               </div>
          </div>
@endsection