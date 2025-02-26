@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/faq.css') }}">
@endpush
@section('title', 'One Endorse - Faq Page')
@section('content')
<section class="faq-hero pt-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="font-55 text-900">FAQ</h1>
                <p class="font-14 text-normal">Effective date: April 3, 2024</p>
            </div>
        </div>
    </div>
</section>
<section class="faq-section py-80">
    <div class="container">
        <h2 class="font-34 text-800 text-center mb-5">Frequently Asked Questions</h2>
        
        <div class="faq-container w-lg-70 mx-auto">
            <!-- FAQ Item 1 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How do I get started with OneEndorse?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">To get started, simply sign up on our platform and create your profile. Once your account is approved, you can browse through our network of athletes and agencies, find the right fit for your campaign, and initiate contact to discuss collaboration opportunities.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">What types of campaigns can I run with OneEndorse?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">With OneEndorse, you can run a variety of campaigns including social media promotions, video ads, event sponsorships, and face-to-face meetings. Our platform is designed to facilitate all types of sports marketing collaborations.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How do I know if an athlete is the right fit for my brand?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse allows you to filter athletes by sport, location, engagement metrics, and more. You can review their profiles, past endorsements, and social media presence to determine if their image aligns with your brand values and campaign goals.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">What is the process for negotiating a deal with an athlete?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">Once you've identified an athlete you'd like to work with, you can send them a personalized offer through our platform. You can then use our secure chat system to negotiate the terms of the collaboration, including pricing, deliverables, and timeline.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How does OneEndorse ensure secure communication and transactions?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse is committed to providing a safe and secure environment for all users. We offer a secure chat system for all negotiations and monitor conversations to prevent misuse. Additionally, we have a team of admins who oversee transactions and ensure fair negotiations, protecting both parties involved.</p>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</section>
<section class="border-section">
    <div class="container">
        <div class="border-line"></div>
    </div>
</section>
<section class="faq-section py-80">
    <div class="container">
        <h2 class="font-34 text-800 text-center mb-5">Every Question Answered</h2>
        <div class="faq-container w-lg-70 mx-auto">
            <!-- FAQ Item 1 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">What is OneEndorse and how does it work?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse is a web platform designed to connect celebrities, brands, and agencies for seamless collaboration on advertisements and endorsements. It provides a structured environment where brands can find and negotiate deals with celebrities for promotions, and agencies can manage multiple clients. The platform allows users to create profiles, discover potential partners, manage offers, and communicate securely to finalize deals.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How can I sign up and create a profile on OneEndorse?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">To sign up, visit our website and click on the "Sign Up" button. You will be prompted to choose your user role (Celebrity, Brand, or Agency) and provide necessary information. After submitting your details, our admin team will review your application. Once approved, you can log in and complete your profile by uploading images, adding a bio, linking social media accounts, and specifying any relevant details about your brand or agency.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">What are the benefits of using OneEndorse for my brand?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse offers several benefits for brands:</p>
                        <ul>
                            <li><b>• Access to a Wide Network:</b> Connect with over 15,000 athletes from 120 countries and 150 sports.</li>
                            <li><b>• Targeted Collaborations:</b> Filter and choose celebrities based on categories, budgets, and engagement metrics to find the best fit for your brand.</li>
                            <li><b>• Secure Negotiations:</b> Use our chat system to discuss terms and finalize deals securely.</li>
                            <li><b>• Campaign Management:</b> Track the progress of your campaigns and manage budgets effectively.</li>
                            <li><b>• Enhanced Visibility:</b> Leverage the influence of celebrities to boost your brand's reach and recognition.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How do I find the right celebrity or influencer for my campaign?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse makes it easy to find the right celebrity or influencer:</p>
                        <ul>
                            <li><b>• Browse Profiles:</b> Explore detailed profiles that include images, bios, social media links, and past endorsements.</li>
                            <li><b>• Filter Options:</b> Use filters to narrow down your search based on sport, location, budget, and engagement metrics.</li>
                            <li><b>• View Analytics:</b> Access performance metrics to assess the potential impact of a collaboration.</li>
                            <li><b>• Initiate Contact:</b> Once you've identified a suitable candidate, use our chat system to start a conversation and discuss potential opportunities.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">What happens if I encounter issues or need assistance on OneEndorse?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse is committed to providing excellent support:</p>
                        <ul>
                            <li><b>• Help Center:</b> Access our comprehensive FAQ section and guides to find answers to common questions.</li>
                            <li><b>• Customer Support:</b> Reach out to our customer support team via email or chat for personalized assistance.</li>
                            <li><b>• Community Forums:</b> Join our community forums to connect with other users, share experiences, and get advice.</li>
                            <li><b>• Admin Monitoring:</b> Our admin team actively monitors the platform to ensure fair practices and can intervene if any issues arise.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How do I set up my pricing for endorsements as a celebrity?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">As a celebrity, you can set your pricing for various types of endorsements within your profile settings. This includes rates for social media posts, video ads, event appearances, and more. You can adjust these prices based on your experience, reach, and the type of content or event.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">What if I don't find the right fit for my campaign?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">If you can't find the right fit initially, consider broadening your search criteria or reaching out to our support team for assistance. We can help you refine your search or suggest potential partners that might be a good match for your campaign.</p>                        
                    </div>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How secure is the communication and transaction process on OneEndorse?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse prioritizes security. All communications are encrypted, and transactions are securely processed through our platform. We also monitor interactions to prevent fraudulent activities and ensure a safe environment for all users.</p>                    
                    </div>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">Can I cancel or modify a deal after it's been agreed upon?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14"> Once a deal is agreed upon and finalized, it's expected to be honored by both parties. However, if you need to make changes or cancel, it's best to communicate promptly with the other party through our platform. Any modifications or cancellations should be mutually agreed upon.</p>                        
                    </div>
                </div>
            </div>

            <!-- FAQ Item 10 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How do I track the performance of my campaign?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse provides analytics dashboards where you can track key performance metrics of your campaigns, such as engagement rates, reach, and conversion rates. This data helps you assess the effectiveness of your partnerships and make informed decisions for future campaigns.</p>                        
                    </div>
                </div>
            </div>

            <!-- FAQ Item 11 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">Are there any fees associated with using OneEndorse?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">OneEndorse may charge a nominal fee for certain premium services or transactions to cover operational costs. These fees are clearly outlined in our terms of service. We strive to keep our platform accessible and affordable for all users.</p>                        
                    </div>
                </div>
            </div>

            <!-- FAQ Item 12 -->
            <div class="faq-item mb-3">
                <button class="faq-toggle d-flex justify-content-between align-items-center w-100 p-3 rounded-sm" type="button">
                    <span class="font-18 text-600">How can I provide feedback or report a concern on OneEndorse?</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" class="chevron-icon">
                        <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="faq-content">
                    <div class="p-3">
                        <p class="font-14">We value your feedback and take concerns seriously. You can submit feedback through our website's feedback form or report any issues directly to our customer support. Our team will review your concerns promptly and take appropriate action.</p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="assets/default/js/pages/faq.js"></script>
@endpush