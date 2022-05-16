<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }


    public function service(){
        return view('pages.services.index');
    }

    public function seoPlan(){
        return view('pages.services.seo-plan');
    }


    public function seoOptimizationServices(){
        return view('pages.services.seo-optimization-services');
    }




    public function seoAuditService(){
        return view('pages.services.seo-audit-service');
    }



    public function seoContentWriting(){
        return view('pages.services.seo-content-writing');
    }

    public function seoConsultantServices(){
        return view('pages.services.seo-consultant-services');
    }

    public function bostonSeo(){
        return view('pages.services.boston-seo');
    }

    public function conversionRateOptimization(){
        return view('pages.services.conversion-rate-optimization');
    }

    public function digitalPublicRelations(){
        return view('pages.services.digital-public-relations');
    }


    public function googleAnalyticsConsultant(){
        return view('pages.services.google-analytics-consultant');
    }
    

    public function howToGetEduBacklinks(){
        return view('pages.services.how-to-get-edu-backlinks');
    }


    public function inboundMarketing(){
        return view('pages.services.inbound-marketing');
    }

    public function internalLinkingService(){
        return view('pages.services.internal-linking-service');
    }

    public function keywordResearchService(){
        return view('pages.services.keyword-research-service');
    }

    public function linkBuildingServices(){
        return view('pages.services.link-building-services');
    }


    public function localSeoServices(){
        return view('pages.services.local-seo-services');
    }

    public function philadelphiaSeo(){
            return view('pages.services.philadelphia-seo');
    }

    public function ppcManagement(){
        return view('pages.services.ppc-management');
    }

    public function seoCompetitorAnalysis(){
        return view('pages.services.seo-competitor-analysis');
    }


    public function socialMediaAdvertising(){
        return view('pages.services.social-media-advertising');
    }


    public function voiceSearchMarketing(){
        return view('pages.services.voice-search-marketing');
    }


    public function websiteDesignDevelopment(){
        return view('pages.services.website-design-development');
    }


    public function insights(){
        return view('pages.insights');
    }


    public function partner(){
        return view('pages.partner');
    }


    public function platformTrial(){
        return view('pages.platform-trial');
    }

    public function platform(){
        return view('pages.platform');
    }


    public function podcasts(){
        return view('pages.podcasts');
    }
    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }
    public function scholarship(){
        return view('pages.scholarship');
    }
    public function seoTools(){
        return view('pages.seo-tools');
    }
    public function seo(){
        return view('pages.seo');
    }

    public function sitemap(){
        return view('pages.sitemap');
    }

    public function strategyCall(){
        return view('pages.strategy-call');
    }

    public function strategy(){
        return view('pages.strategy');
    }

    public function subscribeToPodcast(){
        return view('pages.subscribe-to-podcast');
    }

    public function termsOfService(){
        return view('pages.terms-of-service');
    }


    public function award(){
        return view('pages.about.awards');
    }



    public function about(){
        return view('pages.about.index');
    }
    public function testimonials(){
        return view('pages.about.testimonials');
    }



    public function caseStudies(){
        return view('pages.case-studies');
    }



    public function appointment(){
        return view('pages.appointment');
    }

    public function careers(){
        return view('pages.careers');

    }


    public function contact(){
        return view('pages.contact');
    }


    public function contentMarketing(){
        return view('pages.content-marketing');
    }

    public function guestPostingService(){
        return view('pages.guest-posting-service');
    }



    public function b2bSaasCaseStudy(){
        return view('pages.case-studies.b2b-saas-case-study');
    }

    public function digitalPublicationSeoCaseStudy(){
        return view('pages.case-studies.digital-publication-seo-case-study');
    }


    public function ecommerceSeoGamePlanCaseStudy(){
        return view('pages.case-studies.e-commerce-seo-game-plan-case-study');
    }

    public function featuredScholarshipCaseStudy(){
        return view('pages.case-studies.featured-scholarship-case-study');
    }

    public function financialServicesSeoCaseStudy(){
        return view('pages.case-studies.financial-services-seo-case-study');
    }


    public function gamePlan(){
        return view('pages.case-studies.game-plan');
    }


    public function industry(){
        return view('pages.case-studies.industry');
    }


    public function insuranceSeoCaseStudy(){
        return view('pages.case-studies.insurance-seo-case-study');
    }


    public function integratedSeoCaseStudy(){
        return view('pages.case-studies.integrated-seo-case-study');
    }


    public function keywordRankingCaseStudy(){
        return view('pages.case-studies.keyword-ranking-case-study');
    }

    public function linkBuildingcasestudy(){
        return view('pages.case-studies.link-building-case-study');
    }


    public function linkBuilding(){
        return view('pages.case-studies.link-building');
    }

    public function local(){
        return view('pages.case-studies.local');
    }

    public function mattressBuyingGuideWebsite(){
        return view('pages.case-studies.mattress-buying-guide-website');
    }

    public function multiStrategyApproachCaseStudy(){
        return view('pages.case-studies.multi-strategy-approach-case-study');
    }

    public function organicSeoCaseStudy(){
        return view('pages.case-studies.organic-seo-case-study');
    }

    public function publicSpeakingTrainingCompanySeoCaseStudy(){
        return  view('pages.case-studies.public-speaking-training-company-seo-case-study');
    }


    public function scholarshipEduBacklinkCaseStudies(){
        return view('pages.case-studies.scholarship-edu-backlink-case-studies');
    }
    public function yourMoneyYourLifeRecoveryCaseStudy(){
        return view('pages.case-studies.your-money-your-life-recovery-case-study');
    }

}
