CREATE DATABASE nursing_home
use nursing_home
CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(100),
    mobile VARCHAR(15),
    email VARCHAR(100),
    doctor_name VARCHAR(100),
    appointment_date DATE,
    time_slot VARCHAR(20),
    report_file VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
