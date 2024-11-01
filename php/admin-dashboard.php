<h1>Admin Dashboard</h1>
<h2>Register Student</h2>
<form action="register_student.php" method="POST">
    <input type="text" name="name" required placeholder="Student Name">
    <input type="email" name="email" required placeholder="Student Email">
    <button type="submit">Register Student</button>
</form>

<h2>Manage Students</h2>
<ul>
    <?php foreach ($students as $student): ?>
        <li><?php echo $student['name']; ?> (<?php echo $student['email']; ?>)</li>
    <?php endforeach; ?>
</ul>
