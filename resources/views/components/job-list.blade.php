@props(['jobs'])


<div class="job_listing_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3>Job Listing</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="brouse_job text-right">
                    <a href="/jobs" class="boxed-btn4">Browse More Job</a>
                </div>
            </div>
        </div>
        <div class="job_lists">
            <div class="row">
                @unless (count($jobs)==0)
                    @foreach ($jobs as $job)
                        <div class="col-lg-12 col-md-12">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        @if ($job->logo=='')
                                            <img class="img-fluid" src="{{ asset( 'img/svg_icon/1.svg' ) }}" alt="logo">
                                        @else
                                            <img  class="img-fluid" src="{{ asset( "storage/$job->logo" ) }}" alt="logo">
                                        @endif
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="/jobs/{{ $job->id }}"><h4>{{ $job->job_title }}</h4></a>
                                        <div class="links_locat d-flex align-items-center">
                                            <div class="location">
                                                <p> <i class="fa fa-map-marker"></i> {{ $job->location }}</p>
                                            </div>
                                            <div class="location">
                                                <p> <i class="fa fa-clock-o"></i> {{ $job->job_type }}</p>
                                            </div>
                                            <div class="location">
                                                <a  href="/?category_tag={{ $job->category }}">
                                                    <p style="color:rgb(115, 115, 231);"> <i class="fa fa-star"></i> {{ $job->category }}</p>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs_right">
                                    <div class="apply_now">
                                        <a href="/jobs/{{$job->id}}" class="boxed-btn3">Apply Now</a>
                                    </div>
                                    <div class="date">
                                        <p>{{ $job->updated_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @else
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                     {{"No Job Found!"}}
                    </div>
                </div>

                @endunless
            </div>
        </div>

        {{$jobs->links()}}

        {{-- {{ $jobs->render("pagination::default") }} --}}

        {{-- artisan vendor:publish --tag=laravel-pagination --}}

    </div>
</div>
