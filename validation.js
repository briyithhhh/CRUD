function validateName(input) {
  const name = input.value;
  const regex = /^[a-zA-Z]+$/;
  if (!regex.test(name) || name.length > 25) {
    input.setCustomValidity("Name, lastname, and username must contain only letters and have no more than 25 characters.");
  } else {
    input.setCustomValidity("");
  }
}

function validateEmail(input) {
  const email = input.value;
  if (email.length > 30) {
    input.setCustomValidity("Email must have no more than 30 characters.");
  } else {
    input.setCustomValidity("");
  }
}

function validatePassword(input) {
  const password = input.value;
  if (password.length !== 10) {
    input.setCustomValidity("Password must contain exactly 10 digits.");
  } else {
    input.setCustomValidity("");
  }
}

