@extends('templates/default')

@section('main_content')

    <div class="program_page generic_page request_info_page apply_online_page">

        <div class="program_head">
            <div class="container">
                <div class="col-md-12 title">
                    <h1>Apply Online</h1>
                </div>
            </div>
        </div>

        <div class="container ">
            <div class="col-md-10 col-md-offset-1">
                <div class="apply_info">
                    <ul>
                        <li>To determine whether you can gain from our course of study, we ask that you answer the questions on this form. Please answer all questions as fully as you can. All information will be held in strict confidence and will be used to determine your aptitude for a career in allied health. Upon graduation, information on this form may assist with placement.</li>
                        <li>Admissions requirements/criteria are listed in the School Catalog.</li>
                        <li>Great Lakes does not discriminate against any person because of race, color, religion, sex, disabilities, age, national origin, or ancestry regarding admission to programs or placement activities.</li>
                    </ul>
                </div>
                <div class="well">
                    {!! Form::open(['id' => 'contact_form', 'action' => 'FormController@index', 'class' => 'form-inline']) !!}
                        <table>
                            <tr>
                                <td colspan='4'>
                                    <h1>Personal Information</h1>
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class='star_required'>*First Name</span>
                                </th>
                                <td>
                                    <input type='text' name='first_name' value=''  />
                                </td>
                                <th>
                                    <span class='star_required'>*Last Name</span>
                                </th>
                                <td>
                                    <input type='text' name='last_name' value=''  />
                                    <input  type='text' name='glit' size='5' style='display:none;' />
                                </td>
                            </tr>
                            <tr>
                                <th>Middle Initial</th>
                                <td>
                                    <input type='text' name='middle_initial' value=''  />
                                </td>
                                <th>Maiden Name</th>
                                <td>
                                    <input type='text' name='maiden_name' value=''  />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class='star_required'>*Address</span>
                                </th>
                                <td>
                                    <input type='text' name='address' value=''   />
                                </td>
                                <th>
                                    <span class='star_required'>*City</span>
                                </th>
                                <td>
                                    <input type='text' name='city' value=''   />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class='star_required'>*State</span>
                                </th>
                                <td>
                                    <input type='text' name='state' value=''  />
                                </td>
                                <th>Zipcode</th>
                                <td>
                                    <input type='text' name='zip' value=''  />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class='star_required'>*Home Phone</span>
                                </th>
                                <td>
                                    <input type='text' name='home_phone' value=''  />
                                </td>
                                <th>Cell Phone</th>
                                <td>
                                    <input type='text' name='cell_phone' value=''  />
                                </td>
                            </tr>
                            <tr>
                                <th>Work Phone</th>
                                <td>
                                    <input type='text' name='work_phone' value=''  />
                                </td>
                            </tr>
                            <tr>
                                <th>May we contact you at work?</th>
                                <td>
                                    <select name='work_contact'>
                                        <option value ='No'>No</option>
                                        <option value='Yes'>Yes</option>
                                    </select>
                                </td>
                                <th>May we text your cell phone?</th>
                                <td>
                                    <select name='text_message'>
                                        <option value ='No'>No</option>
                                        <option value='Yes'>Yes</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class='star_required'>*Email Address</span>
                                </th>
                                <td>
                                    <input type='text' name='email' value='' size='20' />
                                </td>
                                <th>Date of Birth</th>
                                <td>
                                    <input type='text' name='date_of_birth' value='' size='20' />
                                </td>
                            </tr>
                            <tr>
                                <th>Driver's License #</th>
                                <td>
                                    <input type='text' name='drivers_license' value='' size='20' />
                                </td>
                                <th>Driver's License State</th>
                                <td>
                                    <input type='text' name='drivers_license_state' value='' size='20' />
                                </td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>
                                    <select name='gender'>
                                        <option value ='Male'>Male</option>
                                        <option value='Female'>Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Hispanic or Latino</th>
                                <td>
                                    <select name='ethnic2'>
                                        <option value ='Yes'>Yes</option>
                                        <option value='No'>No</option>
                                    </select>
                                </td>
                                <th>Ethnic</th>
                                <td>
                                    <select name='ethnic'>
                                        <option value ='white'>White</option>
                                        <option value='Black or African American'>African American</option>
                                        <option value='asian'>Asian</option>
                                        <option value='American Indian or Alaska Native'>American Indian or Alaska Native</option>
                                        <option value='Native Hawaiian or Pacific Islander'>Native Hawaiian or Pacific Islander</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Veteran?</th>
                                <td>
                                    <select name='veteran'>
                                        <option value='no'>No</option>
                                        <option value ='yes'>Yes</option>
                                    </select>
                                </td>
                                <th>Citizenship</th>
                                <td>
                                    <select name='citizenship'>
                                        <option value ='us'>US Citizen</option>
                                        <option value='not us'>Not a US Citizen</option>
                                        <option value='green card'>I-551 Green Card</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Alt. Contact Name</th>
                                <td>
                                    <input type='text' name='alt_contact_name' value='' size='20' />
                                </td>
                                <th>Relationship</th>
                                <td>
                                    <input type='text' name='relationship' value='' size='20' />
                                </td>
                            </tr>
                            <tr>
                                <th>Alt. Phone</th>
                                <td>
                                    <input type='text' name='alt_phone' value='' size='20' />
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan='2'>
                                    <h1>Background and Health</h1>
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <th>Have you ever been convicted or pleaded guilty to a crime?</th>
                                <td>
                                    <select name='convicted_of_crime'>
                                        <option value='no'>No</option>
                                        <option value ='yes'>Yes</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                    <th>If yes, please explain:</th>
                                    <td><textarea rows='2' cols='40' name='crime_explanation' value='' /></textarea></td>
                                </tr>
                            <tr>
                                <th>Condition of Health: Please explain any special health requirements or any physical problems?</th>
                                <td>
                                    <textarea rows='2' cols='40' name='health' value='' /></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>List known allergies.</th>
                                <td>
                                    <textarea rows='2' cols='40' name='allergies' value='' /></textarea>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan='3'>
                                    <h1>Program of Interest</h1>
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <th>I am applying for:</th>
                                    <td>

                                        {!! Form::select('programs', $programs, null, ['class' => 'form-control']) !!}
                                    </td>
                                <td><select name='time'><option value='day'>Day Time</option><option value='night'>Night Time</option></select></td>

                            </tr>

                            <th>When would you like to begin?</th>

                            <td><select name='desired_start'>
                                    <option value='unsure'>Unsure</option>
                                    <option value='ASAP'>As Soon as Possible</option>
                                    <option value='within_6_months'>Within 6 Months</option>
                                    <option value='within_1_year'>Within 1 Year</option>
                                    <option value='more_than_1_year'>More Than 1 Year</option>
                                </select></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan='4'>
                                    <h1>Education Information</h1>
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <th>GED - Year Completed</th>
                                <td >
                                    <input type='text' name='ged_completed' value=''  />
                                </td>
                                <th>State Where Completed</th>
                                <td>
                                    <input type='text' name='ged_state' value='' />
                                </td>
                            </tr>
                            <tr>
                                <th>High School Diploma - Year Graduated:</th>
                                <td>
                                    <input type='text' name='diploma_completed' value='' />
                                </td>
                            </tr>
                            <tr>
                                <th>High School Name</th>
                                <td>
                                    <input type='text' name='hs_name' value=''  />
                                </td>
                                <th>City / State</th>
                                <td>
                                    <input type='text' name='hs_city_state' value='' />
                                </td>
                            </tr>
                        </table>
                        <br/>
                        <table>
                            <tr>
                                <hr/>
                                <th colspan='3' style="text-align: left">Beginning immediately after high school, list all other training you have started and/or completed, including college, trade, or business schools: </th>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td >School Name</td>
                                <td >City, State</td>
                                <td >Program of Study, type of degree earned:</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type='text' name='post_school_1' value='' ></input>
                                </td>
                                <td>
                                    <input type='text' name='post_school_1_city' value=''></input>
                                </td>
                                <td>
                                    <input type='text' name='post_school_1_description' value='' ></input>
                                </td>
                            </tr>
                            <tr>
                                <td >Years Attended</td>
                                <td >Did You Graduate</td>
                                <td ></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type='text' name='post_school_1_year' value='' ></input>
                                </td>
                                <td>
                                    Yes?
                                    <input type='checkbox' name='post_school_1_graduated' value='Yes' />
                                </td>
                            </tr>
                            <tr>
                                <td colspan='3'><div class='hor_line'></div></td>
                            </tr>
                            <tr><td colspan='3'><hr/></td></tr>
                            <tr>
                                <td >School Name</td>
                                <td >City, State</td>
                                <td >Program of Study, type of degree earned:</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type='text' name='post_school_2' value='' ></input>
                                </td>
                                <td>
                                    <input type='text' name='post_school_2_city' value='' ></input>
                                </td>
                                <td>
                                    <input type='text' name='post_school_2_description' value='' ></input>
                                </td>
                            </tr>
                            <tr>
                                <td >Years Attended</td>
                                <td >Did You Graduate</td>
                                <td ></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type='text' name='post_school_2_year' value='' ></input>
                                </td>
                                <td>
                                    Yes?
                                    <input type='checkbox' name='post_school_2_graduated' value='Yes'/>
                                </td>
                            </tr>
                            <tr><td colspan='3'><hr/></td></tr>
                            <tr>
                                <td >School Name</td>
                                <td >City, State</td>
                                <td >Program of Study, type of degree earned:</td>
                            </tr>
                            <tr>
                                <td ><input type='text' name='post_school_3' value='' ></input></td>
                                <td><input type='text' name='post_school_3_city' value='' ></input></td>
                                <td><input type='text' name='post_school_3_description' value='' ></input></td>
                            </tr>
                            <tr>
                                <td >Years Attended</td>
                                <td >Did You Graduate</td>
                                <td ></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type='text' name='post_school_3_year' value=''></input>
                                </td>
                                <td>
                                    Yes?
                                    <input type='checkbox' name='post_school_3_graduated' value='Yes' />
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan='4'>
                                    <h1>Employment History</h1>
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <th colspan='4' style="text-align: left">Please list job experience, starting with the most recent job first.</th>
                            </tr>
                            <tr>
                                <td >Employer Name & Address</td>
                                <td >Position Held</td>
                                <td >From (date)</td>
                                <td >To (date)</td>
                            </tr>
                            <tr>
                                <td >1. <input type='text' name='employment_1' value='' ></input></td>
                                <td><input type='text' name='position_1' value='' ></input></td>
                                <td><input type='text' name='date_from_1' value='' ></input></td>
                                <td><input type='text' name='date_to_1' value='' ></input></td>
                            </tr>
                            <tr>
                                <td >2. <input type='text' name='employment_2' value='' ></input></td>
                                <td><input type='text' name='position_2' value='' ></input></td>
                                <td><input type='text' name='date_from_2' value=''></input></td>
                                <td><input type='text' name='date_to_2' value=''></input></td>
                            </tr>
                            <tr>
                                <td >3. <input type='text' name='employment_3' value='' ></input></td>
                                <td><input type='text' name='position_3' value='' ></input></td>
                                <td><input type='text' name='date_from_3' value=''></input></td>
                                <td><input type='text' name='date_to_3' value=''></input></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan='3'>
                                    <h1>References</h1>
                                    <hr/>
                                </td>
                            </tr>
                            <tr><td colspan='3'><hr/></td></tr>
                            <tr>
                                <td >Name</td>
                                <td >Address</td>
                                <td >City, State</td>
                            </tr>
                            <tr>
                                <td ><input type='text' name='reference_1' value=''></input></td>
                                <td><input type='text' name='reference_address_1' value=''></input></td>
                                <td><input type='text' name='reference_city_1' value=''></input></td>
                            </tr>
                            <tr>
                                <td >Phone #</td>
                                <td >Relationship</td>
                                <td >Zip Code</td>
                            </tr>
                            <tr>
                                <td><input type='text' name='reference_phone_1' value=''></input></td>
                                <td><input type='text' name='reference_relationship_1' value=''></input></td>
                                <td><input type='text' name='reference_zipcode_1' value=''></input></td>
                            </tr>
                            <tr><td colspan='3'><hr/></td></tr>
                            <tr>
                                <td >Name</td>
                                <td >Address</td>
                                <td >City, State</td>
                            </tr>
                            <tr>
                                <td ><input type='text' name='reference_2' value=''></input></td>
                                <td><input type='text' name='reference_address_2' value=''></input></td>
                                <td><input type='text' name='reference_city_2' value=''></input></td>
                            </tr>
                            <tr>
                                <td >Phone #</td>
                                <td >Relationship</td>
                                <td >Zip Code</td>
                            </tr>
                            <tr>
                                <td><input type='text' name='reference_phone_2' value=''></input></td>
                                <td><input type='text' name='reference_relationship_2' value=''></input></td>
                                <td><input type='text' name='reference_zipcode_2' value=''></input></td>
                            </tr>
                            <tr>
                                <td colspan='3'>
                                    <hr/>
                                </td>
                            </tr>
                            <tr>
                                <td >Name</td>
                                <td >Address</td>
                                <td >City, State</td>
                            </tr>
                            <tr>
                                <td ><input type='text' name='reference_3' value=''></input></td>
                                <td><input type='text' name='reference_address_3' value=''></input></td>
                                <td><input type='text' name='reference_city_3' value=''></input></td>
                            </tr>
                            <tr>
                                <td >Phone #</td>
                                <td >Relationship</td>
                                <td >Zip Code</td>
                            </tr>
                            <tr>
                                <td><input type='text' name='reference_phone_3' value=''></input></td>
                                <td><input type='text' name='reference_relationship_3' value=''></input></td>
                                <td><input type='text' name='reference_zipcode_2' value=''></input></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    <hr/>
                                    <h3>Disclaimer</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    As part of the admission requirements, there is a $25.00 Application Fee due when you apply. <br><br>
                                    Applicants must complete a High School Transcript and / or a GED Transcript release form.<br><br>
                                    *If you opted-in to receive SMS / Text messages on your cell phone, it will only be used to send you communication pertaining to your enrollment. Please be aware your cell phone carrier may charge a fee for delivery of messages based on your current calling plan. Your number will not be given to any third party. You may opt-out in writing at any time.<br><br>
                                    Class sizes are limited to a maximum number of students per program and will be closed to enrollment when that number is reached. Enrollment is granted on a first-come first-serve bases only to registered applicants who have completed all admission requirements. Applicants who have not become enrolled in a class that has been closed have the option to register for a future class.<br><br>
                                    I authorize investigation of all statements contained in this application. I understand that misrepresentation or omission of facts called for is cause for rejection of this application or dismissal, if enrolled.<br/>
                                    <hr/>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan='2' align='right'>
                                    {!! Form::hidden('form_type', 'apply_online') !!}
                                    {!! Form::submit('Apply Now', ['class' => 'btn btn-success', 'id' => 'form_button']) !!}
                                    {{--<br/><input onclick="track_apply_online();" type='submit' name='submit_application' value='Apply Now' />--}}
                                </td>
                            </tr>
                        </table>
                    {!! Form::close() !!}
                </div>
            <div class="errors"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection