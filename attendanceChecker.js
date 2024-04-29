var AttendanceChecker = /** @class */ (function () {
    function AttendanceChecker() {
        this.students = [
            { rollNo: "001", email: "student1@example.com", department: "Computer Science", attendancePercentage: 85 },
            { rollNo: "002", email: "student2@example.com", department: "Electrical Engineering", attendancePercentage: 90 },
            { rollNo: "003", email: "student3@example.com", department: "Mechanical Engineering", attendancePercentage: 75 },
        ];
    }
    AttendanceChecker.prototype.checkAttendance = function (rollNo, email, department) {
        var student = this.findStudent(rollNo, email, department);
        return student ? student.attendancePercentage : undefined;
    };
    AttendanceChecker.prototype.findStudent = function (rollNo, email, department) {
        for (var _i = 0, _a = this.students; _i < _a.length; _i++) {
            var student = _a[_i];
            if (student.rollNo === rollNo && student.email === email && student.department === department) {
                return student;
            }
        }
        return undefined;
    };
    return AttendanceChecker;
}());
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('loginForm');
    var attendanceChecker = new AttendanceChecker();
    form === null || form === void 0 ? void 0 : form.addEventListener('submit', function (event) {
        event.preventDefault();
        var rollNoInput = document.getElementById('rollNo').value.trim();
        var emailInput = document.getElementById('email').value.trim();
        var departmentInput = document.getElementById('department').value;
        var attendancePercentage = attendanceChecker.checkAttendance(rollNoInput, emailInput, departmentInput);
        if (attendancePercentage !== undefined) {
            alert("Attendance Percentage: ".concat(attendancePercentage, "%"));
        }
        else {
            alert('Student not found or attendance data not available.');
        }
    });
});
