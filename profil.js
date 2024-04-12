
// Define user credentials and information
const users = [
    { "username": "user1", "password": "password1", "name": "John Doe", "dob": "1990-01-01", "email": "john@example.com", "address": "123 Main St, City, Country", "phone": "123-456-7890" },
    { "username": "user2", "password": "password2", "name": "Jane Smith", "dob": "1995-05-15", "email": "jane@example.com", "address": "456 Elm St, Town, Country", "phone": "987-654-3210" },
    { "username": "user3", "password": "password3", "name": "Alice Johnson", "dob": "1988-10-20", "email": "alice@example.com", "address": "789 Oak St, Village, Country", "phone": "456-789-0123" }
];

// Check if there is a logged-in user and display the profile
const loggedInUser = localStorage.getItem("loggedInUser");
if (loggedInUser) {
    const user = JSON.parse(loggedInUser);
    displayProfile(user);
}

// Display user profile
function displayProfile(user) {
    // Hide login form and create account button
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("createAccountBtn").style.display = "none";

    // Show profile information
    document.getElementById("profileTitle").style.display = "block";
    document.getElementById("userInfo").innerHTML = `
        <p>Name: <span id="userName">${user.name}</span></p>
        <p>Date of Birth: <span id="userDob">${user.dob}</span></p>
        <p>Email: <span id="userEmail">${user.email}</span></p>
        <p>Address: <span id="userAddress">${user.address}</span></p>
        <p>Phone: <span id="userPhone">${user.phone}</span></p>`;
    document.getElementById("userInfo").style.display = "block";
    document.getElementById("editBtn").style.display = "block";
    document.getElementById("logoutBtn").style.display = "block";
}

// Logout function
function logout() {
    // Clear local storage and reload the page
    localStorage.removeItem("loggedInUser");
    location.reload();
}

// Show create account form when the button is clicked
document.getElementById("createAccountBtn").addEventListener("click", function() {
    document.getElementById("createAccountTitle").style.display = "block";
    document.getElementById("createAccountForm").style.display = "block";
});

// Handle form submission for creating an account
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Check if the entered username and password match any user in the users array
    const user = users.find(u => u.username === username && u.password === password);

    if (user) {
        // Store the logged-in user in local storage
        localStorage.setItem("loggedInUser", JSON.stringify(user));
        // Display the user profile
        displayProfile(user);
    } else {
        alert("Invalid username or password. Please try again.");
    }
});