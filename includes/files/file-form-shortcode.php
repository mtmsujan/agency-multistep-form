<?php
/**
 * Form Shortcode
 */

// imjol contact form shortcode
function imjol_contact_form_callback() {
    ob_start() ?>

<body data-new-gr-c-s-check-loaded="8.907.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <div class="icr body-bg imjol-quiz-layout-5">

        <section class="imjol-form">

            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12  imjol-form__acenter">
                        <!-- Welcome Banner -->
                        <div
                            class="imjol-form__layout imjol-form__100vh  imjol-form__layout--quiz imjol-form__layout--quiz--v5 p-0  imjol-bg-none">

                            <div
                                class="imjol-form__quiz-banner imjol-form__quiz-banner--v5 imjol-bg-cover imjol-form__jcenter imjol-form__ccolumn ">
                                <div class="imjol-form__quiz-banner--content">
                                    <h2 class="imjol-form__quiz-banner--title">Interested in working with us</h2>
                                    <p class="imjol-form__quiz-banner--text">We are a Creative &amp; Digital Agency
                                        who creates enterprise solutions for your brand. The more information you can
                                        give us, the more accurate the quotation will be.</p>
                                </div>

                            </div>
                            <div
                                class="imjol-form__layout--quiz-main imjol-form__layout--quiz-main--v5 imjol-bg-cover imjol-form__ccolumn">
                                <!-- Form Area -->
                                <div class="imjol-form__inner--quiz imjol-form__inner--quiz--v5">
                                    <!-- End Quiz Timing -->
                                    <div class="imjol-form__form-box imjol-form__form-box--v5">

                                        <div class="list-group imjol-form__nav" id="list-tab" role="tablist">
                                            <a class="list-group-item active" data-bs-toggle="list" href="#"
                                                role="tab">Step 1</a>
                                            <a class="list-group-item" data-bs-toggle="list" href="#"
                                                role="tab">Step 2</a>
                                            <a class="list-group-item" data-bs-toggle="list" href="#"
                                                role="tab">Step 3</a>
                                            <a class="list-group-item" data-bs-toggle="list" href="#"
                                                role="tab">Step 4</a>
                                            <a class="list-group-item" data-bs-toggle="list" href="#"
                                                role="tab">Step 5</a>
                                        </div>


                                        <!-- Form Area -->
                                        <form id="multiStepForm"
                                            class="imjol-forms imjol-forms__quiz imjol_form_submit imjol-forms__quiz--v5 imjol-forms--role-form"
                                            action="<?php echo $_SERVER['PHP_SELF']; ?> method=" post">
                                            <div class="tab-content">
                                                <!-- Step 1: Personal Information -->
                                                <div class="tab-pane fade show active" id="step1">
                                                    <div class="imjol-forms__quiz-single">
                                                        <h3 class="imjol-forms__quiz-title--v5 m-0">Choose What you
                                                            need!</h3>
                                                        <p class="imjol-forms__quiz-text--v5 m-0">👋 Select your
                                                            interest to get started.</p>
                                                        <div class="imjol-forms__quiz-form imjol-mg-top-40">
                                                            <div class="imjol-forms__quiz-form">
                                                                <!-- Single Group for Multiple Selection (Website) -->
                                                                <div class="form-group imjol-mg-top-15">
                                                                    <div
                                                                        class="imjol-forms__input imjol-forms__input--quiz">
                                                                        <input class="imjol-forms__input d-none"
                                                                            type="checkbox" value="Website" id="q-1"
                                                                            name="website">
                                                                        <label
                                                                            class="imjol-forms__input--quiz-label imjol-forms__input--role"
                                                                            for="q-1">
                                                                            <div class="imjol-forms__role">
                                                                                <img
                                                                                    src="<?php echo AGENCY_FORM_PLUGIN_URL ?>/assets/images/imjol-role1.png">
                                                                                <div
                                                                                    class="imjol-forms__role-content">
                                                                                    <h4
                                                                                        class="imjol-forms__role-title">
                                                                                        Website</h4>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="imjol-forms__quiz-check imjol-forms__quiz-check--role">
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <!-- Single Group for Multiple Selection (Software) -->
                                                                <div class="form-group imjol-mg-top-15">
                                                                    <div
                                                                        class="imjol-forms__input imjol-forms__input--quiz">
                                                                        <input class="imjol-forms__input d-none"
                                                                            type="checkbox" value="Software" id="q-2"
                                                                            name="software">
                                                                        <label
                                                                            class="imjol-forms__input--quiz-label imjol-forms__input--role"
                                                                            for="q-2">
                                                                            <div class="imjol-forms__role">
                                                                                <img
                                                                                    src="<?php echo AGENCY_FORM_PLUGIN_URL ?>/assets/images/imjol-role2.png">
                                                                                <div
                                                                                    class="imjol-forms__role-content">
                                                                                    <h4
                                                                                        class="imjol-forms__role-title">
                                                                                        Software</h4>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="imjol-forms__quiz-check imjol-forms__quiz-check--role">
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <!-- Single Group for Multiple Selection (Mobile Application) -->
                                                                <div class="form-group imjol-mg-top-15">
                                                                    <div
                                                                        class="imjol-forms__input imjol-forms__input--quiz">
                                                                        <input class="imjol-forms__input d-none"
                                                                            type="checkbox" value="Mobile Application"
                                                                            id="q-5" name="mobile-app">
                                                                        <label
                                                                            class="imjol-forms__input--quiz-label imjol-forms__input--role"
                                                                            for="q-5">
                                                                            <div class="imjol-forms__role">
                                                                                <img
                                                                                    src="<?php echo AGENCY_FORM_PLUGIN_URL ?>/assets/images/imjol-role3.png">
                                                                                <div
                                                                                    class="imjol-forms__role-content">
                                                                                    <h4
                                                                                        class="imjol-forms__role-title">
                                                                                        Mobile Application</h4>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="imjol-forms__quiz-check imjol-forms__quiz-check--role">
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="form-group imjol-mg-top-40">
                                                                    <div class="imjol-forms__button">
                                                                        <button
                                                                            class="imjol-btn next-step first-step">Next</button>
                                                                    </div>
                                                                    <!-- Error message display -->
                                                                    <p class="error-check-web-app-soft mt-4 alert alert-danger"
                                                                        role="alert">Please select at least one Service
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Group -->
                                                </div>


                                                <!-- Step 2 -->
                                                <div class="tab-pane fade" id="step2">
                                                    <div class="imjol-forms__quiz-single">
                                                        <h3 class="imjol-forms__quiz-title--v5 m-0">Write Your
                                                            Requirement</h3>
                                                        <div class="imjol-forms__quiz-form imjol-mg-top-10">
                                                            <button class="required">Your Requirement</button>
                                                            <div id="fieldContainer">
                                                                <textarea placeholder="Write Your Requirement"
                                                                    id="requirement" name="requirement"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group imjol-mg-top-40">
                                                        <div class="imjol-forms__button">
                                                            <button class="imjol-btn prev-step">Previous</button>
                                                            <button type="button" class="add_but"
                                                                id="addFieldButton">Add
                                                                Requirement</button>
                                                            <button
                                                                class="imjol-btn next-step second-step">Next</button>
                                                        </div>
                                                        <!-- Display error message -->
                                                        <p class="error-requirement-message mt-5 alert alert-danger"
                                                            role="alert"> Please write your requirement </p>
                                                    </div>
                                                </div>

                                                <!-- Step 3 -->
                                                <div class="tab-pane fade show active" id="step3">
                                                    <div class="imjol-forms__quiz-single">
                                                        <h3 class="imjol-forms__quiz-title--v5 m-0">Write Your Budget?
                                                        </h3>
                                                        <div class="imjol-forms__quiz-form imjol-mg-top-40">
                                                            <div class="imjol-forms__quiz-form">
                                                                <!-- Single Group for Multiple Selection (Website) -->
                                                                <div class="budget-dropdown">
                                                                    <button class="budget-dropdown-button">Select
                                                                        Your Budget</button>
                                                                    <div class="budget-dropdown-content">
                                                                        <a href="#"
                                                                            onclick="selectBudget('$500 - 1000 USD')">$500 -
                                                                            1000 USD</a>
                                                                        <a href="#"
                                                                            onclick="selectBudget('$1000 - 2000 USD')">$1000 -
                                                                            2000 USD</a>
                                                                        <a href="#"
                                                                            onclick="selectBudget('$2000 - 4000 USD')">$2000 -
                                                                            4000 USD</a>
                                                                        <a href="#"
                                                                            onclick="selectBudget('Budget')">Budget
                                                                            Planner</a>
                                                                    </div>
                                                                    <div class="custom-field-input">
                                                                        <textarea id="budget_planer_custom_field"
                                                                            placeholder="Write Your Budget"></textarea>
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="form-group imjol-mg-top-40">
                                                                    <div class="imjol-forms__button">
                                                                        <button
                                                                            class="imjol-btn prev-step">Previous</button>
                                                                        <button
                                                                            class="imjol-btn next-step third-step">Next</button>
                                                                    </div>
                                                                    <!-- Display error message -->
                                                                    <p class="error-budget-message mt-4 alert alert-danger"
                                                                        role="alert">
                                                                        Please select your budget
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Group -->
                                                </div>

                                                <!-- Step 4 -->
                                                <div class="tab-pane fade show active" id="step4">
                                                    <div class="imjol-forms__quiz-single">
                                                        <h3 class="imjol-forms__quiz-title--v5 m-0">Write Your
                                                            Statement at timeline?</h3>
                                                        <div class="imjol-forms__quiz-form imjol-mg-top-40">
                                                            <div class="imjol-forms__quiz-form">
                                                                <!-- Single Group for Multiple Selection (Website) -->
                                                                <div class="time-dropdown">
                                                                    <button class="time-dropdown-button">Your
                                                                        Project Deadline</button>
                                                                    <div class="time-dropdown-content">
                                                                        <a href="#" onclick="selectTime('1 Months')">1
                                                                            Months</a>
                                                                        <a href="#" onclick="selectTime('2 Months')">2
                                                                            Months</a>
                                                                        <a href="#" onclick="selectTime('3 Months')">3
                                                                            Months</a>
                                                                        <a href="#"
                                                                            onclick="selectTime('Duration')">Preferred
                                                                            Project Duration</a>
                                                                    </div>
                                                                    <div class="custom-field"
                                                                        style="display: none; margin-top: 10px;">
                                                                        <textarea id="project_deadline_custom_field"
                                                                            placeholder="Write Your Project Deadline"></textarea>
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="form-group imjol-mg-top-40">
                                                                    <div class="imjol-forms__button">
                                                                        <button
                                                                            class="imjol-btn prev-step">Previous</button>
                                                                        <button
                                                                            class="imjol-btn next-step fourth-step">Next</button>
                                                                    </div>
                                                                    <!-- Display error message -->
                                                                    <p class="error-deadline-message mt-4 alert alert-danger"
                                                                        role="alert">
                                                                        Please select your deadline
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Group -->
                                                </div>
                                                <!-- Step 4 -->

                                                <!-- Step 5 -->
                                                <div class="tab-pane fade" id="step4">
                                                    <div class="imjol-forms__quiz-single">
                                                        <h3 class="imjol-forms__quiz-title--v5 m-0">How Can We Contact
                                                            You?</h3>
                                                        <p class="imjol-forms__quiz-text--v5 m-0">Let’s start your
                                                            dream journey</p>
                                                        <div class="imjol-forms__quiz-form imjol-mg-top-10">
                                                            <div
                                                                class="imjol-forms__quiz-form imjol-forms__quiz-form--v5">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="imjol-forms__input">
                                                                                <label>Name <span>*</span></label>
                                                                                <input type="text" name="first-name"
                                                                                    placeholder="Enter name here"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="imjol-forms__input">
                                                                                <label>Address <span>*</span></label>
                                                                                <input type="text" name="address"
                                                                                    id="form-address"
                                                                                    placeholder="Enter your address"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="imjol-forms__input">
                                                                                <label>Email <span>*</span></label>
                                                                                <input type="email" name="email"
                                                                                    placeholder="Type Email"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="imjol-forms__input">
                                                                                <label>Phone Number
                                                                                    <span>*</span></label>
                                                                                <input type="text" name="number"
                                                                                    placeholder="Phone number"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div
                                                                                class="imjol-forms__input imjol-forms__textarea">
                                                                                <label>Whatsapp Number
                                                                                    <span>*</span></label>
                                                                                <input type="text"
                                                                                    name="whats-app-number"
                                                                                    placeholder="Whatsapp Number"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <!-- Form Group -->
                                                                        <div class="form-group">
                                                                            <div class="imjol-forms__spaceb">
                                                                                <div class="imjol-forms__checkbox">
                                                                                    <label class="m-0 privacy" for="checkbox">By
                                                                                        continuing the next level, you
                                                                                        agree to 
                                                                                        <a href="<?php echo esc_url( get_option( 'imjol_privacy_policy_url', '#' ) ); ?>" target="_blank">
                                                                                            <?php echo esc_html( get_option( 'imjol_privacy_policy_name', 'Privacy Policy' ) ); ?>
                                                                                        </a> 
                                                                                        and 
                                                                                        <a href="<?php echo esc_url( get_option( 'imjol_terms_of_use_url', '#' ) ); ?>" target="_blank">
                                                                                            <?php echo esc_html( get_option( 'imjol_terms_of_use_name', 'Terms of Use' ) ); ?>
                                                                                        </a>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Form Group -->
                                                                <div class="form-group imjol-mg-top-40">
                                                                    <div class="imjol-forms__button">
                                                                        <button
                                                                            class="imjol-btn prev-step">Previous</button>
                                                                        <button class="imjol-btn submit-button"
                                                                            type="submit" id="submit-btn"
                                                                            name="submit">Submit</button>
                                                                    </div>
                                                                    <!-- Display Error and Success message -->
                                                                    <p class="success-message mt-3 alert alert-success"
                                                                        role="alert">Thank you! form
                                                                        submitted successfully</p>
                                                                    <p class="error-message mt-3 alert alert-danger"
                                                                        role="alert">Please fill up all
                                                                        required fields</p>
																	<p class="error-message email-validate mt-3 alert alert-danger" role="alert">Please enter a valid email</p>
																																				<p class="error-message phone-validate mt-3 alert alert-danger"
                                                                            role="alert">Please enter a valid phone number
                                                                        </p>
																						<p class="error-message whats-validate mt-3 alert alert-danger"
                                                                            role="alert">Please enter a valid what's app
                                                                            number</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Group -->
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Form Area -->
                                    </div>
                                </div>
                                <!-- End Form Area -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- imjol Scripts -->
    <script type="text/javascript" async=""
        src="https://www.gstatic.com/recaptcha/releases/vm_YDiq1BiI3a8zfbIPZjtF2/recaptcha__en.js"
        crossorigin="anonymous" integrity="sha384-jmuBB3ajBz67HkD9EOwlByuyyxCYut7RyJGCbt+luJzVIFeqE/GGKvIVjUTdjP4o">
    </script>

</body>

<?php return ob_get_clean();
}

add_shortcode( 'agency_form_shortcode', 'imjol_contact_form_callback' );