@extends('client.layout.app')
@section('title')
    
@endsection
@section('content')
<section class="confirmation-area section-bg-2 pat-100 pab-100">
    <div class="container">
        <div class="confirmation-contents center-text">
            <div class="confirmation-contents-icon">
                <i class="las la-check"></i>
            </div>
            <h4 class="confirmation-contents-title"> Your reservation is confirmed </h4>
            <p class="confirmation-contents-para"> Dear Nelson, Your reservation <a href="javascript:void(0)">
                    #84359804 </a> has been confirmed. Please check your mail for reservation invoice. Thanks for
                reserving our hotel! </p>
            <div class="btn-wrapper flex-btn mt-4 mt-lg-5">
                <a href="javascript:void(0)" class="cmn-btn btn-outline-1 color-one"> Back to Home </a>
                <a href="javascript:void(0)" class="cmn-btn btn-bg-1"> <span class="icon"><i
                            class="las la-cloud-download-alt"></i></span> Download Invoice </a>
            </div>
        </div>
    </div>
</section>
@endsection
