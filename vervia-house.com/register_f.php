<SCRIPT language=JavaScript><!--
function check()  {
	if (reg.username.value=="")  {
		alert("Please input username!");
		reg.username.focus();
		return false;
	}
	if (reg.username.value.length<4)  {
		alert("Username length less than 4!");
		reg.username.focus();
		return false;
	}
	if (reg.password.value.length<4 || reg.password.value.length>16)  {
		alert("Password length betwween 4-16!");
		reg.password.focus();
		return false;
	}
	if (reg.password.value=="")  {
		alert("Please input password!");
		reg.password.focus();
		return false;
	}
	if (reg.password.value!=reg.rpassword.value)  {
		alert("password was wrong!");
		reg.password.focus();
		return false;
	}		
	if (reg.fname.value=="")  {
		alert("Please input first name!");
		reg.fname.focus();
		return false;
	}	
	if (reg.lname.value=="")  {
		alert("Please input last name!");
		reg.fname.focus();
		return false;
	}	
	if (reg.year.value=="" || reg.month.value=="" || reg.day.value=="")  {
		alert("Please input birthday!");
		reg.year.focus();
		return false;
	}
	if (reg.email.value=="")  {
		alert("Please input Email!");
		reg.email.focus();
		return false;
	}		
	if (reg.email.value.indexOf("@") == -1)  {
		alert("Email is wrong!");
		reg.email.focus();
		return false;
	}	
	if (reg.company.value=="")  {
		alert("Please input company name!");
		reg.company.focus();
		return false;
	}		
	if (reg.type.value=="")  {
		alert("Please select business type!");
		reg.type.focus();
		return false;
	}		
	if (reg.job.value=="")  {
		alert("Please select job title!");
		reg.job.focus();
		return false;
	}		
	if (reg.markets.value=="")  {
		alert("Please select main markets!");
		reg.markets.focus();
		return false;
	}	
	if (reg.employees.value=="")  {
		alert("Please select number of employees!");
		reg.employees.focus();
		return false;
	}	
	if (reg.introduction.value=="")  {
		alert("Please input company introduction!");
		reg.introduction.focus();
		return false;
	}	
	if (reg.country.value=="")  {
		alert("Please select country & territory!");
		reg.country.focus();
		return false;
	}	
	if (reg.street.value=="")  {
		alert("Please input street address!");
		reg.street.focus();
		return false;
	}	
	if (reg.tel1.value=="" || reg.tel2.value=="" || reg.tel3.value=="")  {
		alert("Please input Tel!");
		reg.tel.focus();
		return false;
	}
	if (reg.fax1.value=="" || reg.fax2.value=="" || reg.fax3.value=="")  {
		alert("Please input Fax!");
		reg.fax.focus();
		return false;
	}		
	if (reg.mobile.value=="")  {
		alert("Please input mobile!");
		reg.mobile.focus();
		return false;
	}	
	
	
}
//-->
</SCRIPT>

<table width="760" border=0 cellpadding=0 
                        cellspacing=0 class="txt">
  <form action="register_ok.php" method="post" onsubmit="return check()" name="reg">
    <tr bgcolor="#FFFBE8">
      <td width="31%" height="25" >User Name<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="username" type="text" class="input" id="name53" size="16"></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Password<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="password" type="password" class="input" id="name54" size="12"></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Confirm Password<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="rpassword" type="password" class="input" id="rpassword" size="12"></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >First Name<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td width="20%" height="25"><input name="fname" type="text" class="input" id="name52" size="16">
          <span ></span></td>
      <td width="49%">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Last Name<span ><span ><font color="#FF0000">*</font></span></span> </td>
      <td height="25" colspan="2"><input name="lname" type="text" class="input" id="name52" size="16">
          <span ></span></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" > Sex <span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="sex" type="radio" value="1" checked>
          <span >Female</span>
          <input name="sex" type="radio" value="2">
          <span >Male<span ></span></span></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" > Birthday <span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2" ><input name="year" type="text" class="input" id="age12" size="4">
        Year
          <input name="month" type="text" class="input" id="age22" size="2">
        Month
        <input name="day" type="text" class="input" id="age32" size="2">
        Day</td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Business Email<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="email" type="text" class="input" id="mail5" value="" size="28"></td>
    </tr>
    <tr>
      <td height="25" >&nbsp;</td>
      <td height="25" colspan="2">&nbsp;</td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Company Name <span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="company" type="text" class="input" id="dz3" size="40"></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Business Type <span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><select name="type" id="type">
          <option selected>*please select*</option>
          <option value="1">Manufacturer</option>
          <option value="2">Trading Company</option>
          <option value="3">Buying Office</option>
          <option value="4">Distributor/Wholesaler</option>
          <option value="5">Agent</option>
          <option value="6">Others</option>
      </select></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Job Title <span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><select name="job" id="job">
          <option selected>*please select*</option>
          <option value="1">Director/CEO/General Manager</option>
          <option value="2">Owner/Entrepreneur</option>
          <option value="3">Marketing</option>
          <option value="4">Sales</option>
          <option value="5">Purchasing</option>
          <option value="6">Technical &amp; Engineering</option>
          <option value="7">Administrative</option>
          <option value="8">Other</option>
      </select></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Main Markets <span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><select name="markets" id="markets">
          <option selected>*please select*</option>
          <option value="1">North America</option>
          <option value="2">South America</option>
          <option value="3">Western Europe</option>
          <option value="4">Eastern Europe</option>
          <option value="5">Eastern Asia</option>
          <option value="6">Southeast Asia</option>
          <option value="7">Mid East</option>
          <option value="8">Africa</option>
          <option value="9">Oceania</option>
          <option value="10">Worldwide</option>
      </select></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Other Markets </td>
      <td height="25" colspan="2"><input name="omarkets" type="text" class="input" id="dz23" size="16"></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Number of Employees<span ><span ><font color="#FF0000">*</font></span></span> </td>
      <td height="25" colspan="2"><select name="employees" id="employees">
          <option selected>*please select*</option>
          <option value="1">Less than 5 People</option>
          <option value="2">5 - 10 People</option>
          <option value="3">11 - 50 People</option>
          <option value="4">51 - 100 People</option>
          <option value="5">101 - 500 People</option>
          <option value="6">501 - 1000 People</option>
          <option value="7">Above 1000 People</option>
      </select></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Legal Reprsentative/CEO </td>
      <td height="25" colspan="2"><input name="ceo" type="text" class="input" id="dz23" size="16"></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Annual Sales Volume </td>
      <td height="25" colspan="2"><select name="volume" id="volume">
          <option selected>*please select*</option>
          <option value="1">Below US$1 Million</option>
          <option value="2">US$1 Million - US$2.5 Million</option>
          <option value="3">US$2.5 Million - US$5 Million</option>
          <option value="4">US$5 Million - US$10 Million</option>
          <option value="5">US$10 Million - US$50 Million</option>
          <option value="6">US$50 Million - US$100 Million</option>
          <option value="7">Above US$100 Million</option>
      </select></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Year Established </td>
      <td height="25" colspan="2"><input name="established" type="text" class="input" id="dz23" size="16">
        (e.g.,1999)</td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" >Certifications</td>
      <td height="25" colspan="2"><input name="certifications" type="text" class="input" id="dz23" size="16"></td>
    </tr>
    <tr bgcolor="#F3FAFA">
      <td height="25" valign="top" >Company Introduction <span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><textarea name="introduction" cols="40" rows="6" class="input" id="dz3"></textarea></td>
    </tr>
    <tr>
      <td height="25" >&nbsp;</td>
      <td height="25" colspan="2">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Country &amp; Territory<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><span class="paddedbox4">
        <select name="country" id="countrySelect" onchange="return countryChange(this)">
          <option value="0" selected>Select Your Country &amp; Territory</option>
          <option value="AF">Afghanistan</option>
          <option value="AL">Albania</option>
          <option value="DZ">Algeria</option>
          <option value="AS">American Samoa</option>
          <option value="AD">Andorra</option>
          <option value="AO">Angola</option>
          <option value="AI">Anguilla</option>
          <option value="AQ">Antarctica</option>
          <option value="AG">Antigua and Barbuda</option>
          <option value="AR">Argentina</option>
          <option value="AM">Armenia</option>
          <option value="AW">Aruba</option>
          <option value="AU">Australia</option>
          <option value="AT">Austria</option>
          <option value="AZ">Azerbaijan</option>
          <option value="BS">Bahamas</option>
          <option value="BH">Bahrain</option>
          <option value="BD">Bangladesh</option>
          <option value="BB">Barbados</option>
          <option value="BY">Belarus</option>
          <option value="BE">Belgium</option>
          <option value="BZ">Belize</option>
          <option value="BJ">Benin</option>
          <option value="BM">Bermuda</option>
          <option value="BT">Bhutan</option>
          <option value="BO">Bolivia</option>
          <option value="BA">Bosnia and Herzegovina</option>
          <option value="BW">Botswana</option>
          <option value="BV">Bouvet Island</option>
          <option value="BR">Brazil</option>
          <option value="IO">British Indian Ocean Territory</option>
          <option value="BN">Brunei Darussalam</option>
          <option value="BG">Bulgaria</option>
          <option value="BF">Burkina Faso</option>
          <option value="BI">Burundi</option>
          <option value="KH">Cambodia</option>
          <option value="CM">Cameroon</option>
          <option value="CA">Canada</option>
          <option value="CV">Cape Verde</option>
          <option value="KY">Cayman Islands</option>
          <option value="CF">Central African Republic</option>
          <option value="TD">Chad</option>
          <option value="CD">Channel Island</option>
          <option value="CL">Chile</option>
          <option value="CN">China (Mainland)</option>
          <option value="CX">Christmas Island</option>
          <option value="CC">Cocos (Keeling) Islands</option>
          <option value="CO">Colombia</option>
          <option value="KM">Comoros</option>
          <option value="CG">Congo</option>
          <option value="ZR">Congo, The Democratic Republic Of The</option>
          <option value="CK">Cook Islands</option>
          <option value="CR">Costa Rica</option>
          <option value="CI">Cote D'Ivoire</option>
          <option value="HR">Croatia (local name: Hrvatska)</option>
          <option value="CU">Cuba</option>
          <option value="CY">Cyprus</option>
          <option value="CZ">Czech Republic</option>
          <option value="DK">Denmark</option>
          <option value="DJ">Djibouti</option>
          <option value="DM">Dominica</option>
          <option value="DO">Dominican Republic</option>
          <option value="TP">East Timor</option>
          <option value="EC">Ecuador</option>
          <option value="EG">Egypt</option>
          <option value="SV">El Salvador</option>
          <option value="GQ">Equatorial Guinea</option>
          <option value="ER">Eritrea</option>
          <option value="EE">Estonia</option>
          <option value="ET">Ethiopia</option>
          <option value="FK">Falkland Islands (Malvinas)</option>
          <option value="FO">Faroe Islands</option>
          <option value="FJ">Fiji</option>
          <option value="FI">Finland</option>
          <option value="FR">France</option>
          <option value="FX">France Metropolitan</option>
          <option value="GF">French Guiana</option>
          <option value="PF">French Polynesia</option>
          <option value="TF">French Southern Territories</option>
          <option value="GA">Gabon</option>
          <option value="GM">Gambia</option>
          <option value="GE">Georgia</option>
          <option value="DE">Germany</option>
          <option value="GH">Ghana</option>
          <option value="GI">Gibraltar</option>
          <option value="GR">Greece</option>
          <option value="GL">Greenland</option>
          <option value="GD">Grenada</option>
          <option value="GP">Guadeloupe</option>
          <option value="GU">Guam</option>
          <option value="GT">Guatemala</option>
          <option value="GN">Guinea</option>
          <option value="GW">Guinea-Bissau</option>
          <option value="GY">Guyana</option>
          <option value="HT">Haiti</option>
          <option value="HM">Heard and Mc Donald Islands</option>
          <option value="HN">Honduras</option>
          <option value="HK">Hong Kong</option>
          <option value="HU">Hungary</option>
          <option value="IS">Iceland</option>
          <option value="IN">India</option>
          <option value="ID">Indonesia</option>
          <option value="IR">Iran (Islamic Republic of)</option>
          <option value="IQ">Iraq</option>
          <option value="IE">Ireland</option>
          <option value="IL">Israel</option>
          <option value="IT">Italy</option>
          <option value="JM">Jamaica</option>
          <option value="JP">Japan</option>
          <option value="JO">Jordan</option>
          <option value="KZ">Kazakhstan</option>
          <option value="KE">Kenya</option>
          <option value="KI">Kiribati</option>
          <option value="KW">Kuwait</option>
          <option value="KG">Kyrgyzstan</option>
          <option value="LA">Lao People's Democratic Republic</option>
          <option value="LV">Latvia</option>
          <option value="LB">Lebanon</option>
          <option value="LS">Lesotho</option>
          <option value="LR">Liberia</option>
          <option value="LY">Libyan Arab Jamahiriya</option>
          <option value="LI">Liechtenstein</option>
          <option value="LT">Lithuania</option>
          <option value="LU">Luxembourg</option>
          <option value="MO">Macau</option>
          <option value="MK">Macedonia</option>
          <option value="MG">Madagascar</option>
          <option value="MW">Malawi</option>
          <option value="MY">Malaysia</option>
          <option value="MV">Maldives</option>
          <option value="ML">Mali</option>
          <option value="MT">Malta</option>
          <option value="MH">Marshall Islands</option>
          <option value="MQ">Martinique</option>
          <option value="MR">Mauritania</option>
          <option value="MU">Mauritius</option>
          <option value="YT">Mayotte</option>
          <option value="MX">Mexico</option>
          <option value="FM">Micronesia</option>
          <option value="MD">Moldova</option>
          <option value="MC">Monaco</option>
          <option value="MN">Mongolia</option>
          <option value="MS">Montserrat</option>
          <option value="MA">Morocco</option>
          <option value="MZ">Mozambique</option>
          <option value="MM">Myanmar</option>
          <option value="NA">Namibia</option>
          <option value="NR">Nauru</option>
          <option value="NP">Nepal</option>
          <option value="NL">Netherlands</option>
          <option value="AN">Netherlands Antilles</option>
          <option value="NC">New Caledonia</option>
          <option value="NZ">New Zealand</option>
          <option value="NI">Nicaragua</option>
          <option value="NE">Niger</option>
          <option value="NG">Nigeria</option>
          <option value="NU">Niue</option>
          <option value="NF">Norfolk Island</option>
          <option value="KP">North Korea</option>
          <option value="MP">Northern Mariana Islands</option>
          <option value="NO">Norway</option>
          <option value="OM">Oman</option>
          <option value="Other">Other Country</option>
          <option value="PK">Pakistan</option>
          <option value="PW">Palau</option>
          <option value="PS">Palestine</option>
          <option value="PA">Panama</option>
          <option value="PG">Papua New Guinea</option>
          <option value="PY">Paraguay</option>
          <option value="PE">Peru</option>
          <option value="PH">Philippines</option>
          <option value="PN">Pitcairn</option>
          <option value="PL">Poland</option>
          <option value="PT">Portugal</option>
          <option value="PR">Puerto Rico</option>
          <option value="QA">Qatar</option>
          <option value="RE">Reunion</option>
          <option value="RO">Romania</option>
          <option value="RU">Russian Federation</option>
          <option value="RW">Rwanda</option>
          <option value="KN">Saint Kitts and Nevis</option>
          <option value="LC">Saint Lucia</option>
          <option value="VC">Saint Vincent and the Grenadines</option>
          <option value="WS">Samoa</option>
          <option value="SM">San Marino</option>
          <option value="ST">Sao Tome and Principe</option>
          <option value="SA">Saudi Arabia</option>
          <option value="SN">Senegal</option>
          <option value="SC">Seychelles</option>
          <option value="SL">Sierra Leone</option>
          <option value="SG">Singapore</option>
          <option value="SK">Slovakia (Slovak Republic)</option>
          <option value="SI">Slovenia</option>
          <option value="SB">Solomon Islands</option>
          <option value="SO">Somalia</option>
          <option value="ZA">South Africa</option>
          <option value="KR">South Korea</option>
          <option value="ES">Spain</option>
          <option value="LK">Sri Lanka</option>
          <option value="SH">St. Helena</option>
          <option value="PM">St. Pierre and Miquelon</option>
          <option value="SD">Sudan</option>
          <option value="SR">Suriname</option>
          <option value="SJ">Svalbard and Jan Mayen Islands</option>
          <option value="SZ">Swaziland</option>
          <option value="SE">Sweden</option>
          <option value="CH">Switzerland</option>
          <option value="SY">Syrian Arab Republic</option>
          <option value="TW">Taiwan</option>
          <option value="TJ">Tajikistan</option>
          <option value="TZ">Tanzania</option>
          <option value="TH">Thailand</option>
          <option value="TG">Togo</option>
          <option value="TK">Tokelau</option>
          <option value="TO">Tonga</option>
          <option value="TT">Trinidad and Tobago</option>
          <option value="TN">Tunisia</option>
          <option value="TR">Turkey</option>
          <option value="TM">Turkmenistan</option>
          <option value="TC">Turks and Caicos Islands</option>
          <option value="TV">Tuvalu</option>
          <option value="UG">Uganda</option>
          <option value="UA">Ukraine</option>
          <option value="AE">United Arab Emirates</option>
          <option value="UK">United Kingdom</option>
          <option value="US">United States</option>
          <option value="UM">United States Minor Outlying Islands</option>
          <option value="UY">Uruguay</option>
          <option value="UZ">Uzbekistan</option>
          <option value="VU">Vanuatu</option>
          <option value="VA">Vatican City State (Holy See)</option>
          <option value="VE">Venezuela</option>
          <option value="VN">Vietnam</option>
          <option value="VG">Virgin Islands (British)</option>
          <option value="VI">Virgin Islands (U.S.)</option>
          <option value="WF">Wallis And Futuna Islands</option>
          <option value="EH">Western Sahara</option>
          <option value="YE">Yemen</option>
          <option value="YU">Yugoslavia</option>
          <option value="ZM">Zambia</option>
          <option value="ZW">Zimbabwe</option>
        </select>
      </span></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Province/State</td>
      <td height="25" colspan="2"><input name="state" type="text" class="input" id="dz23" size="16"></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >City</td>
      <td height="25" colspan="2"><input name="city" type="text" class="input" id="dz23" size="16"></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Street Address<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="street" type="text" class="input" id="dz3" size="40"></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Zip/Postal Code <span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="zip" type="text" class="input" id="yb2" size="10">
      </td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Tel<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="tel1" type="text" class="input" id="tell2" size="6">
        -
          <input name="tel2" type="text" class="input" id="tell2" size="6">
        -
        <input name="tel3" type="text" class="input" id="tell2" size="16"></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Fax<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="fax1" type="text" class="input" id="tell" size="6">
        -
          <input name="fax2" type="text" class="input" id="tell2" size="6">
        -
        <input name="fax3" type="text" class="input" id="tell2" size="16"></td>
    </tr>
    <tr bgcolor="#FFFBE8">
      <td height="25" >Mobile<span ><span ><font color="#FF0000">*</font></span></span></td>
      <td height="25" colspan="2"><input name="mobile" type="text" class="input" id="tell" size="16"></td>
    </tr>
    <tr>
      <td height="25" >&nbsp;</td>
      <td height="25" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" ><div align="center"></div></td>
      <td height="25" colspan="2"><input name="Submit" type="submit" id="Submit3" value="Register">
          <input type="reset" name="Submit2" value="Reset"></td>
    </tr>
  </form>
</table>
