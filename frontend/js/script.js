// Initialize Supabase client
const SUPABASE_URL = 'https://mokqpjrqgjlekuhybclo.supabase.co';
const SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im1va3FwanJxZ2psZWt1aHliY2xvIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzAzMDYxOTAsImV4cCI6MjA0NTg4MjE5MH0.ziVCEj_ZxOLg49_srT-BWPlOhzm70ZMTZc64l-n5LSU';

// Initialize Supabase
const supabase = supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

// Example function to log in a user
async function loginUser(email, password) {
    const { user, error } = await supabase.auth.signInWithPassword({
        email,
        password
    });
    if (error) {
        console.error('Login error:', error.message);
    } else {
        console.log('User logged in:', user);
    }
}

// Example function to fetch data (e.g., list of students)
async function fetchStudents() {
    const { data, error } = await supabase
        .from('students')  // Replace 'students' with your actual table name
        .select('*');
    if (error) {
        console.error('Error fetching students:', error.message);
    } else {
        console.log('Students data:', data);
    }
}

// Call example functions (you can remove these and call the functions as needed)
loginUser('user@example.com', 'password123');
fetchStudents();
