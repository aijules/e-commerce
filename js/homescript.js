const products = [
    { name: "Lipstick", category: "Cosmetics" },
    { name: "T-shirt", category: "Women Clothing" },
    { name: "Eco-Friendly Shampoo", category: "Sustainable Products" },
    { name: "Novel Book", category: "Book Store" },
    { name: "Earrings", category: "Cosmetics" },
    { name: "Jacket", category: "Women Clothing" },
    { name: "Biodegradable Soap", category: "Sustainable Products" },
    { name: "Science Fiction Book", category: "Book Store" },
  ];
  
  
    // Search function
    function searchProducts() {
      const input = document.getElementById("searchInput").value.toLowerCase();
      const dropdown = document.getElementById("searchDropdown");
    
      const results = products.filter(product =>
        product.name.toLowerCase().includes(input)
      );
    
      if (input === "" || results.length === 0) {
        dropdown.classList.add("hidden");
        return;
      }
    
      dropdown.classList.remove("hidden");
      dropdown.innerHTML = "";
    
      results.forEach(product => {
        const listItem = document.createElement("li");
        listItem.textContent = product.name;
        listItem.onclick = () => {
          document.getElementById("searchInput").value = product.name;
          dropdown.classList.add("hidden");
        };
        dropdown.appendChild(listItem);
      });
    }
    
    // Hide dropdown when clicking outside the search bar
    document.addEventListener("click", (e) => {
      if (!document.getElementById("searchInput").contains(e.target)) {
        document.getElementById("searchDropdown").classList.add("hidden");
      }
    });
    // Show Signup Form
  function showSignupForm() {
      document.getElementById('signupForm').style.display = 'block';
      document.getElementById('signinForm').style.display = 'none';
    }
    
    // Show Signin Form
    function showSigninForm() {
      document.getElementById('signinForm').style.display = 'block';
      document.getElementById('signupForm').style.display = 'none';
    }
    
    // Signin Form Submission
    document.getElementById('signinForm').addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent actual form submission
      
      const email = document.getElementById('signinEmail').value;
      const password = document.getElementById('signinPassword').value;
    
      // Dummy authentication logic
      if (email === 'user@example.com' && password === 'password123') {
        alert('Sign in successful!');
      } else {
        document.getElementById('signinError').style.display = 'block';
      }
    });
  
    
    // Form validation for contact page
  document.getElementById('signinForm').addEventListener('submit', function(event) {
      event.preventDefault();
      const email = document.getElementById('emailSignin').value;
      const password = document.getElementById('passwordSignin').value;
      
  
      if (password && email ) {
          alert("warmly welcome to Nexora e-commerce website");
          this.reset();
      } else {
          alert("Please fill in all fields.");
      }
  }); // Signup Form Submission
  document.getElementById('signupForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent actual form submission
    const names = document.getElementById('names').value;
    const email = document.getElementById('SignupEmail').value;
    const password = document.getElementById('SignupPassword').value;
  
    // Dummy authentication logic
    if (email === 'user@example.com' && password === 'password123') {
      alert('Sign in successful!');
    } else {
      document.getElementById('signinError').style.display = 'block';
    }
  });
  
  
  // Form validation for contact page
  document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const names = document.getElementById('names').value;
    const email = document.getElementById('emailSignup').value;
    const password = document.getElementById('passwordSignup').value;
    
  
    if (password && email && names) {
        alert("signup successfully");
        this.reset();
    } else {
        alert("Please fill in all fields.");
    }
  });
  
  
  
  
  // Hover effect for grid items on the homepage
  document.querySelectorAll('.grid-item').forEach(item => {
      item.addEventListener('mouseenter', () => {
          item.style.transform = 'scale(1.05)';
          item.style.transition = 'transform 0.3s';
      });
      item.addEventListener('mouseleave', () => {
          item.style.transform = 'scale(1)';
      });
  });
  // Wallpaper array
  let currentIndex = 0;
  const wallpapers = [
      
      "images/wallpaper2.jpg",
     "images/wallpaper5.jpg",
     "images/wallpaper6.jpg",
       "images/wallpaper11.jpg"
  ];
  
  // Reference the body element
  const slider = document.body;
  
  // Function to update the background
  function changeBackground(index) {
      slider.style.backgroundImage = `url(${wallpapers[index]})`;
  }
  
  // Left arrow click event
  document.getElementById('leftArrow').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + wallpapers.length) % wallpapers.length;
      changeBackground(currentIndex);
  });
  
  
  // Right arrow click event
  document.getElementById('rightArrow').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % wallpapers.length;
      changeBackground(currentIndex);
  });
  
  // Initialize the slider
  changeBackground(currentIndex);
  
  
  // Wait for the DOM to load
  document.addEventListener("DOMContentLoaded", () => {
    // Select all "Buy Now" buttons
    const buyNowButtons = document.querySelectorAll(".buy-now-button");
  
    // Function to handle the Buy Now button click
    function handleBuyNow() {
      // Create the custom dialog box
      const dialogBox = document.createElement("div");
      dialogBox.classList.add("dialog-box");
  
      dialogBox.innerHTML = `
      </pre>you can get your favourable product at affordable price</pre>
        <pre>Are you new to Nexora world of charsmatic?</pre>
  
        <button id="yesButton">Yes</button>
        <button id="noButton">No</button>
      `;
  
      // Append the dialog box to the body
      document.body.appendChild(dialogBox);
  
      // Add event listeners to buttons
      document.getElementById("yesButton").addEventListener("click", () => {
        // Show signup form and hide signin form
        document.getElementById("signupForm").classList.remove("hidden");
        document.getElementById("signinForm").classList.add("hidden");
        // Remove dialog box
        document.body.removeChild(dialogBox);
      });
  
      document.getElementById("noButton").addEventListener("click", () => {
        // Show signin form and hide signup form
        document.getElementById("signinForm").classList.remove("hidden");
        document.getElementById("signupForm").classList.add("hidden");
        // Remove dialog box
        document.body.removeChild(dialogBox);
      });
    }
  
    // Wait until the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    // Select all "Buy Now" buttons
    const buyButtons = document.querySelectorAll('.buy-now-button');

    // Get the cart element
    const cart = document.getElementById('cart');

    // Add event listeners to each button
    buyButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Get product name and price from data attributes
            const productName = this.getAttribute('data-name');
            const productPrice = this.getAttribute('data-price');

            // Create a list item for the cart
            const cartItem = document.createElement('li');
            cartItem.textContent = `${productName} - $${productPrice}`;

            // Append the item to the cart
            cart.appendChild(cartItem);

            // Notify the user
            alert(`${productName} has been added to your cart.`);
        });
    });
});
  }