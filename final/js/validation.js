function validation(){
	var Fname = document.getElementById('fname').value;
	var	Lname = document.getElementById('lname').value;
	var	gender = document.getElementById('gender').value;
	var birthday = document.getElementById('date').value;
	var	phone = document.getElementById('phone').value;
	var email = document.getElementById('email').value;

	if(Fname=="" )
	{
		alert('First Name cannot be empty');
		document.getElementById('fname').focus();
		return false;
	}
	else if (Lname == ""){
		alert('Last Name cannot be empty');
		document.getElementById('lname').focus();
		return false;
	}
	else if (email == ""){
		alert('email cannot be empty');
		document.getElementById('lname').focus();
		return false;
	}
	else if (Lname == ""){
		alert('select the gender');
		document.getElementById('lname').focus();
		return false;
	}
	else if(birthday==""){
		alert('select the date of birth');
		return false;
	}
	else if(phone==""){
		alert('Mobile Number is necessary');
		document.getElementById('phone').focus();
		return false;
	}
	else {
		return true;
	}


}