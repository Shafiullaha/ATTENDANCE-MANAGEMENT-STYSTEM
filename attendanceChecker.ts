interface Student {
    rollNo: string;
    email: string;
    department: string;
    attendancePercentage: number;
}

class AttendanceChecker {
    students: Student[];

    constructor() {
        this.students = [
            { rollNo: "001", email: "student1@example.com", department: "Computer Science", attendancePercentage: 85 },
            { rollNo: "002", email: "student2@example.com", department: "Electrical Engineering", attendancePercentage: 90 },
            { rollNo: "003", email: "student3@example.com", department: "Mechanical Engineering", attendancePercentage: 75 },
        ];
    }

    checkAttendance(rollNo: string, email: string, department: string): number | undefined {
        const student = this.findStudent(rollNo, email, department);
        return student ? student.attendancePercentage : undefined;
    }

    private findStudent(rollNo: string, email: string, department: string): Student | undefined {
        for (const student of this.students) {
            if (student.rollNo === rollNo && student.email === email && student.department === department) {
                return student;
            }
        }
        return undefined;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('loginForm');
    const attendanceChecker = new AttendanceChecker();

    form?.addEventListener('submit', (event) => {
        event.preventDefault();
        
        const rollNoInput = (document.getElementById('rollNo') as HTMLInputElement).value.trim();
        const emailInput = (document.getElementById('email') as HTMLInputElement).value.trim();
        const departmentInput = (document.getElementById('department') as HTMLSelectElement).value;

        const attendancePercentage = attendanceChecker.checkAttendance(rollNoInput, emailInput, departmentInput);
        if (attendancePercentage !== undefined) {
            alert(`Attendance Percentage: ${attendancePercentage}%`);
        } else {
            alert('Student not found or attendance data not available.');
        }
    });
});
