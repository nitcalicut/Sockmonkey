<!DOCTYPE HTML>
<html>
<head>
<title>Sockmonkey</title>

<?php
	include 'source.php';
	echo $header;
?>

</head>
<body>
<div id='topbar'></div>
<div id='container'>
<?php
	echo $topBar;
?>

<div class="g">
	<h2>Register <strong></strong></h2>
	<form method="post" action="src/response.participant.php">

<label>
	<strong>Username</strong>
	<input type="text" placeholder="What do we call you ?" name="pname">
</label>
<label>
	<strong>Email</strong>
	<input type="text" placeholder="What wont spam you !" name="pemail">
</label>
<label>
	<strong>Contact</strong>
	<input type="text" placeholder="Mobile number please" name="pcntct">
</label>
<label>
	<strong>State</strong>
	<input type="text" placeholder="Kerala/ TN" name="pstate">
</label>
<label>
	<strong>Gender</strong>
	<select name="pgender">
		<option value="M">Male</option>
		<option value="F">Female</option>
	</select>
</label>
<label>
	<strong>College</strong>
	<select name="pclg">
<option value="Other">Other</option>
<option value="A.D.Patel Institute of Technology">A.D.Patel Institute of Technology</option>
<option value="A.M.S College of Engineering">A.M.S College of Engineering</option>
<option value="ABV-IIITM, Gwalior">ABV-IIITM, Gwalior</option>
<option value="AMC College of Engineering, Bangalore">AMC College of Engineering, Bangalore</option>
<option value="ANITS,Visakhapatnam">ANITS,Visakhapatnam</option>
<option value="AWH Engineering College, Calicut">AWH Engineering College, Calicut</option>
<option value="Achariya Arts and Science College">Achariya Arts and Science College</option>
<option value="Adam Smith Institute of Management, Bangalore">Adam Smith Institute of Management, Bangalore</option>
<option value="Adi Shankara Institute of Engineering & Technology, Kalady">Adi Shankara Institute of Engineering & Technology, Kalady</option>
<option value="Ajay Binay Institute of Technology">Ajay Binay Institute of Technology</option>
<option value="Al-Farook Educational Center, Calicut">Al-Farook Educational Center, Calicut</option>
<option value="Al-Farook Residential School, Calicut">Al-Farook Residential School, Calicut</option>
<option value="All Saints\' College, Trivandrum">All Saints\' College, Trivandrum</option>
<option value="Alliance Business School, Bangalore">Alliance Business School, Bangalore</option>
<option value="St. Aloysious Institute of Management and IT, Mangalore">St. Aloysious Institute of Management and IT, Mangalore</option>
<option value="Amal Jyothi College of Engineering">Amal Jyothi College of Engineering</option>
<option value="Amrita School of Business">Amrita School of Business</option>
<option value="Amrita School of Engineering, Kollam">Amrita School of Engineering, Kollam</option>
<option value="Amrita Vishwa Vidyapeetham School of Engineering, Coimbatore">Amrita Vishwa Vidyapeetham School of Engineering, Coimbatore</option>
<option value="Andhra University College of Engineering">Andhra University College of Engineering</option>
<option value="Anjalai Ammal Mahalingam Engineering College">Anjalai Ammal Mahalingam Engineering College</option>
<option value="Anjuman College of Engineering & Technology">Anjuman College of Engineering & Technology</option>
<option value="Anna University, Trichy">Anna University, Trichy</option>
<option value="Apeejay Institute of Management, Jalandhar">Apeejay Institute of Management, Jalandhar</option>
<option value="Assam University, Silchar">Assam University, Silchar</option>
<option value="Aurora\'s Engineering College">Aurora\'s Engineering College</option>
<option value="B.M.S College of Engineering, Bangalore">B.M.S College of Engineering, Bangalore</option>
<option value="BITS Pilani">BITS Pilani</option>
<option value="BVBCET">BVBCET</option>
<option value="BVIMR">BVIMR</option>
<option value="BVRIT">BVRIT</option>
<option value="Badruka Institute of Foreign Trade">Badruka Institute of Foreign Trade</option>
<option value="Baithul Izza Arts and Science College">Baithul Izza Arts and Science College</option>
<option value="Banasthali University">Banasthali University</option>
<option value="Bannari Amman Institute of Technology">Bannari Amman Institute of Technology</option>
<option value="Bharathiya Vidya Bhavan Calicut">Bharathiya Vidya Bhavan Calicut</option>
<option value="Bharatiya Vidya Bhavan, Kannur">Bharatiya Vidya Bhavan, Kannur</option>
<option value="Bhilai Institute of Technology">Bhilai Institute of Technology</option>
<option value="Bits Pilani-Goa Campus">Bits Pilani-Goa Campus</option>
<option value="CBIT-Gandipet">CBIT-Gandipet</option>
<option value="College of Engineering Sri Venkateswara University">College of Engineering Sri Venkateswara University</option>
<option value="Chinmaya Mission College">Chinmaya Mission College</option>
<option value="Christ College, Bangalore">Christ College, Bangalore</option>
<option value="Clarence Public School">Clarence Public School</option>
<option value="Co-operative Institute of Technology, Vadakara">Co-operative Institute of Technology, Vadakara</option>
<option value="Cochin University College of Engineering (CUCEK)">Cochin University College of Engineering (CUCEK)</option>
<option value="Coimbatore Institute of Technology">Coimbatore Institute of Technology</option>
<option value="College of Engineering Trikaripur, Cheemeni">College of Engineering Trikaripur, Cheemeni</option>
<option value="College of Engineering, Munnar">College of Engineering, Munnar</option>
<option value="College of Engineering, Guindy, Chennai">College of Engineering, Guindy, Chennai</option>
<option value="College of Engineering, Kidangoor">College of Engineering, Kidangoor</option>
<option value="College of Engineering, Pallipuram">College of Engineering, Pallipuram</option>
<option value="College of Engineering,  Attingal">College of Engineering,  Attingal</option>
<option value="College of Engineering, Kallooppara">College of Engineering, Kallooppara</option>
<option value="College of Engineering, Adoor">College of Engineering, Adoor</option>
<option value="College of Engineering, Chengannur">College of Engineering, Chengannur</option>
<option value="College of Engineering, Pune">College of Engineering, Pune</option>
<option value="College of Engineering, Thalassery">College of Engineering, Thalassery</option>
<option value="College of Engineering, Trivandrum">College of Engineering, Trivandrum</option>
<option value="DA-IICT">DA-IICT</option>
<option value="DJ Sanghvi College of Engineering">DJ Sanghvi College of Engineering</option>
<option value="Don Bosco College">Don Bosco College</option>
<option value="Datta Meghe College of Engineering, Airoli, Navi Mumbai">Datta Meghe College of Engineering, Airoli, Navi Mumbai</option>
<option value="Deccan College of Engineering & Technology">Deccan College of Engineering & Technology</option>
<option value="Delhi College of Engineering.">Delhi College of Engineering.</option>
<option value="Dr. M.G.R. University, Chennai">Dr. M.G.R. University, Chennai</option>
<option value="FISAT, Angamaly">FISAT, Angamaly</option>
<option value="G.B.H.S.S. Parayanchery, Calicut">G.B.H.S.S. Parayanchery, Calicut</option>
<option value="G.H.S.S. Meenangadi">G.H.S.S. Meenangadi</option>
<option value="GEC, Kannur">GEC, Kannur</option>
<option value="GEC Thrissur">GEC Thrissur</option>
<option value="GEC, Barton Hill">GEC, Barton Hill</option>
<option value="GEC, Calicut">GEC, Calicut</option>
<option value="GEC, Idukki">GEC, Idukki</option>
<option value="GITAM,Visakhapatnam">GITAM,Visakhapatnam</option>
<option value="Govt. Vocational Higher Secondary School (THS) Manjeri">Govt. Vocational Higher Secondary School (THS) Manjeri</option>
<option value="GSSIT, Bangalore">GSSIT, Bangalore</option>
<option value="GVPCOE,Visakhapatnam">GVPCOE,Visakhapatnam</option>
<option value="Garden City College, Bangalore">Garden City College, Bangalore</option>
<option value="Geethanjali College of Engineering & Technology">Geethanjali College of Engineering & Technology</option>
<option value="Ghousia College of Engineering">Ghousia College of Engineering</option>
<option value="Global Acedamy of Technology">Global Acedamy of Technology</option>
<option value="Government Engineering College Sreekrishnapuram, Palakkad">Government Engineering College Sreekrishnapuram, Palakkad</option>
<option value="Government College of Technology, Coimbatore">Government College of Technology, Coimbatore</option>
<option value="Government Polytechnic College, Coimbatore">Government Polytechnic College, Coimbatore</option>
<option value="Govt. Engneering College, Wayanad">Govt. Engneering College, Wayanad</option>
<option value="Govt. Rajas Higher Secondary School, Kottakkal">Govt. Rajas Higher Secondary School, Kottakkal</option>
<option value="I.H.R.D">I.H.R.D</option>
<option value="IES College of Engineering, Chittilappilly">IES College of Engineering, Chittilappilly</option>
<option value="IPS Academy, Indore">IPS Academy, Indore</option>
<option value="IFMR, Chennai">IFMR, Chennai</option>
<option value="IIIT Allahabad">IIIT Allahabad</option>
<option value="IIIT Hyderabad">IIIT Hyderabad</option>
<option value="IIM Bangalore">IIM Bangalore</option>
<option value="IIM Calcutta">IIM Calcutta</option>
<option value="IIM Calicut">IIM Calicut</option>
<option value="IIM Indore">IIM Indore</option>
<option value="IIM Lucknow">IIM Lucknow</option>
<option value="IIST, Trivandrum">IIST, Trivandrum</option>
<option value="IISc Bangalore">IISc Bangalore</option>
<option value="IIT Delhi">IIT Delhi</option>
<option value="IIT Kanpur">IIT Kanpur</option>
<option value="IIT Kharagpur">IIT Kharagpur</option>
<option value="IIT Gandhinagar">IIT Gandhinagar</option>
<option value="IIT Madras">IIT Madras</option>
<option value="IIT Roorkee">IIT Roorkee</option>
<option value="IT-BHU">IT-BHU</option>
<option value="Indian Institute of Space Science and Technology">Indian Institute of Space Science and Technology</option>
<option value="Institute of Aeronautical Engineering">Institute of Aeronautical Engineering</option>
<option value="Jawaharlal College of Engineering and Technology">Jawaharlal College of Engineering and Technology</option>
<option value="JHS, Bangalore">JHS, Bangalore</option>
<option value="JNTU, Anantapur">JNTU, Anantapur</option>
<option value="Jeppiaar Engineering College">Jeppiaar Engineering College</option>
<option value="John Cox Engineering College,Trivandrum">John Cox Engineering College,Trivandrum</option>
<option value="Jyothi Engineering College, Thrissur">Jyothi Engineering College, Thrissur</option>
<option value="K L University">K L University</option>
<option value="K V G College of Engineering, Sullia, Mangalore">K V G College of Engineering, Sullia, Mangalore</option>
<option value="K.S.Institute of Technology">K.S.Institute of Technology</option>
<option value="KLN College of Information Technology">KLN College of Information Technology</option>
<option value="KMCT College of Engineering">KMCT College of Engineering</option>
<option value="KSR College of Technology">KSR College of Technology</option>
<option value="Kalasalingam University, Krishnankoil">Kalasalingam University, Krishnankoil</option>
<option value="Kalinga Institute of Industrial Technology">Kalinga Institute of Industrial Technology</option>
<option value="Karunya University, Coimbatore">Karunya University, Coimbatore</option>
<option value="Kendriya Vidyalaya No.2, Calicut">Kendriya Vidyalaya No.2, Calicut</option>
<option value="Kendriya Vidyalaya No.1, Calicut">Kendriya Vidyalaya No.1, Calicut</option>
<option value="Kongu Engineering College, Erode">Kongu Engineering College, Erode</option>
<option value="LBRCE, Mylavaram">LBRCE, Mylavaram</option>
<option value="LBS,Trivandrum">LBS,Trivandrum</option>
<option value="College of Engineering, Kasargode">College of Engineering, Kasargode</option>
<option value="LMCST, Trivandrum">LMCST, Trivandrum</option>
<option value="M A College of Engineering, Kothamangalam">M A College of Engineering, Kothamangalam</option>
<option value="MDI Gurgaon">MDI Gurgaon</option>
<option value="MES College of Engineering, Kuttipuram">MES College of Engineering, Kuttipuram</option>
<option value="MNIT, Jaipur">MNIT, Jaipur</option>
<option value="MNNIT Allahabad">MNNIT Allahabad</option>
<option value="MS Ramaiah Institute of Technology">MS Ramaiah Institute of Technology</option>
<option value="MSIT, New Delhi">MSIT, New Delhi</option>
<option value="Madras Institute of Technology">Madras Institute of Technology</option>
<option value="Malabar Christian College, Calicut">Malabar Christian College, Calicut</option>
<option value="Malabar College of Engineering and Technology, Deshamangalam, Thrissur">Malabar College of Engineering and Technology, Deshamangalam, Thrissur</option>
<option value="Malla Reddy Engineering College">Malla Reddy Engineering College</option>
<option value="Mandsaur Institute of Technology, MP">Mandsaur Institute of Technology, MP</option>
<option value="Manipal Institute of Technology">Manipal Institute of Technology</option>
<option value="Mar Athnesius College of Engineering">Mar Athnesius College of Engineering</option>
<option value="Mar Baselios Christian College of Engineering & Technology, Peermade">Mar Baselios Christian College of Engineering & Technology, Peermade</option>
<option value="Mar Baselios College of Engineering, Trivandrum">Mar Baselios College of Engineering, Trivandrum</option>
<option value="Marian Engineering College, Trivandrum">Marian Engineering College, Trivandrum</option>
<option value="Marygiri Senior Secondary School">Marygiri Senior Secondary School</option>
<option value="Matha College of Technology, Ernakulam">Matha College of Technology, Ernakulam</option>
<option value="Maulana Azad National Institute of Technology, Bhopal">Maulana Azad National Institute of Technology, Bhopal</option>
<option value="Medical College Calicut">Medical College Calicut</option>
<option value="Mepco Schlenk Engineering College">Mepco Schlenk Engineering College</option>
<option value="Model Engineering College, Thrikkakara">Model Engineering College, Thrikkakara</option>
<option value="Mohandas College of Engineering and Technology">Mohandas College of Engineering and Technology</option>
<option value="Muslim Association College of Engineering">Muslim Association College of Engineering</option>
<option value="N.S.S. College of Engineering and Technology, Palakkad">N.S.S. College of Engineering and Technology, Palakkad</option>
<option value="Nimra College of Business Management">Nimra College of Business Management</option>
<option value="NIT Calicut" selected>NIT Calicut</option>
<option value="NIT Durgapur">NIT Durgapur</option>
<option value="NIT Jamshedpur">NIT Jamshedpur</option>
<option value="NIT Kurukshetra">NIT Kurukshetra</option>
<option value="NIT Raipur">NIT Raipur</option>
<option value="NIT Rourkela">NIT Rourkela</option>
<option value="NIT Surathkal">NIT Surathkal</option>
<option value="NIT Trichy">NIT Trichy</option>
<option value="NIT Warangal">NIT Warangal</option>
<option value="NMAMIT, NITTE">NMAMIT, NITTE</option>
<option value="NSIT, Delhi">NSIT, Delhi</option>
<option value="Nanyang Technological University">Nanyang Technological University</option>
<option value="Nehru College of Engineering, Pampady">Nehru College of Engineering, Pampady</option>
<option value="Nirma Institute of Technology">Nirma Institute of Technology</option>
<option value="Noorul Islam College of Engineering">Noorul Islam College of Engineering</option>
<option value="Orissa Engineering College, Bhubaneswar">Orissa Engineering College, Bhubaneswar</option>
<option value="P A College of Engineering">P A College of Engineering</option>
<option value="P K M M H S S Edarikode">P K M M H S S Edarikode</option>
<option value="P.D.College Amravati">P.D.College Amravati</option>
<option value="P.V.P Siddhartha Institute of Technology">P.V.P Siddhartha Institute of Technology</option>
<option value="PSG College of Technology Coimbatore">PSG College of Technology Coimbatore</option>
<option value="Periyar Maniammai University, Thanjavur">Periyar Maniammai University, Thanjavur</option>
<option value="Pondicherry Engineering College">Pondicherry Engineering College</option>
<option value="Pragathi Engineering College">Pragathi Engineering College</option>
<option value="R.N.S. Institute of Technology">R.N.S. Institute of Technology</option>
<option value="RAHMANIA .H.S.S, Calicut ">RAHMANIA .H.S.S, Calicut </option>
<option value="RV College of Engineering, Bangalore">RV College of Engineering, Bangalore</option>
<option value="Raja College of Engineering & Technology">Raja College of Engineering & Technology</option>
<option value="Rajagiri School of Engineering & Technology">Rajagiri School of Engineering & Technology</option>
<option value="Rajiv Gandhi Institute of Technology, Kottayam">Rajiv Gandhi Institute of Technology, Kottayam</option>
<option value="SASTRA University, Thanjavur">SASTRA University, Thanjavur</option>
<option value="SBM Jain College of Engineering">SBM Jain College of Engineering</option>
<option value="Science Institute Manjeri">Science Institute Manjeri</option>
<option value="SCT College of Engineering, Trivandrum">SCT College of Engineering, Trivandrum</option>
<option value="SDMCET">SDMCET</option>
<option value="SJB Institute of Technology">SJB Institute of Technology</option>
<option value="SJC Institute of Technology">SJC Institute of Technology</option>
<option value="SN College Chempazhanthy">SN College Chempazhanthy</option>
<option value="SNM Institute of Management & Technology">SNM Institute of Management & Technology</option>
<option value="SNS College of Engineering">SNS College of Engineering</option>
<option value="SNS College of Technology">SNS College of Technology</option>
<option value="Sree Narayana Gurukulam College, Kolenchery">Sree Narayana Gurukulam College, Kolenchery</option>
<option value="SRM Engineering College Chennai">SRM Engineering College Chennai</option>
<option value="SVMIT, Bharuch">SVMIT, Bharuch</option>
<option value="Saintgits College of Engineering, Kottayam">Saintgits College of Engineering, Kottayam</option>
<option value="Sambhram Institute of Technology Bangalore">Sambhram Institute of Technology Bangalore</option>
<option value="Sathyabama University">Sathyabama University</option>
<option value="School of Engineering CUSAT">School of Engineering CUSAT</option>
<option value="School of Technology & Applied Sciences,M.G.University, Kottayam">School of Technology & Applied Sciences,M.G.University, Kottayam</option>
<option value="Siddaganga Institute of Technology">Siddaganga Institute of Technology</option>
<option value="Sikkim Manipal University">Sikkim Manipal University</option>
<option value="Siliguri Institute of Technology">Siliguri Institute of Technology</option>
<option value="Sona College of Technology, Salem">Sona College of Technology, Salem</option>
<option value="Sree Narayana Guru College of Engineering & Technology, Payyanur">Sree Narayana Guru College of Engineering & Technology, Payyanur</option>
<option value="Sreenidhi Institute of Science and Technology">Sreenidhi Institute of Science and Technology</option>
<option value="Sri Chandrasekharendra Saraswathi Viswa Mahavidyalaya, Kanchipuram(TN)">Sri Chandrasekharendra Saraswathi Viswa Mahavidyalaya, Kanchipuram(TN)</option>
<option value="Sri Kalahasteeswara Institute of Technology">Sri Kalahasteeswara Institute of Technology</option>
<option value="Sri Krishna College of Engineering and Technology">Sri Krishna College of Engineering and Technology</option>
<option value="Sri Nandhanam College of Engineering & Technology">Sri Nandhanam College of Engineering & Technology</option>
<option value="Sri Sairam Engineering College">Sri Sairam Engineering College</option>
<option value="Sri Shakthi Institute of Engineering and Technology">Sri Shakthi Institute of Engineering and Technology</option>
<option value="St. Josephs College of Engineering & Technology, Palai">St. Josephs College of Engineering & Technology, Palai</option>
<option value="TKM College of Engineering, Kollam">TKM College of Engineering, Kollam</option>
<option value="The Oxford College of Engineering">The Oxford College of Engineering</option>
<option value="Thiagarajar School of Management">Thiagarajar School of Management</option>
<option value="Toc H Institute of Science and Technology">Toc H Institute of Science and Technology</option>
<option value="Udaya School of Engineering, Kanyakumari">Udaya School of Engineering, Kanyakumari</option>
<option value="University College of Engineering, Thodupuzha">University College of Engineering, Thodupuzha</option>
<option value="VLB College of Engineering & Technology">VLB College of Engineering & Technology</option>
<option value="VNIT Nagpur">VNIT Nagpur</option>
<option value="VSB Engineering College">VSB Engineering College</option>
<option value="Vathsalya Institute of Science and Technology">Vathsalya Institute of Science and Technology</option>
<option value="Veda Vyasa Institute of Technology">Veda Vyasa Institute of Technology</option>
<option value="Velammal College of Engineering & Technology, Madurai">Velammal College of Engineering & Technology, Madurai</option>
<option value="Velammal Engineering College">Velammal Engineering College</option>
<option value="Vellore Institute of Technology(VIT University)">Vellore Institute of Technology(VIT University)</option>
<option value="Vidya Academy of Science and Technology">Vidya Academy of Science and Technology</option>
<option value="Vimal Jyothi Engineering College Kannur">Vimal Jyothi Engineering College Kannur</option>
<option value="Viswajyothi College of Engineering & Technology, Ernakulam">Viswajyothi College of Engineering & Technology, Ernakulam</option>
<option value="Vivekananda Institute of Technology">Vivekananda Institute of Technology</option>
<option value="XIME, Bangalore">XIME, Bangalore</option>
<option value="YDIT, Bangalore">YDIT, Bangalore</option>
<option value="ZGC, Calicut">ZGC, Calicut</option>
<option value="Calicut University Institute of Engineering and Technology">Calicut University Institute of Engineering and Technology</option>
<option value="Cochin University of Science and Technology">Cochin University of Science and Technology</option>
<option value="College of Applied Science,Thiruvambadi">College of Applied Science,Thiruvambadi</option>
<option value="East Point College of Engineering and Technology">East Point College of Engineering and Technology</option>
<option value="GHSS, Kavanur ">GHSS, Kavanur </option>
<option value="GNDU,Amritsar">GNDU,Amritsar</option>
<option value="IITP">IITP</option>
<option value="Java Stream Technology,Bangalore">Java Stream Technology,Bangalore</option>
<option value="Joginpally Bhaskar Institute of Engineering and Technology">Joginpally Bhaskar Institute of Engineering and Technology</option>
<option value="KMEA Kondappalli">KMEA Kondappalli</option>
<option value="M.M.H.S.S, Thalassery">M.M.H.S.S, Thalassery</option>
<option value="Park College of Engineering and Technology">Park College of Engineering and Technology</option>
<option value="Prestige Public School, Indore">Prestige Public School, Indore</option>
<option value="Purushottam Institute of Engineering & Technology, Rourkela, Orissa">Purushottam Institute of Engineering & Technology, Rourkela, Orissa</option>
<option value="Pydah College of Engineering and Technology, Visakhapatnam">Pydah College of Engineering and Technology, Visakhapatnam</option>
<option value="Sahrdaya College of Engineering & Technology, Thrissur">Sahrdaya College of Engineering & Technology, Thrissur</option>
<option value="Sapthagiri College of Engineering, Dharmapuri">Sapthagiri College of Engineering, Dharmapuri</option>
<option value="School of Architecture and Planning, Anna University, Madras">School of Architecture and Planning, Anna University, Madras</option>
<option value="SDBCT, Indore">SDBCT, Indore</option>
<option value="Sethu Institute of Technology, Virudhunagar, Tamil Nadu">Sethu Institute of Technology, Virudhunagar, Tamil Nadu</option>
<option value="Silver Hills Higher Secondary School, Kozhikode">Silver Hills Higher Secondary School, Kozhikode</option>
<option value="SNES Calicut">SNES Calicut</option>
<option value="Sree Narayana Education Society Calicut ">Sree Narayana Education Society Calicut </option>
<option value="Sri Kalahasteeswara Institute of Technology(skit), Srikalahasti">Sri Kalahasteeswara Institute of Technology(skit), Srikalahasti</option>
<option value="Sri Ramakrishna Engineering College">Sri Ramakrishna Engineering College</option>
<option value="Srinivas College of Engineering ">Srinivas College of Engineering </option>
<option value="Kakatiya University, Kothagudem">Kakatiya University, Kothagudem</option>
<option value="Veda Vyasa Vidhyalayam, Kozhikode">Veda Vyasa Vidhyalayam, Kozhikode</option>
<option value="Velagapudi Ramakrishna Siddhartha Engineering College">Velagapudi Ramakrishna Siddhartha Engineering College</option>
<option value="Vinayaka Mission University, Chennai">Vinayaka Mission University, Chennai</option>	
	</select>
</label>
<label>
	<strong>Need a place to stay ?</strong>
	<select name="preq">
		<option value="Y">Yes, Where else ?</option>
		<option value="N">Nope ! No need.</option>
	</select>
</label>
	<input type="submit" value="Submit" name="signIn" class="g-button">
	</form>
</div>

</div><!-- /container -->
<?php
	echo $bottomBar;
	echo $scripts;
?>
</body>
</html>

