<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Menu</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.profile {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.profile-picture {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background-color: #ccc;
  overflow: hidden;
  position: relative;
}

.profile-picture img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.change-picture-btn {
  margin-top: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 8px 16px;
  cursor: pointer;
  border-radius: 5px;
}

.profile-menu {
  margin-top: 20px;
}

.profile-menu ul {
  list-style-type: none;
  padding: 0;
}

.profile-menu li {
  margin-bottom: 10px;
}

.profile-menu label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.profile-menu input {
  width: 100%;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.profile-menu textarea {
  width: 100%;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.save-btn {
  background-color: #28a745;
  color: #fff;
  border: none;
  padding: 8px 16px;
  cursor: pointer;
  border-radius: 5px;
}
</style>
</head>
<body>
<div class="container">
  <div class="profile">
    <div class="profile-picture">
      <img id="profile-pic" src="default-profile-picture.jpg" alt="Profile Picture">
    </div>
    <input type="file" id="file-input" style="display: none;">
    <button class="change-picture-btn" onclick="document.getElementById('file-input').click()">Change Picture</button>
  </div>
  <div class="profile-menu">
    <ul>
      <li>
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name">
      </li>
      <li>
        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name">
      </li>
      <li>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      </li>
      <li>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">
      </li>
      <li>
        <label for="bio">Bio:</label>
        <textarea class="form-control summernote-simple" id="bio" name="bio" rows="4"></textarea>
      </li>
    </ul>
    <button class="save-btn" onclick="saveChanges()">Save Changes</button>
  </div>
</div>
<script>
document.getElementById('file-input').addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      document.getElementById('profile-pic').src = e.target.result;
    }
    reader.readAsDataURL(file);
  }
});

function saveChanges() {
  const firstName = document.getElementById('first-name').value;
  const lastName = document.getElementById('last-name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const bio = document.getElementById('bio').value;

  // You can perform further actions here, such as sending the data to a server or updating a database.
  console.log("First Name:", firstName);
  console.log("Last Name:", lastName);
  console.log("Email:", email);
  console.log("Phone:", phone);
  console.log("Bio:", bio);

  alert("Changes saved successfully!");
}
</script>
</body>
</html>
