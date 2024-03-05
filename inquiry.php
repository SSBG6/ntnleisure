    <form action="inquirymail.php" method="POST">
        <h2>Make an Inquiry</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="3" cols="50" required></textarea><br>
        <input type="submit" value="Make an Inquiry">
    </form>
<style>
    /* Style the form container */
form {
    max-width: 400px;
    margin: 0 auto;
}

/* Style labels */
label {
    display: block;
    margin-bottom: 5px;
}

/* Style input fields */
input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensures padding and border are included in element's total width and height */
}

/* Style submit button */
input[type="submit"] {
    background-color: var(--main-color); /* Green */
    color: #000;
    padding: 10px 15px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #008000;
    color: #fff;
}

/* Style form validation messages */
input:invalid,
textarea:invalid {
    border-color: none; /* Red */
}

input:valid,
textarea:valid {
    border-color: #fff; /* Green */
}
@media only screen and (max-width: 600px) {
    input[type="submit"] {
    background-color: transparent; /* Green */
    color: white;
    border: 1px solid white;
    border-radius: 50px;
   
}

input[type="submit"]:hover {
    background-color: transparent;
    color: var(--main-color);
    border: 1px solid var(--main-color);
}
}
</style>