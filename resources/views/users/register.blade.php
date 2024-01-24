<x-layout :title="'User Registeration | '">
    
    <x-breadcrumb :bread_name="'Registration'"/>
    <section class="contact-section section_padding">
        <div class="container">
    
            <div class="row align-content-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="contact-title">User Registration</h2>
                    <h5 class="mb-30"> Create an account to post and apply for jobs </h5>
                </div>
    
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="/create-user" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email"
                                        placeholder='Enter user email address'
                                        value="{{old('email')}}"
                                        >
                                    @error('email')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="full_name" type="text"
                                        placeholder='Enter full name Title'
                                        value="{{old('full_name')}}"
                                        >
                                    @error('full_name')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password"
                                        placeholder='Enter your password'
                                        value="{{old('password')}}"
                                        >
                                    @error('password')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="password_confirmation" type="password"
                                        placeholder='Confirm password'>
                                    @error('password_confirmation')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="current_profession" type="text"
                                        placeholder='Enter your profession (i.e: student,banker etc)'
                                        value="{{old('current_profession')}}"
                                        >
                                    @error('current_profession')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
    
                            
                            <div class="col-12">
                                <div class="form-group ">
                                    <label  class="inline-block text-lg mb-2">
                                        Profile Picture
                                    </label>
                                    <input type="file" class="form-control w-100 " name="profile_picture">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group ">
                                    <label  class="inline-block text-lg mb-2">
                                        Your CV
                                    </label>
                                    <input type="file" class="form-control w-100 " name="cv">
                                </div>
                            </div>
    
                           
                        </div>
    
                        <div class="form-group mt-3 text-center">
                            <button type="submit" class="button button-contactForm btn_4 boxed-btn3">
                               Register
                            </button>
                        </div>
    
                    </form>
                </div>
    
            </div>
        </div>
    </section>

</x-layout>
