<?php
if(isset($_POST['rollno'], $_POST['email'], $_POST['department'])) {
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    $dummyAttendanceData = array(
    array('rollno' => '21ISR046', 'email' => 'shafiullaha.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 85),
    array('rollno' => '21ISR056', 'email' => 'vijayakumarr.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' =>90, 'attended_classes' => 70),
    array('rollno' => '21ISR010', 'email' => 'dhanushts.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 90),
    array('rollno' => '21ISR055', 'email' => 'vijaysuryaj.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 85),
    array('rollno' => '21ISR037', 'email' => 'praveenkumarr.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 88),
    array('rollno' => '21ISR028', 'email' => 'narendharc.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 78),
    array('rollno' => '21ISR022', 'email' => 'karunrozariyov.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 82),
    array('rollno' => '21ISR023', 'email' => 'kishorerajar.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 75),
    array('rollno' => '21ISR050', 'email' => 'sukantak.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 71),
    array('rollno' => '21ISR042', 'email' => 'sanjayb.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 73),
    array('rollno' => '21ISR052', 'email' => 'varunrajs.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 76),
    array('rollno' => '21ISR059', 'email' => 'mohans.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 86),
    array('rollno' => '21ISR063', 'email' => 'gokuls.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 82),
    array('rollno' => '21ISR039', 'email' => 'retheeshkd.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 81),
    array('rollno' => '21ISR049', 'email' => 'sivarajanr.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 85),
    array('rollno' => '21ISR002', 'email' => 'abnishwarmk.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 75),
    array('rollno' => '21ISR038', 'email' => 'ranjithkumars.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 76),
    array('rollno' => '21ISR006', 'email' => 'balajisrinathr.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 78),
    array('rollno' => '21ISR030', 'email' => 'nithishkumarr.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 79),
    array('rollno' => '21ISR021', 'email' => 'kapilanc.21msc@kongu.edu', 'department' => 'Msc', 'total_classes' => 90, 'attended_classes' => 76),

);
$attendance = null;

foreach ($dummyAttendanceData as $data) {
    if ($data['rollno'] === $rollno && $data['email'] === $email && $data['department'] === $department) {
        $attendance = $data;
        break;
    }
}

if ($attendance) {
    $attendancePercentage = ($attendance['attended_classes'] / $attendance['total_classes']) * 100;
    $result = "Attendance Percentage: " . round($attendancePercentage, 2) . "%";
} else {
    $result = "No attendance data found for the provided information.";
}

echo $result;
} else {
echo "Error: All form fields are required.";
}
?>