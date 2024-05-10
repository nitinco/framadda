<section class="pcontainer">
    <div class="container">
        <h2>
            For More Details Contact to Our Team
        </h2>
        <!-- <a href="contact.html" class="hero-btn">Contact Us</a> -->
        <form action="submit.php" method="post" id="myForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>


    <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "submit.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        if (xhr.responseText === "success") {
                            alert("Thank you for your message. We have received your data!");
                            setTimeout(function() {
                                window.location.href = "/"; // Redirect to the main page after 5 seconds
                            }, 5000); // 5000 milliseconds = 5 seconds
                        } else {
                            alert("Oops! Something went wrong. Please try again later.");
                        }
                    } else {
                        alert("Oops! Something went wrong. Please try again later.");
                    }
                }
            };
            xhr.send(formData);
        });
    </script>
</section>