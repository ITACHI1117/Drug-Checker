// This function will be executed after the specified delay (in milliseconds)
function redirectToNextPage() {
  // Replace 'http://example.com/nextpage' with the URL you want to redirect to
  window.location.href = "SignUp.html";
}

// Set the timeout delay in milliseconds (e.g., 5000 milliseconds = 5 seconds)
const delay = 3000; // 5 seconds

// Call the redirectToNextPage function after the specified delay
setTimeout(redirectToNextPage, delay);
