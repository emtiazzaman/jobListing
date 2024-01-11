<x-layout :title="'Find your dream job | '">

<x-hero-slider :jobs="$jobs"/>

<x-category/>

<x-popular-category :categories="$categories"/>

<x-job-list :jobs="$jobs" />

<x-featured-candidates/>

<x-top-companies/>

<!-- job_searcing_wrap  -->
<div class="job_searcing_wrap overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Looking for a Job?</h3>
                    <p>We provide online instant cash loans with quick approval </p>
                    <a href="#" class="boxed-btn3">Browse Job</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Looking for a Expert?</h3>
                    <p>We provide online instant cash loans with quick approval </p>
                    <a href="/candidates" class="boxed-btn3">Browse candidates</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_searcing_wrap end  -->

<x-testimonials/>

<x-notice />

</x-layout>

