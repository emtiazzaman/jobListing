<x-layout :title="'Create Job | '">
    
    <x-breadcrumb :bread_name=" 'Create job' "/>

    <section class="contact-section section_padding">
        <div class="container">

        @auth
        

            <div class="row align-content-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="contact-title">Create a New Job</h2>
                    <h5 class="mb-30">Create new job with appropriate information</h5>
                </div>

                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="/jobs-process" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="name" type="text"
                                        placeholder='Enter company name' value="{{old('name')}}">
                                    @error('name')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group ">
                                    <label for="logo" class="inline-block text-lg mb-2">
                                        Company Logo
                                    </label>
                                    <input type="file" class="form-control w-100 " name="logo" >
                                </div>
                            </div>

                       <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="job_title" type="text"
                                        placeholder='Enter Job Title' value="{{old('job_title')}}" >
                                    @error('job_title')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="location" type="text"
                                        placeholder='Enter Location' value="{{old('location')}}"  >
                                    @error('location')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                
                                    <select class="w-100" name="category">
                                        <option selected disabled>Select the job Categories</option>
                                        <option value="Web">Web</option>
                                        <option value="Graphics">Graphics</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Typing">Typing</option>
                                    </select>
                                    @error('category')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                          
                            </div>
                            <div class="col-12 form-group">
                               
                                    <select class="w-100" name="experience">
                                        <option selected disabled>Select the candidate job experience</option>
                                        <option value="1">1 year</option>
                                        <option value="2">2 year</option>
                                        <option value="3">3 year</option>
                                        <option value="4">4 year</option>
                                        <option value="5">5 year</option>
                                    </select>
                                    @error('experience')
                                    <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                              
                            </div>
                            
                            <div class="col-12 form-group">
                               
                                    <select class="w-100" name="job_type">
                                        <option selected disabled>Select the candidate job type</option>
                                        <option value="Full time">Full time</option>
                                        <option value="Part time">Part time</option>
                                        <option value="Remote">Remote</option>
                                    </select>
                                    @error('job_type')
                                    <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                
                            </div>

                            <div class="col-12 form-group">
                               
                                <select class="w-100" name="qualification">
                                    <option selected disabled>Qualification</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Diploma">Diploma</option>
                                </select>
                                @error('qualification')
                                    <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                            
                        </div>

                            <div class="col-12 form-group ">
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="gender"  value="male">
                                    <label class="form-check-label" >Male</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"  value="female">
                                    <label class="form-check-label" >Female</label>
                                  </div>
                                  
                            @error('gender')
                                    <p class="text-danger mt-1">{{$message}}</p>
                            @enderror
                            
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="yearly_salary" type="number"
                                        placeholder='Minimum Yearly Salary(BDT)' value="{{old('yearly_salary')}}" >
                                    @error('yearly_salary')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="vacancy" type="number"
                                        placeholder="vacancy"  value="{{old('vacancy')}}" >
                                    @error('vacancy')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="description" rows="6">{{old('description')}}</textarea>
                                    @error('description')
                                        <p class="text-danger mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group mt-3 text-center">
                            <button type="submit" class="button button-contactForm btn_4 boxed-btn3">
                               Create Job
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        
        @else  
         
        <div class="alert alert-success">
            Please register to post a job. Not have an account? You should <a href="/register" class="alert-link">Register</a> here.
            </div>
          
           

        @endauth  
        </div>
    
    </section>

</x-layout>