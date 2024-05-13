<?php
require_once 'header.php';
?>

<div class="content">

    <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
            <div class="col-md-12">
                <div class="form h-100">
                    <h3>Report A Case</h3>
                    <form class="mb-5" id="contactForm" action="public/submit_ticket.php" method="post" enctype="multipart/form-data">
                        <p>Use this form to report conduct that has already happened, or if you have knowledge of alleged corrupt conduct that will happen in future.
                            The information you provide helps ACT-SALeaks to assess if the matter represents corrupt conduct. We appreciate your specific detail to assist that assessment.
                        </p>

                        <div class="row">
                            <div class="col-md-12 form-group mb-5">
                                <label for="message" class="col-form-label">Which entity or organisation or company, or individual does your submission relate to the most?*</label>
                                <input class="form-control" id="entity_name" name="entity_name" placeholder="Entity Name" required>
                            </div>

                            <div class="col-md-12 form-group mb-5">
                                <label for="" class="col-form-label">Have you contacted any other organisation previously regarding this specific matter? *</label>
                                <select class="form-control" id="confirm_reporting" name="confirm_reporting">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>


                            <div class="col-md-12 form-group mb-5">
                                <label for="" class="col-form-label">Have you made a complaint directly to the entity or any other government agency in relation to this matter? *</label>
                                <select class="form-control" id="direct_complaint" name="direct_complaint">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="I’d prefer not to disclose">I’d prefer not to disclose</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group mb-5">
                                <label for="message" class="col-form-label">When did the alleged corruption incident take place (if known)?*</label>
                                <input type="date" class="form-control" name="facts_date" id="facts_date">
                            </div>

                            <div class="col-md-9 form-group mb-5">
                                <fieldset class="col-md-12 custom-fieldset">
                                    <legend>Where did the alleged corruption take place?</legend>
                                    <div class="row">
                                        <div class="col-md-6 my-3">
                                            <input type="text" class="form-control" name="facts_location" id="facts_location" placeholder="Country">
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <input type="text" class="form-control" name="suburb" id="suburb" placeholder="Suburb(Optional)">
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <input type="text" class="form-control" name="province" id="province" placeholder="Province (Optional)">
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <input type="text" class="form-control" name="district" id="district" placeholder="District (Optional)">
                                        </div>
                                        <div class="col-md-12 my-3">
                                            <textarea class="form-control" id="specific_place" name="specific_place" cols="30" rows="2" placeholder="Describe the specific place(Optional)"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-md-12 form-group mb-5">
                                <label for="message" class="col-form-label">Please summarize your report in a few words.*</label>
                                <textarea class="form-control" id="message" name="message" cols="30" rows="2" required></textarea>
                            </div>

                            <div class="col-md-12 form-group mb-5">
                                <label for="message" class="col-form-label">Describe your report in detail. *</label>
                                <textarea class="form-control" cols="30" rows="2" id="report_detail" name="report_detail" required></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="col-md-12 custom-fieldset">
                                        <legend>Person 1</legend>
                                        <div class="col form-group mb-5">
                                            <label for="person1FirstName" class="col-form-label">First Name (Optional)</label>
                                            <input type="text" class="form-control" id="person1FirstName" name="person1FirstName">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person1Surname" class="col-form-label">Surname (Optional)</label>
                                            <input type="text" class="form-control" id="person1Surname" name="person1Surname">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person1Position" class="col-form-label">Position or Role (Optional)</label>
                                            <input type="text" class="form-control" id="person1Position" name="person1Position">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person1DateOfBirth" class="col-form-label">Date of Birth (Optional)</label>
                                            <input type="date" class="form-control" id="person1DateOfBirth" name="person1DateOfBirth">
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="col-md-12 custom-fieldset">
                                        <legend>Person 2</legend>
                                        <div class="col form-group mb-5">
                                            <label for="person2FirstName" class="col-form-label">First Name (Optional)</label>
                                            <input type="text" class="form-control" id="person2FirstName" name="person2FirstName">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person2Surname" class="col-form-label">Surname (Optional)</label>
                                            <input type="text" class="form-control" id="person2Surname" name="person2Surname">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person2Position" class="col-form-label">Position or Role (Optional)</label>
                                            <input type="text" class="form-control" id="person2Position" name="person2Position">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person2DateOfBirth" class="col-form-label">Date of Birth (Optional)</label>
                                            <input type="date" class="form-control" id="person2DateOfBirth" name="person2DateOfBirth">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="col-md-12 custom-fieldset">
                                        <legend>Person 3</legend>
                                        <div class="col form-group mb-5">
                                            <label for="person3FirstName" class="col-form-label">First Name (Optional)</label>
                                            <input type="text" class="form-control" id="person3FirstName" name="person3FirstName">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person3Surname" class="col-form-label">Surname (Optional)</label>
                                            <input type="text" class="form-control" id="person3Surname" name="person3Surname">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person3Position" class="col-form-label">Position or Role (Optional)</label>
                                            <input type="text" class="form-control" id="person3Position" name="person3Position">
                                        </div>
                                        <div class="col form-group mb-5">
                                            <label for="person3DateOfBirth" class="col-form-label">Date of Birth (Optional)</label>
                                            <input type="date" class="form-control" id="person3DateOfBirth" name="person3DateOfBirth">
                                        </div>
                                    </fieldset>
                                </div>


                                <div class="col-md-12 form-group mb-5 mt-5">
                                    <label for="" class="col-form-label">How are you involved in the reported facts? *</label>
                                    <select class="form-control" id="involved" name="involved">
                                        <option value="victim">I'm a victim</option>
                                        <option value="involved">I'm involved in the facts</option>
                                        <option value="direct_witness">I was personally told by a direct witness</option>
                                        <option value="rumor">It is a rumor I heard</option>
                                    </select>
                                </div>

                                <div class="col-md-12 form-group mb-5">
                                    <label for="alleged_conduct" class="col-form-label">In your view, which, if any, of the following categories best describes the alleged conduct? *</label>
                                    <select class="form-control" id="alleged_conduct" name="alleged_conduct">
                                        <option value="">Select an option</option>
                                        <option value="Receiving a benefit such as a bribe (either monetary or non-monetary)">Receiving a benefit such as a bribe (either monetary or non-monetary)</option>
                                        <option value="Requesting a benefit (either monetary or non-monetary)">Requesting a benefit (either monetary or non-monetary)</option>
                                        <option value="Misuse of government resources">Misuse of government resources</option>
                                        <option value="influence_employment">Influence in employment processes</option>
                                        <option value="Influence in procurement processes">Influence in procurement processes</option>
                                        <option value="Covering up or failing to report corruption">Covering up or failing to report corruption</option>
                                        <option value="Abuse of a law enforcement power or authority">Abuse of a law enforcement power or authority</option>
                                        <option value="Breach of policy or procedure">Breach of policy or procedure</option>
                                        <option value="Abuse of regulatory process">Abuse of regulatory process</option>
                                        <option value="Blackmail">Blackmail</option>
                                        <option value="Extortion">Extortion</option>
                                        <option value="Other conduct">Other conduct</option>
                                    </select>
                                </div>

                                <div class="col-md-12 form-group mb-5">
                                    <label for="" class="col-form-label">Do you have evidence to support your report? *</label>
                                    <select class="form-control" id="evidence_availability" name="evidence_availability">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class = "act-evidence d-block">
                                <div class="col-md-12 form-group mb-5">
                                    <label for="" class="col-form-label">Please describe the evidence in detail. *</label>
                                    <input type="textarea" class="form-control" name="evidence_description" id="evidence_description" rows="5" placeholder="A thorough description of the submitted evidence enhances our ability to evaluate claims and investigate. Please take care to reference significant portions of any videos, images or documents submitted.">
                                </div>


                                <div class="col-md-12 form-group mb-5">
                                    <label for="" class="col-form-label">Please attach the evidence to support your report. *</label>
                                    <input class="form-control" type="file" name="evidence" id="evidence">
                                </div>
                                </div>
                                <div class="col-md-12 form-group mb-5">
                                    <label for="" class="col-form-label">Tell us why you think this is a corrupt conduct or incident . *</label>
                                    <input type="textarea" class="form-control" name="evidence_justification" id="evidence_justification" rows="5" placeholder="Outline what you think makes the behaviour or action 'corrupt'. This may include the intent or what the actual or potential impact is/was.">
                                </div>

                                <div class="col-md-12 form-group mb-5">

                                    <div class="alert alert-info">
                                        <p style="color:black"> <strong>Do you prefer to provide your contact details so that we can contact you should we need to, or remain anonymous?</strong></p>
                                        <em>Note:<br>
                                            Identifying yourself and providing contact details is optional (except for Agency Head referrals).
                                            Please be aware that if you choose to remain anonymous, we will be unable to contact you to request further information or to advise you of the outcome of your report.
                                        </em>
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="anonymous" id="anonymous_checkbox" name="anonymous_checkbox" checked>
                                        <label class="form-check-label" for="anonymous_checkbox">
                                            I want to remain anonymous
                                        </label>
                                    </div>
                                    <fieldset class="col-md-12 custom-fieldset my-3 d-none" id="user_details_fieldset">
                                        <legend>Your Details</legend>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name">First name *</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="surname">Surname *</label>
                                                <input type="text" class="form-control" id="surname" name="surname">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="organisation">Organisation (Optional)</label>
                                                <input type="text" class="form-control" id="organisation" name="organisation">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="contact_method">Contact Method *</label>
                                                <select class="form-control" id="contact_method" name="contact_method">
                                                    <option value="">Select a contact method</option>
                                                    <option value="email">Email</option>
                                                    <option value="phone">Phone</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="email">Email *</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="phone">Phone *</label>
                                                <input type="text" class="form-control" id="phone" name="phone">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="address">Address (Optional)</label>
                                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="col-md-12 form-group mt-5">
                                        <input type="submit" value="Submit Report" class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                    </form>

                    <div id="form-message-warning mt-4"></div>
                    <div id="form-message-success">
                        Your message was sent, thank you!
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<script>
// Get references to the checkbox and fieldset
 const anonymousCheckbox = document.getElementById('anonymous_checkbox');
 const userDetailsFieldset = document.getElementById('user_details_fieldset');

 // Add event listener to the checkbox
 anonymousCheckbox.addEventListener('change', function() {
	 // If checkbox is checked, show the fieldset
	 if (this.checked) {
		 userDetailsFieldset.classList.remove('d-none');
		 userDetailsFieldset.classList.add('d-block');
	 } else {
		 // If checkbox is unchecked, hide the fieldset
		 userDetailsFieldset.classList.remove('d-block');
		 userDetailsFieldset.classList.add('d-none');
	 }
 });
  document.addEventListener("DOMContentLoaded", function() {
    var selectElement = document.getElementById("evidence_availability");
    var evidenceSection = document.querySelector(".act-evidence");

    // Initial state
    if (selectElement.value === "No") {
      evidenceSection.classList.add("d-none");
    }

    // Listen for changes in the select element
    selectElement.addEventListener("change", function() {
      if (selectElement.value === "No") {
        evidenceSection.classList.add("d-none");
      } else {
        evidenceSection.classList.remove("d-none");
      }
    });
  });

 </script>
<?php
require_once 'footer.php';
?>