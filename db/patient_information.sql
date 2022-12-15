create table patient_information(
    uid VARCHAR (255) NOT NULL,
    appointment_id VARCHAR (255) NOT NULL,
    first_name VARCHAR (255) NOT NULL,
    last_name VARCHAR (255) NOT NULL,
    date_of_birth DATE NOT NULL,
    sex BOOLEAN NOT NULL,
    email VARCHAR (255) NOT NULL,
    mobile_number VARCHAR (255) NOT NULL,
    created_at TIMESTAMP DEFAULT current_timestamp,
    updated_at TIMESTAMP DEFAULT current_timestamp ON UPDATE current_timestamp,
    PRIMARY KEY(uid), 
    FOREIGN KEY(appointment_id) REFERENCES appointments(uid)
);