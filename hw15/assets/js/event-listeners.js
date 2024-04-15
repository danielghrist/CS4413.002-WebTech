/*** Using JavaScript and Bootstrap Input Validation States to modify input classes with errors: ***/
/* The "CANNOT BE NULL" portion of each of these fields is being handled by the "required" tag */

var firstName = document.getElementById("firstname");
var lastName = document.getElementById("lastname");
var username = document.getElementById("username");
var password = document.getElementById("password");
var email = document.getElementById("email");
var phone = document.getElementById("phone");
var comments = document.getElementById("comments");

// Test for validity of first and last name conditions:
function validateNames(namesDiv, namesInputType, namesFeedback, namesIcon) {
  // Declare/Initialize variables:
  var nameDiv = document.getElementById(namesDiv);
  var nameInput = document.getElementById(namesInputType);
  var nameHelp = document.getElementById(namesFeedback);
  var nameGlyphicon = document.getElementById(namesIcon);
  const validNameRegex = /^[a-zA-Z'-]{2,}$/;

  if (!nameInput.value.match(validNameRegex)) {
    nameDiv.classList.add("has-error");
    nameGlyphicon.classList.add("glyphicon-remove");

    nameHelp.innerHTML =
      "Your " +
      namesInputType +
      " must be at least two alphabetical chars and either a - or '.";
  } else {
    nameDiv.classList.add("has-success");
    nameGlyphicon.classList.add("glyphicon-ok");
    nameHelp.innerHTML = "";

    nameDiv.classList.remove("has-error");
    nameGlyphicon.classList.remove("glyphicon-remove");
  }
}

// Test for validity of email field:
function validateEmail(emailDiv, emailInput, emailFeedback, emailIcon) {
  // Declare/Initialize variables:
  var mainDiv = document.getElementById(emailDiv);
  var emailValue = document.getElementById(emailInput);
  var helpBlock = document.getElementById(emailFeedback);
  var glyphiconSpan = document.getElementById(emailIcon);
  const validRegex =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if (!emailValue.value.match(validRegex)) {
    mainDiv.classList.add("has-error");
    glyphiconSpan.classList.add("glyphicon-remove");

    helpBlock.innerHTML = "The email entered is in an invalid format.";
  } else {
    mainDiv.classList.add("has-success");
    glyphiconSpan.classList.add("glyphicon-ok");
    helpBlock.innerHTML = "";

    mainDiv.classList.remove("has-error");
    glyphiconSpan.classList.remove("glyphicon-remove");
  }
}

// Test for validity of phone number field:
function validatePhone(inputDiv, inputType, feedback, icon) {
  // Declare/Initialize variables:
  var inputDiv = document.getElementById(inputDiv);
  var inputId = document.getElementById(inputType);
  var helpBlock = document.getElementById(feedback);
  var glyphiconSpan = document.getElementById(icon);
  const validPhoneRegex = /^[0-9]{10}$/;

  if (!inputId.value.match(validPhoneRegex)) {
    inputDiv.classList.add("has-error");
    glyphiconSpan.classList.add("glyphicon-remove");

    helpBlock.innerHTML =
      "Your " +
      inputType +
      " number must contain only numbers and be exactly 10 digits.";
  } else {
    inputDiv.classList.add("has-success");
    glyphiconSpan.classList.add("glyphicon-ok");
    helpBlock.innerHTML = "";

    inputDiv.classList.remove("has-error");
    glyphiconSpan.classList.remove("glyphicon-remove");
  }
}

// Test for validity of username and password length:
function validateCredentials(minLength, inputDiv, inputType, feedback, icon) {
  // Declare/Initialize variables:
  var credentialDiv = document.getElementById(inputDiv);
  var credentialInput = document.getElementById(inputType);
  var credentialHelp = document.getElementById(feedback);
  var credentialGlyphicon = document.getElementById(icon);

  if (credentialInput.value.length < minLength) {
    credentialDiv.classList.add("has-error");
    credentialGlyphicon.classList.add("glyphicon-remove");

    credentialHelp.innerHTML =
      "Your " +
      inputType +
      " must be at least " +
      minLength +
      " characters long.";
  } else {
    credentialDiv.classList.add("has-success");
    credentialGlyphicon.classList.add("glyphicon-ok");
    credentialHelp.innerHTML = "";

    credentialDiv.classList.remove("has-error");
    credentialGlyphicon.classList.remove("glyphicon-remove");
  }
}

// Test for validity of comments field:
function validateComments(inputDiv, inputType, feedback, icon) {
  // Declare/Initialize variables:
  var inputDiv = document.getElementById(inputDiv);
  var inputId = document.getElementById(inputType);
  var helpBlock = document.getElementById(feedback);
  var glyphiconSpan = document.getElementById(icon);
  const validCommentsRegex = /.+/;

  if (!inputId.value.match(validCommentsRegex)) {
    inputDiv.classList.add("has-error");
    glyphiconSpan.classList.add("glyphicon-remove");

    helpBlock.innerHTML = "The comment section cannot be left blank.";
  } else {
    inputDiv.classList.add("has-success");
    glyphiconSpan.classList.add("glyphicon-ok");
    helpBlock.innerHTML = "";

    inputDiv.classList.remove("has-error");
    glyphiconSpan.classList.remove("glyphicon-remove");
  }
}

// Names Event Listeners:
firstName.addEventListener(
  "blur",
  function () {
    validateNames("fname-div", "firstname", "fn-feedback", "fn-icon");
  },
  false
);

lastName.addEventListener(
  "blur",
  function () {
    validateNames("lname-div", "lastname", "ln-feedback", "ln-icon");
  },
  false
);

// Email Event Listener:
email.addEventListener(
  "blur",
  function () {
    validateEmail("email-div", "email", "email-feedback", "email-icon");
  },
  false
);

// Phone Event Listener:
phone.addEventListener(
  "blur",
  function () {
    validatePhone("phone-div", "phone", "phone-feedback", "phone-icon");
  },
  false
);

// Credential Event Listeners:
username.addEventListener(
  "blur",
  function () {
    validateCredentials(
      6,
      "username-div",
      "username",
      "un-feedback",
      "un-icon"
    );
  },
  false
);

password.addEventListener(
  "blur",
  function () {
    validateCredentials(
      6,
      "password-div",
      "password",
      "pw-feedback",
      "pw-icon"
    );
  },
  false
);

// Comments Event Listener
comments.addEventListener(
  "blur",
  function () {
    validateComments(
      "comments-div",
      "comments",
      "comments-feedback",
      "comments-icon"
    );
  },
  false
);
