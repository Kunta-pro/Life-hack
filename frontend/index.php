<form action="login.php" method="POST">
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Password">
    <select name="role">
        <option value="admin">Admin</option>
        <option value="teacher">Teacher</option>
    </select>
    <button type="submit">Login</button>
</form>
