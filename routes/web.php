<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('services')->group(function () {
    Route::get('/', 'PagesController@service')->name('service');
    Route::get('boston-seo', 'PagesController@bostonSeo')->name('boston-seo');
    Route::get('conversion-rate-optimization', 'PagesController@conversionRateOptimization')->name('conversion-rate-optimization');
    Route::get('digital-public-relations', 'PagesController@digitalPublicRelations')->name('digital-public-relations');
    Route::get('google-analytics-consultant', 'PagesController@googleAnalyticsConsultant')->name('google-analytics-consultant');
    Route::get('how-to-get-edu-backlinks', 'PagesController@howToGetEduBacklinks')->name('how-to-get-edu-backlinks');
    Route::get('inbound-marketing', 'PagesController@inboundMarketing')->name('inbound-marketing');
    Route::get('internal-linking-service', 'PagesController@internalLinkingService')->name('internal-linking-service');
    Route::get('keyword-research-service', 'PagesController@keywordResearchService')->name('keyword-research-service');
    Route::get('link-building-services', 'PagesController@linkBuildingServices')->name('link-building-services');
    Route::get('local-seo-services', 'PagesController@localSeoServices')->name('local-seo-services');
    Route::get('philadelphia-seo', 'PagesController@philadelphiaSeo')->name('philadelphia-seo');
    Route::get('ppc-management', 'PagesController@ppcManagement')->name('ppc-management');
    Route::get('seo-audit-service', 'PagesController@seoAuditService')->name('seo-audit-service');
    Route::get('seo-competitor-analysis' , 'PagesController@seoCompetitorAnalysis')->name('seo-competitor-analysis');
    Route::get('seo-consultant-services', 'PagesController@seoConsultantServices')->name('seo-consultant-services');
    Route::get('seo-content-writing', 'PagesController@seoContentWriting')->name('seo-content-writing');
    Route::get('seo-optimization-services', 'PagesController@seoOptimizationServices')->name('seo-optimization-services');
    Route::get('seo-plan', 'PagesController@seoPlan')->name('seo-plan');
    Route::get('social-media-advertising', 'PagesController@socialMediaAdvertising')->name('social-media-advertising');
    Route::get('voice-search-marketing', 'PagesController@voiceSearchMarketing')->name('voice-search-marketing');
    Route::get('website-design-development', 'PagesController@websiteDesignDevelopment')->name('website-design-development');
});


Route::prefix('about')->group(function () {
    Route::get('/', 'PagesController@about')->name('about');
    Route::get('award','PagesController@award')->name('award');
    Route::get('testimonials', 'PagesController@testimonials')->name('testimonials');
    
});

Route::get('appointment', 'PagesController@appointment')->name('appointment');
Route::get('careers', 'PagesController@careers')->name('careers');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('content-marketing', 'PagesController@contentMarketing')->name('content-marketing');
Route::get('guest-posting-service', 'PagesController@guestPostingService')->name('guest-posting-service');
Route::prefix('case-studies')->group(function () {
    Route::get('/', 'PagesController@caseStudies')->name('case-studies');
    Route::get('b2b-saas-case-study', 'PagesController@b2bSaasCaseStudy')->name('b2b-saas-case-study');
    Route::get('digital-publication-seo-case-study', 'PagesController@digitalPublicationSeoCaseStudy')->name('digital-publication-seo-case-study');
    Route::get('e-commerce-seo-game-plan-case-study', 'PagesController@ecommerceSeoGamePlanCaseStudy')->name('e-commerce-seo-game-plan-case-study');
    Route::get('featured-scholarship-case-study', 'PagesController@featuredScholarshipCaseStudy')->name('featured-scholarship-case-study');
    Route::get('financial-services-seo-case-study', 'PagesController@financialServicesSeoCaseStudy')->name('financial-services-seo-case-study');
    Route::get('game-plan', 'PagesController@gamePlan')->name('game-plan');
    Route::get('industry', 'PagesController@industry')->name('industry');
    Route::get('insurance-seo-case-study', 'PagesController@insuranceSeoCaseStudy')->name('insurance-seo-case-study');
    Route::get('integrated-seo-case-study', 'PagesController@integratedSeoCaseStudy')->name('integrated-seo-case-study');
    Route::get('keyword-ranking-case-study', 'PagesController@keywordRankingCaseStudy')->name('keyword-ranking-case-study');
    Route::get('link-building-case-study', 'PagesController@linkBuildingcasestudy')->name('link-building-case-study');
    Route::get('link-building', 'PagesController@linkBuilding')->name('link-building');
    Route::get('local', 'PagesController@local')->name('local');
    Route::get('mattress-buying-guide-website','PagesController@mattressBuyingGuideWebsite' )->name('mattress-buying-guide-website');
    Route::get('multi-strategy-approach-case-study', 'PagesController@multiStrategyApproachCaseStudy')->name('multi-strategy-approach-case-study');
    Route::get('organic-seo-case-study', 'PagesController@organicSeoCaseStudy')->name('organic-seo-case-study');
    Route::get('public-speaking-training-company-seo-case-study', 'PagesController@publicSpeakingTrainingCompanySeoCaseStudy')->name('public-speaking-training-company-seo-case-study');
    Route::get('scholarship-edu-backlink-case-studies', 'PagesController@scholarshipEduBacklinkCaseStudies')->name('scholarship-edu-backlink-case-studies');
    Route::get('your-money-your-life-recovery-case-study', 'PagesController@yourMoneyYourLifeRecoveryCaseStudy')->name('your-money-your-life-recovery-case-study');

});

Route::get('insights', 'PagesController@insights')->name('insights');
Route::get('partner', 'PagesController@partner')->name('partner');
Route::get('platform-trial', 'PagesController@platformTrial')->name('platform-trial');
Route::get('platform', 'PagesController@platform')->name('platform');
Route::get('seo-tools', 'PagesController@seoTools')->name('seo-tools');
Route::get('podcasts', 'PagesController@podcasts')->name('podcasts');
Route::get('privacy-policy', 'PagesController@privacyPolicy')->name('privacy-policy');
Route::get('scholarship', 'PagesController@scholarship')->name('scholarship');
Route::get('seo-tools', 'PagesController@seoTools')->name('seo-tools');
Route::get('seo', 'PagesController@seo')->name('seo');
Route::get('sitemap', 'PagesController@sitemap')->name('sitemap');
Route::get('strategy-call', 'PagesController@strategyCall')->name('strategy-call');
Route::get('strategy', 'PagesController@strategy')->name('strategy');
Route::get('subscribe-to-podcast', 'PagesController@subscribeToPodcast')->name('subscribe-to-podcast');
Route::get('terms-of-service', 'PagesController@termsOfService')->name('terms-of-service');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
