<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS file -->
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js/dist/supabase.js"></script>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <button id="logout-btn">Logout</button>
        <div>
            <h2>Register Student</h2>
            <form id="register-student-form">
                <input type="text" id="student-name" placeholder="Student Name" required>
                <input type="email" id="student-email" placeholder="Student Email" required>
                <button type="submit">Register</button>
            </form>
        </div>

        <div>
            <h2>Manage Teachers</h2>
            <form id="manage-teacher-form">
                <input type="text" id="teacher-name" placeholder="Teacher Name" required>
                <input type="email" id="teacher-email" placeholder="Teacher Email" required>
                <button type="submit">Add Teacher</button>
            </form>
            <h3>Search Teacher</h3>
            <input type="text" id="search-teacher" placeholder="Search Teacher by Name">
            <ul id="teacher-list"></ul>
        </div>

        <div>
            <h2>Manage Students</h2>
            <form id="manage-student-form">
                <input type="text" id="student-id" placeholder="Student ID" required>
                <input type="text" id="student-update-name" placeholder="Update Name">
                <input type="email" id="student-update-email" placeholder="Update Email">
                <button type="submit">Update Student</button>
            </form>
            <h3>Search Student</h3>
            <input type="text" id="search-student" placeholder="Search Student by Name">
            <ul id="student-list"></ul>
        </div>
    </div>

    <script>
        const { createClient } = supabase;
        const supabaseUrl = 'https://mokqpjrqgjlekuhybclo.supabase.co';
        const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im1va3FwanJxZ2psZWt1aHliY2xvIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzAzMDYxOTAsImV4cCI6MjA0NTg4MjE5MH0.ziVCEj_ZxOLg49_srT-BWPlOhzm70ZMTZc64l-n5LSU';
        const supabase = createClient(supabaseUrl, supabaseKey);

        document.getElementById('logout-btn').addEventListener('click', async () => {
            await supabase.auth.signOut();
            window.location.href = 'index.html'; // Redirect to login page
        });

        document.getElementById('register-student-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const name = document.getElementById('student-name').value;
            const email = document.getElementById('student-email').value;

            const { data, error } = await supabase.from('students').insert([{ name, email }]);
            if (error) {
                alert(error.message);
            } else {
                alert('Student registered successfully!');
            }
        });

        document.getElementById('manage-teacher-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const name = document.getElementById('teacher-name').value;
            const email = document.getElementById('teacher-email').value;

            const { data, error } = await supabase.from('teachers').insert([{ name, email }]);
            if (error) {
                alert(error.message);
            } else {
                alert('Teacher added successfully!');
                loadTeachers(); // Refresh the teacher list
            }
        });

        document.getElementById('search-teacher').addEventListener('input', async () => {
            const searchTerm = document.getElementById('search-teacher').value;
            const { data: teachers } = await supabase.from('teachers').select().ilike('name', `%${searchTerm}%`);
            const teacherList = document.getElementById('teacher-list');
            teacherList.innerHTML = '';
            teachers.forEach(teacher => {
                const li = document.createElement('li');
                li.textContent = `${teacher.name} (${teacher.email})`;
                teacherList.appendChild(li);
            });
        });

        // Load all teachers initially
        async function loadTeachers() {
            const { data: teachers } = await supabase.from('teachers').select();
            const teacherList = document.getElementById('teacher-list');
            teacherList.innerHTML = '';
            teachers.forEach(teacher => {
                const li = document.createElement('li');
                li.textContent = `${teacher.name} (${teacher.email})`;
                teacherList.appendChild(li);
            });
        }
        loadTeachers();

        document.getElementById('manage-student-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const id = document.getElementById('student-id').value;
            const name = document.getElementById('student-update-name').value;
            const email = document.getElementById('student-update-email').value;

            const { data, error } = await supabase.from('students').update({ name, email }).eq('id', id);
            if (error) {
                alert(error.message);
            } else {
                alert('Student updated successfully!');
            }
        });

        document.getElementById('search-student').addEventListener('input', async () => {
            const searchTerm = document.getElementById('search-student').value;
            const { data: students } = await supabase.from('students').select().ilike('name', `%${searchTerm}%`);
            const studentList = document.getElementById('student-list');
            studentList.innerHTML = '';
            students.forEach(student => {
                const li = document.createElement('li');
                li.textContent = `${student.name} (${student.email})`;
                studentList.appendChild(li);
            });
        });
    </script>
</body>
</html>
