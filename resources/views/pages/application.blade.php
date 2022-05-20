@extends('layouts.app')
@section('title', 'Job Application')
	
	
@section('content')

<main id="main" class="clearfix width-100">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div id="post-16946" class="post-16946 page type-page status-publish hentry"> <span
                    class="entry-title rich-snippet-hidden">[Remote] Expert SEO Strategist For
                    Mission-Driven SEO Agency</span><span class="vcard rich-snippet-hidden"><span
                        class="fn"><a href="{{ route('welcome') }}" title="Posts by andres"
                            rel="author">andres</a></span></span><span
                    class="updated rich-snippet-hidden">2021-09-17T09:07:47-04:00</span>
                <div class="post-content">
                    <div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-parallax-none reduce-padding-mobile nonhundred-percent-fullwidth non-hundred-percent-height-scrolling lazyload"
                        style="background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:2%;padding-right:20%;padding-bottom:2%;padding-left:20%;margin-bottom: 0px;margin-top: 0px;border-width: 0px 0px 0px 0px;border-color:#eae9e9;border-style:solid;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"
                        data-bg="{{ asset('wp-content/uploads/2019/10/jobs-header.jpg') }}">
                        <div class="fusion-builder-row fusion-row">
                            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last"
                                style="margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"
                                    style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 10% 0px 10%;">
                                    <style type="text/css"></style>
                                    <div class="fusion-title title fusion-title-1 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-one"
                                        style="font-size:36px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;">
                                        <h1 class="title-heading-center"
                                            style="margin:0;font-size:1em;color:#ffffff;line-height:50px;">
                                            {{ $job->title }}</h1>
                                    </div>
                                    <div class="fusion-sep-clear"></div>
                                    <div class="fusion-separator fusion-full-width-sep"
                                        style="margin-left: auto;margin-right: auto;margin-top:30px;width:100%;">
                                    </div>
                                    <div class="fusion-sep-clear"></div>
                                    <style type="text/css"></style>
                                    <div class="fusion-title title fusion-title-2 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three"
                                        style="font-size:22px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;">
                                        <h3 class="title-heading-center"
                                            style="margin:0;font-size:1em;color:#ffffff;line-height:34px;">
                                           {{$job->excerpt}}.</h3>
                                    </div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fusion-fullwidth fullwidth-box fusion-builder-row-2 reduce-padding-mobile nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                        style="background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:5%;padding-right:20%;padding-bottom:5%;padding-left:20%;margin-bottom: 0px;margin-top: 0px;border-width: 0px 0px 0px 0px;border-color:#eae9e9;border-style:solid;">
                        <div class="fusion-builder-row fusion-row">
                            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last"
                                style="margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"
                                    style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 10% 0px 10%;">
                                   
                                   
                                
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                             <form  method="POST" action="{{ route('applications') }}" enctype="multipart/form-data">
           
                            @csrf
                            
                            <input type="hidden" name="user_id" value="{{ Request::session()->get('fromme') }}">
                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstname" class="form-label">First name</label>
                                    <input type="text" class="form-control form-control-lg rounded @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required>
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>


                                <div class="mb-3 col-md-6">
                                    <label for="lastname" class="form-label">Last name</label>
                                    <input type="text" class="form-control form-control-lg rounded @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required>
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control form-control-lg rounded @error('firstname') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="firstname" class="form-label">Phone Number</label>
                                    <input  type="number" onKeyPress="if(this.value.length==15) return false;" placeholder="123-45-6789"class="form-control form-control-lg rounded @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="ssn" class="form-label">SSN</label>
                                    <input type="number" id="ssn"  onKeyPress="if(this.value.length==9) return false;"  placeholder="123-45-6789" maxlength="9" class="form-control form-control-lg rounded @error('ssn') is-invalid @enderror" name="ssn" value="{{ old('ssn') }}" required>
                                    @error('ssn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>



                                <div class="mb-3 col-md-6">
                                    <label for="firstname" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control form-control-lg rounded @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required>
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>




                               

                                
                                


                            </div>

                            <div class="row">
                                {{-- <h4>Address</h4> --}}
                                <div class="mb-3 col-md-6">
                                    <label for="street" class="form-label">Street</label>
                                    <input type="text" class="form-control form-control-lg rounded @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" required>
                                    @error('street')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="zipcode" class="form-label">Zipcode</label>
                                    <input  type="number" onKeyPress="if(this.value.length==6) return false;"  class="form-control form-control-lg rounded @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required>
                                    @error('zipcode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control form-control-lg rounded @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required>
                                    @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control form-control-lg rounded @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required>
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="formFile" class="form-label">CV</label>
                                    <input class="form-control form-control-lg rounded @error('cv') is-invalid @enderror" name="cv" value="{{ old('cv') }}" type="file">
                                
                                    @error('cv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                            </div>
                            <div class="text-center">
{{-- fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion_builder_column_1_2 1_2 fusion-one-half fusion-column-last mobile-center 
    
    width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );margin-top:0px;margin-bottom:20px;
    fusion-column-wrapper fusion-flex-column-wrapper-legacy
    background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 0px 0px 0px;

    fusion-alignleft
    --}}
                            
                            <div class=""
                                style="">
                                <div class=""
                                    style="">
                                    <div class="">
                                        
                                        <style>
                                            .fusion-body .fusion-button.button-2 {
                                                border-color: #ffffff;
                                                border-width: 2px 2px 2px 2px;
                                                border-radius: 2px 2px 2px 2px;
                                                background: #267399;
                                            }

                                            .fusion-body .fusion-button.button-2 .fusion-button-text,
                                            .fusion-body .fusion-button.button-2 i,
                                            .fusion-body .fusion-button.button-2:hover .fusion-button-text,
                                            .fusion-body .fusion-button.button-2:hover i,
                                            .fusion-body .fusion-button.button-2:focus .fusion-button-text,
                                            .fusion-body .fusion-button.button-2:focus i,
                                            .fusion-body .fusion-button.button-2:active .fusion-button-text,
                                            .fusion-body .fusion-button.button-2:active i {
                                                color: #ffffff;
                                            }

                                            .fusion-body .fusion-button.button-2:hover,
                                            .fusion-body .fusion-button.button-2:active,
                                            .fusion-body .fusion-button.button-2:focus {
                                                border-color: #ffffff;
                                                border-width: 2px 2px 2px 2px;
                                                background: #1780b8;
                                            }
                                        </style><button
                                            class="fusion-button button-flat button-xlarge button-custom button-2 fusion-button-default-span fusion-button-default-type btn-xtra-padding"
                                           type="submit"
                                            ><span
                                                class="fusion-button-text">Apply now</span></button>
                                    </div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>

                            </div>
                        </form>
                           
                        </div>
                    </div>
                    <div class="fusion-fullwidth fullwidth-box fusion-builder-row-3 fusion-parallax-none reduce-padding-mobile nonhundred-percent-fullwidth non-hundred-percent-height-scrolling lazyload"
                        style="background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:5%;padding-right:20%;padding-bottom:5%;padding-left:20%;margin-bottom: 0px;margin-top: 0px;border-width: 0px 0px 0px 0px;border-color:#eae9e9;border-style:solid;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"
                        data-bg="{{ asset('wp-content/uploads/2019/10/jobs-footer.jpg') }}">
                        <div class="fusion-builder-row fusion-row">
                            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-5 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last"
                                style="margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"
                                    style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 10% 0px 10%;">
                                    <style type="text/css"></style>
                                    <div class="fusion-title title fusion-title-4 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
                                        style="font-size:30px;margin-top:0px;margin-right:0px;margin-bottom:31px;margin-left:0px;">
                                        <h2 class="title-heading-center"
                                            style="margin:0;font-size:1em;color:#ffffff;line-height:44px;">
                                            Join us on our quest to live with intention and make the most of
                                            every moment, every opportunity.</h2>
                                    </div>
                                    <div class="fusion-aligncenter">
                                        <style>
                                            .fusion-body .fusion-button.button-4 {
                                                border-color: #ffffff;
                                                border-radius: 2px 2px 2px 2px;
                                                background: #267399;
                                            }

                                            .fusion-body .fusion-button.button-4 .fusion-button-text,
                                            .fusion-body .fusion-button.button-4 i,
                                            .fusion-body .fusion-button.button-4:hover .fusion-button-text,
                                            .fusion-body .fusion-button.button-4:hover i,
                                            .fusion-body .fusion-button.button-4:focus .fusion-button-text,
                                            .fusion-body .fusion-button.button-4:focus i,
                                            .fusion-body .fusion-button.button-4:active .fusion-button-text,
                                            .fusion-body .fusion-button.button-4:active i {
                                                color: #ffffff;
                                            }

                                            .fusion-body .fusion-button.button-4:hover,
                                            .fusion-body .fusion-button.button-4:active,
                                            .fusion-body .fusion-button.button-4:focus {
                                                border-color: #ffffff;
                                                background: #1780b8;
                                            }
                                        </style><a
                                            class="fusion-button button-flat fusion-button-default-size button-custom button-4 fusion-button-default-span fusion-button-default-type"
                                            target="_self" href="{{ route('job', $job->slug) }}"><span
                                                class="fusion-button-text">Learn more about Sure Oak&#x27;s
                                                culture</span></a>
                                    </div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,3}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }

    // alert("hello")
</script>


@endsection