/*** Using JavaScript and Bootstrap Input Validation States to modify input classes with errors: ***/
/* The "CANNOT BE NULL" portion of each of these fields is being handled by the "required" tag */

var username = document.getElementById("username");
var password = document.getElementById("password");

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
