@extends('layouts.app')
@section('title', 'Job Application')
	
	
@section('content')
<main id="main" class="clearfix width-100">
    <div class="fusion-row" style="max-width:100%;">
        <section id="content" class="full-width">
            <div id="post-16946" class="post-16946 page type-page status-publish hentry">
                 <span
                    class="entry-title rich-snippet-hidden">{{$job->title}}</span><span class="vcard rich-snippet-hidden"><span
                        class="fn"><a href="{{ route('welcome') }}" title="Posts by andres"
                            rel="author">andres</a></span></span><span
                    class="updated rich-snippet-hidden">{{ $job->created_at }}</span>
                    <style>
                        ul.special-icons li {
    display: inline-block;
    font-size: 22px;
    color: #267399;
    font-weight: 500;
    margin-left: 10px;
    margin-right: 10px;
    position: relative;
}
                    </style>
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
                                            {{ $job->title }}    
                                        </h1>
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
                                        {{ $job->excerpt }}    
                                        </h3>
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
                                    <style type="text/css"></style>
                                    <div class="fusion-title title fusion-title-3 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two"
                                        style="font-size:30px;margin-top:0px;margin-right:0px;margin-bottom:10px;margin-left:0px;">
                                        <h2 class="title-heading-center"
                                            style="margin:0;font-size:1em;color:#267399;line-height:44px;">
                                            {{ $job->title }}
                                        </h2>
                                    </div>
                                    <ul class="special-icons">
                                        <li>
                                            <i
                                                class="fontawesome-icon fa-map-marker-alt fas circle-no"></i>Remote
                                            Job</li>
                                        <li>
                                            <i class="fontawesome-icon fa-clock far circle-no"></i>Full-time
                                        </li>

                                        <li>
                                            <i class="fontawesome-icon fa-clock far circle-no"></i>Part-time
                                        </li>
                                        
                                    </ul>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_2 1_2 fusion-one-half fusion-column-first mobile-center"
                                style="width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );margin-right: 4%;margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"
                                    style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 0px 0px 0px;">
                                    <div class="fusion-alignright">
                                        <style>
                                            .fusion-body .fusion-button.button-1 .fusion-button-text,
                                            .fusion-body .fusion-button.button-1 i {
                                                color: #267399;
                                            }

                                            .fusion-body .fusion-button.button-1 {
                                                border-color: #267399;
                                                border-width: 2px 2px 2px 2px;
                                                border-radius: 2px 2px 2px 2px;
                                                background: #ffffff;
                                            }

                                            .fusion-body .fusion-button.button-1:hover .fusion-button-text,
                                            .fusion-body .fusion-button.button-1:hover i,
                                            .fusion-body .fusion-button.button-1:focus .fusion-button-text,
                                            .fusion-body .fusion-button.button-1:focus i,
                                            .fusion-body .fusion-button.button-1:active .fusion-button-text,
                                            .fusion-body .fusion-button.button-1:active i {
                                                color: #ffffff;
                                            }

                                            .fusion-body .fusion-button.button-1:hover,
                                            .fusion-body .fusion-button.button-1:active,
                                            .fusion-body .fusion-button.button-1:focus {
                                                border-color: #ffffff;
                                                border-width: 2px 2px 2px 2px;
                                                background: #267399;
                                            }
                                        </style><a
                                            class="fusion-button button-flat button-xlarge button-custom button-1 fusion-button-default-span fusion-button-default-type btnOutline"
                                            target="_blank" rel="noopener noreferrer"
                                            href="{{ route('careers') }}"><span class="fusion-button-text">Back to
                                                careers</span></a>
                                    </div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion_builder_column_1_2 1_2 fusion-one-half fusion-column-last mobile-center"
                                style="width:50%;width:calc(50% - ( ( 4% ) * 0.5 ) );margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"
                                    style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 0px 0px 0px;">
                                    <div class="fusion-alignleft">
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
                                        </style><a
                                            class="fusion-button button-flat button-xlarge button-custom button-2 fusion-button-default-span fusion-button-default-type btn-xtra-padding"
                                            target="_blank" rel="noopener noreferrer"
                                            href="{{ route('application', $job->slug) }}"><span
                                                class="fusion-button-text">Apply now</span></a>
                                    </div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                            <div class="fusion-layout-column fusion_builder_column fusion-builder-column-4 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last"
                                style="margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"
                                    style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 30px 0px 0px 0px;">
                                    <div class="fusion-text fusion-text-1">
                                        <p>{{ $job->excerpt }}</p>
                                        <p><a href="{{ route('careers') }}">
                                            Learn more about what a career at Sure Oak
                                                is like here</a>.
                                            </p>
                                    <h3>Our Ideal Candidate:</h3>
                                    </div>
                                    {{-- <ul class="fusion-checklist fusion-checklist-1"
                                        style="font-size:16px;line-height:27.2px;">
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Our ideal
                                                candidate is seeking full-time work (30-40 hours per week).
                                            </div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">You have a proven
                                                record for showing great results through SEO activities and
                                                strategies.</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">You are an
                                                experienced SEO who is professional, smart, and dependable.
                                            </div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">You have great
                                                attention to detail and you don???t need much training or
                                                hand-holding from the team but we are supportive and here
                                                for you when you need us.</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">You have excellent
                                                communication skills and you can speak to clients on calls.
                                            </div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">You are organized,
                                                efficient, and fast. You are reliable, self-directed,
                                                punctual, and flexible.</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">You can meet
                                                deadlines without hiccups.</div>
                                        </li>
                                    </ul>
                                    <div class="fusion-text fusion-text-2">
                                        <h3>About The Position:</h3>
                                        <p>You will be doing white-hat SEO work for our clients. This
                                            includes (but not limited to):</p>
                                    </div>
                                    <ul class="fusion-checklist fusion-checklist-2"
                                        style="font-size:16px;line-height:27.2px;">
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">SEO strategy and
                                                ROI evaluation</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Creating and
                                                analyzing client reports and data</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Keyword research
                                            </div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">On-page
                                                optimization</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Content strategy
                                                and planning</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Technical audits
                                            </div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Competition
                                                insights and strategies</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Always improving
                                                the SEO department through your expertise</div>
                                        </li>
                                    </ul>
                                    <div class="fusion-text fusion-text-3">
                                        <h3>Requirements:</h3>
                                    </div>
                                    <ul class="fusion-checklist fusion-checklist-3"
                                        style="font-size:16px;line-height:27.2px;">
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">2+ years of white
                                                hat SEO experience</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Associate???s or
                                                Bachelor???s degree</div>
                                        </li>
                                    </ul>
                                    <div class="fusion-text fusion-text-4">
                                        <h3>Why Join Us:</h3>
                                    </div>
                                    <ul class="fusion-checklist fusion-checklist-4"
                                        style="font-size:16px;line-height:27.2px;">
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Work from home
                                            </div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item">
                                            <span style="height:27.2px;width:27.2px;margin-right:11.2px;" class="icon-wrapper circle-no">
                                                <i class="fusion-li-icon fa-check fas" style="color:#267399;" aria-hidden="true"></i>
                                            </span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Flexible hours
                                                (needs to be available during normal business hours)</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Be part of a fun,
                                                awesome, and positive team</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Improve your
                                                skills, learn more SEO, and advance your career</div>
                                        </li>
                                        <li style="background-color:rgba(255,255,255,0);"
                                            class="fusion-li-item"><span
                                                style="height:27.2px;width:27.2px;margin-right:11.2px;"
                                                class="icon-wrapper circle-no"><i
                                                    class="fusion-li-icon fa-check fas"
                                                    style="color:#267399;" aria-hidden="true"></i></span>
                                            <div class="fusion-li-item-content"
                                                style="margin-left:38.4px;color:#424242;">Opportunities for
                                                promotion</div>
                                        </li>
                                    </ul> --}}
                                     {!! $job->description!!}

                                    <div class="fusion-text fusion-text-5">
                                    </div>
                                    <div class="fusion-aligncenter">
                                        <style>
                                            .fusion-body .fusion-button.button-3 {
                                                border-color: #ffffff;
                                                border-width: 2px 2px 2px 2px;
                                                border-radius: 2px 2px 2px 2px;
                                                background: #267399;
                                            }

                                            .fusion-body .fusion-button.button-3 .fusion-button-text,
                                            .fusion-body .fusion-button.button-3 i,
                                            .fusion-body .fusion-button.button-3:hover .fusion-button-text,
                                            .fusion-body .fusion-button.button-3:hover i,
                                            .fusion-body .fusion-button.button-3:focus .fusion-button-text,
                                            .fusion-body .fusion-button.button-3:focus i,
                                            .fusion-body .fusion-button.button-3:active .fusion-button-text,
                                            .fusion-body .fusion-button.button-3:active i {
                                                color: #ffffff;
                                            }

                                            .fusion-body .fusion-button.button-3:hover,
                                            .fusion-body .fusion-button.button-3:active,
                                            .fusion-body .fusion-button.button-3:focus {
                                                border-color: #ffffff;
                                                border-width: 2px 2px 2px 2px;
                                                background: #1780b8;
                                            }
                                        </style><a
                                            class="fusion-button button-flat button-xlarge button-custom button-3 fusion-button-default-span fusion-button-default-type btn-xtra-padding"
                                            target="_blank" rel="noopener noreferrer"
                                            href="{{ route('application', $job->excerpt) }}"><span
                                                class="fusion-button-text">Apply now</span></a>
                                    </div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>

                            {{-- {!! $job->description !!} --}}
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
                                            target="_self" href="{{ route('welcome') }}"><span
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

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $(".fusion-li-item-content").prepend('<span style="height:27.2px;width:27.2px;margin-right:11.2px;" class="icon-wrapper circle-no">'
                                         +       '<i class="fusion-li-icon fa-check fas" style="color:#267399;" aria-hidden="true"></i>'
                                            +'</span>');
        })
    </script>
@endsection