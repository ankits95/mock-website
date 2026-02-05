<form method="post" action="admission_submit.php" class="admission-form">

    <h2>Admission Open for <span>2025 – 2026</span></h2>

    <label>Grade *</label>
    <select name="grade" required>
        <option value="">-- Please choose an option --</option>
        <option>Nursery</option>
        <option>LKG</option>
        <option>UKG</option>
        <option>Class 1</option>
        <option>Class 2</option>
    </select>

    <label>Name of Student *</label>
    <input type="text" name="student_name" required>

    <label>Parent Name *</label>
    <input type="text" name="parent_name" required>

    <label>Parent Email *</label>
    <input type="email" name="parent_email" required>

    <label>Parent Mobile / WhatsApp *</label>
    <input type="text" name="parent_phone" required>

    <label>Date of Birth</label>
    <input type="date" name="dob">

    <button type="submit">SUBMIT</button>
</form>
