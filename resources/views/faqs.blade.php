@extends('layouts.app')
@section('content')

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">FAQs</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: row-2 -->
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row justify-content-center border-bottom border-block-end-dashed mb-4 p-3 mx-0 bg-primary rounded text-fixed-white">
                                    <div class="col-xxl-12">
                                        <div class="py-2">
                                            <div class="text-center">
                                                <h3 class="text-fixed-white mb-3">Frequently Asked Questions</h3>
                                                <h5 class="d-block text-fixed-white op-8">Require assistance? Here are some of our commonly asked questions!</h5>
                                                <p class="op-7 mb-2 px-4 text-fixed-white">Discover answers to common queries and find solutions to your concerns with our comprehensive list of frequently asked questions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-3 gy-xxl-0">
                                    <div class="col-xxl-8">
                                        <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block bg-transparent border border-dashed" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#account-settings" aria-selected="false" tabindex="-1">Account Settings</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#privacy-and-security" aria-selected="true">Privacy & Security</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#billing-and-payments" aria-selected="false" tabindex="-1">Billing & Payments</a>
                                            </li>
                                        </ul>                                        
                                        <div class="tab-content">
                                            <div class="tab-pane border-0 bg-primary-transparent show active" id="account-settings" role="tabpanel">
                                                <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-separate" id="accordionFAQ5">
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2TwentyOne">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent" type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapsecustomicon2TwentyOne" aria-expanded="true"
                                                                aria-controls="collapsecustomicon2TwentyOne">
                                                                1. How do I update my account settings?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2TwentyOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingcustomicon2TwentyOne"
                                                            data-bs-parent="#accordionFAQ5">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                You can update your account settings by going to the settings page, where you can change your personal information, password, and notification preferences.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2TwentyTwo">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyTwo"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2TwentyTwo">
                                                                2. How can I reset my password?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2TwentyTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2TwentyTwo"
                                                            data-bs-parent="#accordionFAQ5">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                To reset your password, go to the login page and click on the "Forgot Password" link. You will receive an email with instructions to reset your password.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2TwentyThree">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyThree"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2TwentyThree">
                                                                3. How do I change my email address?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2TwentyThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2TwentyThree"
                                                            data-bs-parent="#accordionFAQ5">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                To change your email address, navigate to the account settings page, where you can enter a new email address and verify it through a confirmation email.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2TwentyFour">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyFour"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2TwentyFour">
                                                                4. How can I enable two-factor authentication?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2TwentyFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2TwentyFour"
                                                            data-bs-parent="#accordionFAQ5">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                To enable two-factor authentication, go to your account settings and click on the "Security" tab. You can enable two-factor authentication using an authenticator app or SMS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2TwentyFive">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2TwentyFive"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2TwentyFive">
                                                                5. How do I delete my account?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2TwentyFive" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2TwentyFive"
                                                            data-bs-parent="#accordionFAQ5">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                If you want to delete your account, please visit the account settings page and follow the instructions under the "Delete Account" section. Note that this action is irreversible.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane border-0 bg-primary-transparent" id="privacy-and-security" role="tabpanel">
                                                <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-separate" id="accordionFAQ1">
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2One">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent" type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapsecustomicon2One" aria-expanded="true"
                                                                aria-controls="collapsecustomicon2One">
                                                                1. How can I update my privacy settings?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2One" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingcustomicon2One"
                                                            data-bs-parent="#accordionFAQ1">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                To update your privacy settings, navigate to the "Privacy & Security" section in your account settings. Here, you can manage data sharing options, control who sees your profile information, and adjust permissions for third-party apps.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Two">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2Two">
                                                                2. How do I enable two-factor authentication?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2Two"
                                                            data-bs-parent="#accordionFAQ1">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                To enable two-factor authentication, go to the "Security Settings" and choose the two-factor authentication option. You can set it up using an authenticator app or receive codes via SMS for enhanced account security.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Three">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Three"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2Three">
                                                                3. How do I manage my data sharing preferences?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Three" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2Three"
                                                            data-bs-parent="#accordionFAQ1">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                You can manage your data sharing preferences by visiting the "Privacy Settings" page. Here, you can control how your data is shared with third-party services and manage permissions for apps connected to your account.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Four">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Four"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2Four">
                                                                4. How do I secure my account if I suspect unauthorized access?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Four" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2Four"
                                                            data-bs-parent="#accordionFAQ1">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                If you suspect unauthorized access to your account, go to the "Security" section and review your recent activity. You can log out of all devices, reset your password, and enable two-factor authentication for added protection.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Five">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Five"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2Five">
                                                                5. How can I delete my personal data from the platform?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Five" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2Five"
                                                            data-bs-parent="#accordionFAQ1">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                You can request the deletion of your personal data by navigating to the "Privacy Settings" page and selecting the option to delete your data. Note that this action is irreversible, and your data will be permanently removed from the platform.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane border-0 bg-primary-transparent" id="billing-and-payments" role="tabpanel">
                                                <div class="accordion accordion-customicon1 faq-accordion accordion-primary accordions-items-separate" id="accordionFAQ3">
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Eleven">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent" type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapsecustomicon2Eleven" aria-expanded="true"
                                                                aria-controls="collapsecustomicon2Eleven">
                                                                1. How can I update my billing information?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Eleven" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingcustomicon2Eleven"
                                                            data-bs-parent="#accordionFAQ3">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                You can update your billing information by navigating to the "Billing & Payments" section of your account. Here, you can add or edit your credit card details, billing address, and other relevant information.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Twelve">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Twelve"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2Twelve">
                                                                2. How do I view my past invoices?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Twelve" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2Twelve"
                                                            data-bs-parent="#accordionFAQ3">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                To view past invoices, go to the "Billing History" section under "Billing & Payments." You can download invoices and review transaction details from previous billing cycles.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Thirteen">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Thirteen"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2Thirteen">
                                                                3. Can I switch my payment method?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Thirteen" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2Thirteen"
                                                            data-bs-parent="#accordionFAQ3">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                Yes, you can switch your payment method at any time. Simply go to the "Payment Methods" section in your account settings and choose between credit card, PayPal, or other available payment options.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Fourteen">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Fourteen"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2Fourteen">
                                                                4. What should I do if my payment fails?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Fourteen" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2Fourteen"
                                                            data-bs-parent="#accordionFAQ3">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                If your payment fails, you'll be notified via email. To resolve the issue, ensure your payment details are correct and up to date. You can also try using a different payment method.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item shadow-sm">
                                                        <h2 class="accordion-header" id="headingcustomicon2Fifteen">
                                                            <button class="accordion-button fs-14 fw-medium pt-3 pb-2 bg-transparent collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Fifteen"
                                                                aria-expanded="false" aria-controls="collapsecustomicon2Fifteen">
                                                                5. How do I cancel my subscription?
                                                            </button>
                                                        </h2>
                                                        <div id="collapsecustomicon2Fifteen" class="accordion-collapse collapse"
                                                            aria-labelledby="headingcustomicon2Fifteen"
                                                            data-bs-parent="#accordionFAQ3">
                                                            <div class="accordion-body ps-3 m-3 my-3 border-success border-3 border-start text-default bg-success bg-opacity-10">
                                                                To cancel your subscription, navigate to the "Subscription" section of your account and select the "Cancel Subscription" option. Follow the prompts to complete the cancellation process.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="p-4 border border-secondary border-opacity-50 rounded-3">
                                            <div class="text-center">
                                                <img src="../assets/images/media/media-81.png" alt="" class="img-fluid mb-3">
                                                <div>
                                                    <h5 class="fw-semibold mb-2">Any Questions?</h5>
                                                    <span class="d-block fs-12 text-muted">
                                                        Write your question below and we'll get back to you shortly.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row gy-3 mt-3">
                                                <div class="col-xl-3">
                                                    <label for="user-name" class="form-label">Your Name</label> 
                                                </div>
                                                <div class="col-xl-9"> 
                                                    <input type="text" class="form-control form-control-light border" id="user-name" placeholder="Enter Your Name"> 
                                                </div> 
                                                <div class="col-xl-3"> 
                                                    <label for="user-email" class="form-label">Email Id</label> 
                                                </div>
                                                <div class="col-xl-9">
                                                    <input type="text" class="form-control form-control-light border" id="user-email" placeholder="Enter Email"> 
                                                </div> 
                                                <div class="col-xl-3"> 
                                                    <label for="text-area" class="form-label">Textarea</label>
                                                </div>
                                                <div class="col-xl-9 text-start">
                                                    <textarea class="form-control form-control-light border" placeholder="Enter your query here" id="text-area" rows="3"></textarea>
                                                    <button class="btn btn-primary btn-wave waves-effect waves-light mt-3" type="button" id="send">Send your question</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

     
        <div class="modal fade" id="responsive-searchModal" tabindex="-1" aria-labelledby="responsive-searchModal" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="input-group">
                          <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                              aria-label="Search Anything ..." aria-describedby="button-addon2">
                          <button class="btn btn-primary" type="button"
                              id="button-addon2"><i class="bi bi-search"></i></button>
                      </div>
                  </div>
              </div>
          </div>
        </div>

    </div>

    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->


    @endsection

@push('scripts')

@depends 

